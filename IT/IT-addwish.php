<?php
    session_start();
    if(isset($_POST['id']) && !empty($_POST['id']))
    {
    if(isset($_SESSION['mail']) || !empty($_SESSION['mail']))
    {
    $id=$_POST['id']; 
    $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());
    $query="select * from desideri  where id_prod=".$id." and code_cli=".$_SESSION['cod'];
    $result = mysqli_query($conn,$query);   
    echo($rowcount=mysqli_num_rows($result));
    if($rowcount>0)
    {
    $_SESSION['readyexist']=2;
    header("location:IT-product.php?id=".$_POST['id']);
    }
    else
    {
    $query="INSERT INTO desideri (id_prod,code_cli) VALUES ('".$id."','".$_SESSION['cod']."');";
    $result = mysqli_query($conn,$query);
    mysqli_close($conn);   
    $_SESSION['addmsg']=2;
    header("location:IT-product.php?id=".$_POST['id']);
    }
    }
    else
    {
    $_SESSION['loginerr']=2;
    header("location:IT-product.php?id=".$_POST['id']);
    }
    }
    else
    {
    header("location:IT-index.php");
    }
