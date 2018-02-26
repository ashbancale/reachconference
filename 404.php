<?php get_header(); ?>
<script>jQuery('body').addClass('error-block');</script>
  <div class="container" id="main">

    <div class="fluid-width"> 
    <!--div class="inner-block row"  -->      
        <section class="row homepage">
        <article>
					<h1>404 page not found</h1>                                            
					<h2>Sorry, the page you were looking for doesn't exist.</h2>
					<p>Please try the link below or use the search above to help find your way<br/><br/>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap">Site Map</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact Us</a></p>
					<p>If you followed a broken link, <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">please let us know</a> where the broken link came from.</p>
				</article>
			</section>
		</div>
    </div>
    <?php get_footer(); ?>