<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- \\\ ****** Post Section \\\ ****** -->
<section id="single-instructor">
    <?php $courseImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <?php if( get_post_thumbnail_id($post->ID) ): ?>
                    <?php echo '<div class="instructor-image" style="max-height: 450px; background-image:url('. $courseImg .');" > '?></div><!-- .single-course-hero -->
                <?php endif; ?>
            </div><!-- .col-sm .col-md-6 -->
            <?php if( have_rows('instructor') ): while ( have_rows('instructor') ) : the_row(); ?>
                <div class="col-sm-12 col-md-8 single-instructor-content">
                    <div class="instructor-details">
                        <h3 class="entry-title all-caps"><?php the_title(); ?></h3>
                        <h4><?php the_sub_field('title'); ?></h4>
                        <hr>
                        <p><?php the_sub_field('email'); ?></p>
                        <p>Tel: <?php the_sub_field('phone_number'); ?></p>
                    </div><!-- .instructor-details -->
                    <?php the_content(); ?>
                </div><!-- .col-sm-12 .col-md-8 .single-instructor-content -->
            <?php endwhile; endif;?>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- #single-course -->

<?php
get_footer();