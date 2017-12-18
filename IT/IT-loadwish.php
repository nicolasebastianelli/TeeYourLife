<?php
    session_start();
    if (!isset ($_SESSION['mail'])|| empty($_SESSION['mail'])) 
    {
     $_SESSION['lerr'] = 2;
     header("location:IT-index.php");
    }
    else
    {
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());    
      $query="SELECT * FROM desideri where code_cli = ".$_SESSION['cod'];
      $result = mysqli_query($conn,$query);
      $row_cnt = mysqli_num_rows($result);
      if($row_cnt == 0)
      {
       echo"<br>"; 
      echo" <div class='clearfix colelem' id='u6039-4'><!-- content -->";
      echo " <p>Nessum prodotto nella lista dei desideri</p>";      
      echo "</div>"; 
      mysqli_close($conn);
      }
      else
      {
      mysqli_close($conn);
      echo"<table>";
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {    
      $id_prod=$row['id_prod'];
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());
      $query1="SELECT * FROM prodotti where id_prod= ".$id_prod;
      $result1 = mysqli_query($conn,$query1);
      while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
      {
      mysqli_close($conn);
      $price=$row1['price'];
      $image=$row1['imagesxs'];
      $description=$row1['description'];        
      echo"<tr>";     
      echo"<div class='SlideShowWidget clearfix grpelem' id='slideshowu6328'><!-- none box -->";
      echo"<div class='popup_anchor' id='u6359popup'>";
      echo" <div class='SlideShowContentPanel clearfix' id='u6359'><!-- stack box -->";
      echo"  <div class='SSSlide rounded-corners clip_frame clearfix grpelem' id='u6360'><!-- image -->";
      echo"   <div id='u6360_clip'>";
      echo"    <img class='ImageInclude position_content' id='u6360_img' src='../".$image."' src='images/blank.gif' alt='' data-width='120' data-height='180'/>";
      echo"   </div>";
      echo"  </div>";
      echo" </div>";
      echo"</div>";
      echo"</div>";
      echo"<a href='IT-removewish.php?id_prod=".$id_prod."'>";
      echo" <div class='clearfix grpelem'  id='u6047-4'><!-- content -->";
      echo"  <p id='u6048-3'><span style='font-weight: bold;' id='u6048'><font size='4'>× </font></span><span id='u6048-2'>Rimuovi il prodotto dalla lista dei desideri</span></p>";
      echo" </div>";
      echo"</a>";
      echo"<div class='rounded-corners clearfix grpelem' id='u6327'><!-- column -->";
      echo" <div class='clearfix colelem' id='u6363-4'><!-- content -->";
      echo"  <p>".$description."</p>";
      echo" </div>";
      echo" <div class='clearfix colelem' id='pu6365-4'><!-- group -->";
      echo"  <div class='clearfix grpelem' id='u6365-4'><!-- content -->";
      echo"   <p>€ ".$price."</p>";
      echo"  </div>";
      echo"<a href='IT-product.php?id=".$id_prod."'>"; 
      echo"  <div class='Button gradient rounded-corners clearfix grpelem' id='buttonu6370'><!-- container box -->";
      echo"   <div class='clearfix grpelem' id='u6373-4'><!-- content -->";
      echo"    <p>Vai al prodotto</p>";
      echo"   </div>";
      echo"  </div>";
      echo"</a>";
      echo" </div>";
      echo"</div>";      
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";


   echo"</tr>";
  }
  }
   echo"</table>";
  }
  }
   ?>
