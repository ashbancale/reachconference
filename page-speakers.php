<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <div class="container" id="main">


    <div class="fluid-width"> 
    <!--div class="inner-block row"-->      
        <section class="row">
        <article class="speakers">

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
       
            <?php the_content(); ?>
              <?php

                // check if the repeater field has rows of data

                if( have_rows('speakers') ) :

                  // loop through the rows of data
                  // 

                    while ( have_rows('speakers') ) : the_row(); ?>

                        <?php 

                        $speakerimage = get_sub_field('speaker_photo');
                        $speakerpdf = get_sub_field('pdf_file');

                        ?>
                      

                    <div class="speaker">
                        <div class="image-box">
                          <div class="credit-box">
                            <img src="<?php echo $speakerimage['url']; ?>"
                                <?php if (!empty($speakerimage['alt'])) { ?>
                                    alt="<?php echo $speakerimage['alt']; ?>"
                                    <?php } ?>
                                />                           
                          </div>
                        </div>
                        <!-- Note: Add noimage class if there is no image for this feed -->
                        <div class="div-right">
                          <h2><?php the_sub_field('name'); ?></h2>
                          <div class="title"><?php the_sub_field('title'); ?></div>
                          <div class="description"><?php the_sub_field('description'); ?></div>
                          <?php if (!empty($speakerpdf)) : ?>
                            <div class="speaker-pdf">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i><a href="<?php the_sub_field('pdf_file') ?>" target="_blank"><?php the_sub_field('pdf_title'); ?></a>
                            </div>
                          <?php endif; ?>                      
                        </div>


                      <hr>
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