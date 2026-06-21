<?php
/**
 * TOREX SAFARI Header
 * @package TOREX_SAFARI
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php _e( 'Skip to content', 'torex-safari' ); ?></a>

<!-- Top Bar: UTB & URSB Compliance -->
<?php
 $utb_license  = get_theme_mod( 'torex_utb_license', 'UTB/2024/001' );
 $ursb_reg     = get_theme_mod( 'torex_ursb_registration', '8001000XXXXX' );
 $top_phone    = get_theme_mod( 'torex_phone', '+256 700 000 000' );
 $top_email    = get_theme_mod( 'torex_email', 'info@torexsafari.ug' );
?>
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span class="compliance-badge">UTB: <?php echo esc_html( $utb_license ); ?></span>
            <span class="compliance-badge">URSB: <?php echo esc_html( $ursb_reg ); ?></span>
            <span style="opacity:0.5;">|</span>
            <a href="mailto:<?php echo esc_attr( $top_email ); ?>"><i data-lucide="mail" style="width:13px;height:13px;vertical-align:middle;"></i> <?php echo esc_html( $top_email ); ?></a>
        </div>
        <div class="top-bar-right">
            <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $top_phone ) ); ?>"><i data-lucide="phone" style="width:13px;height:13px;vertical-align:middle;"></i> <?php echo esc_html( $top_phone ); ?></a>
            <?php
            $fb = get_theme_mod( 'torex_facebook', '' );
            $ig = get_theme_mod( 'torex_instagram', '' );
            $tw = get_theme_mod( 'torex_twitter', '' );
            $yt = get_theme_mod( 'torex_youtube', '' );
            if ( $fb || $ig || $tw || $yt ) :
            ?>
            <span style="opacity:0.3;">|</span>
            <?php if ( $fb ) : ?><a href="<?php echo esc_url( $fb ); ?>" target="_blank" rel="noopener" aria-label="Facebook">FB</a><?php endif; ?>
            <?php if ( $ig ) : ?><a href="<?php echo esc_url( $ig ); ?>" target="_blank" rel="noopener" aria-label="Instagram">IG</a><?php endif; ?>
            <?php if ( $tw ) : ?><a href="<?php echo esc_url( $tw ); ?>" target="_blank" rel="noopener" aria-label="Twitter/X">X</a><?php endif; ?>
            <?php if ( $yt ) : ?><a href="<?php echo esc_url( $yt ); ?>" target="_blank" rel="noopener" aria-label="YouTube">YT</a><?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="site-header" id="siteHeader">
    <div class="container header-inner">
        <!-- Logo -->
        <div class="site-logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-text">
                    TOREX<span>SAFARI</span>
                </a>
                <span class="site-logo-sub">Pearl of Africa</span>
            <?php endif; ?>
        </div>
        
        <!-- Navigation -->
        <nav class="main-nav" id="mainNav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'torex-safari' ); ?>">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => false,
                    'depth'          => 3,
                ) );
            } else {
                // Default fallback menu
                echo '<ul>';
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '" class="' . ( is_front_page() ? 'current-menu-item' : '' ) . '">' . __( 'Home', 'torex-safari' ) . '</a></li>';
                echo '<li><a href="#destinations">' . __( 'Destinations', 'torex-safari' ) . '</a></li>';
                echo '<li><a href="#safaris">' . __( 'Safari Packages', 'torex-safari' ) . '</a></li>';
                echo '<li><a href="#experiences">' . __( 'Experiences', 'torex-safari' ) . '</a></li>';
                echo '<li><a href="#about">' . __( 'About Us', 'torex-safari' ) . '</a></li>';
                echo '<li><a href="#contact">' . __( 'Contact', 'torex-safari' ) . '</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>
        
        <!-- Header CTA -->
        <div class="header-cta">
            <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $top_phone ) ); ?>" class="header-phone">
                <i data-lucide="phone" style="width:18px;height:18px;"></i>
                <?php echo esc_html( $top_phone ); ?>
            </a>
            <a href="#contact" class="btn btn-primary btn-sm"><?php _e( 'Book Now', 'torex-safari' ); ?></a>
        </div>
        
        <!-- Mobile Toggle -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="<?php esc_attr_e( 'Toggle Menu', 'torex-safari' ); ?>" aria-expanded="false">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
    </div>
</header>

<!-- Mobile Nav Overlay -->
<div class="nav-overlay" id="navOverlay"></div>

<main id="primary" class="site-main">
