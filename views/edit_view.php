<?php
require_once('../templates/header.php');
?>
<div class="container p-4">
    <?php
        require_once ('../models/post.php');
        $id=$_GET['id'];
        $item=getPost($posts_id);
    ?>
        <form action="../controllers/edit_controller.php" method="post">
            <input type="hidden" value="<?=$post['posts_id']?>" name="itemId">
            <div class="form-group">
                <input type="text" class="form-control" value= "<?=$post['posts_id']?>" name="post" >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value= "<?=$post['Descriptions']?>" name="Descriptions" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
</div>
<?php
require_once('../templates/footer.php');
?>