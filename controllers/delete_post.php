<?php

require_once '../models/post.php';

$id= null;
isset($_GET['id'])? $id=$_GET['id'] : $id=null;
if ($id !=null)
{
    echo $id;       
    deletePost($id);
    header('location: ../index.php');
}