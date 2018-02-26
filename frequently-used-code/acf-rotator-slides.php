    <div class="flexslider-main">
        
        <ul class="slides">

          <?php

            // check if the repeater field has rows of data

            if( have_rows('rotator_slides') ) :

              // loop through the rows of data

                while ( have_rows('rotator_slides') ) : the_row(); ?>
                  <?php 

                  $image = get_sub_field('slide_image');

                  ?>

                    <li>
           
                    <a href="<?php the_sub_field('slide_link'); ?>">

                            <img src="<?php echo get_template_directory_uri(); ?>/images/pixel.png" data-src="<?php echo $image['url']; ?>" class="lazy"
                            <?php if (!empty($image['alt'])) { ?>
                                alt="<?php echo $image['alt']; ?>"
                                <?php } ?>
                            /> 
                          
                    </a>
                        <section class="slider-caption wrapper">    
                            <h2><a href="<?php the_sub_field('slide_link'); ?>"><?php the_sub_field('slide_title'); ?></a></h2>  
                            <p><?php the_sub_field('slide_description'); ?>

                            </p>
                        </section>
                    </li>                                                                    

                <?php 

                endwhile;

            endif; ?>  
 
        </ul>
        
    </div>