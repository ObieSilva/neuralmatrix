<?php if( have_rows('slide_show')): $slideCount = 0; $indicatorCount = 0; ?>
	<section class="container-fluid" id="hero-section">
		<div id="slideshow" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators" >
				<?php while( have_rows('slide_show')): the_row(); ?>
				    <li data-target="#slideshow" data-slide-to="<?php echo $indicatorCount; ?>" class="<?php if($indicatorCount == 0){echo 'active'; } ?>" ></li>
				<?php $indicatorCount++; endwhile; ?>
			</ol>
			<div class="carousel-inner" >
                <?php while( have_rows('slide_show')): the_row(); $heroButton = get_sub_field('button') ?>
                    <div class="carousel-item <?php if( $slideCount == 0 ){echo 'active'; } ?>" style="background-image:url(<?php the_sub_field('image'); ?>); background-position:<?php the_sub_field('image_position'); ?> ">
                        <div class="bg-overlay" >
                            <div class="row">
                                <div class="container" id="hero-content">
                                    <h1 class="header-title all-caps"><?php the_sub_field('title'); ?></h1>
                                    <h2 class="header-lead"><?php the_sub_field('lead'); ?></h2>
                                    <p><?php the_sub_field('content'); ?></p>
                                    <?php if( get_sub_field('button') ): ?>
                                        <div class="inverted-button">
                                            <a href="<?php echo $heroButton['url']; ?>" target="<?php echo $heroButton['target'];?>"><?php echo $heroButton['title']; ?></a> <i class="fas fa-angle-right"></i>
                                        </div><!-- .inverted-button -->
                                    <?php endif; ?>
                                </div><!-- .container #hero-content -->
                            </div><!-- .row -->
                        </div><!-- .bg-overlay -->	
                    </div><!-- .carousel-item -->
                <?php $slideCount++; endwhile; ?>	
			</div><!-- .carousel-inner -->
		</div><!-- #slideshow -->
	</section><!-- .container .hero -->
<?php endif; ?>