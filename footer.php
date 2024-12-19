<div class="lightbox"></div> <!-- On a juste besoin d'ajouter ça ! -->

<footer>
    <?php wp_nav_menu( array(
        'theme_location' => 'footer_menu',
        'menu_class' => 'link-footer',
        'container' => 'null',
    ) );
    ?>

    <?php wp_footer(); ?>
</footer>

<!-- Ajouter le JavaScript de Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



</body>
</html>