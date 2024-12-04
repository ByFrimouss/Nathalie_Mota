<footer>
    <?php wp_nav_menu( array(
        'theme_location' => 'footer_menu',
        'menu_class' => 'link-footer',
        'container' => 'null',
    ) );
    ?>

<?php
// Inclure la modale de contact
get_template_part('template-parts/modal_contact');
?>

    <?php wp_footer(); ?>
</footer>
</body>
</html>