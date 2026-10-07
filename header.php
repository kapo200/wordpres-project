<?php
/**
 * The header for our theme
 *
 * @package Nexcent
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* Dynamic Auth Buttons & Logo */
$logo = get_field('logo', 'option');
$login_text = get_field('login_text', 'option') ? get_field('login_text', 'option') : 'Login';
$signup_text = get_field('signup_text', 'option') ? get_field('signup_text', 'option') : 'Register Now →';
$login_url = get_field('login_url', 'option') ? get_field('login_url', 'option') : wp_login_url();
$signup_url = get_field('signup_url', 'option') ? get_field('signup_url', 'option') : wp_registration_url();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header id="masthead" class="site-header">
        <div class="container header-container">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
                    <?php if ( $logo ) : ?>
                        <?php if ( is_array( $logo ) ) : ?>
                            <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" class="custom-logo">
                        <?php else : ?>
                            <img src="<?php echo esc_url( $logo ); ?>" cent class="custom-logo">
                    <span class="logo-accent">Nex</span> cent
                        <?php endif; ?>
                    <?php else : ?>
                   
                    <?php endif; ?>
                </a>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                if ( has_nav_menu( 'header' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'header',
                        'menu_id' => 'header-menu',
                        'menu_class' => 'nav-menu',
                    ) );
                }
                ?>
            </nav>

            <?php if ( ! is_user_logged_in() ) : ?>
            <div class="header-auth-buttons">
                <a href="<?php echo esc_url( $login_url ); ?>" class="btn btn-login">
                    <?php echo esc_html( $login_text ); ?>
                </a>
                <a href="<?php echo esc_url( $signup_url ); ?>" class="btn btn-signup">
                    <?php echo esc_html( $signup_text ); ?>
                </a>
            </div>
            <?php endif; ?>

        </div>
    </header>

