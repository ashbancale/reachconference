<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <div class="container" id="main">

    <div class="fluid-width"> 
    <!--div class="inner-block row"  -->      
        <section class="row homepage">
        <article>

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
            <h1><strong><?php the_field('headline'); ?></strong></h1>
            <h2><?php the_field('subheader'); ?></h2>

            <div class="intro"><?php the_content(); ?></div>

            <div class="buttons">
              <a class="registration-btn" href="<?php the_field('register_link'); ?>" target="_blank">Register to Attend</a>
              <a class="learnmore-btn" href="<?php the_field('learn_more_link'); ?>">Learn More</a>
            </div>

            <div class="flex-spots">      

              <?php

                // check if the repeater field has rows of data 

                if( have_rows('flex_spots') ) :

                  // loop through the rows of data

                    while ( have_rows('flex_spots') ) : the_row(); ?>

                        <?php 

                        $image = get_sub_field('image');

                        ?>
                      

                    <div class="spot">
                      <div class="title"><a href="<?php the_sub_field('read_more_link') ?>"><?php the_sub_field('title'); ?></a></div>
                        <div class="image-box">
                            <a href="<?php the_sub_field('read_more_link') ?>"><img src="<?php echo $image['url']; ?>"
                                <?php if (!empty($image['alt'])) { ?>
                                    alt="<?php echo $image['alt']; ?>"
                                    <?php } ?>
                                    /></a>                           
                        </div>
                          
                        <div class="description"><p><?php the_sub_field('description'); ?></p></div>
                        <?php if (!empty(get_sub_field('read_more_link'))) : ?>
                          <div class="read-more">
                            <a href="<?php the_sub_field('read_more_link') ?>" class="website">Read More</a>
                          </div>
                        <?php endif; ?>

                    </div>                                    

                    <?php 

                    endwhile;

                endif; ?>  
            </div>

           <div class="bottom-text">
             <p>\\ A new conference produced by HOW Events, the creators of HOW Design Live.</p>
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