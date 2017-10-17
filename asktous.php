<?php
session_start();
if(!isset($_POST['name']) || empty($_POST['name']) ||!isset($_POST['surname']) || empty($_POST['surname']) ||!isset($_POST['message']) || empty($_POST['message'])||!isset($_POST['mail']) || empty($_POST['mail']))
{
 $_SESSION['empty'] = 2;
 header("location:contact-us.php");
}
else
{
$conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());
$query="INSERT INTO messaggi (email,name,surname,message) VALUES ('".$_POST['mail']."','".$_POST['name']."','".$_POST['surname']."','".$_POST['message']."')";
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $_SESSION['msgsend'] = 2;
 header("location:contact-us.php");
 }

?>