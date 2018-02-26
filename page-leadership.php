<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <div class="container" id="main">


    <div class="fluid-width"> 
    <!--div class="inner-block row"-->      
        <section class="row">
        <article class="leadership">

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>  

            <h1><?php the_title(); ?></h1>    

            <?php the_content(); ?>           

              <?php

                // check if the repeater field has rows of data

                if( have_rows('thought_leadership_rows') ) :

                  // loop through the rows of data

                    while ( have_rows('thought_leadership_rows') ) : the_row(); ?>


                      <div class="row">
                            <h2>                        
                                <?php the_sub_field('headline'); ?>
                            </h2>
                            <div class="byline">                              
                              <?php the_sub_field('byline_and_category'); ?>
                            </div>
                            <div class="description">
                              <?php the_sub_field('description'); ?>
                            </div>
                            <?php if (!empty(get_sub_field('pdf_file'))) : ?>
                              <div class="pdf-file">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i><a href="<?php the_sub_field('pdf_file') ?>" target="_blank">View pdf</a>
                              </div>
                            <?php endif; ?>                            
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