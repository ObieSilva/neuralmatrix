<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- \\\ ****** Post Section \\\ ****** -->
<section id="single-course">
    <?php $courseImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <?php if( get_post_thumbnail_id($post->ID) ): ?>
        <?php echo '<div class="container-fluid single-course-hero" style="max-height: 450px; background-image:url('. $courseImg .');" > '?></div><!-- .single-course-hero -->
    <?php endif; ?>
    <div class="container single-course-content">
        <h3 class="entry-title all-caps"><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div><!-- .container .single-course-content -->
</section><!-- #single-course -->

<!-- \\\ ****** Banner Section \\\ ****** -->
<?php get_template_part('loop-templates/content-banner', 'page');?>

<?php
get_footer();