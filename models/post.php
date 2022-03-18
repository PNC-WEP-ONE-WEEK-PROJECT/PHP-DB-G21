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
// add comment
function addComment($user_id,$posts_id,$comment)
{   
    global $database;
    $statement=$database->prepare("INSERT INTO comments(content,users_id,posts_id) values(:text,:user_id,:post_id)");
    $statement->execute([
        ':text' =>$comment,':user_id'=>$user_id,':post_id'=>$posts_id
    ]);
    return $statement->fetch();

}


// Function DeletePost
function deletePost($posts_id)
{
    global $database;
    $statement=$database->prepare("DELETE FROM posts WHERE posts_id=:id");
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
function updatePost($Descriptions,$posts_id)
{
    global $database;
    $statment = $database->prepare("UPDATE posts SET  Descriptions=:Descriptions where posts_id = :posts_id");
    $statment->execute([
        ':Descriptions'=> $Descriptions,
        ':posts_id'=> $posts_id,

    ]);
}

