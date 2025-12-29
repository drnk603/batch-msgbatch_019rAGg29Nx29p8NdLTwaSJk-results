<!--?php/** * Datenschutzerklärung (Privacy Policy) * German Tourism Website Privacy Policy Page */require_once 'config/config.php';require_once 'includes/security.php';require_once 'includes/functions.php';// Brand constants$brand_name = 'AlpenTour';$primary_domain = 'alpentour.de';$support_email = 'info@' . $primary_domain;$address = 'Bergstraße 45, 80331 München, Deutschland';$phone = '+49 89 123 456 789';$seoTags = [    'title' =-->
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
  'Datenschutzerklärung | ' . $brand_name, 'description' =&gt; 'Informationen zum Datenschutz und zur Verarbeitung personenbezogener Daten bei ' . $brand_name . '. Ihre Privatsphäre ist uns wichtig.', 'keywords' =&gt; 'datenschutz, privatsphäre, datenverarbeitung, gdpr, cookies', 'og_title' =&gt; 'Datenschutzerklärung | ' . $brand_name, 'og_description' =&gt; 'Erfahren Sie mehr über unsere Datenschutzrichtlinien und wie wir Ihre persönlichen Daten schützen.', 'og_image' =&gt; 'https://' . $primary_domain . '/assets/images/privacy-og.jpg', 'og_url' =&gt; 'https://' . $primary_domain . '/privacy.php',];include 'includes/header.php';?&gt;
  <div class="container" py-4 py-md-5\_>
   <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="/">Startseite</a></li>
     <li class="breadcrumb-item" active\_ aria-current="page">Datenschutzerklärung</li>
    </ol>
   </nav>
   <article class="privacy-page">
    <header class="page-header" bg-dark text-white p-4 rounded-3 mb-5\_ style="scroll-margin-top:" var(--nav-h)\_>
     <div class="row" align-items-center\_>
      <div class="col-md-8">
       <h1 class="display-5" fw-bold mb-3\_>Datenschutzerklärung</h1>
       <p class="lead" mb-0\_>Ihre Privatsphäre und der Schutz Ihrer Daten sind uns wichtig</p>
      </div>
      <div class="col-md-4" text-md-end\_>
       <div class="d-inline-flex" align-items-center gap-2 bg-white bg-opacity-20 rounded-pill px-3 py-2\_>
        <svg width="24" height="24" viewBox="0" 0 24 24\_ fill="none">
         <path d="M12" 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21 11V5L12 1Z\_ stroke="currentColor" stroke-width="2" fill="none/">
          <path d="M9" 12L11 14L15 10\_ stroke="currentColor" stroke-width="2" fill="none/"> </path>
         </path>
        </svg>
        <span>DSGVO-Konform</span>
       </div>
      </div>
     </div>
    </header>
    <div class="row">
     <div class="col-lg-8">
      <div class="privacy-content">
       <!-- Last Updated -->
       <div class="alert" alert-info d-flex align-items-center mb-4\_>
        <svg class="me-2" width="20" height="20" viewBox="0" 0 24 24\_ fill="none">
         <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none/">
          <path d="M12" 6V12L16 14\_ stroke="currentColor" stroke-width="2" fill="none/"> </path>
         </circle>
        </svg>
        <div>
         <strong>Letztes Update:</strong> <!--?php echo date('d.m.Y'); ?-->
        </div>
       </div>
       <!-- Introduction -->
       <section class="mb-5" id="introduction">
        <p class="lead">Wir freuen uns sehr über Ihr Interesse an unserem Unternehmen. Datenschutz hat einen besonders hohen Stellenwert für die Geschäftsleitung von <!--?php echo sanitizeOutput($brand_name); ?-->. Eine Nutzung der Internetseiten von <!--?php echo sanitizeOutput($brand_name); ?--> ist grundsätzlich ohne jede Angabe personenbezogener Daten möglich.</p>
        <p>Diese Datenschutzerklärung klärt Sie über die Art, den Umfang und Zweck der Verarbeitung von personenbezogenen Daten (nachfolgend kurz „Daten") im Rahmen der Erbringung unserer Leistungen sowie innerhalb unseres Onlineangebotes und der mit ihm verbundenen Webseiten auf.</p>
       </section>
       <!-- Data Controller -->
       <section class="mb-5" id="data-controller">
        <h2 class="h3" text-primary mb-3\_>1. Verantwortlicher</h2>
        <div class="card" bg-light\_>
         <div class="card-body">
          <h4><!--?php echo sanitizeOutput($brand_name); ?--></h4>
          <address class="mb-0"><!--?php echo nl2br(sanitizeOutput($address)); ?-->
           <br>
           <strong>Telefon:</strong> <a href="tel:&lt;?php" echo str_replace(_ _, $phone); ?>\"&gt;<!--?php echo sanitizeOutput($phone); ?--></a>
           <br>
           <strong>E-Mail:</strong> <a href="mailto:&lt;?php" echo sanitizeoutput($support_email); ?>\"&gt;<!--?php echo sanitizeOutput($support_email); ?--></a></address>
         </div>
        </div>
       </section>
       <!-- Data Collection -->
       <section class="mb-5" id="data-collection">
        <h2 class="h3" text-primary mb-3\_>2. Erhebung und Verarbeitung personenbezogener Daten</h2>
        <h4 class="h5" mt-4 mb-2\_>Automatisch erhobene Daten</h4>
        <p>Bei jedem Aufruf unserer Webseite werden automatisch folgende Daten erfasst:</p>
        <ul>
         <li>IP-Adresse des zugreifenden Rechners</li>
         <li>Datum und Uhrzeit des Zugriffs</li>
         <li>Adresse der aufgerufenen Internetseite</li>
         <li>Adresse der zuvor besuchten Internetseite</li>
         <li>Name und Version Ihres Browsers</li>
         <li>Betriebssystem Ihres Rechners</li>
        </ul>
        <h4 class="h5" mt-4 mb-2\_>Kontaktaufnahme</h4>
        <p>Bei einer Kontaktaufnahme mit uns (zum Beispiel per Kontaktformular oder E-Mail) werden die Angaben der anfragenden Person verarbeitet, soweit dies zur Bearbeitung der Anfrage und für den Fall von Anschlussfragen erforderlich ist.</p>
        <h4 class="h5" mt-4 mb-2\_>Buchungen und Anfragen</h4>
        <p>Für die Bearbeitung Ihrer Buchungsanfragen und Reisebuchungen erheben wir:</p>
        <ul>
         <li>Vor- und Nachname</li>
         <li>Anschrift</li>
         <li>E-Mail-Adresse</li>
         <li>Telefonnummer</li>
         <li>Reisedaten und -präferenzen</li>
         <li>Zahlungsinformationen (soweit erforderlich)</li>
        </ul>
       </section>
       <!-- Legal Basis -->
       <section class="mb-5" id="legal-basis">
        <h2 class="h3" text-primary mb-3\_>3. Rechtsgrundlage der Verarbeitung</h2>
        <p>Die Verarbeitung personenbezogener Daten erfolgt auf Grundlage der folgenden Rechtsgrundlagen:</p>
        <div class="row">
         <div class="col-md-6" mb-3\_>
          <div class="card" h-100\_>
           <div class="card-body">
            <h5 class="card-title" text-success\_>Art. 6 Abs. 1 lit. a DSGVO</h5>
            <p class="card-text">Einwilligung der betroffenen Person</p>
           </div>
          </div>
         </div>
         <div class="col-md-6" mb-3\_>
          <div class="card" h-100\_>
           <div class="card-body">
            <h5 class="card-title" text-success\_>Art. 6 Abs. 1 lit. b DSGVO</h5>
            <p class="card-text">Vertragserfüllung oder vorvertragliche Maßnahmen</p>
           </div>
          </div>
         </div>
         <div class="col-md-6" mb-3\_>
          <div class="card" h-100\_>
           <div class="card-body">
            <h5 class="card-title" text-success\_>Art. 6 Abs. 1 lit. f DSGVO</h5>
            <p class="card-text">Berechtigte Interessen</p>
           </div>
          </div>
         </div>
         <div class="col-md-6" mb-3\_>
          <div class="card" h-100\_>
           <div class="card-body">
            <h5 class="card-title" text-success\_>Art. 6 Abs. 1 lit. c DSGVO</h5>
            <p class="card-text">Rechtliche Verpflichtung</p>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- Cookies -->
       <section class="mb-5" id="cookies">
        <h2 class="h3" text-primary mb-3\_>4. Cookies und Tracking-Technologien</h2>
        <p>Unsere Webseite verwendet Cookies. Dabei handelt es sich um kleine Dateien, die Ihr Browser automatisch erstellt und die auf Ihrem Endgerät (Laptop, Tablet, Smartphone o.ä.) gespeichert werden.</p>
        <div class="accordion" id="cookieAccordion">
         <div class="accordion-item">
          <h3 class="accordion-header" id="cookieHeading1">
           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cookieCollapse1">Notwendige Cookies</button>
          </h3>
          <div id="cookieCollapse1" class="accordion-collapse" collapse show\_ data-bs-parent="#cookieAccordion">
           <div class="accordion-body">
            <p>Diese Cookies sind für die Grundfunktionen der Website erforderlich und können nicht deaktiviert werden:</p>
            <ul>
             <li>Session-Cookies für die Navigation</li>
             <li>CSRF-Token für Formularsicherheit</li>
             <li>Cookie-Einstellungen</li>
            </ul>
           </div>
          </div>
         </div>
         <div class="accordion-item">
          <h3 class="accordion-header" id="cookieHeading2">
           <button class="accordion-button" collapsed\_ type="button" data-bs-toggle="collapse" data-bs-target="#cookieCollapse2">Funktionale Cookies</button>
          </h3>
          <div id="cookieCollapse2" class="accordion-collapse" collapse\_ data-bs-parent="#cookieAccordion">
           <div class="accordion-body">
            <p>Diese Cookies ermöglichen erweiterte Funktionen und Personalisierung:</p>
            <ul>
             <li>Spracheinstellungen</li>
             <li>Benutzereinstellungen</li>
             <li>Formulardaten-Zwischenspeicherung</li>
            </ul>
           </div>
          </div>
         </div>
         <div class="accordion-item">
          <h3 class="accordion-header" id="cookieHeading3">
           <button class="accordion-button" collapsed\_ type="button" data-bs-toggle="collapse" data-bs-target="#cookieCollapse3">Analyse-Cookies</button>
          </h3>
          <div id="cookieCollapse3" class="accordion-collapse" collapse\_ data-bs-parent="#cookieAccordion">
           <div class="accordion-body">
            <p>Diese Cookies helfen uns, die Website zu verbessern:</p>
            <ul>
             <li>Besucherzahlen und -verhalten</li>
             <li>Beliebteste Seiten</li>
             <li>Verweildauer und Absprungraten</li>
            </ul>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- Third Party Disclosures -->
       <section class="mb-5" id="third-party">
        <h2 class="h3" text-primary mb-3\_>5. Weitergabe an Dritte</h2>
        <div class="alert" alert-warning\_>
         <h5 class="alert-heading">Wichtiger Hinweis</h5>
         <p class="mb-0">Eine Übermittlung Ihrer persönlichen Daten an Dritte zu anderen als den im Folgenden aufgeführten Zwecken findet nicht statt.</p>
        </div>
        <h4 class="h5" mt-4 mb-2\_>Dienstleister</h4>
        <p>Wir geben Ihre Daten an Dritte nur weiter, soweit dies im Rahmen der Vertragsabwicklung notwendig ist:</p>
        <ul>
         <li>Hotels und Unterkünfte für Ihre Buchungen</li>
         <li>Transportdienstleister (Fluggesellschaften, Bahnunternehmen)</li>
         <li>Versicherungsunternehmen (auf Ihren Wunsch)</li>
         <li>IT-Dienstleister (Hosting, E-Mail-Versand)</li>
         <li>Zahlungsdienstleister für die Abwicklung von Zahlungen</li>
        </ul>
        <h4 class="h5" mt-4 mb-2\_>Rechtliche Verpflichtungen</h4>
        <p>Darüber hinaus geben wir personenbezogene Daten nur weiter, wenn:</p>
        <ul>
         <li>Sie ausdrücklich eingewilligt haben</li>
         <li>dies zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen erforderlich ist</li>
         <li>eine gesetzliche Verpflichtung zur Weitergabe besteht</li>
        </ul>
       </section>
       <!-- Data Retention -->
       <section class="mb-5" id="data-retention">
        <h2 class="h3" text-primary mb-3\_>6. Speicherdauer</h2>
        <p>Wir speichern personenbezogene Daten nur so lange, wie es für den jeweiligen Zweck erforderlich ist:</p>
        <div class="table-responsive">
         <table class="table" table-striped\_>
          <thead>
           <tr>
            <th>Datentyp</th>
            <th>Speicherdauer</th>
            <th>Rechtsgrundlage</th>
           </tr>
          </thead>
          <tbody>
           <tr>
            <td>Kontaktanfragen</td>
            <td>2 Jahre nach letztem Kontakt</td>
            <td>Berechtigte Interessen</td>
           </tr>
           <tr>
            <td>Buchungsdaten</td>
            <td>10 Jahre nach Reiseende</td>
            <td>Handelsrechtliche Aufbewahrungspflicht</td>
           </tr>
           <tr>
            <td>Server-Logfiles</td>
            <td>7 Tage</td>
            <td>Berechtigte Interessen</td>
           </tr>
           <tr>
            <td>Newsletter-Anmeldung</td>
            <td>Bis zur Abmeldung</td>
            <td>Einwilligung</td>
           </tr>
          </tbody>
         </table>
        </div>
       </section>
       <!-- Your Rights -->
       <section class="mb-5" id="your-rights">
        <h2 class="h3" text-primary mb-3\_>7. Ihre Rechte</h2>
        <p>Sie haben gegenüber uns folgende Rechte hinsichtlich der Sie betreffenden personenbezogenen Daten:</p>
        <div class="row">
         <div class="col-lg-6" mb-3\_>
          <div class="card" border-primary h-100\_>
           <div class="card-header" bg-primary text-white\_>
            <h5 class="mb-0">Auskunftsrecht</h5>
           </div>
           <div class="card-body">
            <p class="card-text">Sie können Auskunft über die von uns verarbeiteten personenbezogenen Daten verlangen.</p>
           </div>
          </div>
         </div>
         <div class="col-lg-6" mb-3\_>
          <div class="card" border-success h-100\_>
           <div class="card-header" bg-success text-white\_>
            <h5 class="mb-0">Berichtigungsrecht</h5>
           </div>
           <div class="card-body">
            <p class="card-text">Sie können die Berichtigung unrichtiger oder die Vervollständigung unvollständiger Daten verlangen.</p>
           </div>
          </div>
         </div>
         <div class="col-lg-6" mb-3\_>
          <div class="card" border-warning h-100\_>
           <div class="card-header" bg-warning text-white\_>
            <h5 class="mb-0">Löschungsrecht</h5>
           </div>
           <div class="card-body">
            <p class="card-text">Sie können die Löschung Ihrer personenbezogenen Daten verlangen, soweit dem keine gesetzlichen Aufbewahrungspflichten entgegenstehen.</p>
           </div>
          </div>
         </div>
         <div class="col-lg-6" mb-3\_>
          <div class="card" border-info h-100\_>
           <div class="card-header" bg-info text-white\_>
            <h5 class="mb-0">Einschränkung der Verarbeitung</h5>
           </div>
           <div class="card-body">
            <p class="card-text">Sie können die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten verlangen.</p>
           </div>
          </div>
         </div>
         <div class="col-lg-6" mb-3\_>
          <div class="card" border-secondary h-100\_>
           <div class="card-header" bg-secondary text-white\_>
            <h5 class="mb-0">Datenübertragbarkeit</h5>
           </div>
           <div class="card-body">
            <p class="card-text">Sie können verlangen, dass wir Ihnen Ihre Daten in einem strukturierten, maschinenlesbaren Format übermitteln.</p>
           </div>
          </div>
         </div>
         <div class="col-lg-6" mb-3\_>
          <div class="card" border-danger h-100\_>
           <div class="card-header" bg-danger text-white\_>
            <h5 class="mb-0">Widerspruchsrecht</h5>
           </div>
           <div class="card-body">
            <p class="card-text">Sie können der Verarbeitung Ihrer Daten aus berechtigtem Interesse widersprechen.</p>
           </div>
          </div>
         </div>
        </div>
       </section>
       <!-- Security Measures -->
       <section class="mb-5" id="security">
        <h2 class="h3" text-primary mb-3\_>8. Datensicherheit</h2>
        <p>Wir verwenden innerhalb des Website-Besuchs das verbreitete SSL-Verfahren (Secure Socket Layer) in Verbindung mit der jeweils höchsten Verschlüsselungsstufe, die von Ihrem Browser unterstützt wird.</p>
        <div class="row">
         <div class="col-md-4" mb-3\_>
          <div class="text-center">
           <div class="bg-success" text-white rounded-circle d-inline-flex align-items-center justify-content-center\_ style="width:" 60px; height: margin-bottom: 1rem;\_>
            <svg width="24" height="24" viewBox="0" 0 24 24\_ fill="currentColor">
             <path d="M18" 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6z\_ />
            </svg>
           </div>
           <h5>SSL-Verschlüsselung</h5>
           <p class="text-muted" small\_>Alle Datenübertragungen sind verschlüsselt</p>
          </div>
         </div>
         <div class="col-md-4" mb-3\_>
          <div class="text-center">
           <div class="bg-info" text-white rounded-circle d-inline-flex align-items-center justify-content-center\_ style="width:" 60px; height: margin-bottom: 1rem;\_>
            <svg width="24" height="24" viewBox="0" 0 24 24\_ fill="currentColor">
             <path d="M12" 2C6.48 2 6.48 12s4.48 10 10-4.48 10-10S17.52 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z\_ />
            </svg>
           </div>
           <h5>Sichere Server</h5>
           <p class="text-muted" small\_>Hosting in deutschen Rechenzentren</p>
          </div>
         </div>
         <div class="col-md-4" mb-3\_>
          <div class="text-center">
           <div class="bg-warning" text-white rounded-circle d-inline-flex align-items-center justify-content-center\_ style="width:" 60px; height: margin-bottom: 1rem;\_>
            <svg width="24" height="24" viewBox="0" 0 24 24\_ fill="currentColor">
             <path d="M12" 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21 11V5L12 1Z\_ />
            </svg>
           </div>
           <h5>Regelmäßige Updates</h5>
           <p class="text-muted" small\_>Kontinuierliche Sicherheitsverbesserungen</p>
          </div>
         </div>
        </div>
       </section>
      </div>
     </div>
     <!-- Sidebar -->
     <div class="col-lg-4">
      <aside class="privacy-sidebar">
       <!-- Quick Navigation -->
       <div class="card" mb-4\_>
        <div class="card-header">
         <h5 class="mb-0">Schnellnavigation</h5>
        </div>
        <div class="card-body">
         <nav class="nav" flex-column\_>
          <a class="nav-link" href="#introduction">Einführung</a> <a class="nav-link" href="#data-controller">Verantwortlicher</a> <a class="nav-link" href="#data-collection">Datenerhebung</a> <a class="nav-link" href="#legal-basis">Rechtsgrundlage</a> <a class="nav-link" href="#cookies">Cookies</a> <a class="nav-link" href="#third-party">Weitergabe an Dritte</a> <a class="nav-link" href="#data-retention">Speicherdauer</a> <a class="nav-link" href="#your-rights">Ihre Rechte</a> <a class="nav-link" href="#security">Datensicherheit</a>
         </nav>
        </div>
       </div>
       <!-- Contact Info -->
       <div class="card" mb-4\_>
        <div class="card-header" bg-primary text-white\_>
         <h5 class="mb-0">Datenschutz-Kontakt</h5>
        </div>
        <div class="card-body">
         <p class="card-text">Bei Fragen zum Datenschutz kontaktieren Sie uns:</p>
         <ul class="list-unstyled" mb-0\_>
          <li class="mb-2">
           <svg class="me-2" width="16" height="16" viewBox="0" 0 24 24\_ fill="currentColor">
            <path d="M20" 4H4C2.9 4 2.01 4.9 6L2 18C2 19.1 2.9 20 20H20C21.1 22 18V6C22 21.1 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z\_ />
           </svg>
           <a href="mailto:&lt;?php" echo sanitizeoutput($support_email); ?>\"&gt;<!--?php echo sanitizeOutput($support_email); ?--></a>
          </li>
          <li class="mb-2">
           <svg class="me-2" width="16" height="16" viewBox="0" 0 24 24\_ fill="currentColor">
            <path d="M6.62" 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.69 14.9 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.55 21 15.95 16.5V20C21 20.55 21C10.61 3 13.39 4C3 3.45 4 3H7.5C8.05 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z\_ />
           </svg>
           <a href="tel:&lt;?php" echo str_replace(_ _, $phone); ?>\"&gt;<!--?php echo sanitizeOutput($phone); ?--></a>
          </li>
         </ul>
        </div>
       </div>
       <!-- Related Links -->
       <div class="card" mb-4\_>
        <div class="card-header">
         <h5 class="mb-0">Weitere Informationen</h5>
        </div>
        <div class="card-body">
         <ul class="list-unstyled" mb-0\_>
          <li class="mb-2"><a href="/services.php" class="text-decoration-none"> 
            <svg class="me-2" width="16" height="16" viewBox="0" 0 24 24\_ fill="currentColor">
             <path d="M12" 2L13.09 8.26L22 9L13.09 9.74L12 16L10.91 9.74L2 9L10.91 8.26L12 2Z\_ />
            </svg> Unsere Services 
           </a></li>
          <li class="mb-2"><a href="/about.php" class="text-decoration-none"> 
            <svg class="me-2" width="16" height="16" viewBox="0" 0 24 24\_ fill="currentColor">
             <path d="M12" 2C6.48 2 6.48 12S6.48 22 12 17.52 2ZM13 17H11V15H13V17ZM13 13H11V7H13V13Z\_ />
            </svg> Über uns 
           </a></li>
          <li class="mb-2"><a href="/portfolio.php" class="text-decoration-none"> 
            <svg class="me-2" width="16" height="16" viewBox="0" 0 24 24\_ fill="currentColor">
             <path d="M9" 11H7V9H9V11ZM13 11H11V9H13V11ZM17 11H15V9H17V11ZM19 3H5C3.9 3 3.9 5V19C3 20.1 21 5 21H19C20.1 19V5C21 19 3ZM19 19H5V5H19V19Z\_ />
            </svg> Portfolio 
           </a></li>
         </ul>
        </div>
       </div>
       <!-- GDPR Badge -->
       <div class="card" border-success\_>
        <div class="card-body" text-center\_>
         <svg class="text-success" mb-2\_ width="48" height="48" viewBox="0" 0 24 24\_ fill="currentColor">
          <path d="M12" 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21 11V5L12 1Z\_ />
         </svg>
         <h6 class="text-success">DSGVO-Konform</h6>
         <p class="small" text-muted mb-0\_>Diese Website erfüllt alle Anforderungen der europäischen Datenschutz-Grundverordnung.</p>
        </div>
       </div>
      </aside>
     </div>
    </div>
    <!-- Final Contact Section -->
    <section class="bg-light" rounded-3 p-4 mt-5\_>
     <div class="row" align-items-center\_>
      <div class="col-md-8">
       <h3 class="h4" mb-2\_>Haben Sie Fragen zum Datenschutz?</h3>
       <p class="mb-md-0">Unser Team steht Ihnen gerne für alle datenschutzrelevanten Fragen zur Verfügung.</p>
      </div>
      <div class="col-md-4" text-md-end\_>
       <a href="mailto:&lt;?php" echo sanitizeoutput($support_email); ?>\" class=\"btn btn-primary\"&gt; 
        <svg class="me-2" width="16" height="16" viewBox="0" 0 24 24\_ fill="currentColor">
         <path d="M20" 4H4C2.9 4 2.01 4.9 6L2 18C2 19.1 2.9 20 20H20C21.1 22 18V6C22 21.1 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z\_ />
        </svg> Kontakt aufnehmen </a>
      </div>
     </div>
    </section>
   </article>
  </div>
  <!--?php include 'includes/footer.php'; ?-->
  "
  <footer class="d-flex align-items-center">
   <strong class="me-2"><!--?php echo htmlspecialchars($testimonial['name']); ?--></strong> <small class="text-muted">aus <!--?php echo htmlspecialchars($testimonial['location']); ?--></small>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>