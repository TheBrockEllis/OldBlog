<?php
require_once("lib/functions.inc");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Brock Ellis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Brock Ellis of Sharproot Media LLC">

    <!-- Le styles -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="lib/thebrockellis.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
  
  <?php display_header(); ?>
  
    <div class="container">
    
    <div class="page-header" id="index_header">
        <h1>Greetings! <small>My name is Brock Ellis. I love to learn new things.</small></h1>
    </div>
    
    <ul class="thumbnails">
        <li class="span4">
            <div class="thumbnail">
                <img src="assets/family.png" class="main_images" alt="I love my family.">
                <h3 class="main_image_heading">Family</h3>
                <p>
                  I absolutely love my family. God has blessed with me with the best wife a man could ever ask for.
                  I have a wonderful daughter who is the light of my world. I have two dogs (well, maybe one and a half...)
                  who provide me hours of enjoyment.                
                </p>
            </div>
        </li>
        <li class="span4">
            <div class="thumbnail">
                <img src="assets/technology.png" class="main_images" alt="I love technology.">
                <h3 class="main_image_heading">Technology</h3>
                <p>
                  I have been enamored with technology since an early age. I love to tinker and problem solving.
                  The level of creation that you can attain with technology is amazing. Building something from nothing
                  is a awe-inspring process. Not to mention just dang cool.
                </p>
            </div>
        </li>
        <li class="span4">
            <div class="thumbnail">
                <img src="assets/failing.png" class="main_images" alt="I love to fail.">
                <h3 class="main_image_heading">Learning</h3>
                <p>
                  I love to learn. I love to fail, because it means that I am learning.
                  But if I am going to fail, I try to fail as fast as possible so I can pick myself up and move on.
                  I am not afraid to try something new. I consider myself a life long learner. And a life long failer. 
                </p>
            </div>
        </li>
    </ul>
    
    <div class="page-header" id="index_header">
        <h3>Recent Articles</h3>
    </div>
  
    <?php get_recent_posts(); ?>
    
    </div> <!-- /container -->

    <?php display_footer(); ?>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/bootstrap/js/jquery.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
