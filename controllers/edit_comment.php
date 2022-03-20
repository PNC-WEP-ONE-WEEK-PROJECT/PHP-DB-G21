<!------------------------------------------------- Edit Comment --------------------------------------------->
<?php require_once '../models/post.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $comment_id=$_POST['comment_id'];
    $content=$_POST['content'];
    if(!empty($comment_id) and !empty($content)) 
    {
        editcomment($content,$comment_id);
        header('location:../index.php');
    }else{
        header('location:../views/editcmt_view.php');

    }
}
?>