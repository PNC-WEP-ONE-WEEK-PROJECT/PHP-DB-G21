<!----------------------------------------- Add comment------------------------------------------------- -->
<?php require_once('../models/post.php');?>
<?php require_once '../templates/header.php'; ?>
<div class="container p-4">
    <?php
    require_once '../models/post.php';
    $posts_id=$_GET['id'];
    $content=getPost($posts_id);
    ?>
    <form action="../controllers/comment_post.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control"  name="content">
            <input type="hidden" class="form-control"  name="id" value="<?php echo $content['posts_id'] ?>">
        </div>
        <div class="display-cmt">
            <button type="submit" class="btn btn-primary btn-block">comment</button>
        </div>
    </form>
</div>
<?php require_once '../templates/footer.php'; ?>