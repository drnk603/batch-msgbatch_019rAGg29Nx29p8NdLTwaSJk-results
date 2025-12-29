(function() {
    'use strict';

    const app = {
        init: false,
        observers: new Map()
    };

    const throttle = (fn, delay) => {
        let last = 0;
        return function(...args) {
            const now = Date.now();
            if (now - last >= delay) {
                last = now;
                fn.apply(this, args);
            }
        };
    };

    const debounce = (fn, delay) => {
        let timer;
        return function(...args) {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(this, args), delay);
        };
    };

    class BurgerMenu {
        constructor() {
            this.nav = document.querySelector('.navbar-collapse');
            this.toggle = document.querySelector('.navbar-toggler');
            this.header = document.querySelector('.l-header');
            this.isOpen = false;
            
            if (!this.nav || !this.toggle) return;
            
            this.init();
        }

        init() {
            this.toggle.addEventListener('click', (e) => {
                e.preventDefault();
                this.toggleMenu();
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => this.closeMenu());
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.isOpen) this.closeMenu();
            });

            window.addEventListener('resize', throttle(() => {
                if (window.innerWidth >= 768) this.closeMenu();
            }, 100));
        }

        toggleMenu() {
            this.isOpen ? this.closeMenu() : this.openMenu();
        }

        openMenu() {
            this.isOpen = true;
            this.nav.classList.add('show');
            this.toggle.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        }

        closeMenu() {
            this.isOpen = false;
            this.nav.classList.remove('show');
            this.toggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    }

    class ScrollEffects {
        constructor() {
            this.sections = document.querySelectorAll('section[id]');
            this.navLinks = document.querySelectorAll('.nav-link[href^="#"], .nav-link[href^="/"]');
            this.init();
        }

        init() {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            this.updateActiveNav(entry.target.id);
                        }
                    });
                },
                {
                    threshold: 0.3,
                    rootMargin: '-100px 0px -66% 0px'
                }
            );

            this.sections.forEach(section => observer.observe(section));

            this.navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    const href = link.getAttribute('href');
                    if (href.includes('#')) {
                        const targetId = href.split('#')[1];
                        const targetEl = document.getElementById(targetId);
                        
                        if (targetEl && window.location.pathname === '/') {
                            e.preventDefault();
                            this.smoothScroll(targetEl);
                        }
                    }
                });
            });
        }

        updateActiveNav(id) {
            this.navLinks.forEach(link => {
                const href = link.getAttribute('href');
                link.classList.remove('active');
                link.removeAttribute('aria-current');
                
                if (href === `#${id}` || href === `/#${id}`) {
                    link.classList.add('active');
                    link.setAttribute('aria-current', 'page');
                }
            });
        }

        smoothScroll(target) {
            const header = document.querySelector('.l-header');
            const offset = header ? header.offsetHeight : 72;
            const targetPos = target.getBoundingClientRect().top + window.pageYOffset - offset;
            
            window.scrollTo({
                top: targetPos,
                behavior: 'smooth'
            });
        }
    }

    class AnimationController {
        constructor() {
            this.init();
        }

        init() {
            this.observeElements();
            this.addHoverEffects();
            this.addRippleEffect();
        }

        observeElements() {
            const elements = document.querySelectorAll('.c-card, .card, img, .c-button, .btn, h1, h2, h3, p');
            
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '0';
                            entry.target.style.transform = 'translateY(30px)';
                            
                            requestAnimationFrame(() => {
                                entry.target.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
                                entry.target.style.opacity = '1';
                                entry.target.style.transform = 'translateY(0)';
                            });
                            
                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                }
            );

            elements.forEach(el => observer.observe(el));
        }

        addHoverEffects() {
            const interactiveEls = document.querySelectorAll('.c-button, .btn, .c-card, .card, .nav-link');
            
            interactiveEls.forEach(el => {
                el.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            });
        }

        addRippleEffect() {
            const buttons = document.querySelectorAll('.c-button, .btn');
            
            buttons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.6);
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        pointer-events: none;
                        animation: ripple 0.6s ease-out;
                    `;
                    
                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);
                    
                    setTimeout(() => ripple.remove(), 600);
                });
            });

            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    from {
                        transform: scale(0);
                        opacity: 1;
                    }
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        }
    }

    class FormValidator {
        constructor() {
            this.forms = document.querySelectorAll('form');
            this.patterns = {
                email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                phone: /^[+\-d\s()]{10,20}$/,
                name: /^[a-zA-ZÀ-ÿ\s-']{2,50}$/,
                message: /^.{10,}$/
            };
            this.init();
        }

        init() {
            this.forms.forEach(form => {
                form.addEventListener('submit', (e) => this.handleSubmit(e, form));
                
                form.querySelectorAll('input, textarea').forEach(field => {
                    field.addEventListener('blur', () => this.validateField(field));
                    field.addEventListener('input', () => this.clearError(field));
                });
            });
        }

        handleSubmit(e, form) {
            e.preventDefault();
            
            const fields = form.querySelectorAll('input[required], textarea[required]');
            let isValid = true;

            fields.forEach(field => {
                if (!this.validateField(field)) {
                    isValid = false;
                }
            });

            const honeypot = form.querySelector('input[name="website"]');
            if (honeypot && honeypot.value !== '') {
                return false;
            }

            if (isValid) {
                this.submitForm(form);
            }
        }

        validateField(field) {
            this.clearError(field);
            
            const value = field.value.trim();
            const type = field.type;
            const name = field.name.toLowerCase();
            let errorMsg = '';

            if (field.hasAttribute('required') && !value) {
                errorMsg = 'Dieses Feld ist erforderlich';
            } else if (value) {
                if (type === 'email' || name.includes('email')) {
                    if (!this.patterns.email.test(value)) {
                        errorMsg = 'Bitte geben Sie eine gültige E-Mail-Adresse ein';
                    }
                } else if (type === 'tel' || name.includes('phone') || name.includes('tel')) {
                    if (!this.patterns.phone.test(value)) {
                        errorMsg = 'Bitte geben Sie eine gültige Telefonnummer ein';
                    }
                } else if (name.includes('name')) {
                    if (!this.patterns.name.test(value)) {
                        errorMsg = 'Bitte geben Sie einen gültigen Namen ein';
                    }
                } else if (field.tagName === 'TEXTAREA' || name.includes('message')) {
                    if (!this.patterns.message.test(value)) {
                        errorMsg = 'Die Nachricht muss mindestens 10 Zeichen lang sein';
                    }
                }
            }

            if (errorMsg) {
                this.showError(field, errorMsg);
                return false;
            }

            return true;
        }

        showError(field, message) {
            field.classList.add('error');
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.textContent = message;
            errorDiv.setAttribute('role', 'alert');
            
            field.parentNode.appendChild(errorDiv);
        }

        clearError(field) {
            field.classList.remove('error');
            const errorMsg = field.parentNode.querySelector('.error-message');
            if (errorMsg) {
                errorMsg.remove();
            }
        }

        submitForm(form) {
            const submitBtn = form.querySelector('[type="submit"]');
            const originalText = submitBtn ? submitBtn.textContent : '';
            
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span style="display:inline-block;width:16px;height:16px;border:2px solid;border-color:currentColor transparent transparent transparent;border-radius:50%;animation:spin 0.6s linear infinite;margin-right:8px;"></span>Wird gesendet...';
            }

            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            fetch('process.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            })
            .then(res => res.json())
            .then(result => {
                if (result.success) {
                    window.location.href = 'thank_you.html';
                } else {
                    this.showNotification('Fehler beim Senden. Bitte versuchen Sie es erneut.', 'error');
                }
            })
            .catch(() => {
                this.showNotification('Verbindungsfehler. Bitte überprüfen Sie Ihre Internetverbindung.', 'error');
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }
            });

            const spinStyle = document.createElement('style');
            spinStyle.textContent = '@keyframes spin { to { transform: rotate(360deg); } }';
            document.head.appendChild(spinStyle);
        }

        showNotification(message, type) {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 16px 24px;
                background: ${type === 'error' ? '#ef4444' : '#10b981'};
                color: white;
                border-radius: 8px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.2);
                z-index: 10000;
                animation: slideIn 0.3s ease-out;
            `;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOut 0.3s ease-out';
                setTimeout(() => notification.remove(), 300);
            }, 5000);

            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideIn {
                    from { transform: translateX(400px); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                @keyframes slideOut {
                    from { transform: translateX(0); opacity: 1; }
                    to { transform: translateX(400px); opacity: 0; }
                }
            `;
            document.head.appendChild(style);
        }
    }

    class ImageLoader {
        constructor() {
            this.init();
        }

        init() {
            document.querySelectorAll('img').forEach(img => {
                if (!img.hasAttribute('loading') && !img.classList.contains('c-logo__img')) {
                    img.setAttribute('loading', 'lazy');
                }

                img.addEventListener('error', function() {
                    this.src = `data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%23f8f9fa' width='400' height='300'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' fill='%236c757d' font-size='16' font-family='Arial'%3EBild nicht verfügbar%3C/text%3E%3C/svg%3E`;
                });
            });

            document.querySelectorAll('video').forEach(video => {
                if (!video.hasAttribute('loading')) {
                    video.setAttribute('loading', 'lazy');
                }
            });
        }
    }

    class CountUpAnimation {
        constructor() {
            this.counters = document.querySelectorAll('[data-count]');
            if (this.counters.length > 0) this.init();
        }

        init() {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            this.animateCount(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.5 }
            );

            this.counters.forEach(counter => observer.observe(counter));
        }

        animateCount(element) {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 2000;
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 16);
        }
    }

    class ScrollToTop {
        constructor() {
            this.button = this.createButton();
            this.init();
        }

        createButton() {
            const btn = document.createElement('button');
            btn.innerHTML = '↑';
            btn.setAttribute('aria-label', 'Nach oben scrollen');
            btn.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: var(--color-accent);
                color: white;
                border: none;
                font-size: 24px;
                cursor: pointer;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                z-index: 1000;
            `;
            document.body.appendChild(btn);
            return btn;
        }

        init() {
            window.addEventListener('scroll', throttle(() => {
                if (window.pageYOffset > 300) {
                    this.button.style.opacity = '1';
                    this.button.style.visibility = 'visible';
                } else {
                    this.button.style.opacity = '0';
                    this.button.style.visibility = 'hidden';
                }
            }, 100));

            this.button.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }

    const initApp = () => {
        if (app.init) return;
        app.init = true;

        new BurgerMenu();
        new ScrollEffects();
        new AnimationController();
        new FormValidator();
        new ImageLoader();
        new CountUpAnimation();
        new ScrollToTop();
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initApp);
    } else {
        initApp();
    }

})();