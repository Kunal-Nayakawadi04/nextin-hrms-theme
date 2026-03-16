<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NextIn HRMS – World's Simplest HR Software. Automate attendance, payroll, leave, recruitment and more with NextIn HRMS.">
    <meta property="og:title" content="NextIn HRMS – World's Simplest HR Software">
    <meta property="og:description" content="Automate, Streamline, and Scale with Confidence using NextIn HRMS.">
    <meta property="og:type" content="website">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" role="banner">
    <nav class="nav-inner" aria-label="Primary Navigation">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="NextIn HRMS Home">
            NextIn <span>HRMS</span>
        </a>

        <!-- Desktop Navigation -->
        <ul class="nav-menu" id="primary-nav" role="menubar">
            <li role="none"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" role="menuitem">Home</a></li>
            <li role="none"><a href="#features" role="menuitem">Features</a></li>
            <li role="none"><a href="#modules" role="menuitem">Modules</a></li>
            <li role="none"><a href="#faq" role="menuitem">Why Us</a></li>
            <li role="none"><a href="#site-footer" role="menuitem">Contact</a></li>
            <li role="none">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdTr6lcO4AYBsPt0wA8rkr-pU031X8Tknhg2GV0EM2yJ9UF9g/viewform"
                   class="nav-cta"
                   target="_blank"
                   rel="noopener noreferrer"
                   role="menuitem">
                    Schedule a Demo
                </a>
            </li>
        </ul>

        <!-- Hamburger (mobile) -->
        <button class="hamburger" id="hamburger-btn" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primary-nav">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </nav>
</header>
