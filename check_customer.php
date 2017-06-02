<?php
  session_start();
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo "1";
  }else {
    echo "0";
  }
 ?>
