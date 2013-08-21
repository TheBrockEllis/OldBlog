<?php

class PostObj {

    public $postid;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $created;
    
    public function PostObj($postid) {
        if($postid){
            $this->postid = $postid;
            $this->GetData();
        }
    }
    
    public function GetData(){
        $postid = $this->postid;
        
        if($postid){
            $sql = "SELECT Title, Slug, Content, ";
            $sql .= "Created, Image ";
            $sql .= "FROM Posts ";
            $sql .= "WHERE PostID = $postid";
            //error_log("Post Obj: $sql");
            $rs = mysql_query($sql);
            if($rs) $rsc = mysql_num_rows($rs);
            if($rsc){
                $this->title = mysql_result($rs, $i, "Title");
                $this->slug = mysql_result($rs, $i, "Slug");
                $this->content = mysql_result($rs, $i, "Content");
                $this->image = mysql_result($rs, $i, "Image");
                $this->created = mysql_result($rs, $i, "Created");
            }
        }
    }
    
    public function Insert(){
        $sql = "INSERT INTO Posts (";
        $sql .= "Title, Slug, Content, Image, Created";
        $sql .= ")VALUES(";
        $sql .= "'$this->title', '$this->slug', '$this->content', '$this->image', NOW()";
        $sql .= ")";
        //error_log("Post Obj Insert: $sql");
        $rs = mysql_query($sql);
        if($rs){
            $this->postid = mysql_insert_id();
        }
    }
    
    public function Update(){
        $sql = "UPDATE Posts SET ";
        $sql .= "Title = '$this->title', ";
        $sql .= "Slug = '$this->slug', ";
        $sql .= "Content = '$this->content', ";
        $sql .= "Created = '$this->created', ";
        $sql .= "Image = '$this->image' ";
        $sql .= "WHERE PostID = $this->postid";
        //error_log("Post Obj Update: $sql");
        $rs = mysql_query($sql);        
    }
    
    public function Delete(){
        $sql = "DELETE FROM Posts WHERE PostID = $this->postid ";
        //error_log("Post Obj Delete: $sql");
        $rs = mysql_query($sql);
    }
} // end class