<?php
    session_start();
if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
      {
      if(isset($_GET['codpro']) && !empty($_GET['codpro']) && isset($_GET['qt']) && !empty($_GET['qt']))
      {
      $qt=$_GET['qt'];
      $codprosel=$_GET['codpro'];
      foreach($_SESSION['cart'] as $codpro => $value) {
      if($codpro==$codprosel)
      {
       $_SESSION['cart'][$codpro]=$qt;
      }
      }
      }
      }
      header("location:IT-cart.php");
?>