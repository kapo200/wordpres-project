<?php
/**
 * The main template file
 *
 * @package Nexcent
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content/content', get_post_type() );
            endwhile;
        else :
            get_template_part( 'template-parts/content/content', 'none' );
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
