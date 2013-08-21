<?php

class PostDataHandler {    
    function get($postid) {        
        echo json_encode( get_post_data($postid) );        
    }
    
    function put($postid) {        
        parse_str(file_get_contents("php://input"),$PUT);
        
        if($PUT['secret'] == "ansleigh12812"){
            $title = $PUT['editpost_title'];
                if(empty($title)) $title = "New Post";
            $slug = $PUT['editpost_slug'];
                if(empty($slug)){
                    $rand = rand(0, 10);
                    $slug = "slug" . $rand;      
                }    
            $content = $PUT['editpost_content'];
                if(empty($content)) $content = "Content of post";
            $image = $PUT['editpost_image'];
                if(empty($image)) $image = "assets/blog/128x128placeholder.png";
            
            $po = new PostObj($postid);
            $po->title = "$title";
            $po->slug = "$slug";
            $po->content = "$content";
            $po->image = "$image";
            $po->Update();
        }
    }
    
    function delete($postid) {
        parse_str(file_get_contents("php://input"),$DELETE);

        if($DELETE['secret'] == "ansleigh12812"){
            $po = new PostObj($postid);
            $po->Delete();
        }
    }
}

?>