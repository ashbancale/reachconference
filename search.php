<?php get_header(); ?>

<script>jQuery('body').addClass('search');</script>

<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

	<h1>Search Results</h1>

            <p class="num-results"><?php search_results_title(); ?></p>

            <div class="search-pagination cf">
<div class="sort-by" style="float: right;margin-bottom:10px;">

                	Sort by Relevancy |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">Newest</a>'; ?> |

                	<?php echo '<a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=asc">Oldest</a>'; ?>

            	</div>
		<div class="search-nav clearfix">
<style>

</style>
		<div class="pages">

            		<?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

            	

		</div>

            </div>

	   <ul class="search-items">

            <?php 

            // the loop

            if (have_posts()) : ?>

             <?php while (have_posts()) : the_post(); ?>

                

                

  

                    <li><a href="<?php the_permalink(); ?>"><?php relevanssi_the_title(); ?></a>

                    <?php relevanssi_the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="readmore">Read More &raquo;</a>

		    </li>

                    

               

            <?php endwhile;

			else :

				?>

				

					<li><h2>We're Sorry</h2>

					<p>We couldn't find any results to display for your search term. Please try a differentt keyword.</p></li>

			

				<?php

        endif;

            ?>

		</ul>

            <div class="search-nav clearfix">

                <div class="pages">

	            <?php if(function_exists('wp_paginate')){wp_paginate();} ?>

		</div>

            </div>

	

		</section>

</article>

</div>

<script>jQuery('ol.wp-paginate li:first-child').addClass('sp-first');</script>

	

<?php get_sidebar(); ?>



</div>

<?php get_footer(); ?>