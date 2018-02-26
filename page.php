<?php 

/**  Template Name: Home Template */ 

?>
  <?php get_header(); ?>

  <div class="container" id="main">


    <div class="fluid-width"> 
    <!--div class="inner-block row"-->
       
        <section class="row">
        <article>

          <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <?php
                if ( has_post_thumbnail() ) { ?>               
                       <div class="image-block">
                           <img src="<?php the_post_thumbnail_url( 'full', array( 'class' => 'articleImage' ) ); ?>" />                                                  
                       </div>

            <?php } 
            //endif;  
            ?>             

          <?php the_content(); ?>       

          <?php endwhile; ?>

          <?php endif; ?>

        </article>
       
      </section>

          
          <!--/div-->
      </div>
<!-- no sidebar -->
   </div>

    <?php get_footer(); ?>   