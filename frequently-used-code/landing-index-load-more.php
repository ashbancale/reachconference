          <?php

          global $wp_query;

          $cat_obj = $wp_query->get_queried_object();

          //echo $cat_obj->name . " has id ". $cat_obj->term_id;



          ?>
                  

          <h1 class="title"><?php echo $cat_obj->name; ?></h1>
        

    
          <?php

          function custom_field_excerpt() {

            global $post;

            $text = get_the_content(); //Replace 'your_field_name'

            if ( '' != $text ) {

              $text = strip_shortcodes( $text );

              $text = apply_filters('the_content', $text);

              $text = str_replace(']]&gt;', ']]&gt;', $text);

              $excerpt_length = 40; // 20 words

              $excerpt_more = apply_filters('excerpt_more', ' ' . '[]');

              $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );

            }

            return apply_filters('the_excerpt', $text);

          }

          // wp query

            $args = array(

              'post_type' => 'news',

              'posts_per_page' => 200,

              'tax_query' => array(

                    array(

                        'taxonomy' => 'news-categories',

                        'field'    => 'term_id',

                        'terms'    => $cat_obj->term_id

                    ),

                ),

            );

            $get_news = new WP_Query( $args );

            if ($get_news->have_posts()) :
                echo $taxonomyterms;

                echo do_shortcode('[ajax_load_more post_type="news" taxonomy="news-categories" taxonomy_terms="'.$cat_obj->name.'" taxonomy_operator="IN" posts_per_page="10" scroll="false" container_type="div" button_label="Load More"]'); 

                //endwhile;

            endif; ?>