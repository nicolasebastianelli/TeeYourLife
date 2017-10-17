<?php
    session_start();
    if (!isset ($_SESSION['mail'])|| empty($_SESSION['mail'])) 
    {
     $_SESSION['lerr'] = 2;
     header("location:index.php");
    }
   else
    {
    if(!isset($_GET['id_prod']) || empty($_GET['id_prod']))
    {
    header("location:mywishlist.php");
    }
    else
    {
    $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());    
      $query="DELETE FROM desideri WHERE id_prod = ".$_GET['id_prod']." and code_cli = ".$_SESSION['cod'];
      $result = mysqli_query($conn,$query);
      $_SESSION['msg'] = 2;
     header("location:mywishlist.php");
     mysqli_close($conn);
    } 
    }
    ?>