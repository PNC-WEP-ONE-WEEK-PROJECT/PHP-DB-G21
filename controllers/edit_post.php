
<!----------------------------------------- Edit On Post--------------------------------------------- -->

<?php require_once '../models/post.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $posts_id=$_POST['posts_id'];
    $Descriptions=$_POST['Descriptions'];
    if(!empty($Descriptions) and !empty($posts_id)) 
    {
        updatePost($Descriptions,$posts_id);
        header('location:../index.php');
    }
}
?>