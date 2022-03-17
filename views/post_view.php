<section class="post">

    <div class="container mt-5">
        <form action="#"  method="post" enctype="multipart/form-data">
            <input type="file" name="uploadfile" value=""/>
            
            <div>
                <button type="submit" name="upload">UPLOAD</button>
            </div>
            
            <div class="form-group">
                <textarea name="text" class="form-control" placeholder="Text" ></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Post</button>
            </div>
        </form>
    </div>
    
    <!-- Upload Images -->
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
      // Get all the submitted data from the form
      $sql = "INSERT INTO   image(filename) VALUES ('$filename')";
      
      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder)) {
          $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }
    
    ?>

<!-- Delete and Post -->

<?php
require_once ('models/post.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    if(!empty($_POST['text']))
    {
        $post=$_POST['text'];
        
        
        createPost($post,1);
    }
}
?>
<div class="contaienr">
    <?php
        $posts=getAllPost();
        foreach($posts as $post):
            
            ?>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><?= $post['Descriptions']?></p>
            <a href="views/edit_view.php?id=<?=$post['posts_id']?>" class="card-link">edit</a>
            <a href="controllers/delete_post.php?id=<?= $post['posts_id'] ?>" class="card-link">delete</a>
        </div>
    </div>
    <?php endforeach;?>
</div>
</section>







