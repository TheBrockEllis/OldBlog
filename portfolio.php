<?php
require_once("lib/functions.inc");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio | The Brock Ellis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <div class="row-fluid">
        <div class="span1"></div>
        
        <div class="span7">
            <?php display_portfolio(); ?>
        </div>

        <div class="span3">
            <?php //display_sidebar(); ?>
        </div>

        <div class="span1"></div>
    </div> <!-- /row-fluid -->
    </div> <!-- /container -->

    <?php display_footer(); ?>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="lib/bootstrap/js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $('.portfolio-box').mouseenter(function(){
           $(this).find('.portfolio-overlay').toggle();
        }).mouseleave(function(){
           $(this).find('.portfolio-overlay').toggle();  
        });
    });
    </script>


  </body>
</html>
