<?php
/**
 * The template for displaying the footer
 *
 * @package Nexcent
 */

?>
    <footer id="colophon" class="site-footer">
        <div class="container footer-container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        </div>
    </footer>
</div><!-- #page -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burgerMenu');
    const mainNavigation = document.getElementById('mainNavigation');
    const navOverlay = document.getElementById('navOverlay');

    function toggleMenu() {
        burgerMenu.classList.toggle('active');
        mainNavigation.classList.toggle('active');
        navOverlay.classList.toggle('active');
        document.body.style.overflow = mainNavigation.classList.contains('active') ? 'hidden' : '';
    }

    if (burgerMenu) {
        burgerMenu.addEventListener('click', toggleMenu);
        navOverlay.addEventListener('click', toggleMenu);
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>