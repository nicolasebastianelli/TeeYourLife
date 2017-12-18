<?php
    session_start();
    $exist= false;
    $surname=$_POST['surname'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $cap=$_POST['cap'];
    $country=$_POST['country'];
    $date=$_POST['date'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];    
    $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());    
    $controlmail ="SELECT EMAIL FROM `clienti`";
    $client = mysqli_query($conn,$controlmail);
    while ($riga=mysqli_fetch_array($client,MYSQLI_ASSOC))
    {
    if($riga['EMAIL'] == $email)
    {
    $exist = true;
    }
    }
    if(($password == $password2) && ($exist == false) && (strlen($password) >= 8))
    {
    $query="INSERT INTO `clienti`(NAME,SURNAME,CAP,CITY,COUNTRY,ADDRESS,BIRTH,EMAIL,PASSWORD) VALUES ('$name','$surname','$cap','$city','$country','$address','$date','$email','$password')";
    $result = mysqli_query($conn,$query);
    mysqli_close($conn);
    $_SESSION['msg3'] = 2;
    header("location:IT-index.php");
    }
    else
    {
    if(strlen($password) < 8)
    {
    $_SESSION['lengtherr'] = 2;
    header("location:IT-register.php");
    }

    if($password != $password2)
    {
    $_SESSION['rerr1'] = 2;
    header("location:IT-register.php");
    }
    if($exist == true)
    {
    $_SESSION['rerr2'] = 2;
    header("location:IT-register.php");
    }

    }
    
?>