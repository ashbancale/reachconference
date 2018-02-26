<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TJ2T2VB');</script>
  <!-- End Google Tag Manager -->
  <?php wp_head(); ?> 

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,600,700" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nav.css"> 


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/reach_favicon.png">
  
  <!-- JS
  -------------------------------------------------- -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
  <!-- -->
  <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>   

    <?php if(is_page(array('terms-of-use','privacy-policy','terms','privacy'))){ ?>
        <script>
          $.ajaxSetup({
              scriptCharset: "utf-8", //maybe "ISO-8859-1"
              contentType: "application/json; charset=utf-8"
          });
          $.ajax({
            type: 'GET',
            url: 'https://www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=privacy-policy',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
              $.each(data, function(index, element) {
                var txt = element.content.rendered;
                $("#privacy").html(txt);
              });
            }
          });
          $.ajax({
            type: 'GET',
            url: 'https://www.emeraldexpositions.com/wp-json/wp/v2/pages?slug=terms-of-use',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
              $.each(data, function(index, element) {
                var txt = element.content.rendered;
                $("#terms").html(txt);
              });
            }
          });
        </script>
    <?php } ?> 

  <?php wp_head(); ?>  

  <style>
    html {margin-top:0px !important;}
  </style>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function()  {
googletag.defineSlot('/5993/nbm.ts.reach',  [[728, 90], [300, 50], [970, 90]],  'reach_728_Bottom')
.addService(googletag.pubads())
.setTargeting("pos", "bottom");
googletag.pubads().setTargeting("s1","")
googletag.pubads().setTargeting("s2","")
googletag.pubads().setTargeting("url","");        
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>


</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ2T2VB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if (is_front_page()) : ?>

  <script type="text/javascript">
    $(document).ready(function(){
      if($( window ).width() > 480){
        console.log($( window ).width());
        $('section.container.video').html(`
          <video autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/images/poster_logo.png" id="video-bg">
            <source src="<?php echo get_template_directory_uri(); ?>/media/reach_bg_video.mp4" type="video/mp4">
          </video>
      `);
      } else {
        //console.log('nop');
        console.log($( window ).width());
        $( "section.container.video" ).addClass( "image" );
        $( "section.container.video" ).removeClass( "video" );
        $('section.container.image').html(`
          <img src="<?php echo get_template_directory_uri(); ?>/images/novid.png" />
      `);        
      }
    });
  </script>
<div class="splash-space">
  <section class="container video">
  </section>

</div>
<p class="video-arrow"><a href="#main"><!-- <img src="/media/arrow.png"> --></a></p>


<?php endif; ?>
  <header>
    <div class="header-content">
    <a href="<?php bloginfo('siteurl'); ?>" class="logo-link"><img src="<?php echo get_template_directory_uri(); ?>/images/reach-conference-logo.png" class="logo" /></a>
      <div class="show-info">
        <span class="date"><?php echo do_shortcode("[pods name='sitesettings' field='event_dates']"); ?></span><br />
        <span class="location"><?php echo do_shortcode("[pods name='sitesettings' field='event_location']"); ?></span>
        
      </div>
      <a class="registration-btn" href="<?php echo do_shortcode("[pods name='sitesettings' field='registration_link']"); ?>" target="_blank">Register to Attend</a>
    </div>

        <!-- START nav#main -->
        <?php 
        //change nav later 
        //  
        get_template_part('inc/main-nav'); 
        ?>  

        <!-- END nav#main --> 

  </header>