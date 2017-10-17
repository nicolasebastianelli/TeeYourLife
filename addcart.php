<?php
    session_start();
    if(!isset($_POST['id']) || empty($_POST['id'])||!isset($_POST['size']) || empty($_POST['size']))
    {
    if(!isset($_POST['size']) || empty($_POST['size']))
    {
    if(isset($_POST['id']) && !empty($_POST['id']))
    {
    $_SESSION['errsize'] = 2;
    header("location:product.php?id=".$_POST['id']);
    }
    else
    {
    header("location:index.php");
    }
    }    
    }
    else
    {
    $id=$_POST['id'];
    $size=$_POST['size'];      
    $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());   
    $query="SELECT code_size FROM quantita where id_prod ='".$id."' and size='".$size."'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $codpro =$row['code_size'];
    mysqli_close($conn);
    if(isset($_SESSION['cart']))
    {
      if(isset($_SESSION['cart'][$codpro]))
     {
     $_SESSION['cart'][$codpro]=$_SESSION['cart'][$codpro]+1; 
     }
     else
     {
     $_SESSION['cart'][$codpro]=1; 
     }
    }
    else{
    $_SESSION['cart']=array();
    $_SESSION['cart'][$codpro]=1; 
    }
    $_SESSION['cartmsg'] = 2;
    header("location:product.php?id=".$id); 
    }  
?>
