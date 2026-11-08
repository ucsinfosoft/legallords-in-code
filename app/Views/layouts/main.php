<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title & SEO Meta -->
    <title><?= esc($title ?? 'LegalLords LLP') ?></title>
    <meta name="description" content="<?= esc($meta_description ?? 'LegalLords LLP – Advocates and Legal Consultants, Delhi. Law at Work.') ?>">
    <link rel="canonical" href="<?= current_url() ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('uploads/' . get_setting('img_favicon', 'favicon.png')) ?>">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    
    <!-- Google Font for the handwritten tagline -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <!-- FontAwesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Schema Markup for Local Law Firm -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LegalService",
      "name": "LegalLords LLP",
      "url": "https://www.legallords.in",
      "email": "mail@legallords.in",
      "telephone": "+91-11-35978199",
      "slogan": "Law at Work",
      "founder": {
        "@type": "Person",
        "name": "Mujeeb Ur Rehman",
        "jobTitle": "Lead Counsel"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "B-71, Lane No. 7, Shaheen Bagh",
        "addressLocality": "New Delhi",
        "addressRegion": "Delhi",
        "postalCode": "110025",
        "addressCountry": "IN"
      }
    }
    </script>
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Header & Navigation -->
    <header class="site-header">
        <div class="container header-inner">
            <!-- Logo & Tagline -->
            <a href="<?= base_url() ?>" class="logo-wrap">
            <img src="<?= base_url('uploads/' . get_setting('img_logo', 'logo.png')) ?>" alt="LegalLords LLP Logo" class="site-logo">
            <span class="logo-tagline"><?= get_setting('site_tagline', 'law at work') ?></span>
            </a>
            
            <!-- Navigation Menu -->
            <nav aria-label="Primary">
                <ul class="nav-list">
                    <li><a href="<?= base_url('about') ?>">About</a></li>
                    <li><a href="<?= base_url('practice-areas') ?>">Practice Areas</a></li>
                    <li><a href="<?= base_url('lead-counsel') ?>">Lead Counsel</a></li>
                    <li><a href="<?= base_url('notable-matters') ?>">Notable Matters</a></li>
                    <li><a href="<?= base_url('careers') ?>">Careers</a></li>
                    <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main id="main-content">
        <?= $content ?>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <strong>LegalLords LLP</strong><br>
                B-71, Lane No. 7, Shaheen Bagh<br>
                Delhi-110025, India
            </div>
<div>
    <strong>Mobile:</strong> <a href="https://wa.me/<?= str_replace(' ', '', get_setting('mobile')) ?>" target="_blank"><?= get_setting('mobile') ?></a><br>
    <strong>Phone:</strong> <a href="tel:<?= str_replace(' ', '', get_setting('phone')) ?>"><?= get_setting('phone') ?></a><br>
    <strong>Email:</strong> <a href="mailto:<?= get_setting('email') ?>"><?= get_setting('email') ?></a>
</div>
            <div>
                <a href="<?= base_url('disclaimer') ?>">Disclaimer</a> ·
                <a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a> ·
                <a href="<?= base_url('terms-of-use') ?>">Terms of Use</a>
            </div>
        </div>
        <div class="container footer-note">
            <p>© <?= date('Y') ?> LegalLords LLP. All rights reserved.</p>
            <p class="disclaimer-short">Contacting the firm does not create an advocate-client relationship. Information on this website is for general awareness only.</p>
        </div>
    </footer>

    <!-- Floating Elements -->
    <a href="https://wa.me/918826257565" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">WhatsApp</a>
    <a href="#top" class="back-to-top" aria-label="Back to top">↑</a>
</body>
</html>