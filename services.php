<!--?php
/**
 * Dienstleistungen - Tourismus Services
 */

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/constants.php';
require_once __DIR__ . '/includes/security.php';
require_once __DIR__ . '/includes/functions.php';

// Brand-Konstanten
define('BRAND_NAME', 'ReiseErleben');
define('PRIMARY_DOMAIN', 'reise-erleben.de');
define('SUPPORT_EMAIL', 'info@' . PRIMARY_DOMAIN);
define('BRAND_ADDRESS', 'Alexanderplatz 1, 10178 Berlin, Deutschland');
define('BRAND_PHONE', '+49 30 12345678');

// SEO-Daten
$seoTags = [
    'title' =-->
<html lang="de">
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  <header class="navbar navbar-expand-md sticky-top bg-white border-bottom" role="banner">
   <div class="container-fluid">
    <!-- Brand -->
    <a class="navbar-brand d-flex align-items-center" href="/" title="&lt;?php echo BRAND_NAME; ?&gt; - Startseite"> <img src="/assets/images/logo.png" alt="&lt;?php echo BRAND_NAME; ?&gt; Logo" height="40" width="150" loading="eager"> </a> <!-- CTA Button (Mobile) -->
    <a href="#kontakt" class="btn btn-primary d-md-none me-2">Jetzt buchen</a> <!-- Burger Menu -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Navigation umschalten"><span class="navbar-toggler-icon"></span></button>
    <!-- Navigation -->
    <div class="collapse navbar-collapse" id="navbarNav">
     <nav class="navbar-nav mx-auto" role="navigation" aria-label="Hauptnavigation">
      <!--?php foreach ($NAVIGATION as $navItem): ?-->
      <a class="nav-link" href="&lt;?php echo $navItem['url']; ?&gt;" <?php echo $navitem[_url_]="==" _ ? _aria-current="page" : _;> title="<!--?php echo $navItem['label']; ?-->"&gt; <!--?php echo $navItem['label']; ?--> </a> <!--?php endforeach; ?-->
     </nav>
     <!-- CTA Button (Desktop) -->
     <a href="#kontakt" class="btn btn-primary d-none d-md-block">Jetzt buchen</a>
    </div>
   </div>
  </header>
  'Premium Reisedienstleistungen | ' . BRAND_NAME, 'description' =&gt; 'Entdecken Sie unsere exklusiven Tourismus-Services: Luxusreisen, Kulturtouren, Abenteuerreisen und maßgeschneiderte Urlaubserlebnisse in Deutschland.', 'keywords' =&gt; 'Reisedienstleistungen, Tourismus, Luxusreisen, Kulturtouren, Deutschland, Berlin', 'og_title' =&gt; 'Premium Reisedienstleistungen', 'og_description' =&gt; 'Exklusive Tourismus-Services für unvergessliche Reiseerlebnisse', 'og_image' =&gt; 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=1200&amp;h=630', 'og_url' =&gt; 'https://domain.com/services' ]; // Navigation $navigationLinks = [ ['label' =&gt; 'Startseite', 'url' =&gt; 'index.php'], ['label' =&gt; 'Über uns', 'url' =&gt; 'about.php'], ['label' =&gt; 'Dienstleistungen', 'url' =&gt; 'services.php', 'active' =&gt; true], ['label' =&gt; 'Portfolio', 'url' =&gt; 'portfolio.php'], ['label' =&gt; 'Datenschutz', 'url' =&gt; 'privacy.php'] ]; // Services-Daten $servicesData = [ [ 'id' =&gt; 1, 'title' =&gt; 'Exklusive Stadttouren', 'description' =&gt; 'Entdecken Sie Berlins versteckte Schätze mit unseren privaten Stadtführern. Personalisierte Routen abseits der Touristenpfade.', 'icon' =&gt; '
  <svg viewBox="0 0 24 24" fill="currentColor">
   <path d="M12 2L13.09 8.26L22 9L17 14L18.18 22L12 19L5.82 22L7 14L2 9L10.91 8.26L12 2Z" />
  </svg>
  ', 'price' =&gt; 'Ab €89', 'features' =&gt; ['Privater Guide', '3-4 Stunden', 'Max. 8 Personen', 'Flexible Termine'], 'category' =&gt; 'Kulturtouren' ], [ 'id' =&gt; 2, 'title' =&gt; 'Luxus-Wellness-Retreats', 'description' =&gt; 'Entspannung pur in den schönsten Wellness-Oasen Deutschlands. Premium-Unterkünfte und individuell abgestimmte Spa-Programme.', 'icon' =&gt; '
  <svg viewBox="0 0 24 24" fill="currentColor">
   <path d="M9,2V8H7V2H5V8H3V2H1V8C1,10.67 3.33,12 6,12V22H8V12C10.67,12 13,10.67 13,8V2H11V8H9V2M15,16H23V18H15V16M15,20H21V22H15V20M15,12H21V14H15V12Z" />
  </svg>
  ', 'price' =&gt; 'Ab €299', 'features' =&gt; ['5-Sterne Hotels', 'Spa-Treatments', 'Gesunde Küche', '3-7 Tage'], 'category' =&gt; 'Wellness' ], [ 'id' =&gt; 3, 'title' =&gt; 'Kulinarische Erlebnisreisen', 'description' =&gt; 'Genießen Sie die Vielfalt der deutschen Küche. Von traditionellen Brauereien bis hin zu Sternerestaurants.', 'icon' =&gt; '
  <svg viewBox="0 0 24 24" fill="currentColor">
   <path d="M8.1,13.34L3.91,9.16C2.35,7.59 2.35,5.06 3.91,3.5L10.93,10.5L8.1,13.34M14.88,11.53C16.28,12.93 16.28,15.19 14.88,16.59C13.48,17.99 11.22,17.99 9.82,16.59L7.76,14.53L10.59,11.7L14.88,11.53M21.41,2.59C22.2,3.38 22.2,4.64 21.41,5.43L19.24,7.59L18.12,6.47L20.29,4.31C20.68,3.92 20.68,3.26 20.29,2.87L17.42,0L15.25,2.17L14.13,1.05L16.3,-1.12C17.09,-1.91 18.35,-1.91 19.14,-1.12L21.41,2.59Z" />
  </svg>
  ', 'price' =&gt; 'Ab €199', 'features' =&gt; ['Michelin-Restaurants', 'Brauereitouren', 'Kochkurse', 'Weinverkostungen'], 'category' =&gt; 'Kulinarik' ], [ 'id' =&gt; 4, 'title' =&gt; 'Abenteuer &amp; Outdoor', 'description' =&gt; 'Erleben Sie Deutschland von seiner wilden Seite. Wandertouren in den Alpen, Kajak-Abenteuer und Kletterexpeditionen.', 'icon' =&gt; '
  <svg viewBox="0 0 24 24" fill="currentColor">
   <path d="M5,2L7,4L5,6L4,5L3,6L1,4L3,2H5M15.47,7.5C15.85,7.9 16.43,8.07 17,7.93L20.68,7.18C21.84,6.95 22.8,7.91 22.57,9.07L21.82,12.75C21.68,13.32 21.85,13.9 22.25,14.28L23.5,15.54C24.45,16.5 23.74,18.07 22.41,18.07H17.41L12,22.41C11.21,23.2 9.79,23.2 9,22.41L1.59,15C0.8,14.21 0.8,12.79 1.59,12L6.34,7.25C7.13,6.46 8.55,6.46 9.34,7.25L15.47,7.5Z" />
  </svg>
  ', 'price' =&gt; 'Ab €149', 'features' =&gt; ['Geführte Touren', 'Ausrüstung inkl.', 'Alle Levels', 'Sicherheit garantiert'], 'category' =&gt; 'Abenteuer' ], [ 'id' =&gt; 5, 'title' =&gt; 'Historische Schlössertouren', 'description' =&gt; 'Tauchen Sie ein in die Geschichte deutscher Schlösser und Burgen. Exklusive Führungen und königliche Erlebnisse.', 'icon' =&gt; '
  <svg viewBox="0 0 24 24" fill="currentColor">
   <path d="M12,3L2,12V21H9V14H15V21H22V12L12,3M12,7.5C12.83,7.5 13.5,8.17 13.5,9C13.5,9.83 12.83,10.5 12,10.5C11.17,10.5 10.5,9.83 10.5,9C10.5,8.17 11.17,7.5 12,7.5Z" />
  </svg>
  ', 'price' =&gt; 'Ab €129', 'features' =&gt; ['Private Führungen', 'Historische Kostüme', 'Königliches Dinner', 'Foto-Sessions'], 'category' =&gt; 'Kultur' ], [ 'id' =&gt; 6, 'title' =&gt; 'Maßgeschneiderte Gruppenreisen', 'description' =&gt; 'Individuell geplante Reisen für Firmen, Vereine oder private Gruppen. Komplette Organisation von A bis Z.', 'icon' =&gt; '
  <svg viewBox="0 0 24 24" fill="currentColor">
   <path d="M16,4C18.21,4 20,5.79 20,8C20,10.21 18.21,12 16,12C13.79,12 12,10.21 12,8C12,5.79 13.79,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M6,6V9H4V6H1V4H4V1H6V4H9V6H6M12.5,11.5C11.67,10.67 10.33,10.67 9.5,11.5L5,16H2L8.5,9.5C9.33,8.67 10.67,8.67 11.5,9.5L12.5,10.5L12.5,11.5Z" />
  </svg>
  ', 'price' =&gt; 'Auf Anfrage', 'features' =&gt; ['Individuelle Planung', 'Transport inkl.', 'Gruppenrabatte', '24/7 Support'], 'category' =&gt; 'Gruppenreisen' ] ]; $currentYear = date('Y'); $csrfToken = generateCSRFToken(); ?&gt;
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>&lt;?php echo $seoTags['title']; ?&gt;</title>
  <meta name="description" content="&lt;?php echo $seoTags['description']; ?&gt;">
  <meta name="keywords" content="&lt;?php echo $seoTags['keywords']; ?&gt;">
  <meta name="author" content="&lt;?php echo BRAND_NAME; ?&gt;">
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="&lt;?php echo $seoTags['og_title']; ?&gt;">
  <meta property="og:description" content="&lt;?php echo $seoTags['og_description']; ?&gt;">
  <meta property="og:image" content="&lt;?php echo $seoTags['og_image']; ?&gt;">
  <meta property="og:url" content="&lt;?php echo $seoTags['og_url']; ?&gt;">
  <!-- Bootstrap 5 CSS -->
  <!-- Custom CSS -->
  <!-- Favicon -->
  <!-- Canonical -->
  <link rel="canonical" href="&lt;?php echo $seoTags['og_url']; ?&gt;">
  <!-- Header -->
  <!-- Breadcrumbs -->
  <nav class="container py-2" aria-label="breadcrumb">
   <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Startseite</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dienstleistungen</li>
   </ol>
  </nav>
  <!-- Hero Section -->
  <section class="hero-section py-5 py-md-5 text-white text-center" data-aos="fade-in">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-lg-8">
      <h1 class="display-4 fw-bold mb-4">Premium Reisedienstleistungen</h1>
      <p class="lead mb-4">Entdecken Sie Deutschland mit unseren exklusiven, maßgeschneiderten Reiseerlebnissen. Von Luxusreisen bis hin zu authentischen Kulturtouren.</p>
      <a href="#services" class="btn btn-light btn-lg">Services entdecken</a>
     </div>
    </div>
   </div>
  </section>
  <!-- Service Cards -->
  <section id="services" class="py-4 py-md-5">
   <div class="container">
    <div class="row text-center mb-5">
     <div class="col">
      <h2 class="display-5 fw-bold mb-3">Unsere Dienstleistungen</h2>
      <p class="lead text-muted">Exklusive Reiseerlebnisse für jeden Geschmack</p>
     </div>
    </div>
    <div class="row g-4">
     <!--?php foreach ($servicesData as $service): ?-->
     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="&lt;?php echo $service['id'] * 100; ?&gt;">
      <div class="card service-card h-100 d-flex flex-column border-0 rounded-3 shadow">
       <div class="card-body text-center p-4 flex-grow-1">
        <div class="service-icon rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
         <!--?php echo $service['icon']; ?-->
        </div>
        <h3 class="h4 fw-bold mb-3"><!--?php echo sanitizeOutput($service['title']); ?--></h3>
        <p class="text-muted mb-3"><!--?php echo sanitizeOutput($service['description']); ?--></p>
        <div class="price-badge bg-dark text-white rounded-pill py-2 px-3 mb-3 d-inline-block">
         <strong><!--?php echo sanitizeOutput($service['price']); ?--></strong>
        </div>
        <ul class="list-unstyled mb-0">
         <!--?php foreach ($service['features'] as $feature): ?-->
         <li class="mb-2"><span class="text-success">✓</span> <!--?php echo sanitizeOutput($feature); ?--></li>
         <!--?php endforeach; ?-->
        </ul>
       </div>
       <div class="card-footer bg-transparent border-0 p-4 mt-auto">
        <a href="#contact-form" class="btn btn-dark w-100" data-service="&lt;?php echo $service['title']; ?&gt;"> Jetzt anfragen </a>
       </div>
      </div>
     </div>
     <!--?php endforeach; ?-->
    </div>
   </div>
  </section>
  <!-- Team Expertise -->
  <section class="expertise-section py-4 py-md-5">
   <div class="container">
    <div class="row align-items-center">
     <div class="col-lg-6" data-aos="fade-right">
      <h2 class="display-5 fw-bold mb-4">Expertenwissen seit über 15 Jahren</h2>
      <p class="lead mb-4">Unser erfahrenes Team aus Reiseexperten, Kulturkennern und Abenteuer-Guides sorgt für unvergessliche Erlebnisse.</p>
      <div class="row g-4">
       <div class="col-sm-6">
        <div class="d-flex align-items-center mb-3">
         <div class="bg-dark text-white rounded-circle p-3 me-3">
          <span class="h5 mb-0">🎯</span>
         </div>
         <div>
          <h4 class="h5 fw-bold mb-1">500+</h4>
          <p class="text-muted mb-0">Erfolgreiche Touren</p>
         </div>
        </div>
       </div>
       <div class="col-sm-6">
        <div class="d-flex align-items-center mb-3">
         <div class="bg-dark text-white rounded-circle p-3 me-3">
          <span class="h5 mb-0">⭐</span>
         </div>
         <div>
          <h4 class="h5 fw-bold mb-1">98%</h4>
          <p class="text-muted mb-0">Zufriedenheitsrate</p>
         </div>
        </div>
       </div>
       <div class="col-sm-6">
        <div class="d-flex align-items-center mb-3">
         <div class="bg-dark text-white rounded-circle p-3 me-3">
          <span class="h5 mb-0">🏆</span>
         </div>
         <div>
          <h4 class="h5 fw-bold mb-1">12</h4>
          <p class="text-muted mb-0">Auszeichnungen</p>
         </div>
        </div>
       </div>
       <div class="col-sm-6">
        <div class="d-flex align-items-center mb-3">
         <div class="bg-dark text-white rounded-circle p-3 me-3">
          <span class="h5 mb-0">🌍</span>
         </div>
         <div>
          <h4 class="h5 fw-bold mb-1">50+</h4>
          <p class="text-muted mb-0">Destinationen</p>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-6" data-aos="fade-left">
      <div class="ratio ratio-4x3">
       <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=800&amp;h=600" alt="Unser Expertenteam bei einer Besprechung" class="img-fluid rounded-3 shadow" loading="lazy" width="800" height="600" style="object-fit: cover;">
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Award-winning Services -->
  <section class="py-4 py-md-5">
   <div class="container">
    <div class="row text-center mb-5">
     <div class="col">
      <h2 class="display-5 fw-bold mb-3">Ausgezeichnete Services</h2>
      <p class="lead text-muted">Zertifiziert und mehrfach prämiert</p>
     </div>
    </div>
    <div class="row g-4 justify-content-center">
     <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in">
      <div class="award-badge rounded-3 p-4 mb-3">
       <span class="display-4">🏅</span>
       <h4 class="mt-3 mb-2">TripAdvisor Excellence</h4>
       <p class="mb-0">2023</p>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="award-badge rounded-3 p-4 mb-3">
       <span class="display-4">🌟</span>
       <h4 class="mt-3 mb-2">Best Tour Operator</h4>
       <p class="mb-0">Germany 2022</p>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="200">
      <div class="award-badge rounded-3 p-4 mb-3">
       <span class="display-4">🎖️</span>
       <h4 class="mt-3 mb-2">ISO 9001 Zertifiziert</h4>
       <p class="mb-0">Qualitätsstandard</p>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 text-center" data-aos="zoom-in" data-aos-delay="300">
      <div class="award-badge rounded-3 p-4 mb-3">
       <span class="display-4">♻️</span>
       <h4 class="mt-3 mb-2">Sustainable Travel</h4>
       <p class="mb-0">Green Certified</p>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Contact Form -->
  <section id="contact-form" class="py-4 py-md-5 bg-light">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-lg-8">
      <div class="text-center mb-5">
       <h2 class="display-5 fw-bold mb-3">Kostenlose Beratung anfragen</h2>
       <p class="lead text-muted">Lassen Sie uns gemeinsam Ihre Traumreise planen</p>
      </div>
      <form class="row g-3 needs-validation" method="POST" action="#contact-form" novalidate data-aos="fade-up">
       <input type="hidden" name="csrf_token" value="&lt;?php echo $csrfToken; ?&gt;">
       <div class="col-md-6">
        <label for="firstName" class="form-label">Vorname *</label> <input type="text" class="form-control" id="firstName" name="first_name" required maxlength="50">
        <div class="invalid-feedback">Bitte geben Sie Ihren Vornamen ein.</div>
       </div>
       <div class="col-md-6">
        <label for="lastName" class="form-label">Nachname *</label> <input type="text" class="form-control" id="lastName" name="last_name" required maxlength="50">
        <div class="invalid-feedback">Bitte geben Sie Ihren Nachnamen ein.</div>
       </div>
       <div class="col-md-6">
        <label for="email" class="form-label">E-Mail-Adresse *</label> <input type="email" class="form-control" id="email" name="email" required maxlength="100">
        <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
       </div>
       <div class="col-md-6">
        <label for="phone" class="form-label">Telefon</label> <input type="tel" class="form-control" id="phone" name="phone" maxlength="20">
       </div>
       <div class="col-12">
        <label for="service" class="form-label">Gewünschte Dienstleistung</label> <select class="form-select" id="service" name="service"> <option value="">Bitte wählen...</option> <!--?php foreach ($servicesData as $service): ?--> <option value="&lt;?php echo sanitizeOutput($service['title']); ?&gt;"><!--?php echo sanitizeOutput($service['title']); ?--></option> <!--?php endforeach; ?--> <option value="Andere">Andere</option> </select>
       </div>
       <div class="col-12">
        <label for="message" class="form-label">Nachricht *</label> <textarea class="form-control" id="message" name="message" rows="5" required maxlength="1000" placeholder="Beschreiben Sie Ihre Wünsche und Vorstellungen..."></textarea>
        <div class="invalid-feedback">Bitte geben Sie eine Nachricht ein.</div>
       </div>
       <div class="col-12">
        <div class="form-check">
         <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required> <label class="form-check-label" for="privacy"> Ich stimme der <a href="privacy.php" target="_blank">Datenschutzerklärung</a> zu und erlaube die Verarbeitung meiner Daten zur Bearbeitung der Anfrage. * </label>
         <div class="invalid-feedback">Sie müssen den Datenschutzbestimmungen zustimmen.</div>
        </div>
       </div>
       <div class="col-12">
        <button class="btn btn-dark btn-lg w-100" type="submit">Kostenlose Beratung anfragen</button>
       </div>
      </form>
     </div>
    </div>
   </div>
  </section>
  <!-- Live Chat Widget -->
  <div class="chat-widget">
   <button class="btn btn-dark rounded-circle p-3" type="button" data-bs-toggle="tooltip" title="Live Chat" aria-label="Live Chat öffnen"><span style="font-size: 1.5rem;">💬</span></button>
  </div>
  <!-- Footer -->
  <!-- Bootstrap 5 JS -->
  <!-- AOS Animation -->
  <script>
        AOS.init({
            once: false,
            duration: 600,
            easing: 'ease-out',
            offset: 120,
            mirror: false
        });
    </script>
  <!-- Custom JS -->
  <!-- JSON-LD Structured Data -->
  <footer class="d-flex align-items-center">
   <strong class="me-2"><!--?php echo htmlspecialchars($testimonial['name']); ?--></strong> <small class="text-muted">aus <!--?php echo htmlspecialchars($testimonial['location']); ?--></small>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>