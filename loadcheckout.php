<?php
    session_start();
      if(!isset($_SESSION['cart']) || empty($_SESSION['cart']))
      {
     header("location:cart.php");    
      }
      else
      {
      echo"<table>";
      foreach($_SESSION['cart'] as $codpro => $value) {
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());    
      $query="SELECT * FROM quantita where code_size ='".$codpro."'";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);    
      $size=$row['size'];
      $qt_avail=$row['qt_avail'];
      $id_prod=$row['id_prod'];
      $query="SELECT * FROM prodotti where id_prod='".$id_prod."'";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $description=$row['description'];
      $price=$row['price']*$value;
      $image=$row['imagesxs'];  
      mysqli_close($conn);    
      echo"<tr>";
      echo"<div class='rounded-corners clearfix grpelem' id='u6154'><!-- group -->";
      echo"<a href='product.php?id=".$id_prod."'>";
      echo"<div class='SlideShowWidget clearfix grpelem' id='slideshowu6157'><!-- none box -->";
      echo"<div class='popup_anchor' id='u6169popup'>";
      echo" <div class='SlideShowContentPanel clearfix' id='u6069'><!-- stack box -->";
      echo"  <div class='SSSlide clip_frame clearfix grpelem' id='u6170'><!-- image -->";
      echo"   <div id='u6170_clip'>";
      echo"    <img class='ImageInclude position_content' id='u6170_img' src='".$image."' src='images/blank.gif' alt='' data-width='120' data-height='180'/>";
      echo"   </div>";
      echo"  </div>";
      echo" </div>";
      echo"</div>";
      echo"</div>";
      echo"</a>";     
      echo" <div class='clearfix grpelem' id='pu6192-4'><!-- column -->";
      echo"  <a href='product.php?id=".$id_prod."'>";
      echo"  <div class='clearfix colelem' id='u6192-4'><!-- content -->";
      echo"   <p>".$description."</p>";
      echo"  </div>";
      echo"</a>";
      echo"  <div class='clearfix colelem' id='u6193-4'><!-- content -->";
      echo"   <p>Size: ".$size."</p>";
      echo"  </div>";
      echo" </div>";
      echo" <div class='clearfix grpelem' id='pu6194-4'><!-- column -->";
      echo"  <div class='clearfix colelem' id='u6194-4'><!-- content -->";
      echo"   <p>€ ".number_format(($price), 2, '.', '')."</p>";
      echo"  </div>";
      echo"  <div class='clearfix colelem' id='u6195-4'><!-- content -->";
     echo"<p>Quantity: ".$value."</p>";
     echo"  </div>";
     echo" </div>";
     echo" </div>";
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
   echo"</table>";
  }
   ?>
