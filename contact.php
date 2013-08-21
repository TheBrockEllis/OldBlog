<?php
require_once("lib/functions.inc");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Me | The Brock Ellis</title>
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
            <h1>Get in touch</h1>
			<p>Feel free to drop me an email about anything you fancy.<br />
            Websites, frameworks, tramolines, sports etc. I'll do my best to get back to you as soon as possible.
            </p>
            
            <form action="http://www.thebrockellis.com/contact/" method="post">

				<div class="wrap">
					<label for="contact-name">Name</label>
					<input type="text" value="" name="contact-name" placeholder="Your name">
				</div>

				<div class="wrap">
					<label for="contact-email">Email</label>
					<input type="email" value="" name="contact-email" placeholder="Your email address">
				</div>

				<div class="wrap">
					<label for="contact-message">Message</label>
					<textarea id="contact_textarea" name="contact-message" placeholder="Your message"></textarea>
				</div>

				<input type="submit" value="Send your message" class="btn btn-success">

			</form>
            
        </div>
        <div class="span3"><?php contact_sidebar(); ?></div>
        <div class="span1"></div>
    </div>
        
    </div> <!-- /container -->

    <?php display_footer(); ?>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>

  </body>
</html>
