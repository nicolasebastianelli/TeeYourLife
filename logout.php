<?php
session_start();
unset($_SESSION['password']);
unset($_SESSION['mail']);
unset($_SESSION['name']);
unset($_SESSION['cod']);
unset($_SESSION['subtot']);
$_SESSION['msg2'] = 2;
header("location:index.php");
  ?>
