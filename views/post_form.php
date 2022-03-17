
<!---------------------------------------------- Form ----------------------------------------------------------------------------------->
<div class="container mt-5">
    <form action="#"  method="post" enctype="multipart/form-data">

        <div class="inputfile">
            <input type="file" name="uploadfile" value=""/>
            <button type="submit" name="upload">ADD POST</button>
        </div>
        
           

        <div class="">
            <textarea name="text" class="form-control" placeholder="Text" ></textarea>
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

<!-- --------------------------------------------Delete and ADDPost ---------------------------------------------------------------------->

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
    <div class="card">
        <div class="card-body">
            <p class="card-text"><?= $post['Descriptions']?></p>
            <div class="image-control">
                <img src="./images/<?= $post['image'] ?>"  alt="">
            </div>
            <div class="card-footer d-flex justify-content-end">
            <a href="views/edit_view.php?id=<?=$post['posts_id']?>" class="card-link">edit</a>
                <a href="controllers/delete_post.php?id=<?= $post['posts_id'] ?>" class="card-link">delete</a>
                <button type="submit" class="btn btn-primary d-flex justify-content-end">Comment</button>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
