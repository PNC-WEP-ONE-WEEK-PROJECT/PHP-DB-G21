<?php require_once '../models/post.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $posts_id=$_POST['posts_id'];
    $Descriptions=$_POST['Descriptions'];
    $filename = $_POST["uploadfile"];
    if(!empty($Descriptions)and !empty($filename)) 
    {
        updatePost($Descriptions,$posts_id,$filename);
        header('location:../index.php');   
    }
}
?>