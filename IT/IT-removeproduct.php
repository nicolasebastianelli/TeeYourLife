<?php
session_start();
if(isset($_GET['codpro']) && !empty($_GET['codpro']))
{
$codpro=($_GET['codpro']);
unset($_SESSION['cart'][$codpro]);
$_SESSION['remove'] = 2;
if(count($_SESSION['cart'])=='0')
{
unset($_SESSION['cart']);
}
header("location:IT-cart.php");
}
else
{
header("location:IT-cart.php");
}
  ?>
