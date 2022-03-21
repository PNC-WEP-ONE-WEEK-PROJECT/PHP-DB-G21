
 <!-- custom css file link-->
<link rel="stylesheet" href="../css/style.css">

<div class="form-container">
   <form action="#" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>
</div>

<?php
require_once('models/database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $cpass =$_POST['cpassword'];

   global $database;
   $select=$database->prepare("SELECT * FROM users");
   $select->execute();
   $selects= $select->fetch();
   
   
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert =$database->query("INSERT INTO `users`(fullName, Email, passwords) VALUES('$name', '$email', '$pass')") ;
         if($insert){
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         foreach($selects as $user){
         }
      }
   }
}
?>