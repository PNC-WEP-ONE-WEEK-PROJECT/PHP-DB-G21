<?php require_once '../models/post.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $posts_id=$_POST['posts_id'];
    $Descriptions=$_POST['Descriptions'];
    $image=$_POST['image'];
    if(!empty($Descriptions) and !empty($posts_id)and !empty($image)) 
    {
        updatePost($Descriptions,$posts_id,$image);
        header('location:../index.php');
    }
}
?>