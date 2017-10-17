<?php
 session_start();
 $err=false;
 $mailok= false;
 $passok= false;
 $conn=mysqli_connect("127.0.0.1","teeyourlife","gogvokibko27","my_teeyourlife") or die("Errore di connessione".mysqli_error());    
 $query="SELECT CODE_CLI, NAME,EMAIL,PASSWORD FROM `clienti`";
 $result = mysqli_query($conn,$query);
 mysqli_close($conn);
 echo($_POST['mail']);
 echo( $_POST['password']);
 while ($riga=mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
   if(($riga['EMAIL'] == $_POST['mail']) && ($riga['PASSWORD'] == $_POST['password']))
   {
      $mailok=true;
      $passok=true;
      $name=$riga['NAME'];
      $cod=$riga['CODE_CLI'];
   }
   }    
 if(isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['password']) && !empty($_POST['password']) && ($mailok==true) && ($passok == true))
 {
 
  //utente inserito lo memorizzo in sessione
  $_SESSION['mail'] = $_POST['mail'];
  $_SESSION['password'] = $_POST['password'];
  $_SESSION['name'] = $name;
  $_SESSION['cod'] = $cod;  
  $_SESSION['msg1'] = 2;
  header("location:index.php"); 
 }
 else
 { 
  $_SESSION['err'] = 2; 
 //header("location:login.php");
 }

 
?>
