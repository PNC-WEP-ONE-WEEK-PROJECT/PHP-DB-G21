<?php

require_once '../models/database.php';
session_start();

if(isset($_POST['submit'])){
   $email =( $_POST['email']);
   $pass = ($_POST['password']);
   $select = $database->prepare( "SELECT * FROM users");
?>
<!-- custom css file link  -->
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="form-container">

   <form action="index.php" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account?</p>
      
   </form>
</div>
</body>
</html> 