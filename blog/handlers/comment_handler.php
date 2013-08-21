<?
class CommentHandler {
    function post($slug) {
        error_log("Getting to comment handler");
        $post = get_post_by_slug($slug);
        if (isset($_POST['name']) && isset($_POST['comment']) && 
            strlen(trim($_POST['name'])) > 0 && strlen(trim($_POST['comment'])) > 0) {
            save_comment($post['PostID'], trim($_POST['name']), trim($_POST['comment']));
        }
        header("Location: /blog/post/$slug");
    }
}