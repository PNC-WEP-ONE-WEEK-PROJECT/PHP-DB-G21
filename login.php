<?php
require_once('models/database.php');
session_start();
if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $pass = $_POST['password'];

   global $database;
   $select=$database->prepare("SELECT * FROM users");
   $select->execute();
   $selects= $select->fetch();
}
?>
<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
   <form action="index.php" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account?<a href="register.php">regiser now</a></p>
   </form>
</div>