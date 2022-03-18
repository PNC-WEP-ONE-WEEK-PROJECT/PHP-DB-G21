<!----------------------------------------- Add comment------------------------------------------------- -->
<?php require_once('../models/post.php');?>
<?php require_once '../templates/header.php'; ?>
<div class="container p-4">
    <?php
    $posts_id=$_GET['id'];
    $comment=getcommts($posts_id);
    ?>
    <form action="../controllers/comment_post.php" method="post">
        <div class="mb-3">
            <textarea name="text" class="" placeholder="Text"></textarea>
            <button type="submit" class="btn_post" name="upload">Send</button>
        </div>
        
    </form>
</div>
<?php require_once '../templates/footer.php'; ?>