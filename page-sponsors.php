<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <div class="container" id="main">


    <div class="fluid-width"> 
    <!--div class="inner-block row"  -->      
        <section class="row">
        <article class="sponsors">

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <div class="intro"><?php the_content(); ?></div>

            <div class="executive">
       
            <h2><?php the_field('flex_title_1'); ?></h2>

              <?php

                // check if the repeater field has rows of data 

                if( have_rows('flex_area_1_rows') ) :

                  // loop through the rows of data

                    while ( have_rows('flex_area_1_rows') ) : the_row(); ?>

                        <?php 

                        $sponsorimage = get_sub_field('sponsor_image');

                        ?>
                      

                    <div class="row">
                        <div class="image-box">
                            <img src="<?php echo $sponsorimage['url']; ?>"
                                <?php if (!empty($sponsorimage['alt'])) { ?>
                                    alt="<?php echo $sponsorimage['alt']; ?>"
                                    <?php } ?>
                                />                           
                        </div>
                        <!-- Note: Add noimage class if there is no image for this feed -->
                        <div class="div-right">
                          <div class="name"><?php the_sub_field('sponsor_name'); ?></div>
                          <div class="description"><p><?php the_sub_field('description'); ?></p></div>
                          <?php if (!empty(get_sub_field('website'))) : ?>
                            <a href="<?php the_sub_field('website') ?>" target="_blank" class="website">Visit Website</a>
                          <?php endif; ?>                      
                        </div>

                    </div>                                    

                    <?php 

                    endwhile;

                endif; ?>  
            </div>

            <hr>

            <div class="associate">

            <h2><?php the_field('flex_title_2'); ?></h2>

              <?php

                // check if the repeater field has rows of data 

                if( have_rows('flex_area_2_rows') ) :

                  // loop through the rows of data 

                    while ( have_rows('flex_area_2_rows') ) : the_row(); ?>

                        <?php 

                        $sponsorimage = get_sub_field('sponsor_image');

                        ?>
                      

                    <div class="row">
                        <div class="image-box">
                            <img src="<?php echo $sponsorimage['url']; ?>"
                                <?php if (!empty($sponsorimage['alt'])) { ?>
                                    alt="<?php echo $sponsorimage['alt']; ?>"
                                    <?php } ?>
                                />                           
                        </div>
                        <!-- Note: Add noimage class if there is no image for this feed  -->
                        <div class="div-right">
                          <div class="name"><?php the_sub_field('sponsor_name'); ?></div>
                          <div class="description"><p><?php the_sub_field('description'); ?></p></div>
                          <?php if (!empty(get_sub_field('website'))) : ?>
                            <a href="<?php the_sub_field('website') ?>" target="_blank" class="website">Visit Website</a>
                          <?php endif; ?>                      
                        </div>

                    </div>                                    

                    <?php 

                    endwhile;

                endif; ?> 
            </div>

                

            <div class="exhibitors">

            <hr>

                <h2><?php the_field('flex_title_3'); ?></h2>                       

                <div class="flex-area-3">
                    <?php the_field('flex_area_3'); ?>
                </div>
            </div>

          <?php endwhile; ?>

          <?php endif; ?>          

        </article>
       
      </section>

          
          <!--/div-->
      </div>

<!-- no sidebar -->
   </div>

    <?php get_footer(); ?>   