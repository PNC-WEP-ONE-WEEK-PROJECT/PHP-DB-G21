<!-------------------------------------------Function------------------------------------------------ -->

<?php
require_once 'database.php';

// Function CreatePost
function createPost($post,$user_id,$images)
{
    global $database;

    $statement=$database->prepare("INSERT INTO posts(Descriptions,users_id,image) values(:text,:user_id,:image)");
    $statement->execute([
        ':text'=> $post,':user_id'=>$user_id,':image'=>$images
    ]);
    return $statement->fetch();
}

// Function DeletePost
function deletePost($posts_id)
{
    global $database;
    $statement=$database->prepare("DELETE FROM posts where posts_id=:id");
    $statement->execute([
        ':id'=>$posts_id
    ]);
    return $statement->fetch();
}

// Function GetAllPosts
function getAllPost()
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts ORDER BY posts_id desc");
    $statement->execute();
    return $statement->fetchAll();

}

// Function GetPost
function getPost($posts_id)
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts where posts_id=:id");
    $statement->execute([
        ':id'=>$posts_id,
    ]);
    return $statement->fetch();
}
// edit post
function updatePost($Descriptions,$posts_id,$filename)
{
    global $database;
    $statment = $database->prepare("UPDATE posts SET  Descriptions=:Descriptions, image =:filename where posts_id = :posts_id");
    $statment->execute([
        ':Descriptions'=> $Descriptions,
        ':posts_id'=> $posts_id,
        ':filename'=> $filename,
    ]);
}