                    <?php

                      // check if the repeater field has rows of data

                      if( have_rows('contact_group_1_rows') ) :

                        // loop through the rows of data

                          while ( have_rows('contact_group_1_rows') ) : the_row(); ?>
                            <?php 

                            $image = get_sub_field('image');

                            ?>

                            <div class="contact-row">

                              <p class="contact-item">
                                <img src="<?php echo $image['url']; ?>" 
                                      <?php if (!empty($image['alt'])) { ?>
                                      alt="<?php echo $image['alt']; ?>"
                                      <?php } ?> > <strong><?php the_sub_field('name'); ?></strong>
                                <?php if (!empty(get_sub_field('title'))) { ?>
                                  <br>    
                                  <?php the_sub_field('title'); ?>
                                <?php } ?>
                                <?php if (!empty(get_sub_field('phone_number'))) { ?>
                                  <br>    
                                  Ph: <?php the_sub_field('phone_number'); ?>
                                <?php } ?>
                                <?php if (!empty(get_sub_field('email'))) { ?>
                                  <br>    
                                  <a href="mailto:<?php the_sub_field('email'); ?>">Email</a>
                                <?php } ?>                    

                              </p>
                            </div>                                                    

                          <?php 

                          endwhile;

                      endif; ?> 