<?php 
global $current_category;
?>
    <div class="nav-container cf">
        <nav class="container" id="menu">
            <div class="fluid-width">
            <div class="inner-block">
                <?php wp_nav_menu(
                  array(
                    'menu'    => 'Primary Menu',
                    'container' => false,
                    'menu_class' => 'twelve columns',
                    'menu_id' => '',
                    )
                ); ?>

            </div>
        </div>
         <h4><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></h4>   
        <div class="social" style="height:60px;">
            <a target="blank" href="<?php echo do_shortcode("[pods name='sitesettings' field='facebook_link']"); ?>"> 
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>

            <a target="blank" href="<?php echo do_shortcode("[pods name='sitesettings' field='twitter_link']"); ?>"> 
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>

            <a target="blank" href="<?php echo do_shortcode("[pods name='sitesettings' field='instagram_link']"); ?>">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>

            <a target="blank" href="<?php echo do_shortcode("[pods name='sitesettings' field='youtube_link']"); ?>">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>    

            <a target="blank" href="<?php echo do_shortcode("[pods name='sitesettings' field='flickr_link']"); ?>">
                <i class="fa fa-flickr" aria-hidden="true"></i>
            </a>
        </div>                
    </nav>
      
    </div> <!-- end nav-container -->