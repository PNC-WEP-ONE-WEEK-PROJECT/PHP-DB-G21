<!----------------------------------------- Edit Post------------------------------------------------- -->
<?php require_once '../templates/header.php'; ?>
<div class="container p-4">
    <?php
    require_once '../models/post.php';
    $image=$_POST['image'];
    $posts_id=$_GET['id'];
    $Descriptions=getPost($posts_id);
    ?>
    <form action="../controllers/edit_post.php" method="post">
        <input type="hidden" value="<?=$posts_id?>" name="posts_id">
        <div class="form-group">
            <input type="text" class="form-control" value="<?=$Descriptions['Descriptions']?>" name="Descriptions">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Change</button>
        </div>
    </form>
</div>
<?php require_once '../templates/footer.php'; ?>