<?php
session_start();
require_once("lib/functions.inc");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Brock Ellis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="lib/bootstrap-wysihtml5.css" rel="stylesheet">
    <link href="lib/thebrockellis.css" rel="stylesheet">
        
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements 
    [if lt IE 9]> -->
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- <![endif] -->
    
    <script src="lib/bootstrap/js/jquery.js"></script>

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    
<?php display_header();

function display_login($msg){

?>
<div class="well" id="admin-login">
<form class="form" name="login_form" action="admin.php?task=login" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?php echo $username; ?>" />
    
    <br />
    
    <label for="username">Password:</label>
    <input type="password" name="password" value="<?php echo $password; ?>" />
    
    <br />
    
    <input class="btn btn-primary" name="submit" type="submit" value="Login" />
</form>

<?php if(!empty($msg)) print(" <span class='alert alert-error'> $msg </span> "); ?>

</div>
<?php

}

function display_dashboard(){
    
    if(strcmp($_SESSION['username'], "") == 0){
        $msg = "Please log in";
        display_login($msg);
    }
    
?>

    <div class="row-fluid">
        <div class="span1"></div>
    
        <div class="span10">

            <ul id="admin-tabs" class="nav nav-tabs">
                <li id="tab1" class="active"><a href="#posts" data-toggle="tab">Posts</a></li>
                <li id="tab2"><a href="#portfolio" data-toggle="tab">Portfolio</a></li>
                <li id="tab3"><a href="#contact" data-toggle="tab">Contact</a></li>
                <li id="tab4"><a href="admin.php?task=logout">Logout</a></li>
                <a class="btn pull-right" id="new_button" role="button" data-toggle="modal" href="#newpost">New Post</a>
            </ul>
    
            <div class="tab-content">
                <div class="tab-pane active" id="posts"><?php admin_get_posts(); ?></div>
                <div class="tab-pane" id="portfolio"><?php admin_get_portfolio(); ?></div>
                <div class="tab-pane" id="contact">contact</div>
            </div>    

        </div>
    
        <div class="span1"></div>
    </div>
    

<?php
    
}

////////////////////////////////////////////////
// TASK functions
///////////////////////////////////////////////
if($_GET['task'] == ""){
    
    if($_SESSION['username'] == "brock"){
        display_dashboard();
    }else{    
        display_login($msg);
    }
}

if($_GET['task'] == "login"){
    
    if($_POST['submit']){
        $username = protect($_POST['username']);
        $password = protect($_POST['password']);

        if($username != "brock"){
            $msg = "Incorrect Username/Password";
            display_login($msg);
        }else if($password != "dimension4700"){
            $msg = "Incorrect Username/Password";
            display_login($msg);
        }else{
            $_SESSION['username'] = $username;
            display_dashboard();
        }
    }
}

if($_GET['task'] == 'uploadimage'){
    $postid = $_POST['uploadimage_postid'];

    if(!file_exists("assets/blog/" . $_FILES["file"]["name"])){

        move_uploaded_file($_FILES["file"]["tmp_name"],
        "assets/blog/" . $_FILES["file"]["name"]);
        $imagelocation = "assets/blog/" . $_FILES["file"]["name"];

        $sql = "UPDATE Posts SET ";
        $sql .= "Image = '$imagelocation' ";
        $sql .= "WHERE PostID = $postid";
        //error_log("SQL: $sql");
        $rs = mysql_query($sql);

    }
    
    ?><script type="text/javascript"> location.href = "admin.php"; </script><?php
    //display_dashboard();
    
}

if($_GET['task'] == 'editportfolio'){

    if($_GET['verb'] == 'insert'){
    }

    if($_GET['verb'] == 'update'){
    }

    if($_GET['verb'] == 'delete'){
    }


}


if($_GET['task'] == 'logout'){
    if(strcmp($_SESSION['username'], "") == 0){
        //redirect
        $msg = "You need to be logged in to log out!";
        display_login($msg);
    }else{

    //destroy all sessions canceling the login session
    session_destroy();
    
    $msg = "Successfully logged out";
    display_login($msg);
    
    }
}

?>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="lib/wysihtml5.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/bootstrap-wysihtml5.js"></script>
<script>
$(document).ready(function(){
    $('.nav-tabs li').each(function(){
        $(this).find("a").on("click", function(){
           var target =  $(this).attr('href');
           if(target === "#portfolio"){
                $("#new_button").attr("href", "#newportfolio").html("New Portfolio");    
           }else if(target === "#posts"){
                $("#new_button").attr("href", "#newpost").html("New Post");    
           }
        });
    });
});

</script>


  </body>
</html>
