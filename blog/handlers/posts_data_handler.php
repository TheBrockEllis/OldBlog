<?php

class PostsDataHandler {
    function get() {
        echo json_encode( get_posts_data() ); 
    }
    
    function post() {            
            $title = protect($_POST['newpost_title']);
                if(empty($title)) $title = "New Post";
            $slug = protect($_POST['newpost_slug']);
                if(empty($slug)){
                    $rand = rand(0, 10);
                    $slug = "slug" . $rand;      
                }    
            $content = protect($_POST['newpost_content']);
                if(empty($content)) $content = "Content of post";
            $image = protect($_POST['newpost_image']);
                if(empty($image)) $image = "Images/Blog/128x128placeholder.png";
        
            $po = new PostObj();
            $po->title = "$title";
            $po->slug = "$slug";
            $po->content = "$content";
            $po->image = "$image";
            $po->Insert();      
    }
}

?>    
    
    