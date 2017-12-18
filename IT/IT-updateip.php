<?php
 session_start();
 if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])||!isset($_SESSION['password']) || empty($_SESSION['password']))
 {
 $_SESSION['lerr'] = 2;
  header("location:IT-index.php");
 }
 else
 {
 if (empty($_POST['name'])&&empty($_POST['surname'])&&empty($_POST['cap'])&&empty($_POST['city'])&&empty($_POST['pass'])&&empty($_POST['address']))
 {
  $_SESSION['empty'] = 2;
  header("location:IT-myaccount.php");
 }
 else
 {
     $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error()); 
     if(isset($_POST['name']))
     {   
    $query="UPDATE clienti SET name='".$_POST['name']."' WHERE code_cli=".$_SESSION['cod'];
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $_SESSION['name'] = $_POST['name'];
   $_SESSION['nup'] = 2;
   header("location:IT-myaccount.php");
   }
    if(isset($_POST['surname']))
     {   
    $query="UPDATE clienti SET surname='".$_POST['surname']."' WHERE code_cli=".$_SESSION['cod'];
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $_SESSION['snup'] = 2;
   header("location:IT-myaccount.php");
   }
 if(isset($_POST['cap']))
     {   
    $query="UPDATE clienti SET cap='".$_POST['cap']."' WHERE code_cli=".$_SESSION['cod'];
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $_SESSION['capup'] = 2;
   header("location:IT-myaccount.php");
   }
 if(isset($_POST['city']))
     {   
    $query="UPDATE clienti SET city='".$_POST['city']."' WHERE code_cli=".$_SESSION['cod'];
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $_SESSION['ctup'] = 2;
   header("location:IT-myaccount.php");
   }
 if(isset($_POST['address']))
     {   
    $query="UPDATE clienti SET address='".$_POST['address']."' WHERE code_cli=".$_SESSION['cod'];
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $_SESSION['adrsup'] = 2;
   header("location:IT-myaccount.php");
   }
 if(isset($_POST['pass']))
     {  
     if($_POST['pass'] == $_POST['repass'])
     {
    $query="UPDATE clienti SET password='".$_POST['pass']."' WHERE code_cli=".$_SESSION['cod'];
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $_SESSION['password']=$_POST['pass'];
   $_SESSION['pswup'] = 2;
   header("location:IT-myaccount.php");
   }
   else
   {
   $_SESSION['pwsnup'] = 2;
   header("location:IT-myaccount.php");
   }
   }

 }   
}           
?>
