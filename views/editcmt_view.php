<!----------------------------------------------Edit comment------------------------------------------------------->
<?php require_once '../templates/header.php'; ?>
<div class="container p-4">
    <?php
    require_once '../models/post.php';
    $comment_id=$_GET['id'];
    $content=getcommt($comment_id);
        ?>
    <form action="../controllers/edit_comment.php" method="post">
        <input type="hidden" value="<?=$comment_id?>" name="comment_id">
        <div class="form-group">
            <input type="text" class="form-control" value="<?=$content['content']?>" name="content">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">edit</button>
        </div>     
    </form>

</div>
<?php require_once '../templates/footer.php'; ?>



    