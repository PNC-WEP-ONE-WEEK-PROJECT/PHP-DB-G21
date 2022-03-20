<?php

require_once '../models/database.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:index.php');
}

?>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = $database->prepare("SELECT * FROM users");
      ?>
      <h3><?php echo $fetch['fullName']; ?></h3>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="login.php">login</a></p>
   </div>
</div>
</body>
</html>