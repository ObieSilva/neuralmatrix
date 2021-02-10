<!-- ****** Hero Section ****** -->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<?php if( get_post_thumbnail_id($post->ID) ): ?>
    <?php echo '<div class="container-fluid" id="hero-image" style="max-height: 450px; background-image:url('. $backgroundImg[0] .');" > '?></div><!-- .single-course-hero -->
<?php endif; ?>