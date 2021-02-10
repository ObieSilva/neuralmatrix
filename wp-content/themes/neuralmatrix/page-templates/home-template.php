<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the Home page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' ); 
?>

<!-- \\\ ****** Hero Slider Section \\\ ****** -->
<?php get_template_part('loop-templates/home-slider', 'page');?>

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
            <a class="body-title" href="/training">View All Training Programs</a>
        </div> <!-- .row -->
    </div><!-- .container .training-section-container -->
</section><!-- .container #training-section -->

<section id="body-content">
    <div class="container-fluid">
    <?php if( have_rows('body_content') ): while ( have_rows('body_content') ) : the_row(); ?>
        <div class="row">
            <div class="col-sm-12 col-md-6 no-padding">
                <div class="body-image" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
            </div><!-- .col-sm-12 .col-md-6 -->
            <div class="col-sm-12 col-md-6">
                [RIGHT_CONTENT]
            </div><!-- .col-sm-12 .col-md-6 -->
        </div><!-- .row -->
        <?php endwhile; endif;?>
    </div><!-- .container-fluid -->
</section><!-- #body-content -->

<!-- \\\ ****** Banner Section \\\ ****** -->
<section id="home-banner">
    <?php if( have_rows('banner_details') ): while ( have_rows('banner_details') ) : the_row(); 
    $primaryButton = get_sub_field('primary_button');
    $secondaryButton = get_sub_field('secondary_button');
    ?>
        <div class="container banner-details">
            <h1 class="header-title all-caps"><?php the_sub_field('title'); ?></h1>
            <?php the_sub_field('content'); ?>
            <?php if( get_sub_field('primary_button') ): ?>
                <div class="primary-button">
                    <i class="<?php the_sub_field('primary_button_icon'); ?>"></i> <a href="<?php echo $primaryButton['url']; ?>" target="<?php echo $primaryButton['target'];?>"><?php echo $primaryButton['title']; ?></a>
                </div><!-- .primary-button -->
            <?php endif; ?>
            <?php if( get_sub_field('secondary_button') ): ?>
                <div class="secondary-button">
                    <i class="<?php the_sub_field('secondary_button_icon'); ?>"></i> <a href="<?php echo $secondaryButton['url']; ?>" target="<?php echo $secondaryButton['target'];?>"><?php echo $secondaryButton['title']; ?></a>
                </div><!-- .primary-button -->
            <?php endif; ?>
        </div><!-- .container -->
    <?php endwhile; endif;?>
</section> <!-- #banner -->

<?php
get_footer();
