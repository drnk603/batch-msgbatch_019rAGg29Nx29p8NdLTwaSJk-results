<!--?php
/**
 * Über uns Seite - Tourismus Website
 * Dynamische Seite mit Unternehmensinformationen
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

// Brand constants definieren
const BRAND_NAME = 'AlpenTour Deutschland';
const PRIMARY_DOMAIN = 'alpentour-deutschland.de';
const SUPPORT_EMAIL = 'info@domain.com';
const COMPANY_ADDRESS = 'Bergstraße 123, 82467 Garmisch-Partenkirchen, Deutschland';
const COMPANY_PHONE = '+49 8821 92345678';

// SEO Meta Daten
$pageTitle = 'Über uns - ' . BRAND_NAME;
$pageDescription = 'Entdecken Sie die Geschichte und das Team von ' . BRAND_NAME . '. Ihre Experten für unvergessliche Alpen- und Deutschlandreisen seit 1995.';
$currentPage = 'about';
?-->
<!doctype html>
<html lang="de">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>&lt;?php echo $pageTitle; ?&gt;</title>
  <meta name="description" content="&lt;?php echo $pageDescription; ?&gt;">
  <link rel="canonical" href="https://domain.com/about.php">
  <!-- Open Graph -->
  <meta property="og:title" content="&lt;?php echo $pageTitle; ?&gt;">
  <meta property="og:description" content="&lt;?php echo $pageDescription; ?&gt;">
  <meta property="og:image" content="https://domain.com/images/about-hero.jpg">
  <meta property="og:url" content="https://domain.com/about.php">
  <!-- Bootstrap CSS -->
  <!-- AOS Animation Library -->
  <!-- JSON-LD Schema -->
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
  <!-- Header Navigation -->
  <!-- Breadcrumb Navigation -->
  <div class="container py-3">
   <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
     <li class="breadcrumb-item"><a href="index.php">Startseite</a></li>
     <li class="breadcrumb-item active" aria-current="page">Über uns</li>
    </ol>
   </nav>
  </div>
  <main>
   <!-- Hero Section -->
   <section class="hero-section py-4 py-md-5" style="background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200&amp;h=600&amp;fit=crop') center/cover;">
    <div class="container py-5">
     <div class="row justify-content-center text-center text-white">
      <div class="col-lg-8" data-aos="fade-up">
       <h1 class="display-4 fw-bold mb-4">Über <!--?php echo BRAND_NAME; ?--></h1>
       <p class="lead mb-4">Seit 1995 verwirklichen wir Traumreisen durch die schönsten Regionen Deutschlands und der Alpen. Entdecken Sie unsere Leidenschaft für authentische Reiseerlebnisse.</p>
      </div>
     </div>
    </div>
   </section>
   <!-- Company Story Section -->
   <section class="py-4 py-md-5">
    <div class="container">
     <div class="row align-items-center mb-5">
      <div class="col-lg-6" data-aos="fade-right">
       <div class="ratio ratio-4x3 mb-4 mb-lg-0">
        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&amp;h=450&amp;fit=crop" alt="Unser Firmensitz in Garmisch-Partenkirchen" class="img-fluid rounded shadow" loading="lazy" style="object-fit: cover;">
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
       <h2 class="h3 mb-4 text-primary">Unsere Geschichte</h2>
       <p class="mb-3">Was 1995 als kleines Familienunternehmen in Garmisch-Partenkirchen begann, ist heute einer der führenden Reiseveranstalter für Alpen- und Deutschlandtourismus. Gegründet von Maria und Hans Müller, haben wir über 25 Jahre Erfahrung in der Gestaltung unvergesslicher Reiseerlebnisse.</p>
       <p class="mb-4">Unser Fokus liegt auf nachhaltigen, authentischen Reisen, die unseren Gästen die Schönheit und Kultur unserer Heimat näherbringen. Von malerischen Bergdörfern bis hin zu pulsierenden Städten – wir kennen die versteckten Juwelen Deutschlands.</p>
       <div class="d-flex flex-wrap gap-4">
        <div class="text-center">
         <div class="h4 text-primary mb-1">25+</div>
         <small class="text-muted">Jahre Erfahrung</small>
        </div>
        <div class="text-center">
         <div class="h4 text-primary mb-1">50,000+</div>
         <small class="text-muted">Zufriedene Kunden</small>
        </div>
        <div class="text-center">
         <div class="h4 text-primary mb-1">200+</div>
         <small class="text-muted">Reiseziele</small>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Team Section -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="h3 mb-3 text-primary">Unser Expertenteam</h2>
      <p class="lead text-muted">Leidenschaftliche Reiseexperten, die Ihnen unvergessliche Erlebnisse schaffen</p>
     </div>
     <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 120px; margin: 0 auto;">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&amp;h=300&amp;fit=crop&amp;crop=face" alt="Maria Müller" class="rounded-circle" loading="lazy" style="object-fit: cover;">
         </div>
         <h3 class="h5 mb-2">Maria Müller</h3>
         <p class="text-primary mb-3">Geschäftsführerin &amp; Gründerin</p>
         <p class="text-muted small mb-3">Mit über 25 Jahren Erfahrung ist Maria die Seele unseres Unternehmens. Ihre Leidenschaft für die bayerischen Alpen und persönliche Betreuung macht jeden Aufenthalt besonders.</p>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 120px; margin: 0 auto;">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&amp;h=300&amp;fit=crop&amp;crop=face" alt="Hans Müller" class="rounded-circle" loading="lazy" style="object-fit: cover;">
         </div>
         <h3 class="h5 mb-2">Hans Müller</h3>
         <p class="text-primary mb-3">Geschäftsführer &amp; Gründer</p>
         <p class="text-muted small mb-3">Hans ist unser Experte für Bergtourismus und Outdoor-Aktivitäten. Er kennt jeden Wanderweg und jeden geheimen Aussichtspunkt in den deutschen Alpen.</p>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
         <div class="ratio ratio-1x1 mb-4" style="width: 120px; margin: 0 auto;">
          <img src="https://images.unsplash.com/photo-1494790108755-2616c4a5b1e1?w=300&amp;h=300&amp;fit=crop&amp;crop=face" alt="Lisa Schmidt" class="rounded-circle" loading="lazy" style="object-fit: cover;">
         </div>
         <h3 class="h5 mb-2">Lisa Schmidt</h3>
         <p class="text-primary mb-3">Reiseberaterin &amp; Kulturexpertin</p>
         <p class="text-muted small mb-3">Lisa ist spezialisiert auf Kulturreisen und historische Städtetouren. Mit ihrem Studium in Kunstgeschichte bringt sie Deutschlands Kulturschätze zum Leben.</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Global Presence Section -->
   <section class="py-4 py-md-5">
    <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
       <h2 class="h3 mb-4 text-primary">Unsere Präsenz in Deutschland</h2>
       <p class="mb-4">Von unserem Hauptsitz in Garmisch-Partenkirchen aus betreuen wir Kunden in ganz Deutschland und darüber hinaus. Unsere lokalen Partner ermöglichen es uns, authentische Erlebnisse in jeder Region zu bieten.</p>
       <div class="row g-3">
        <div class="col-sm-6">
         <div class="d-flex align-items-center mb-3">
          <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
           <svg width="24" height="24" fill="currentColor" class="text-primary">
            <path d="M12 2L13.09 6.26L18 7L13.09 7.74L12 12L10.91 7.74L6 7L10.91 6.26L12 2Z" />
           </svg>
          </div>
          <div>
           <h4 class="h6 mb-1">Bayern</h4>
           <small class="text-muted">Hauptsitz Garmisch-Partenkirchen</small>
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="d-flex align-items-center mb-3">
          <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
           <svg width="24" height="24" fill="currentColor" class="text-primary">
            <path d="M12 2L13.09 6.26L18 7L13.09 7.74L12 12L10.91 7.74L6 7L10.91 6.26L12 2Z" />
           </svg>
          </div>
          <div>
           <h4 class="h6 mb-1">Baden-Württemberg</h4>
           <small class="text-muted">Schwarzwald Region</small>
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="d-flex align-items-center mb-3">
          <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
           <svg width="24" height="24" fill="currentColor" class="text-primary">
            <path d="M12 2L13.09 6.26L18 7L13.09 7.74L12 12L10.91 7.74L6 7L10.91 6.26L12 2Z" />
           </svg>
          </div>
          <div>
           <h4 class="h6 mb-1">Nordrhein-Westfalen</h4>
           <small class="text-muted">Rheintal &amp; Städte</small>
          </div>
         </div>
        </div>
        <div class="col-sm-6">
         <div class="d-flex align-items-center mb-3">
          <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
           <svg width="24" height="24" fill="currentColor" class="text-primary">
            <path d="M12 2L13.09 6.26L18 7L13.09 7.74L12 12L10.91 7.74L6 7L10.91 6.26L12 2Z" />
           </svg>
          </div>
          <div>
           <h4 class="h6 mb-1">Mecklenburg-Vorpommern</h4>
           <small class="text-muted">Ostseeküste</small>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
       <div class="ratio ratio-4x3">
        <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?w=600&amp;h=450&amp;fit=crop" alt="Deutschland Karte mit Reisezielen" class="img-fluid rounded shadow" loading="lazy" style="object-fit: cover;">
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Career Benefits Section -->
   <section class="py-4 py-md-5 bg-light">
    <div class="container">
     <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="h3 mb-3 text-primary">Warum bei uns arbeiten?</h2>
      <p class="lead text-muted">Werden Sie Teil unseres Teams und gestalten Sie unvergessliche Reiseerlebnisse</p>
     </div>
     <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
       <div class="text-center">
        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
         <svg width="36" height="36" fill="currentColor" class="text-primary">
          <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" />
         </svg>
        </div>
        <h3 class="h5 mb-3">Flexible Arbeitszeiten</h3>
        <p class="text-muted">Work-Life-Balance ist uns wichtig. Flexible Arbeitszeiten und Homeoffice-Optionen unterstützen Sie dabei.</p>
       </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
       <div class="text-center">
        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
         <svg width="36" height="36" fill="currentColor" class="text-primary">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM13 17h-2v-6h2v6zm0-8h-2V7h2v2z" />
         </svg>
        </div>
        <h3 class="h5 mb-3">Weiterbildung</h3>
        <p class="text-muted">Regelmäßige Fortbildungen, Sprach- und Fachkurse helfen Ihnen bei der persönlichen Entwicklung.</p>
       </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
       <div class="text-center">
        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
         <svg width="36" height="36" fill="currentColor" class="text-primary">
          <path d="M12 2l3.09 6.26L22 9l-5 4.87 1.18 6.88L12 17.27l-6.18 3.25L7 13.87 2 9l6.91-0.74L12 2z" />
         </svg>
        </div>
        <h3 class="h5 mb-3">Mitarbeiterreisen</h3>
        <p class="text-muted">Lernen Sie unsere Reiseziele persönlich kennen - mit vergünstigten Mitarbeiterreisen und Familienrabatten.</p>
       </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
       <div class="text-center">
        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
         <svg width="36" height="36" fill="currentColor" class="text-primary">
          <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z" />
         </svg>
        </div>
        <h3 class="h5 mb-3">Karrierechancen</h3>
        <p class="text-muted">Flache Hierarchien und individuelle Entwicklungspläne bieten beste Aufstiegschancen in unserem Team.</p>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Employee Testimonials -->
   <section class="py-4 py-md-5">
    <div class="container">
     <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="h3 mb-3 text-primary">Was unsere Mitarbeiter sagen</h2>
      <p class="lead text-muted">Authentische Stimmen aus unserem Team</p>
     </div>
     <div class="row g-4">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body p-4">
         <div class="mb-3">
          <svg width="40" height="32" fill="currentColor" class="text-primary opacity-25">
           <path d="M9.5 16.5c0 2.8-2.2 5-5 5s-5-2.2-5-5 2.2-5 5-5 5 2.2 5 5zm15 0c0 2.8-2.2 5-5 5s-5-2.2-5-5 2.2-5 5-5 5 2.2 5 5z" />
          </svg>
         </div>
         <p class="mb-4 text-muted">"Bei AlpenTour habe ich nicht nur einen Job gefunden, sondern meine Berufung. Die familiäre Atmosphäre und die Möglichkeit, Menschen bei der Erfüllung ihrer Reiseträume zu helfen, macht jeden Tag besonders."</p>
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 50px; height: 50px;">
           <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&amp;h=100&amp;fit=crop&amp;crop=face" alt="Sophie Weber" class="rounded-circle" loading="lazy" style="object-fit: cover;">
          </div>
          <div>
           <h4 class="h6 mb-1">Sophie Weber</h4>
           <small class="text-muted">Reiseberaterin seit 3 Jahren</small>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body p-4">
         <div class="mb-3">
          <svg width="40" height="32" fill="currentColor" class="text-primary opacity-25">
           <path d="M9.5 16.5c0 2.8-2.2 5-5 5s-5-2.2-5-5 2.2-5 5-5 5 2.2 5 5zm15 0c0 2.8-2.2 5-5 5s-5-2.2-5-5 2.2-5 5-5 5 2.2 5 5z" />
          </svg>
         </div>
         <p class="mb-4 text-muted">"Die Weiterbildungsmöglichkeiten sind fantastisch. Ich konnte an mehreren Fachseminaren teilnehmen und sogar eine Zusatzausbildung zum Wanderführer machen. Das Unternehmen investiert wirklich in seine Mitarbeiter."</p>
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 50px; height: 50px;">
           <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&amp;h=100&amp;fit=crop&amp;crop=face" alt="Thomas Klein" class="rounded-circle" loading="lazy" style="object-fit: cover;">
          </div>
          <div>
           <h4 class="h6 mb-1">Thomas Klein</h4>
           <small class="text-muted">Tourguide seit 5 Jahren</small>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
       <div class="card h-100 border-0 shadow-sm">
        <div class="card-body p-4">
         <div class="mb-3">
          <svg width="40" height="32" fill="currentColor" class="text-primary opacity-25">
           <path d="M9.5 16.5c0 2.8-2.2 5-5 5s-5-2.2-5-5 2.2-5 5-5 5 2.2 5 5zm15 0c0 2.8-2.2 5-5 5s-5-2.2-5-5 2.2-5 5-5 5 2.2 5 5z" />
          </svg>
         </div>
         <p class="mb-4 text-muted">"Die Work-Life-Balance ist hier wirklich gelebt. Flexible Arbeitszeiten und die Möglichkeit im Homeoffice zu arbeiten haben mein Familienleben deutlich verbessert. Außerdem sind die Kollegen einfach klasse!"</p>
         <div class="d-flex align-items-center">
          <div class="ratio ratio-1x1 me-3" style="width: 50px; height: 50px;">
           <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&amp;h=100&amp;fit=crop&amp;crop=face" alt="Anna Hoffmann" class="rounded-circle" loading="lazy" style="object-fit: cover;">
          </div>
          <div>
           <h4 class="h6 mb-1">Anna Hoffmann</h4>
           <small class="text-muted">Marketing seit 2 Jahren</small>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- Contact Section -->
   <section id="contact" class="py-4 py-md-5 bg-primary text-white">
    <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-8" data-aos="fade-right">
       <h2 class="h3 mb-3">Bereit für Ihr nächstes Abenteuer?</h2>
       <p class="lead mb-0">Kontaktieren Sie uns und lassen Sie sich von unseren Reiseexperten beraten. Wir freuen uns darauf, Ihre Traumreise zu planen!</p>
      </div>
      <div class="col-lg-4 text-lg-end" data-aos="fade-left">
       <div class="d-grid d-sm-flex gap-3 justify-content-lg-end">
        <a href="tel:&lt;?php echo COMPANY_PHONE; ?&gt;" class="btn btn-light btn-lg">Jetzt anrufen</a> <a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="btn btn-outline-light btn-lg">E-Mail senden</a>
       </div>
      </div>
     </div>
     <!-- Contact Info -->
     <hr class="my-5 opacity-25">
     <div class="row g-4 text-center text-md-start">
      <div class="col-md-4">
       <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
        <svg width="24" height="24" fill="currentColor" class="me-2">
         <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
        </svg>
        <h3 class="h6 mb-0">Adresse</h3>
       </div>
       <p class="mb-0"><!--?php echo COMPANY_ADDRESS; ?--></p>
      </div>
      <div class="col-md-4">
       <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
        <svg width="24" height="24" fill="currentColor" class="me-2">
         <path d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
        </svg>
        <h3 class="h6 mb-0">Telefon</h3>
       </div>
       <p class="mb-0"><a href="tel:&lt;?php echo COMPANY_PHONE; ?&gt;" class="text-white text-decoration-none"><!--?php echo COMPANY_PHONE; ?--></a></p>
      </div>
      <div class="col-md-4">
       <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
        <svg width="24" height="24" fill="currentColor" class="me-2">
         <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
        </svg>
        <h3 class="h6 mb-0">E-Mail</h3>
       </div>
       <p class="mb-0"><a href="mailto:&lt;?php echo SUPPORT_EMAIL; ?&gt;" class="text-white text-decoration-none"><!--?php echo SUPPORT_EMAIL; ?--></a></p>
      </div>
     </div>
    </div>
   </section>
  </main>
  <!-- Footer -->
  <!-- Bootstrap JS -->
  <!-- AOS Animation -->
  <!-- Custom JS -->
  <footer class="d-flex align-items-center">
   <strong class="me-2"><!--?php echo htmlspecialchars($testimonial['name']); ?--></strong> <small class="text-muted">aus <!--?php echo htmlspecialchars($testimonial['location']); ?--></small>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>