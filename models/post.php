<?php
/**
 * Your code here
 */
require_once 'database.php';

function createPost($post,$user_id)
{
    global $database;

    $statement=$database->prepare("INSERT INTO posts(Descriptions,users_id) values(:text,:user_id)");
    $statement->execute([
        ':text'=> $post,':user_id'=>$user_id
    ]);
    return $statement->fetch();
}

function deletePost($posts_id)
{
    global $database;
    $statement=$database->prepare("DELETE FROM posts where posts_id=:id");
    $statement->execute([
        ':id'=>$posts_id
    ]);
    return $statement->fetch();
}

function getAllPost()
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts ORDER BY posts_id desc");
    $statement->execute();
    return $statement->fetchAll();

}

function getPost($posts_id)
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts where id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}