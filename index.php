<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="packages/normalize-css/normalize.css" />
    <link rel="stylesheet" href="style.css" data-skrollr-stylesheet />
</head>
<body>

    <span id="debug"></span>

    <div class="logo">LOGO</div>

    <div class="menu">
        <ul>
            <li><a id="menu1" href="#page1">Side Project</a></li>
            <li><a id="menu2" href="#page2">Talk to Us</a></li>
            <li><a id="menu3" href="#page3">Teaser</a></li>
        </ul>
    </div>

    <div id="page1" class="page">

        <div class="animation-text welcome" data-0="left:100%;" data-160="left:30%;" data-400="left:30%;" data-700="left: -100%;">
            We Express to Impress
        </div>

    </div>

    <div id="page2" class="page">

        <div class="animation-text welove" data-1000="left:100%;" data-1200="left:30%;" data-2000="left:30%;" data-2600="left:-100%;">
            We love to identify what you need
        </div>

        <div class="animation-text ourgoal" data-1200="left:100%;" data-1300="left:30%;" data-2100="left:30%;" data-2700="left:-100%;">
            Our goal is to achieve beyond your goal
        </div>

        <div class="animation-text translate" data-1300="left:100%;" data-1400="left:30%;" data-2200="left:30%;" data-2800="left:-100%;">
            We'll be attempted to translate your need into the concept
        </div>

    </div>

    <div id="page3" class="page">


    </div>




    <!-- Javascripts -->

    <script src="packages/jquery/jquery.min.js"></script>
    <script src="packages/jquery.localScroll/jquery.localScroll.js"></script>
    <script src="packages/jquery.scrollTo/jquery.scrollTo.min.js"></script>
    <script src="packages/skrollr.min.js"></script>
<!--    <script src="packages/skrollr.stylesheets.min.js"></script> -->
<!--     <script src="packages/skrollr.menu.min.js"></script>
    <script src="packages/skrollr.ie.min.js"></script> -->

    <script type="text/javascript">

    // $(function() {
    //   $('a[href*=#]:not([href=#])').click(function() {
    //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    //       var target = $(this.hash);
    //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    //       if (target.length) {
    //         $('html,body').animate({
    //           scrollTop: target.offset().top
    //         }, 3000);
    //         return false;
    //       }
    //     }
    //   });
    // });

    // Reset position
    $.scrollTo( 0 );

    // document.addEventListener("DOMContentLoaded", function(event) {
    $(function(){

        var s = skrollr.init({
            smoothScrolling: true,
            smoothScrollingDuration: 200,

        });

        $.localScroll.hash({
            target: '#content',
            queue:true,
            duration:1500
        });

        d = document.getElementById('debug');

        menu1 = document.getElementById('menu1').addEventListener('click', function(){
            $.scrollTo(200, 800);
        });

        menu2 = document.getElementById('menu2').addEventListener('click', function(){
            $.scrollTo(1500, 800);
        });;

        menu3 = document.getElementById('menu3').addEventListener('click', function(){
            $.scrollTo(200, 800);
        });;

        // window.onscroll = (function(event) {
        //     d.innerHTML = s.getScrollTop();
        // });


        // skrollr.menu.init(s, {

        //     //skrollr will smoothly animate to the new position using `animateTo`.
        //     animate: true,

        //     //The easing function to use.
        //     easing: 'sqrt',

        //     //How long the animation should take in ms.
        //     duration: function(currentTop, targetTop) {
        //         //By default, the duration is hardcoded at 500ms.
        //         return 500;

        //         //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
        //         //return Math.abs(currentTop - targetTop) * 10;
        //     },

        //     //If you pass a handleLink function you'll disable `data-menu-top` and `data-menu-offset`.
        //     //You are in control where skrollr will scroll to. You get the clicked link as a parameter and are expected to return a number.
        //     handleLink: function(link) {
        //         return 400;//Hardcoding 400 doesn't make much sense.
        //     }
        // });

    });
    </script>
</body>
</html>
