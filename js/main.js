// JavaScript Document

$(document).ready (function () {
$(".at-icon").css("fill","#5ccdeb");
});
/* -------------------------------------------------- Mobile Nav Toggles ---- */
//Toggles search open and close on click
$(document).ready (function () {
    $('nav#menu #search h5 a').click(function(){
        if ($('#search form').hasClass('show')) {
            $('#search form').removeClass('show');
            $('nav#menu #search h5 a').removeClass('active');
        } else {
            $('#search form').addClass('show');
            $('nav#menu #search h5 a').addClass('active');
            $('nav#menu ul:nth-of-type(1)').removeClass('show');
            $('nav#menu a').removeClass('toggle');
            $('nav#menu h4 > a').removeClass('toggle');
            $('nav#menu h4').removeClass('toggle');
            $('nav#menu > ul').removeClass('show');
        }
    });

    if (window.matchMedia("(min-width: 1120px)").matches){

        //$( "ul.sub-menu" ).removeClass( "show" );
       
    }
});


//Toggles main nav open and close on click
$(document).ready (function () {
    $('nav#menu h4 a').click(function(){
        if ($('nav#menu ul:nth-of-type(1)').hasClass('show')) {
            $('nav#menu ul:nth-of-type(1)').removeClass('show');
            $('nav#menu h4 > a').removeClass('toggle');
            $('nav#menu h4').removeClass('toggle');
        } else {
            $('nav#menu ul:nth-of-type(1)').addClass('show');
            $('nav#menu a').addClass('toggle');
            $('nav#menu h4').addClass('toggle');
            $('#search form').removeClass('show');
            $('nav#menu #search h5 a').removeClass('active');
        }
    });
});


//Toggles mobile sub nav open and close on click
$(document).ready (function () {
    $('.sub-toggle').click(function(){
        if ($(this).parent('li').children('ul').hasClass('active')) {
            $(this).parent('li').children('ul').removeClass('active');
        } else {
            $(this).parent('li').children('ul').addClass('active');
        }
    });
    
    $('nav#menu ul li a').click(function(){
        if ($(this).parent('li').children('ul').hasClass('active')) {
            $(this).parent('li').children('ul').removeClass('active');
            $(this).parent('li').removeClass('open');               
            
        } else {
            $(this).parent('li').children('ul').addClass('active');
            $(this).parent('li').addClass('open');          
        }
    });        
});


/* ------------------------------------------------- Nav Current Link ---- */

 $(function(){
   var url = window.location.href;
    url = url.substr(url.lastIndexOf("/") + 1);
    $("nav#menu").find("a[href='" + url + "']").closest("li").addClass("active");
    
    $('li.active').parent().parent().addClass("active");
 });






$( window ).load(function() {
    // Handler for .ready() called.
    

    var currentIndex = 21;
    var numMore = 21;
    var totalItems = $("ul#myList li").length;
    var maxCount = 200;
    
    
    $("ul#myList li").hide();
    $("ul#myList li").addClass("firstLoad");
    if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
        $("ul#myList li.firstLoad").slice(0,21).show();
        clickButton();
    }
    
    function clickButton() {
    var currentLength = $("ul#myList li.firstLoad:visible").length;
        if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();     
            $(".lm-block").hide();       
            $("ul#myList li").removeClass("firstLoad");         
        } else {
            $("#loadMore").show();
            $(".lm-block").show();   
        }
        
    }
    $("#loadMore").click(function (e) { 
        e.preventDefault();


        if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
                $("ul#myList li.firstLoad").slice(currentIndex, currentIndex + 20).show();  

                currentIndex += 20;
                clickButton();             
        } 

    });
});


