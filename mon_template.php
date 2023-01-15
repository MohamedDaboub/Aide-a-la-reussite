<?php
/**
 * The template for displaying all pages.
 * 
 * Template Name: edge 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>
        <div class="container1">
            <h2 class="title-center1">Nos partenaires</h2>
            <?php
            $args = array(
                'post_type' => 'partenaires',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );
            $partners_query = new WP_Query( $args );

            if ( $partners_query->have_posts() ) {
                while ( $partners_query->have_posts() ) {
                $partners_query->the_post();
                ?>
                <div class="grid-item   center-element1">
                    <h3 class="partner-title1 center-element1 hide1"><?php the_title(); ?></h3>
                    <?php 
                    $link = get_field('lien');
                    if($link): ?>
                        <a href="<?php echo $link ?>" class="partner-link1 center-element1" target="_blank">
                        <div class="partner-description1 center-element1">
                            <?php the_post_thumbnail(); ?>
                        </div>
					</a>
                        <?php endif; ?>

                    </div>
                    <?php
                    }
                    wp_reset_postdata();
                    }
                    else {
                    echo '<p class="center-element">Aucun partenaire trouvé.</p>';
                    }
            ?>
        </div>
		<?php astra_primary_content_bottom(); ?>
	</div><!-- #primary -->
<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>
	<?php get_sidebar(); ?>
<?php endif ?>
<?php get_footer(); ?>
<style>
    .container1{
    width:100%;
    max-width:1200px;
    margin:0 auto;
}
.title-center1{
    text-align:center;
    margin: 40px;
    font-size:  40px;
}
.partner-item1{
    display: grid;
    align-items: center;
    justify-content: center;
}
.center-element1{
    display: grid;
    align-items: center;
    justify-content: center;
	
}
.partner-title1{
    text-align:center;
}
.partner-description1{
    text-align:center;
}
.partner-thumbnail1{
    text-align:center;
}
.img1{
    max-width:100%;
}
.partner-link1{
    text-align:center;
}
.hide1{
    display:none;
}
.grid-item {
    width: 50%; /* 25% de la largeur de la grille */
    float: left;
    align: center;
	align-items: center;
}

/* Règles pour tablette */
@media only screen and (max-width: 768px) {
    .grid-item {
        width: 50%; /* 50% de la largeur de la grille */
    }
}

/* Règles pour téléphone */
@media only screen and (max-width: 480px) {
    .grid-item {
        width: 100%; /* 100% de la largeur de la grille */
        float: none;
    }
}

</style>