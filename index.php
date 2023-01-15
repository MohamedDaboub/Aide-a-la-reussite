<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<?php
		astra_primary_content_top();

		astra_content_loop();

		astra_pagination();

		astra_primary_content_bottom();
		?>
	</div><!-- #primary -->
<?php
if ( astra_page_layout() == 'right-sidebar' ) :?>

<?php get_sidebar();?>

	<?php endif; ?>

<?php get_footer();?>
<style>
	/* .ast-separate-container .ast-article-post{
	border-bottom:3.5px solid #0099D8;
	margin: 15px 0 ;
	border-top:3.5px solid #FF8282;
} */

.cnetre {
    align-items: center;
    margin: 0 auto;
}
.elementor-widget-divider {
    margin: 0px 0;
    text-align: center;
}
.elementor-divider {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 30px;
}
.elementor-divider-separator {
    width: 40%;
    margin: 0 auto;
}
.elementor-divider-separator:before {
    display: block;
    content: "";
    border-bottom: 0;
    flex-grow: 1;
    border-top: 1px solid #0099D8;
}
.elementor-divider__element {
    color: #000000;
    font-family: "Exo 2", Sans-serif;
    font-size: 32px;
    font-weight: 400;
    line-height: 15px;
    word-spacing: 0px;
    text-align: center;
    margin : 0 25px
}
.elementor-divider-separator:after {
    display: block;
    content: "";
    border-bottom: 0;
    flex-grow: 1;
    border-top: 1px solid #0099D8;
}
.elementor-divider-separator {
    align-items: center;
    margin: 15px;
}
.elementor-widget-divider .elementor-divider-separator {
    display: flex;
    margin: auto;
    direction: ltr;
}

/* Règles pour tablette */
@media only screen and (max-width: 768px) {
    .elementor-divider-separator {
        width: 50%; 
    }
}

/* Règles pour téléphone */
@media only screen and (max-width: 480px) {
    .elementor-divider-separator {
        width: 80%; 
    }
}
.ast-separate-container #primary{
    padding: 0px;
}
@media (min-width: 993px) {
    .ast-separate-container #primary{
    padding: 0px!important;
}
}
div .ast-row article:nth-child(odd){
    background-color: white;
    color:#000;
    margin:10px 0px 0px 0px;
    /* border-bottom: 3.5px solid #0099D8; */
    border:none;
}
div .ast-row article:nth-child(even):not(:last-child){
    background: linear-gradient(to bottom, 
    #fff 1%, 
    #fdf3e7 5%, 
    #fdf3e7 95%, 
    #fff 100%);
    color:#000;
    margin:10px 0px 0px 0px;
    border:none;
}
div .ast-row article:nth-child(even):last-child{
    background: linear-gradient(to bottom, 
    #fff 0.1%, 
    #fdf3e7 4%,
    #fdf3e7 95% );
    color:#000;
    margin:10px 0px 0px 0px;
    border:none;
}

.ast-separate-container .entry-header{
    margin: 15px 0px;
}
.entry-content{
    padding: 15px 0px;
}
div .ast-row article:nth-child(odd):not(:first-child):not(:last-child):before{
    content: "";
    position: absolute;
    bottom: -30px;
    z-index: 2;
    right: 0;
    width: 60%;
    display: block;
    border-top: 3.5px solid #FF8282;
}
div .ast-row article:nth-child(odd):not(:first-child):not(:last-child):after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 60%;
    display: block;
    border-top: 3.5px solid #0099D8;
}
div .ast-row article:nth-child(even):not(:first-child):not(:last-child):before{
    content: "";
    position: absolute;
    bottom: 25px;
    right:  0;
    width: 60%;
    display: block;
    border-top: 3.5px solid #FF8282;
}
div .ast-row article:nth-child(even):not(:first-child):not(:last-child):after{
    content: "";
    position: absolute;
    top: -15px;
    left:  0;
    width: 60%;
    display: block;
    border-top: 3.5px solid #0099D8;
}
div .ast-row article:first-child:before{
    content: "";
    position: absolute;
    bottom: -25px;
    z-index: 2;
    right:  0;
    width: 60%;
    display: block;
    border-top: 3.5px solid #FF8282;
}
div .ast-row article:last-child:before{
    content: "";
    position: absolute;
    top: -15px;
    z-index: 2;
    left:  0;
    width: 60%;
    display: block;
    border-top: 3.5px solid #0099D8;
}
.post-thumb-img-content .post-thumb a img .wp-post-image{
    text-align: center;
    width: 50%;
}

</style>
