<?php get_header(); ?>

<!--<div class="background-img">    
<?php 

    $image = get_field('landing_background_image');
    if( !empty($image) ): ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
</div> -->


<!-- Down Button -->
<div class="section-link">
    <a class="down-link" href="#section2">Going<br> <span><object class="linkicon down" type="image/svg+xml" data="/wp-content/uploads/2019/08/up-right-arrow-1.svg"></object> </span><br>Down</a>
</div>

<!-- Main Content Starts Here -->
<div class="wrap">

	<!--<?php
		while (have_posts()): the_post();
			get_template_part('template-parts/content', 'page');
			if (comments_open() || get_comments_number()):
				comments_template();

			endif;
		endwhile;
	?>-->
    
    <div class="section" id="section2">

        <?php $image = get_field('meetup_image'); 

           if( !empty($image) ): ?>
        <?php endif; ?>

        <div class="img-wrap" data-speed="0.15" id="meetup-img"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
         
        
        <div class="vert-center">
                
            <div class="row">
                
                <div class="col-desktop-6 col-tablet-12 col-mobile-12 text-wrap">
                    
                   
                    <h2><?php 
                        echo the_field('meetup_heading'); ?></h2>
                    
                    <p><?php 

                        echo the_field('meetup_info'); ?></p>
                    
                    <?php the_field('meetup_events'); ?>
                    
                    <?php 

                        $link = get_field('meetup_link');

                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>

                        <div class="button"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?><object class="linkicon" type="image/svg+xml" data="/wp-content/uploads/2019/08/up-right-arrow-1.svg"></object></a>  </div> 

                    <?php endif; ?>

                </div>
            </div>
        </div>  
    </div>
    
    <div class="section" id="section3">
        <?php $image = wp_get_attachment_image_src(get_field('design_week_image'), 'full'); ?>
        
        <div class="img-wrap" id="designweek-img" data-speed="0.12"><img class="image" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('design_week_image')) ?>" /></div>
        
        <div class="vert-center">
            <div class="row">
                
                <div class="col-desktop-6 col-tablet-12 col-mobile-12">
                </div>
                
                <div class="col-desktop-6 col-tablet-12 col-mobile-12">
                    <div class="text-wrap">
                        <h2><?php 
                    echo the_field('design_week_heading'); ?></h2>
                        
                        <p><?php 

                        echo the_field('design_week_info'); ?></p>
                        <div class="info-box"><?php the_field('design_week_events'); ?>
                            
                            </div>

                        <?php 

                            $link = get_field('design_week_link');

                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        

                            <div class="button"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?><object class="linkicon" type="image/svg+xml" data="/wp-content/uploads/2019/08/up-right-arrow-1.svg"></object></a></div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section" id="section4">
        <div class="vert-center">
            <div class="text-wrap">
                <h2><?php 
                    echo the_field('board_members_heading'); ?></h2>
                
                <?php 

                echo the_field('board_members_info'); ?>
            </div>
                <?php the_field('board_member_images'); ?>
        </div>
    </div>
    
    <div class="section" id="section5">
        <div class="vert-center">
            <div class="text-wrap">
                <h2><?php 
                    echo the_field('contact_heading'); ?></h2>
                
                <div class="contact-nav">
                    
                        
                        <ul id="link">
                            
                            <?php
                                $link = get_field('link_1');

                                if( $link ): ?>
                                    <li>
                                        <a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>">
                                            <span><object data="<?php echo $link['icon']['url']; ?>"></object></span>
                                            <br>
                                            <?php echo $link['link']['title']; ?>
                                        </a>
                                    </li>
                             <?php endif; ?>
                            
                            <?php
                                $link = get_field('link_2');

                                if( $link ): ?>
                                    <li>
                                        <a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>">
                                           <span><object data="<?php echo $link['icon']['url']; ?>"></object></span>
                                            <br>
                                            <?php echo $link['link']['title']; ?>
                                        </a>
                                    </li>
                             <?php endif; ?>
                            
                            <?php
                                $link = get_field('link_3');

                                if( $link ): ?>
                                    <li>
                                        <a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>">
                                            <span><object data="<?php echo $link['icon']['url']; ?>"></object></span>
                                            <br>
                                            <?php echo $link['link']['title']; ?>
                                        </a>
                                    </li>
                             <?php endif; ?>
                            
                            <?php
                                $link = get_field('link_4');

                                if( $link ): ?>
                                    <li>
                                        <a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>">
                                            <span><object data="<?php echo $link['icon']['url']; ?>"></object></span>
                                            <br>
                                            <?php echo $link['link']['title']; ?>
                                        </a>
                                    </li>
                             <?php endif; ?>
                            
                            <?php
                                $link = get_field('link_5');

                                if( $link ): ?>
                                    <li>
                                        <a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>">
                                            <span><object data="<?php echo $link['icon']['url']; ?>"></object></span>
                                            <br>
                                            <?php echo $link['link']['title']; ?>
                                        </a>
                                    </li>
                             <?php endif; ?>

                        </ul> 
                        
                        
                   
                    </div>
                
                <!--<?php 

                echo the_field('contact'); ?>-->
            </div>
        </div>        
    </div>
    
    <!-- To Top Button -->
    <div class="section-link"><a class="up-link" href="#section1">Going<br> <span><object class="linkicon up" type="image/svg+xml" data="/wp-content/uploads/2019/08/up-right-arrow-1.svg"></object> </span><br>Up</a></div>
    
    <!-- Parallax Scroll Script -->
    <script>
    
        var scrolled;
        
        $(window).scroll(function(){
          if (window.innerWidth > 760) {scrolled = $(window).scrollTop();
          $('.img-wrap').each(function(){ 
            parallax = scrolled * $(this).data('speed');
            $(this).css({ 'top' : parallax });
          });
                                       }
        });
    
    </script>
    
<!-- .wrap div closes in footer.php -->

<?php get_footer(); ?>
    
