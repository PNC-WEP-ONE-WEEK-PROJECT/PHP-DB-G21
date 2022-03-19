
<!---------------------------------------------- Form ----------------------------------------------------------------------------------->
<div class="container mt-5">
    <form action="#"  method="post" class="displayPost" enctype="multipart/form-data">

        <div class="inputfile">
            <input type="file" class="file" name="uploadfile" value="">
            <button type="submit" class="btn_post" name="upload">ADD POST</button>
            <input type="hidden" class="form-control"  name="id" value="<?=$comment['posts_id'] ?>">

        </div>
        <div class="">
            <textarea name="text" class="form-control" placeholder="Text"  ></textarea>
        </div>
    </form>
</div>
<!-- -----------------------------------------Upload Images--------------------------------------------------------------------------- -->
<?php
error_reporting(0);
?>
<?php
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/".$filename;

  
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }

?>
                                            
<!-- -------------------------------------------AddPost - Comment - DeletePost  ---------------------------------------------------------------------->

<?php
require_once ('models/post.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{

    if(!empty($_POST['text']))
    {
        $post=$_POST['text'];

    // Call function CreatePost
        createPost($post,1,$filename);
    }
}
?>
<div class="container">
    <?php
        $posts=getAllPost();
        
        // For loop
        foreach($posts as $post):
    ?>
    <!-- profile user -->
    <div class="card2">
        <i class="fa fa-user-circle-o"></i>
        <p class="p">Mr willSmith</p>
    </div>

    <div class="card">
        <div class="card-body">
            <p class="card-text"><?= $post['Descriptions']?></p>
            <div class="image-control">
                <img src="./images/<?= $post['image'] ?>"  alt="">
            </div>
            <div class="card-footer d-flex justify-content-end">
                <a href="views/edit_view.php?id=<?=$post['posts_id']?>" class="card-link btn btn-primary d-flex justify-content-end">Edit</a>
                <a href="controllers/delete_post.php?id=<?= $post['posts_id'] ?>" class="btn btn-danger d-flex justify-content-end card-link">Delete</a>
                <a href="views/comment_view.php?id=<?= $post['posts_id'] ?>" class="card-link btn btn-primary">Comment</a>
            </div>
    </div>
    <div class="card-footer">
        <?php
        $comments=getcommts($post['posts_id']);
    // For loop on comment
        foreach($comments as  $comment):
         ?>
    <!-- Display comments -->
            <div class="card-cmt">
                <?php echo $comment['content'] ?>
        <a href="controllers/delete_cmt.php?id=<?= $post['posts_id'] ?>" class="card-link btn btn-primary">Delete</a>
        </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endforeach;?>
</div>

