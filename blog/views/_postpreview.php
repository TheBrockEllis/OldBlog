<div class="row">
    <div class="span8">
    <div class="row">
    <div class="span8">
        <h3><strong><a href="post/<?php echo $post['Slug']; ?>"><?php echo stripslashes( $post['Title'] ); ?></a></strong></h3>
    </div>
    </div>
    <div class="row">
    <div class="span2">
        <a href="post/<?php echo $post['Slug']; ?>" class="thumbnail"><img src="../<?php echo $post['Image']; ?>" alt=""></a>
    </div>
    <div class="span6">      
        <p class="preview_content"><?php echo substr($post['Content'], 0, 300) . "..."; ?></p>
        <p><a class="btn" href="post/<?php echo $post['Slug']; ?>">Read more</a></p>
    </div>
    </div>
    <div class="row">
    <div class="span8">
        <p></p>
        <p>
        <i class="icon-user"></i> by <a href="#">Brock</a> 
        | <i class="icon-calendar"></i><?php $date = date_create($post['Created']); echo date_format($date, "l jS F Y"); ?> 
        </p>
    </div>
    </div>
    </div>
    </div>
    
    <hr>

