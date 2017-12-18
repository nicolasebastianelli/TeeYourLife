<?php
 session_start();
 if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])||!isset($_SESSION['password']) || empty($_SESSION['password']))
 {
 $_SESSION['lerr'] = 2;
  header("location:IT-cart.php");
 }
 else
 {
 $subtot=0;
 $date = date("Y-m-d");
    $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());    
    $query="SELECT name,surname,cap,city,country,address FROM CLIENTI where code_cli =".$_SESSION['cod']."";
   $result = mysqli_query($conn,$query);
   mysqli_close($conn);
   $riga=mysqli_fetch_array($result,MYSQLI_ASSOC);
    foreach($_SESSION['cart'] as $codpro => $value) {
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());    
      $query="SELECT id_prod FROM quantita where code_size ='".$codpro."'";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);    
      $id_prod=$row['id_prod'];
      $query="SELECT price FROM prodotti where id_prod='".$id_prod."'";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $price=$row['price']*$value;
      $subtot=$subtot+$price;
      mysqli_close($conn);
      }
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());    
      $query="INSERT INTO acquisti (code_cli ,date_purc,amount) values (".$_SESSION['cod'].",'".$date."',".$subtot.")";
      $result = mysqli_query($conn,$query);
      mysqli_close($conn);      
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error()); 
      $query="SELECT  id_purc from acquisti where code_cli =".$_SESSION['cod']." order by id_purc DESC LIMIT 1";
      $result = mysqli_query($conn,$query);      
      mysqli_close($conn); 
      while($riga=mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      $idacq=$riga["id_purc"];    
      }
      foreach($_SESSION['cart'] as $codpro => $value) {
       $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());    
       $query="INSERT INTO dettaglio (id_purc ,code_size,qt_purc) values (".$idacq.",".$codpro.",".$value.")";
       $result = mysqli_query($conn,$query);
       $query2="SELECT  qt_avail from quantita where code_size =".$codpro;
       $result = mysqli_query($conn,$query2);
       $riga=mysqli_fetch_array($result);
       $qtdispo=$riga["qt_avail"];
      $qtdispo = $qtdispo - $value;
      $query3="UPDATE  quantita SET qt_avail = ".$qtdispo."  where code_size =".$codpro;
       $result = mysqli_query($conn,$query3);
       mysqli_close($conn);
       }        
      unset($_SESSION['cart'] );
      $_SESSION['ordmsg'] = 2;
      header("location:IT-index.php");
      
 }

?>
