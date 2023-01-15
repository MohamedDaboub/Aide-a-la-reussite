<?php
/**
 * The template for displaying archive pages.
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

		<?php astra_archive_header(); ?>

		<?php astra_content_loop();?>
		
		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
<style>
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
