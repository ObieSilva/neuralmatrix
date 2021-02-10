<?php
/* Template Name: Training Page */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- \\\ ****** Banner Section \\\ ****** -->
<?php get_template_part('loop-templates/content-hero', 'page');?>

<!-- \\\ ****** Training Program Section \\\ ****** -->
<section id="training-section">
    <div class="container training-section-container">
        <div class="row">
            <?php if( have_rows('courses') ): while ( have_rows('courses') ) : the_row(); ?>
                <?php $featured_posts = get_sub_field('course'); if( $featured_posts ): ?>
                    <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
                        <div class="col-sm-12 col-md-4 training-card">
                            <div class="training-card-wrapper">
                                <?php $courseImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <a href="<?php echo get_permalink( $post->ID ); ?>">
                                    <?php echo '<div class="training-img" style="max-height: 200px; background-image:url('. $courseImg .');" > '?></div><!-- .training-img -->
                                </a>
                                <div class="training-body">
                                    <h3 class="all-caps body-title"><?php the_title(); ?></h3>
                                    <p><?php echo get_the_excerpt(); ?> 
                                </p>
                                </div><!-- .training-body -->
                            </div><!-- .training-card-wrapper -->
                        </div><!-- .col-sm .training-card -->
                <?php endforeach; wp_reset_postdata(); endif; ?>
            <?php endwhile; endif;?>
        </div> <!-- .row -->
    </div><!-- .container .training -->
</section><!-- .container #training-section -->

<?php
get_footer();
