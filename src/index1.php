<?php session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- Mobile viewport optimized: h5bp.com/viewport -->
   <meta name="viewport" content="width=device-width">

   <title>Know Your City</title>

   <meta name="robots" content="index, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface." />
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html" />
   <meta name="author" content="AozoraLabs by Marcello Palmitessa"/>
   <link rel="author" href="https://plus.google.com/117689250782136016574/about">

   <!-- remove or comment this line if you want to use the local fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="assets/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">

   <!--  these two css are to use only for documentation -->
   <link rel="stylesheet" type="text/css" href="assets/css/site.css">

   <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  
   <!-- All JavaScript at the bottom, except for Modernizr and Respond.
      Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
      For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
   <script src="assets/js/modernizr-2.6.2.min.js"></script>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3182578-6']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
   </script>
</head>

<body>
   <!--[if lt IE 7]>
   <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
   <![endif]-->

   <header id="hero" class="">
   
         <div class="jumbotron masthead">
            <div class="container-fluid">
               <div class="row-fluid">
                  <div class="inner span7">
                     <h1><b>Know Your City</b></h1>
                     <h2>An Application to get information of City</h2>
                     <p>An App which tells the government approved hotels, tour operators, rainfall condition and crime rate of your city.</p>
                    <!-- <p align="center">-->
                       <!-- <a class="btn btn-large btn-primary" href="https://github.com/aozora/bootmetro/zipball/master">
                           Download Now
                          <i class="icon-arrow-right-7"></i>
                        </a>
                        <span class="muted">it's free</span>
                        <br/>
                        <span class="label label-success">-->
                        
<div align="center" style="opacity:0.7;border-radius:30px;border:10px solid #ffffff;background-color:#ffffff;width=800px">
     
     
<br><br>

<p align="center"><h3>YOUR SELECTED STATE IS:</h3></p>

<?php
if(isset($_REQUEST['myInputName']))
{
$s=$_REQUEST['myInputName'];
     $_SESSION['state']=$s;
}
	 echo "<h2>".$_SESSION['state']."<h2>";
//var_dump($s);
?>

