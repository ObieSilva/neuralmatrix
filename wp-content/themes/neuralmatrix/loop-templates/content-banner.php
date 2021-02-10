<!-- \\\ ****** Banner Section \\\ ****** -->
<section id="banner">
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