<?php
/**
 * The Front Page template
 *
 * @package Nexcent
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="hero-section">
        <div class="container hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <?php 
                    $title = get_field('hero_title', 'option');
                    if ( $title ) {
                        echo wp_kses_post($title);
                    } else {
                        echo 'Lessons and insights <span class="highlight">from 8 years</span>';
                    }
                    ?>
                </h1>
                
                <p class="hero-description">
                    <?php 
                    $desc = get_field('hero_description', 'option');
                    echo $desc ? esc_html($desc) : 'Where to grow your business as a photographer: site or social media?';
                    ?>
                </p>

                <?php 
                $btn_text = get_field('hero_button_text', 'option');
                $btn_url = get_field('hero_button_url', 'option');
                if ( $btn_text && $btn_url ) : ?>
                    <a href="<?php echo esc_url($btn_url); ?>" class="btn btn-primary">
                        <?php echo esc_html($btn_text); ?>
                    </a>
                <?php else: ?>
                    <a href="#" class="btn btn-primary">Register</a>
                <?php endif; ?>
            </div>

            <div class="hero-image">
                <?php 
                $image = get_field('hero_image', 'option');
                if ( $image ) : ?>
                    <img src="<?php echo esc_url($image); ?>" alt="Hero Illustration" />
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration-1.png" alt="Hero Illustration" />
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();