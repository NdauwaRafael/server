<?php
  session_start();
  if (isset($_SESSION['owner_email']) && !empty($_SESSION['owner_email'])) {
    echo "1";
  }else {
    echo "0";
  }
 ?>
