<!--?php
/**
 * Portfolio Page - Dynamic Tourism Portfolio
 */

// Initialize
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/constants.php';
require_once __DIR__ . '/includes/security.php';
require_once __DIR__ . '/includes/functions.php';

// Brand constants for German tourism site
$brand_name = "TourExplorer DE";
$primary_domain = "tour-explorer.de";
$support_email = "info@domain.com";
$business_address = "Alexanderplatz 1, 10178 Berlin, Deutschland";
$business_phone = "+49 30 12345678";

// Portfolio page data
$pageData = [
    'id' =-->
<html>
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
  4, 'title' =&gt; 'Unsere Tourismus-Projekte', 'slug' =&gt; 'portfolio', 'excerpt' =&gt; 'Entdecken Sie unsere außergewöhnlichen Tourismusdienstleistungen und erfolgreichen Projekte', 'meta_description' =&gt; 'Durchsuchen Sie unser Portfolio an Tourismusdienstleistungen, Reiseerfahrungen und erfolgreichen Projekten in Deutschland', 'meta_keywords' =&gt; 'tourismus portfolio, reiseerfahrungen, deutschland tourismus, reiseprojekte', 'featured_image' =&gt; 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=1200&amp;h=400&amp;fit=crop', 'author' =&gt; 'TourExplorer Team', 'created_at' =&gt; date('Y-m-d H:i:s'), 'updated_at' =&gt; date('Y-m-d H:i:s'), 'status' =&gt; 'published' ]; // Generate SEO tags $seoTags = generateSEOTags($pageData); // Portfolio items - Tourism focused $portfolioItems = [ [ 'id' =&gt; 1, 'title' =&gt; 'Bayerische Alpen Wandertour', 'category' =&gt; 'Naturerlebnisse', 'description' =&gt; 'Eine unvergessliche Wandertour durch die majestätischen Bayerischen Alpen mit professioneller Führung und lokalen Einblicken.', 'thumbnail' =&gt; 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&amp;h=300&amp;fit=crop', 'client' =&gt; 'Alpenverein München', 'duration' =&gt; '7 Tage', 'location' =&gt; 'Garmisch-Partenkirchen, Bayern', 'year' =&gt; '2024' ], [ 'id' =&gt; 2, 'title' =&gt; 'Rheintal Weinkultur-Erlebnis', 'category' =&gt; 'Kulturtouren', 'description' =&gt; 'Exklusive Weinverkostungen und Kellereiführungen entlang des romantischen Rheintals mit historischen Einblicken.', 'thumbnail' =&gt; 'https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=400&amp;h=300&amp;fit=crop', 'client' =&gt; 'Rheingau Weinverband', 'duration' =&gt; '4 Tage', 'location' =&gt; 'Rüdesheim, Rheinland-Pfalz', 'year' =&gt; '2024' ], [ 'id' =&gt; 3, 'title' =&gt; 'Berliner Architektur &amp; Geschichte', 'category' =&gt; 'Städtetouren', 'description' =&gt; 'Faszinierende Führung durch Berlins architektonische Meisterwerke und geschichtsträchtige Orte.', 'thumbnail' =&gt; 'https://images.unsplash.com/photo-1560969184-10fe8719e047?w=400&amp;h=300&amp;fit=crop', 'client' =&gt; 'Berlin Tourismus Marketing', 'duration' =&gt; '2 Tage', 'location' =&gt; 'Berlin', 'year' =&gt; '2024' ], [ 'id' =&gt; 4, 'title' =&gt; 'Nordsee Wellness Retreat', 'category' =&gt; 'Wellness', 'description' =&gt; 'Entspannender Wellness-Urlaub an der Nordseeküste mit Thalasso-Therapie und regionaler Küche.', 'thumbnail' =&gt; 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=400&amp;h=300&amp;fit=crop', 'client' =&gt; 'Sylt Tourismus Service', 'duration' =&gt; '5 Tage', 'location' =&gt; 'Sylt, Schleswig-Holstein', 'year' =&gt; '2023' ], [ 'id' =&gt; 5, 'title' =&gt; 'Schwarzwald Märchentour', 'category' =&gt; 'Familienerlebnisse', 'description' =&gt; 'Märchenhafte Familientour durch den mystischen Schwarzwald mit Kuckucksuhren-Workshop und Grimm-Geschichten.', 'thumbnail' =&gt; 'https://images.unsplash.com/photo-1551632811-561732d1e306?w=400&amp;h=300&amp;fit=crop', 'client' =&gt; 'Schwarzwald Tourismus', 'duration' =&gt; '3 Tage', 'location' =&gt; 'Triberg, Baden-Württemberg', 'year' =&gt; '2023' ], [ 'id' =&gt; 6, 'title' =&gt; 'Romantische Straße Rundreise', 'category' =&gt; 'Roadtrips', 'description' =&gt; 'Romantische Fahrt entlang Deutschlands berühmtester Ferienstraße mit mittelalterlichen Städten und Schlössern.', 'thumbnail' =&gt; 'https://images.unsplash.com/photo-1520637836862-4d197d17c89a?w=400&amp;h=300&amp;fit=crop', 'client' =&gt; 'Romantische Straße Tourismus', 'duration' =&gt; '8 Tage', 'location' =&gt; 'Würzburg bis Füssen', 'year' =&gt; '2023' ] ]; // Categories for filtering $categories = array_unique(array_column($portfolioItems, 'category')); // Generate CSRF token $csrfToken = generateCSRFToken(); // Include header include __DIR__ . '/includes/header.php'; ?&gt;
  <article class="portfolio-page">
   <!-- Page Header -->
   <div class="page-header" style="background-image: url('&lt;?php echo sanitizeOutput($pageData['featured_image']); ?&gt;');">
    <div class="page-header-overlay"></div>
    <div class="page-header-content">
     <h1 class="page-title"><!--?php echo sanitizeOutput($pageData['title']); ?--></h1>
     <p class="page-subtitle"><!--?php echo sanitizeOutput($pageData['excerpt']); ?--></p>
    </div>
   </div>
   <!-- Portfolio Content -->
   <div class="portfolio-content">
    <!-- Portfolio Intro -->
    <section class="portfolio-intro py-4 py-md-5">
     <div class="container">
      <div class="row justify-content-center">
       <div class="col-lg-8 text-center">
        <h2 class="mb-4">Entdecken Sie unsere erfolgreichen Tourismusprojekte</h2>
        <p class="lead mb-5">Von alpinen Abenteuern bis hin zu kulturellen Entdeckungsreisen – wir schaffen unvergessliche Erlebnisse in ganz Deutschland. Jedes Projekt wird mit Leidenschaft und lokalem Expertenwissen entwickelt.</p>
       </div>
      </div>
     </div>
    </section>
    <!-- Portfolio Filters -->
    <section class="portfolio-filters py-4">
     <div class="container">
      <div class="row justify-content-center">
       <div class="col-lg-10">
        <nav class="filter-nav" aria-label="Portfolio Filter">
         <ul class="filter-buttons">
          <li>
           <button type="button" class="filter-btn active" data-filter="all">Alle Projekte</button>
          </li>
          <!--?php foreach ($categories as $category): ?-->
          <li>
           <button type="button" class="filter-btn" data-filter="&lt;?php echo generateSlug($category); ?&gt;"><!--?php echo sanitizeOutput($category); ?--></button>
          </li>
          <!--?php endforeach; ?-->
         </ul>
        </nav>
       </div>
      </div>
     </div>
    </section>
    <!-- Portfolio Grid -->
    <section class="portfolio-grid py-4 py-md-5">
     <div class="container">
      <div class="row g-4" id="portfolio-items">
       <!--?php foreach ($portfolioItems as $item): ?-->
       <div class="col-lg-4 col-md-6 portfolio-item" data-category="&lt;?php echo generateSlug($item['category']); ?&gt;">
        <div class="card portfolio-card h-100 d-flex flex-column">
         <div class="portfolio-image-container ratio ratio-4x3">
          <img src="&lt;?php echo sanitizeOutput($item['thumbnail']); ?&gt;" alt="&lt;?php echo sanitizeOutput($item['title']); ?&gt;" class="img-fluid portfolio-image" loading="lazy" width="400" height="300">
          <div class="portfolio-overlay">
           <div class="portfolio-overlay-content">
            <button class="btn btn-light btn-sm portfolio-zoom-btn" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-item-id="&lt;?php echo $item['id']; ?&gt;">
             <svg class="me-1" width="16" height="16" fill="currentColor">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
             </svg>
             Details ansehen
            </button>
           </div>
          </div>
         </div>
         <div class="card-body d-flex flex-column">
          <div class="portfolio-meta mb-2">
           <span class="badge bg-primary portfolio-category"><!--?php echo sanitizeOutput($item['category']); ?--></span> <span class="text-muted ms-2"><!--?php echo sanitizeOutput($item['year']); ?--></span>
          </div>
          <h3 class="card-title h5"><!--?php echo sanitizeOutput($item['title']); ?--></h3>
          <p class="card-text text-muted mb-3"><!--?php echo truncateText($item['description'], 120); ?--></p>
          <div class="portfolio-details mt-auto">
           <div class="row g-2 mb-3">
            <div class="col-sm-6">
             <small class="text-muted d-block"> <strong>Dauer:</strong> <!--?php echo sanitizeOutput($item['duration']); ?--> </small>
            </div>
            <div class="col-sm-6">
             <small class="text-muted d-block"> <strong>Ort:</strong> <!--?php echo sanitizeOutput($item['location']); ?--> </small>
            </div>
           </div>
           <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-item-id="&lt;?php echo $item['id']; ?&gt;">Projekt Details</button>
          </div>
         </div>
        </div>
       </div>
       <!--?php endforeach; ?-->
      </div>
     </div>
    </section>
    <!-- Call to Action -->
    <section class="portfolio-cta py-5" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
     <div class="container">
      <div class="row justify-content-center text-center">
       <div class="col-lg-8">
        <h2 class="text-white mb-4">Bereit für Ihr eigenes Tourismus-Abenteuer?</h2>
        <p class="text-white opacity-75 mb-4 fs-5">Lassen Sie uns gemeinsam Ihre nächste unvergessliche Reiseerfahrung in Deutschland planen. Von der ersten Idee bis zur perfekten Umsetzung – wir sind Ihr kompetenter Partner.</p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
         <a href="/services" class="btn btn-light btn-lg px-4">Unsere Leistungen</a> <a href="/about" class="btn btn-outline-light btn-lg px-4">Über uns</a>
        </div>
       </div>
      </div>
     </div>
    </section>
   </div>
  </article>
  <!-- Portfolio Modal -->
  <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
    <div class="modal-content">
     <div class="modal-header border-0">
      <h4 class="modal-title" id="portfolioModalLabel">Projekt Details</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
     </div>
     <div class="modal-body" id="portfolioModalBody">
      <!-- Content will be loaded via JavaScript -->
     </div>
    </div>
   </div>
  </div>
  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items with smooth animation
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.remove('filtered');
                } else {
                    item.classList.add('filtered');
                }
            });
        });
    });
    
    // Portfolio modal
    const portfolioModal = document.getElementById('portfolioModal');
    const portfolioModalBody = document.getElementById('portfolioModalBody');
    const portfolioModalLabel = document.getElementById('portfolioModalLabel');
    
    // Portfolio data for modal
    const portfolioData = <?php echo json_encode($portfolioItems); ?>;
    
    document.addEventListener('click', function(e) {
        if (e.target.closest('[data-item-id]')) {
            const itemId = parseInt(e.target.closest('[data-item-id]').getAttribute('data-item-id'));
            const item = portfolioData.find(p => p.id === itemId);
            
            if (item) {
                portfolioModalLabel.textContent = item.title;
                portfolioModalBody.innerHTML = `
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <img src="${item.thumbnail}" alt="${item.title}" class="img-fluid rounded-3 mb-3" loading="lazy">
                            <div class="project-meta">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <h6 class="text-muted mb-1">Kategorie</h6>
                                        <span class="badge bg-primary">${item.category}</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="text-muted mb-1">Jahr</h6>
                                        <p class="mb-0">${item.year}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="text-muted mb-1">Dauer</h6>
                                        <p class="mb-0">${item.duration}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="text-muted mb-1">Standort</h6>
                                        <p class="mb-0">${item.location}</p>
                                    </div>
                                    <div class="col-12">
                                        <h6 class="text-muted mb-1">Kunde</h6>
                                        <p class="mb-0">${item.client}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-details">
                                <h5 class="mb-3">Projektbeschreibung</h5>
                                <p class="mb-4">${item.description}</p>
                                
                                <h6 class="mb-3">Projektmerkmale</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="text-primary me-2">✓</i> Professionelle lokale Führung</li>
                                    <li class="mb-2"><i class="text-primary me-2">✓</i> Authentische kulturelle Erfahrungen</li>
                                    <li class="mb-2"><i class="text-primary me-2">✓</i> Nachhaltige Tourismuskonzepte</li>
                                    <li class="mb-2"><i class="text-primary me-2">✓</i> Kleine Gruppengrößen</li>
                                    <li class="mb-2"><i class="text-primary me-2">✓</i> 24/7 Kundenbetreuung</li>
                                </ul>
                                
                                <div class="mt-4">
                                    <a href="/services" class="btn btn-primary me-3">Ähnliche Projekte anfragen</a>
                                    <a href="/about" class="btn btn-outline-primary">Mehr erfahren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }
        }
    });
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="/"]').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('/#')) {
                e.preventDefault();
                const targetId = href.substring(2);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
});
</script>
  <!--?php
// Include footer
include __DIR__ . '/includes/footer.php';
?-->
  <footer class="d-flex align-items-center">
   <strong class="me-2"><!--?php echo htmlspecialchars($testimonial['name']); ?--></strong> <small class="text-muted">aus <!--?php echo htmlspecialchars($testimonial['location']); ?--></small>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>