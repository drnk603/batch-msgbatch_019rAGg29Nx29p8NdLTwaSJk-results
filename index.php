<!--?php
/**
 * Dynamic Tourism Landing Page
 * Professional German Tourism Website
 */

// Initialize
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/constants.php';
require_once __DIR__ . '/includes/security.php';
require_once __DIR__ . '/includes/functions.php';

// Brand constants
define('BRAND_NAME', 'AlpenReise Tours');
define('PRIMARY_DOMAIN', 'alpenreise-tours.de');
define('SUPPORT_EMAIL', 'info@domain.com');
define('BUSINESS_PHONE', '+49 89 12345678');
define('BUSINESS_ADDRESS', 'Maximilianstraße 35, 80539 München, Deutschland');

// Generate CSRF Token
$csrfToken = generateCSRFToken();

// SEO data
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
  'AlpenReise Tours - Ihre Premium Reiseerlebnisse in den Alpen | München', 'description' =&gt; 'Entdecken Sie unvergessliche Reiseerlebnisse in den bayerischen Alpen mit AlpenReise Tours. Premium Touren, professionelle Beratung und maßgeschneiderte Erlebnisse.', 'keywords' =&gt; 'alpen touren, bayern reisen, bergtour, wandern, premium reisen, münchen tourismus', 'og_title' =&gt; 'AlpenReise Tours - Premium Alpen-Erlebnisse', 'og_description' =&gt; 'Ihre Experten für unvergessliche Alpen-Touren und Premium Reiseerlebnisse in Bayern.', 'og_image' =&gt; 'https://' . PRIMARY_DOMAIN . '/assets/images/hero-alps.jpg', 'og_url' =&gt; 'https://' . PRIMARY_DOMAIN ]; // Navigation menu $NAVIGATION = [ ['label' =&gt; 'Startseite', 'url' =&gt; '/', 'icon' =&gt; 'home'], ['label' =&gt; 'Über uns', 'url' =&gt; '/about.php', 'icon' =&gt; 'info'], ['label' =&gt; 'Touren', 'url' =&gt; '/services.php', 'icon' =&gt; 'mountain'], ['label' =&gt; 'Portfolio', 'url' =&gt; '/portfolio.php', 'icon' =&gt; 'gallery'], ['label' =&gt; 'Datenschutz', 'url' =&gt; '/privacy.php', 'icon' =&gt; 'shield'] ]; // Social links $SOCIAL_LINKS = [ 'facebook' =&gt; 'https://facebook.com/alpenreise.tours', 'instagram' =&gt; 'https://instagram.com/alpenreise_tours', 'youtube' =&gt; 'https://youtube.com/@alpenreisetours' ]; // Sample tour data $featuredTours = [ [ 'title' =&gt; 'Zugspitze Premium Tour', 'description' =&gt; 'Erleben Sie Deutschlands höchsten Gipfel mit unserem exklusiven Rundum-Service.', 'image' =&gt; '/assets/images/zugspitze.jpg', 'duration' =&gt; '1 Tag', 'price' =&gt; '€189', 'rating' =&gt; 4.9 ], [ 'title' =&gt; 'Neuschwanstein Märchen-Tour', 'description' =&gt; 'Tauchen Sie ein in die zauberhafte Welt von König Ludwig II.', 'image' =&gt; '/assets/images/neuschwanstein.jpg', 'duration' =&gt; '6 Stunden', 'price' =&gt; '€129', 'rating' =&gt; 4.8 ], [ 'title' =&gt; 'Berchtesgaden Nationalpark', 'description' =&gt; 'Entdecken Sie die unberührte Natur des Berchtesgadener Landes.', 'image' =&gt; '/assets/images/berchtesgaden.jpg', 'duration' =&gt; '2 Tage', 'price' =&gt; '€299', 'rating' =&gt; 4.9 ] ]; // Team members $teamMembers = [ [ 'name' =&gt; 'Maria Schneider', 'position' =&gt; 'Tourguide &amp; Gründerin', 'image' =&gt; '/assets/images/team-maria.jpg', 'experience' =&gt; '15 Jahre Erfahrung' ], [ 'name' =&gt; 'Hans Mueller', 'position' =&gt; 'Bergführer', 'image' =&gt; '/assets/images/team-hans.jpg', 'experience' =&gt; '12 Jahre Erfahrung' ], [ 'name' =&gt; 'Anna Weber', 'position' =&gt; 'Reiseberaterin', 'image' =&gt; '/assets/images/team-anna.jpg', 'experience' =&gt; '8 Jahre Erfahrung' ] ]; // Testimonials $testimonials = [ [ 'name' =&gt; 'Familie Becker', 'location' =&gt; 'Hamburg', 'text' =&gt; 'Eine absolut fantastische Tour! Professionelle Betreuung und unvergessliche Erlebnisse.', 'rating' =&gt; 5 ], [ 'name' =&gt; 'Thomas K.', 'location' =&gt; 'Berlin', 'text' =&gt; 'AlpenReise Tours hat unsere Erwartungen übertroffen. Sehr zu empfehlen!', 'rating' =&gt; 5 ] ]; ?&gt;
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Primary Meta Tags -->
  <title>&lt;?php echo $seoTags['title']; ?&gt;</title>
  <meta name="title" content="&lt;?php echo $seoTags['title']; ?&gt;">
  <meta name="description" content="&lt;?php echo $seoTags['description']; ?&gt;">
  <meta name="keywords" content="&lt;?php echo $seoTags['keywords']; ?&gt;">
  <meta name="author" content="&lt;?php echo BRAND_NAME; ?&gt;">
  <meta name="robots" content="index, follow">
  <meta name="language" content="German">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="&lt;?php echo $seoTags['og_url']; ?&gt;">
  <meta property="og:title" content="&lt;?php echo $seoTags['og_title']; ?&gt;">
  <meta property="og:description" content="&lt;?php echo $seoTags['og_description']; ?&gt;">
  <meta property="og:image" content="&lt;?php echo $seoTags['og_image']; ?&gt;">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="&lt;?php echo $seoTags['og_url']; ?&gt;">
  <meta property="twitter:title" content="&lt;?php echo $seoTags['og_title']; ?&gt;">
  <meta property="twitter:description" content="&lt;?php echo $seoTags['og_description']; ?&gt;">
  <meta property="twitter:image" content="&lt;?php echo $seoTags['og_image']; ?&gt;">
  <!-- Favicon -->
  <!-- Stylesheets -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Canonical -->
  <link rel="canonical" href="&lt;?php echo $seoTags['og_url']; ?&gt;">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="&lt;?php echo $csrfToken; ?&gt;">
  <!-- JSON-LD Schema -->
  <!-- Skip to main content -->
  <a href="#main-content" class="skip-link visually-hidden-focusable">Zum Hauptinhalt springen</a> <!-- Header -->
  <!-- Main Content -->
  <main id="main-content">
   <!-- Hero Section -->
   <section class="hero-section position-relative py-5 text-white overflow-hidden" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('/assets/images/hero-mountain.jpg'); background-size: cover; background-position: center; min-height: 90vh;" data-aos="fade-in">
    <div class="container py-4 py-md-5 h-100">
     <div class="row align-items-center h-100">
      <div class="col-lg-8 col-xl-7">
       <h1 class="display-3 fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">Entdecken Sie die <span class="text-warning">Schönheit der Alpen</span></h1>
       <p class="lead mb-4 fs-4" data-aos="fade-up" data-aos-delay="200">Premium Reiseerlebnisse mit persönlichem Service und unvergesslichen Momenten in den bayerischen Alpen.</p>
       <div class="d-flex flex-column flex-sm-row gap-3 mb-4" data-aos="fade-up" data-aos-delay="300">
        <a href="#touren" class="btn btn-warning btn-lg px-5 py-3"> Touren entdecken </a> <a href="#kontakt" class="btn btn-outline-light btn-lg px-5 py-3"> Beratung anfordern </a>
       </div>
       <!-- Trust indicators -->
       <div class="d-flex flex-wrap align-items-center gap-4 mt-5" data-aos="fade-up" data-aos-delay="400">
        <div class="d-flex align-items-center">
         <span class="text-warning fs-4 me-2">★★★★★</span> <small>4.9/5 bei 247+ Bewertungen</small>
        </div>
        <div class="d-flex align-items-center">
         <strong class="me-2">500+</strong> <small>Zufriedene Gäste</small>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- About Snippet -->
   <section class="py-4 py-md-5 bg-light" id="ueber-uns" data-aos="fade-up">
    <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
       <div class="ratio ratio-4x3">
        <img src="/assets/images/about-guide.jpg" alt="Professioneller Bergführer von AlpenReise Tours" class="img-fluid rounded-4 object-fit-cover" loading="lazy" width="600" height="450">
       </div>
      </div>
      <div class="col-lg-6 ps-lg-5">
       <div class="badge bg-warning text-dark mb-3">Über uns</div>
       <h2 class="display-6 fw-bold mb-4">Ihre Experten für alpine Erlebnisse</h2>
       <p class="fs-5 text-muted mb-4">Seit über 15 Jahren begleiten wir Reisebegeisterte zu den schönsten Orten der bayerischen Alpen. Mit lokaler Expertise und Leidenschaft für die Berge schaffen wir unvergessliche Momente.</p>
       <ul class="list-unstyled fs-5">
        <li class="mb-3 d-flex align-items-start"><span class="text-warning me-3">✓</span> <span>Zertifizierte Bergführer mit lokaler Expertise</span></li>
        <li class="mb-3 d-flex align-items-start"><span class="text-warning me-3">✓</span> <span>Kleine Gruppen für persönliche Betreuung</span></li>
        <li class="mb-3 d-flex align-items-start"><span class="text-warning me-3">✓</span> <span>Nachhaltiger und respektvoller Tourismus</span></li>
       </ul>
       <a href="/about.php" class="btn btn-outline-dark btn-lg">Mehr erfahren</a>
      </div>
     </div>
    </div>
   </section>
   <!-- Featured Tours -->
   <section class="py-4 py-md-5" id="touren" data-aos="fade-up">
    <div class="container">
     <div class="text-center mb-5">
      <div class="badge bg-warning text-dark mb-3">Beliebte Touren</div>
      <h2 class="display-6 fw-bold mb-4">Unsere Highlight-Touren</h2>
      <p class="fs-5 text-muted col-lg-8 mx-auto">Entdecken Sie unsere sorgfältig kuratierten Premium-Touren zu den spektakulärsten Orten der bayerischen Alpen.</p>
     </div>
     <div class="row g-4">
      <!--?php foreach ($featuredTours as $index =-->
      $tour): ?&gt;
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="&lt;?php echo ($index + 1) * 100; ?&gt;">
       <article class="card h-100 border-0 shadow-sm tour-card">
        <div class="position-relative">
         <div class="ratio ratio-4x3">
          <img src="&lt;?php echo $tour['image']; ?&gt;" alt="&lt;?php echo htmlspecialchars($tour['title']); ?&gt;" class="card-img-top object-fit-cover rounded-top" loading="lazy" width="400" height="300">
         </div>
         <div class="position-absolute top-0 end-0 m-3">
          <span class="badge bg-warning text-dark">★ <!--?php echo $tour['rating']; ?--></span>
         </div>
        </div>
        <div class="card-body d-flex flex-column">
         <h3 class="card-title h5 fw-bold"><!--?php echo htmlspecialchars($tour['title']); ?--></h3>
         <p class="card-text text-muted flex-grow-1"><!--?php echo htmlspecialchars($tour['description']); ?--></p>
         <div class="d-flex justify-content-between align-items-center mt-3">
          <div>
           <small class="text-muted d-block">Dauer: <!--?php echo $tour['duration']; ?--></small> <strong class="text-primary fs-5"><!--?php echo $tour['price']; ?--></strong>
          </div>
          <a href="/services.php" class="btn btn-primary">Details</a>
         </div>
        </div>
       </article>
      </div>
      <!--?php endforeach; ?-->
     </div>
     <div class="text-center mt-5">
      <a href="/services.php" class="btn btn-warning btn-lg px-5">Alle Touren anzeigen</a>
     </div>
    </div>
   </section>
   <!-- Team Intro -->
   <section class="py-4 py-md-5 bg-light" id="team" data-aos="fade-up">
    <div class="container">
     <div class="text-center mb-5">
      <div class="badge bg-warning text-dark mb-3">Unser Team</div>
      <h2 class="display-6 fw-bold mb-4">Lernen Sie uns kennen</h2>
      <p class="fs-5 text-muted col-lg-8 mx-auto">Unser erfahrenes Team aus zertifizierten Bergführern und Reiseexperten sorgt für unvergessliche Erlebnisse.</p>
     </div>
     <div class="row g-4 justify-content-center">
      <!--?php foreach ($teamMembers as $index =-->
      $member): ?&gt;
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="&lt;?php echo ($index + 1) * 100; ?&gt;">
       <article class="card text-center border-0 shadow-sm h-100">
        <div class="card-body p-4">
         <div class="ratio ratio-1x1 mb-4" style="max-width: 150px; margin: 0 auto;">
          <img src="&lt;?php echo $member['image']; ?&gt;" alt="&lt;?php echo htmlspecialchars($member['name']); ?&gt;, &lt;?php echo htmlspecialchars($member['position']); ?&gt;" class="rounded-circle object-fit-cover" loading="lazy" width="150" height="150">
         </div>
         <h3 class="h5 fw-bold mb-2"><!--?php echo htmlspecialchars($member['name']); ?--></h3>
         <p class="text-primary fw-semibold mb-2"><!--?php echo htmlspecialchars($member['position']); ?--></p>
         <p class="text-muted small mb-0"><!--?php echo htmlspecialchars($member['experience']); ?--></p>
        </div>
       </article>
      </div>
      <!--?php endforeach; ?-->
     </div>
    </div>
   </section>
   <!-- Case Studies / Testimonials -->
   <section class="py-4 py-md-5" id="testimonials" data-aos="fade-up">
    <div class="container">
     <div class="text-center mb-5">
      <div class="badge bg-warning text-dark mb-3">Erfahrungen</div>
      <h2 class="display-6 fw-bold mb-4">Was unsere Gäste sagen</h2>
     </div>
     <div class="row g-4 justify-content-center">
      <!--?php foreach ($testimonials as $index =-->
      $testimonial): ?&gt;
      <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="&lt;?php echo ($index + 1) * 100; ?&gt;">
       <article class="card border-0 shadow-sm h-100">
        <div class="card-body p-4">
         <div class="mb-3">
          <!--?php for ($i = 0; $i < $testimonial['rating']; $i++): ?-->
          <span class="text-warning">★</span> <!--?php endfor; ?-->
         </div>
         <blockquote class="mb-4">
          <p class="fs-5 fst-italic mb-0">"<!--?php echo htmlspecialchars($testimonial['text']); ?-->"</p>
         </blockquote>
         <footer class="d-flex align-items-center">
          <strong class="me-2"><!--?php echo htmlspecialchars($testimonial['name']); ?--></strong> <small class="text-muted">aus <!--?php echo htmlspecialchars($testimonial['location']); ?--></small>
         </footer>
        </div>
       </article>
      </div>
      <!--?php endforeach; ?-->
     </div>
    </div>
   </section>
   <!-- Media Mentions -->
   <section class="py-4 py-md-5 bg-light" data-aos="fade-up">
    <div class="container">
     <div class="text-center mb-5">
      <div class="badge bg-warning text-dark mb-3">Medien</div>
      <h2 class="display-6 fw-bold mb-4">Auszeichnungen &amp; Erwähnungen</h2>
     </div>
     <div class="row g-4 justify-content-center align-items-center">
      <div class="col-6 col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
       <img src="/assets/images/award-1.png" alt="TripAdvisor Zertifikat für Exzellenz" class="img-fluid opacity-75" style="max-height: 80px; filter: grayscale(100%);" loading="lazy">
       <p class="small text-muted mt-2">TripAdvisor
        <br>
        Zertifikat für Exzellenz</p>
      </div>
      <div class="col-6 col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
       <img src="/assets/images/award-2.png" alt="Bayerischer Tourismusverband Auszeichnung" class="img-fluid opacity-75" style="max-height: 80px; filter: grayscale(100%);" loading="lazy">
       <p class="small text-muted mt-2">Bayerischer
        <br>
        Tourismusverband</p>
      </div>
      <div class="col-6 col-md-3 text-center" data-aos="fade-up" data-aos-delay="300">
       <img src="/assets/images/award-3.png" alt="Süddeutsche Zeitung Empfehlung" class="img-fluid opacity-75" style="max-height: 80px; filter: grayscale(100%);" loading="lazy">
       <p class="small text-muted mt-2">Süddeutsche
        <br>
        Zeitung</p>
      </div>
      <div class="col-6 col-md-3 text-center" data-aos="fade-up" data-aos-delay="400">
       <img src="/assets/images/award-4.png" alt="Nachhaltigkeits-Zertifikat" class="img-fluid opacity-75" style="max-height: 80px; filter: grayscale(100%);" loading="lazy">
       <p class="small text-muted mt-2">Nachhaltigkeits-
        <br>
        Zertifikat</p>
      </div>
     </div>
    </div>
   </section>
   <!-- User Login Teaser / Newsletter -->
   <section class="py-4 py-md-5 bg-primary text-white" id="newsletter" data-aos="fade-up">
    <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-8">
       <h2 class="h3 fw-bold mb-3">Verpassen Sie keine Highlights!</h2>
       <p class="mb-0 fs-5">Erhalten Sie exklusive Angebote, Insider-Tipps und Updates zu neuen Touren direkt in Ihr Postfach.</p>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
       <form class="d-flex flex-column gap-2" method="POST" action="/api/newsletter" id="newsletter-form">
        <input type="hidden" name="csrf_token" value="&lt;?php echo $csrfToken; ?&gt;"> <input type="email" class="form-control form-control-lg" name="email" placeholder="Ihre E-Mail-Adresse" required>
        <button type="submit" class="btn btn-warning btn-lg" id="newsletter-btn">Jetzt anmelden</button>
        <small class="text-light opacity-75"> Abmeldung jederzeit möglich. <a href="/privacy.php" class="text-white">Datenschutz</a> </small>
       </form>
      </div>
     </div>
    </div>
   </section>
   <!-- Contact CTA -->
   <section class="py-4 py-md-5" id="kontakt" data-aos="fade-up">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-10">
       <div class="card border-0 shadow-lg">
        <div class="card-body p-4 p-md-5">
         <div class="text-center mb-5">
          <div class="badge bg-warning text-dark mb-3">Kontakt</div>
          <h2 class="display-6 fw-bold mb-4">Planen Sie Ihr Abenteuer</h2>
          <p class="fs-5 text-muted">Kontaktieren Sie uns für eine persönliche Beratung und maßgeschneiderte Tourenplanung.</p>
         </div>
         <div class="row g-4">
          <div class="col-md-6">
           <form method="POST" action="/api/contact" id="contact-form" novalidate>
            <input type="hidden" name="csrf_token" value="&lt;?php echo $csrfToken; ?&gt;"> <input type="hidden" name="form_type" value="contact">
            <div class="mb-3">
             <label for="name" class="form-label">Name *</label> <input type="text" class="form-control" id="name" name="name" required placeholder="Ihr vollständiger Name">
             <div class="invalid-feedback">Bitte geben Sie Ihren Namen ein.</div>
            </div>
            <div class="mb-3">
             <label for="email" class="form-label">E-Mail *</label> <input type="email" class="form-control" id="email" name="email" required placeholder="info@domain.com">
             <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
            </div>
            <div class="mb-3">
             <label for="phone" class="form-label">Telefon</label> <input type="tel" class="form-control" id="phone" name="phone" placeholder="+49 89 12345678">
            </div>
            <div class="mb-3">
             <label for="subject" class="form-label">Betreff *</label> <select class="form-select" id="subject" name="subject" required> <option value="">Bitte wählen...</option> <option value="Tour-Anfrage">Tour-Anfrage</option> <option value="Beratung">Persönliche Beratung</option> <option value="Gruppen-Buchung">Gruppen-Buchung</option> <option value="Sonstiges">Sonstiges</option> </select>
             <div class="invalid-feedback">Bitte wählen Sie einen Betreff.</div>
            </div>
            <div class="mb-4">
             <label for="message" class="form-label">Nachricht *</label> <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Erzählen Sie uns von Ihren Wünschen..."></textarea>
             <div class="invalid-feedback">Bitte geben Sie eine Nachricht ein.</div>
            </div>
            <div class="mb-4">
             <div class="form-check">
              <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required> <label class="form-check-label" for="privacy"> Ich stimme der <a href="/privacy.php" target="_blank">Datenschutzerklärung</a> zu * </label>
              <div class="invalid-feedback">Bitte stimmen Sie der Datenschutzerklärung zu.</div>
             </div>
            </div>
            <!-- Honeypot -->
            <div class="d-none">
             <label for="website">Website</label> <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-warning btn-lg w-100" id="contact-submit">Nachricht senden</button>
            <div id="contact-message" class="mt-3" style="display: none;"></div>
           </form>
          </div>
          <div class="col-md-6">
           <div class="h-100 d-flex flex-column justify-content-center">
            <div class="mb-4">
             <h3 class="h5 fw-bold mb-3">📍 Unser Büro</h3>
             <address class="mb-0"><!--?php echo htmlspecialchars(BUSINESS_ADDRESS); ?--></address>
            </div>
            <div class="mb-4">
             <h3 class="h5 fw-bold mb-3">📞 Telefon</h3>
             <p class="mb-0"><a href="tel:&lt;?php echo BUSINESS_PHONE; ?&gt;" class="text-decoration-none"> <!--?php echo BUSINESS_PHONE; ?--> </a></p>
            </div>
            <div class="mb-4">
             <h3 class="h5 fw-bold mb-3">📧 E-Mail</h3>
             <p class="mb-0"><a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-decoration-none"> <!--?php echo SUPPORT_EMAIL; ?--> </a></p>
            </div>
            <div class="mb-4">
             <h3 class="h5 fw-bold mb-3">🕐 Öffnungszeiten</h3>
             <p class="mb-1">Mo-Fr: 9:00 - 18:00 Uhr</p>
             <p class="mb-1">Sa: 10:00 - 16:00 Uhr</p>
             <p class="mb-0">So: Geschlossen</p>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <!-- Back to Top Button -->
  <button type="button" class="btn btn-warning position-fixed bottom-0 end-0 m-4 rounded-circle p-3" id="back-to-top" style="display: none; z-index: 1050; width: 60px; height: 60px;" aria-label="Nach oben scrollen" title="Nach oben">↑</button>
  <!-- Bootstrap JS -->
  <!-- AOS Animation -->
  <!-- Custom Scripts -->
  <script>
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            once: false,
            duration: 600,
            easing: 'ease-out',
            offset: 120,
            mirror: false
        });
    }
    
    // Respect reduced motion preference
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        if (typeof AOS !== 'undefined') {
            AOS.init({disable: true});
        }
    }
    
    // Global CSRF Token
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    </script>
  <footer class="d-flex align-items-center">
   <strong class="me-2"><!--?php echo htmlspecialchars($testimonial['name']); ?--></strong> <small class="text-muted">aus <!--?php echo htmlspecialchars($testimonial['location']); ?--></small>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>