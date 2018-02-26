<?php

?>

<?php get_header(); ?>
<div class="main-container">
     <div class="main wrapper clearfix">

            <div id="contentwrapper">
               <article class="test">
                    <section>                    

                              <?php if (have_posts()) : ?>

                              <?php while (have_posts()) : the_post(); ?>
                    
                                   <h1 class="header"><?php the_title(); ?></h1>

                              <?php
                              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail();
                              ?>
                              <br>
                              <?php }
                              ?>                                 

                              <?php the_content(); ?>       

                              <?php endwhile; ?>

                              <?php endif; ?>

                         </section>
                    </article>
               </div>
          <?php get_sidebar(); ?>
     </div>
    <?php get_footer(); ?>