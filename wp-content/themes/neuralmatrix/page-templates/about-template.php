<?php
/* Template Name: About Us Page */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- \\\ ****** Banner Section \\\ ****** -->
<?php get_template_part('loop-templates/content-hero', 'page');?>

<!-- \\\ ****** Post Section \\\ ****** -->
<section id="about-us">
	<div class="container">
		<h3 class="entry-title all-caps"><?php the_title(); ?></h3>
		<?php the_content(); ?>
	</div><!-- .row -->
</section><!-- #about-us -->

<!-- \\\ ****** Banner Section \\\ ****** -->
<?php get_template_part('loop-templates/content-banner', 'page');?>

<?php
get_footer();
