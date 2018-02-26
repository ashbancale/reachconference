<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <div class="container" id="main">


    <div class="fluid-width"> 
    <!--div class="inner-block row"-->      
        <section class="row">
        <article class="agenda">

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

            <h2><?php the_field('day_1_title'); ?> | <?php the_field('day_1_date'); ?></h2>          

              <?php

                // check if the repeater field has rows of data

                if( have_rows('day_1_rows') ) :

                  // loop through the rows of data

                    while ( have_rows('day_1_rows') ) : the_row(); ?>


                      <div class="workshop">
                          <div class="time">
                             <?php the_sub_field('time'); ?>
                          </div>
                          <div class="right-column">
                            <div class="title">                        
                                <?php the_sub_field('title'); ?>
                            </div>
                            <div class="speakers">  
                            <?php if(!empty(get_sub_field('speakers')) && get_sub_field('speakers') != '') : ?>                            
                              by <?php the_sub_field('speakers'); ?>
                            <?php endif; ?>
                            </div>
                            <div class="description">
                              <?php the_sub_field('description_text'); ?>
                            </div>
                          </div>
                      </div>                                    

                    <?php 

                    endwhile;

                endif; ?>      

            <hr>
            <h2><?php the_field('day_2_title'); ?> | <?php the_field('day_2_date'); ?></h2>          

              <?php

                // check if the repeater field has rows of data

                if( have_rows('day_2_rows') ) :

                  // loop through the rows of data

                    while ( have_rows('day_2_rows') ) : the_row(); ?>


                      <div class="workshop">
                          <div class="time">
                             <?php the_sub_field('time'); ?>
                          </div>
                          <div class="right-column">
                            <div class="title">                        
                                <?php the_sub_field('title'); ?>
                            </div>
                            <div class="speakers">                              
                            <?php if(!empty(get_sub_field('speakers')) && get_sub_field('speakers') != '') : ?>                            
                              by <?php the_sub_field('speakers'); ?>
                            <?php endif; ?>
                            </div>
                            <div class="description">
                              <?php the_sub_field('description_text'); ?>
                            </div>
                          </div>
                      </div>                                    

                    <?php 

                    endwhile;

                endif; ?>      

          <?php endwhile; ?>

          <?php endif; ?>          

        </article>
       
      </section>

          
          <!--/div-->
      </div>
<!-- no sidebar -->
   </div>

    <?php get_footer(); ?>   