</p>
<br>
</div>

                      <!--  </span>
                     </p>-->
                  </div>
                  <br><br><br>
                <!--  <div class="span5">
                     <img id="hero-image" class="pull-right" width="500" height="265" src="assets/img/hero4.png" alt="hero">
                     <div id="myFlipView" class="carousel flipview slide">
                        <div class="carousel-inner">
                           <div class="item active">
                           </div>
                           <div class="item">
                              <img src="assets/img/bootstrap-mdo-sfmoma-02.jpg" alt="">
                           </div>
                           <div class="item">
                              <img src="assets/img/bootstrap-mdo-sfmoma-03.jpg" alt="">
                           </div>
                        </div>
                        <a class="left carousel-control" href="#myFlipView" data-slide="prev">&#xe0f4;</a>
                        <a class="right carousel-control" href="#myFlipView" data-slide="next">&#xe0f1;</a>
                     </div>
                 <!-- </div> -->
               </div>
            </div>
         </div>
   
   </header>
   
   
   
   <div id="home-tiles" class="container-fluid metro-responsive-tiles">
      <div class="row-fluid">
         <div class="span4">
            <a class="tile wide imagetext bg-color-orange first" href="1c.php">
              <!-- <div class="image-wrapper">
                <!--  <span class="icon icon-github"></span>
               </div>-->
               <div class="column-text">
                  <div class="text-header4">Select Govt. Approved Hotel</div>
                 <!-- <div class="text4">
                     <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=aozora&repo=bootmetro&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
                     <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=aozora&repo=bootmetro&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98px" height="20px"></iframe>
                  </div>-->
               </div>
            </a>
         </div>
         <div class="span4">
            <a class="tile wide imagetext bg-color-green middle" href="tguide.php">
               <!--<div class="image-wrapper">
                  <span class="icon icon-grid"></span>
               </div>-->
               <div class="column-text">
                  <div class="text-header4">Select Tour Guide</div>
               </div>
            </a>
         </div>
         <div class="span4">
            <a class="tile wide imagetext bg-color-blue last" href="chart/examples/pl/index.php">
               <!--<div class="image-wrapper">
                  <span class="icon icon-twitter"></span>
               </div>-->
               <div class="column-text">
                  <div class="text-header4">Crime rate of State</div>
               </div>
            </a>
         </div>
      </div>
   
      <div class="row-fluid">
         <div class="span4">
            <a class="tile wide imagetext bg-color-greenDark first" href="chart/examples/cd/raindrop.php">
               <!--<div class="image-wrapper">
                  <span class="icon icon-map"></span>
               </div>-->
               <div class="column-text">
                  <div class="text-header4">Rainfall measures</div>
               </div>
            </a>
         </div>
         <div class="span4">
            <a class="tile wide imagetext bg-color-blueDark middle" href="./about.html">
               <!--<div class="image-wrapper">
                  <span class="icon icon-info"></span>
               </div>-->
               <div class="column-text">
                  <div class="text-header4">About</div>
               </div>
            </a>
         </div>
		 
		 
		 
		 
        <!-- <div class="span4">
            <div class="tile wide donate bg-color-yellow first" href="f.php">
               <div class="text-header4">Feedback</div>
               <!--<form class="tile-form" action="f.php" method="post">
                  <!--<input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                  <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
               </form>-->

		 
		 <div class="span4">
            <a class="tile wide imagetext bg-color-red middle" href="f.php">
      <!--         <div class="image-wrapper">
                  <span class="icon icon-grid"></span>
               </div-->
               <div class="column-text">
                  <div class="text-header4">Feedback</div>
               </div>
            </a>
         </div>
		 
      </div>
   </div>
   
  <!-- <div class="marketing metro container-fluid">
      <h1>Features</h1>
      <p class="marketing-byline">BootMetro is built on top of the awesome <a target="_blank" href="http://twitter.github.com/bootstrap/index.html">Twitter Bootstrap</a> and <a target="_blank" href="http://html5boilerplate.com/">HTML5 Boilerplate</a> with HTML5, CSS3 and LESS.</p>
   
      <div class="row-fluid">
         <div class="span4">
            <h2>Hub</h2>
            <div class="tile wide image">
               <img src="assets/img/detail-hub.png" alt="hub" />
            </div>
            <p>Give more focus to your content. With a Metro style app you give users immediately focus on the primary infos, increasing the usability and reducing the distractions.</p>
            <!--<p>Use the same tile templates as defined for the original Windows 8 MetroUI.</p>-->
       <!--  </div>
         <div class="span4">
            <h2>Actions</h2>
            <div class="tile wide image">
               <img src="assets/img/detail-appbar-1.png" alt="appbar" />
            </div>
            <p>Use the ApplicationBar to show contextual icon action.</p>
         </div>
         <div class="span4">
            <h2>Navigation</h2>
            <div class="tile wide image">
               <img src="assets/img/detail-headermenu.png" alt="headermenu" />
            </div>
            <p>Implement the navigation in pure MetroUI style, use back-button and the header menu to provide simple ways to navigate to other pages.</p>
         </div>
      </div>
      <div class="row-fluid">
         <div class="span4">
            <h2>Charms</h2>
            <div class="tile wide image">
               <img src="assets/img/detail-charms.png" alt="charms" />
            </div>
            <p>Create charms panels to show contextual settings.</p>
         </div>
         <div class="span4">
            <h2>Font Icons</h2>
            <div class="tile wide image">
               <img src="assets/img/detail-icons.png" alt="icons" />
            </div>
            <p>With the awesome <a href="http://keyamoon.com/icomoon">IcoMoon</a> font icon set, you can use hundreds of font icons with any color and any dimension.</p>
         </div>
         <div class="span4">
            <h2>Messages</h2>
            <div class="tile wide image">
               <img src="assets/img/metro-messages.png" alt="icons" />
            </div>
            <p>Show messages, warning and errors like Windows 8 do.</p>
         </div>
      </div>
      <div class="row-fluid">
         <div class="span4">
            <h2>ListViews</h2>
            <div class="tile wide image">
               <img src="assets/img/listviews.png" alt="charms" />
            </div>
            <p>Show selectable lists of elements.</p>
         </div>
         <div class="span4">
            <h2>Layouts</h2>
            <div class="tile wide image">
               <img src="holder.js/310x150" alt="layout" />
            </div>
            <p>Choose several Windows 8 layouts to enhance your content.</p>
         </div>
         <div class="span4">
         </div>
      </div>
   
   </div>
   
   <div class="marketing container-fluid">
      <h1>Who's tweeting about Bootmetro ?</h1>
      <a class="twitter-timeline" href="https://twitter.com/search?q=%23bootmetro" data-widget-id="265787903525916672">Tweets about "#bootmetro"</a>-->
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
   </div>
   <div id="charms" class="win-ui-dark slide">
   
      <div id="theme-charms-section" class="charms-section">
         <div class="charms-header">
            <a href="#" class="close-charms win-backbutton"></a>
            <h2>Settings</h2>
         </div>
   
         <div class="row-fluid">
            <div class="span12">
   
               <form class="">
                  <label for="win-theme-select">Change theme:</label>
                  <select id="win-theme-select" class="">
                     <option value="metro-ui-light">Light</option>
                     <option value="metro-ui-dark">Dark</option>
                  </select>
               </form>
   
            </div>
         </div>
      </div>
   
   </div>

   <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script>window.jQuery || document.write("<script src='assets/js/jquery-1.8.3.min.js'>\x3C/script>")</script>

   <!--[if IE 7]>
   <script type="text/javascript" src="assets/js/bootmetro-icons-ie7.js">
   <![endif]-->

   <script type="text/javascript" src="assets/js/google-code-prettify/prettify.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="assets/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="assets/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/js/demo.js"></script>
   <script type="text/javascript" src="assets/js/holder.js"></script>
   <script type="text/javascript">
      $('.panorama').panorama({
         nicescroll: true,
         showscrollbuttons: true,
         keyboard: true
      });

      $('#pivot').pivot();
   </script>
</body>
</html>
