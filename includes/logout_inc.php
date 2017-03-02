<?php
session_start();
session_destroy();
echo "You successfully logged out";
  header("Location: ../login.php");
 exit();
  ?>