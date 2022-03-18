<?php 
require_once '../models/post.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $posts_id=$_POST['id'];
    $comment=$_POST['content'];
    echo $comment;
    if(!empty($comment))
    {
        addComment(1,$posts_id,$comment);
    }
    header('location:../index.php');
}
?>