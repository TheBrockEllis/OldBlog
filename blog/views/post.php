<?php
require_once("../lib/functions.inc");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog | The Brock Ellis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../../lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../lib/thebrockellis.css" rel="stylesheet">
    <link href="../../lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

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
        
        <?php
            $post = get_post_by_slug($slug);
            include("_post.php");      
            
            //$comments = get_post_comments($post['PostID']);
            //$commentcount = count($comments);
        ?>
        
        <div id="disqus_thread" style="width: 50%; float: left;"></div>
        <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'thebrockellis'; // Required - Replace example with your forum shortname
        var disqus_identifier = '<?php echo $post['PostID']; ?>';
        var disqus_title = '<?php echo $slug; ?>';
        var disqus_url =  'http://www.thebrockellis.com/blog/post/<?php echo $slug; ?>';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
        </script>       
        
        <!-- <h3><?php echo $commentcount ?> Comments:</h3> -->

        <?php
            //foreach($comments as $comment){
              //  include("_comment.php");
            //}
        ?>


        <!-- <h4>Add Comment</h4>
        <form method="post" action="/blog/post/<?= $post['Slug']; ?>/comment">
            <strong>Name:</strong><br/>
            <input type="text" name="name" /><br/>
            <strong>Message:</strong><br/>
            <textarea name="comment"></textarea><br/>
            <input type="submit" />
        </form> -->
        
    </div> <!-- /container -->

    <?php display_footer(); ?>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../bootstrap/js/jquery.js"></script>

  </body>
</html>