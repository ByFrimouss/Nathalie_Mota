<?php get_header(); ?>

<form id="filter-form">

    <select id="categorie" name="categorie">
        <option value="">CATÉGORIES</option>
        <?php
        // Récupérer les catégories dynamiquement
        $categories = get_terms(array(
            'taxonomy' => 'categorie', // Votre taxonomie personnalisée
            'hide_empty' => true, // Afficher uniquement les catégories utilisées
        ));
        foreach ($categories as $categorie) {
            echo '<option value="' . esc_attr($categorie->slug) . '">' . esc_html($categorie->name) . '</option>';
        }
        ?>
    </select>

    <select id="format" name="format">
        <option value="">FORMATS</option>
        <?php
        // Récupérer les formats dynamiquement
        $formats = get_terms(array(
            'taxonomy' => 'format', // Votre taxonomie personnalisée
            'hide_empty' => true, // Afficher uniquement les formats utilisés
        ));
        foreach ($formats as $format) {
            echo '<option value="' . esc_attr($format->slug) . '">' . esc_html($format->name) . '</option>';
        }
        ?>
    </select>

    <select id="ordre" name="ordre">
        <option value="">TRIER PAR</option>
        <option value="desc">À partir des plus récentes</option>
        <option value="asc">À partir des plus anciennes</option>
    </select>

</form>


<?php
// Boucle pour afficher les photos
$args = array(
    'post_type'      => 'photo',  // Custom Post Type "photo"
    'posts_per_page' => 8,        // Limiter à 8 photos 
);
/* affiche image scf*/
$query = new WP_Query($args);

if ($query->have_posts()) :
    echo '<div class="photo-gallery">';
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="photo-item">
            <a href="<?php the_permalink(); ?>"> <!-- Lien vers la photo -->
                <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium'); // Affiche l'image mise en avant
                }
                ?>
            </a>
        </div>
    <?php endwhile;
    echo '</div>';
    wp_reset_postdata(); // Réinitialiser la requête principale
else :
    echo '<p>Aucune photo trouvée.</p>';
endif;
?>
<?php get_footer(); ?>

