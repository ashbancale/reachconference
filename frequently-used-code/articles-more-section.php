            <div class="latest projects">
                <h2>latest <?php echo $current_category_name; ?></h2>
                <ul>
              <?php

              global $current_category_slug;
              $currentTitle = get_the_title();

              $args = array(

                'posts_per_page' => 3,

                'post_type' => 'projects', 

                'post__not_in' => array(get_the_ID()),  

                'tax_query' => array(

                  array(

                    'taxonomy' => 'project-categories',

                    'field'    => 'slug',

                    'terms'    => $current_category_slug,

                  ),

                ),

                

              );

            $query = new WP_Query( $args );

            while ( $query->have_posts() ) : $query->the_post(); 
              if (get_the_title() != $currentTitle) { ?>

                <li>
                    <a href="<?php echo post_permalink( $ID ); ?>">
                        <div class="index-image-box">
                          <?php if ( has_post_thumbnail() ) { ?>   
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>"
                              <?php if (!empty(get_the_post_thumbnail_alt(get_the_ID()))) { ?>
                                  alt="<?php echo the_post_thumbnail_alt(get_the_ID()); ?>"
                                  <?php } ?>
                              /> 

                          <?php } ?> 

                        </div>
                    </a>
                    <p>
                    <a href="<?php echo post_permalink( $ID ); ?>"><?php the_title(); ?></a><span><?php echo get_the_date(); ?>
                        <?php if (get_the_term_list( $ID, 'project-categories', '', ', ', '' )): ?> •  <?php echo get_the_term_list( $ID, 'project-categories', '', ', ', '' ) ?><?php endif; ?></span>
                    </p>
                </li>

                <?php } //end if current title ?>


            <?php

            endwhile; ?> 


                </ul>
            </div>