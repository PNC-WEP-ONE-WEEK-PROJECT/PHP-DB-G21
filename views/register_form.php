<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
   <title>register</title>
   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="../css/style.css"> -->

<!-- </head>
<body> -->
<!-- <div class="form-container">
   <form action="register_view.php" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      // if(isset($message)){
      //    foreach($message as $message){
      //       echo '<div class="message">'.$message.'</div>';
      //    }
      // }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="images/jpg, images/jpeg, images/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>
   
</div>
</body>
</html> -->


<?php

// require_once('../models/database.php');
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $pass = $_POST['password'];
//    $cpass =$_POST['cpassword'];
//    $image = $_FILES['image']['name'];
//    $image_size = $_FILES['image']['size'];
//    $image_tmp_name = $_FILES['image']['tmp_name'];
//    $image_folder = 'images/'.$image;

//    global $database;
//    $select=$database->prepare("SELECT * FROM users");
//    $select->execute();
//    $selects= $select->fetchAll();
   
//    print_r ($selects);
//       if($pass != $cpass){
//          $message[] = 'confirm password not matched!';
//       }elseif($image_size > 2000000){
//          $message[] = 'image size is too large!';
//       }else{
//          $insert =$database->query("INSERT INTO `users`(fullName, Email, passwords) VALUES('$name', '$email', '$pass')") ;

         // if($insert){
         //    move_uploaded_file($image_tmp_name, $image_folder);
         //    $message[] = 'registered successfully!';
         //    header('location:login.php');
         // }else{
         //    $message[] = 'registeration failed!';
         // foreach($selects as $user){
         //    print_r($user);
         // }
         // }
      // }
   
// }

?>