<?php

class PortfolioObj {

    public $portfolioid;
    public $title;
    public $type;
    public $description;
    public $image;
    public $link;
    public $created;
    

    public function PortfolioObj($portfolioid) {
        if($portfolioid){
            $this->portfolioid = $poortfolioid;
            $this->GetData();
        }
    }
    
    private function GetData(){
        $portfolioid = $this->portfolioid;
        
        if($portfolioid){
            $sql = "SELECT Title, Description, Type, ";
            $sql .= "Created, Image, Link ";
            $sql .= "FROM Portfolio ";
            $sql .= "WHERE PortfolioID = $portfolioid";
            //error_log("Post Obj: $sql");
            $rs = mysql_query($sql);
            if($rs) $rsc = mysql_num_rows($rs);
            if($rsc){
                $this->title = mysql_result($rs, 0, "Title");
                $this->type = mysql_result($rs, 0, "Type");
                $this->description = mysql_result($rs, 0, "Description");
                $this->image = mysql_result($rs, 0, "Image");
                $this->link = mysql_result($rs, 0, "Link");
                $this->created = mysql_result($rs, 0, "Created");
            }
        }
    }
    
    public function Insert(){
        $sql = "INSERT INTO Portfolio (";
        $sql .= "Title, Type, Description, Image, Link, Created";
        $sql .= ")VALUES(";
        $sql .= "'$this->title', '$this->type', '$this->description', '$this->image',, '$this->link', NOW()";
        $sql .= ")";
        //error_log("Post Obj Insert: $sql");
        $rs = mysql_query($sql);
        if($rs){
            $this->portfolioid = mysql_insert_id();
        }
    }
    
    public function Update(){
        $sql = "UPDATE Portfolio SET ";
        $sql .= "Title = '$this->title', ";
        $sql .= "Type = '$this->type', ";
        $sql .= "Description = '$this->description', ";
        $sql .= "Created = '$this->created', ";
        $sql .= "Link = '$this->link', ";
        $sql .= "Image = '$this->image' ";
        $sql .= "WHERE PortfolioID = $this->portfolioid";
        //error_log("Post Obj Update: $sql");
        $rs = mysql_query($sql);        
    }
    
    public function Delete(){
        $sql = "DELETE FROM Portfolio WHERE PortfolioID = $this->portfolioid ";
        //error_log("Post Obj Delete: $sql");
        $rs = mysql_query($sql);
    }
} // end class
