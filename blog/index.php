<?
require_once("handlers/posts_handler.php");
require_once("handlers/post_handler.php");
require_once("handlers/posts_data_handler.php");
require_once("handlers/post_data_handler.php");
require_once("handlers/comment_handler.php");
require_once("../lib/functions.inc");
require_once("../lib/posts.inc");
require_once("../lib/script_begin.inc");
require_once("../lib/toro.php");

Toro::serve(array(
    "/" => "PostsHandler",
    "/post/:alpha" => "PostHandler",
    "/post/data" => "PostsDataHandler",
    "/post/data/:number" => "PostDataHandler",
    "/post/:alpha/comment" => "CommentHandler"
));

?>
