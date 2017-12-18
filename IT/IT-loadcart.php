<?php
    session_start();
      if(!isset($_SESSION['cart']) || empty($_SESSION['cart']))
      {
      echo"<br>"; 
      echo" <div class='clearfix colelem' id='u6039-4'><!-- content -->";
      echo " <p>Nessun prodotto nel carrello</p>";
      echo "</div>";     
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
      echo"<div class='rounded-corners clearfix grpelem' id='u6046'><!-- group -->";
      echo"<a href='IT-product.php?id=".$id_prod."'>";
      echo"<div class='SlideShowWidget clearfix grpelem' id='slideshowu6052'><!-- none box -->";
      echo"<div class='popup_anchor' id='u6079popup'>";
      echo" <div class='SlideShowContentPanel clearfix' id='u6079'><!-- stack box -->";
      echo"  <div class='SSSlide clip_frame clearfix grpelem' id='u6080'><!-- image -->";
      echo"   <div id='u6080_clip'>";
      echo"    <img class='ImageInclude position_content' id='u6080_img' src='../".$image."' src='images/blank.gif' alt='' data-width='120' data-height='180'/>";
      echo"   </div>";
      echo"  </div>";
      echo" </div>";
      echo"</div>";
      echo"</div>";
      echo"</a>"; 
      echo"<a href='IT-removeproduct.php?codpro=".$codpro."'>";
      echo" <div class='clearfix grpelem'  id='u6047-4'><!-- content -->";
      echo"  <p id='u6048-3'><span style='font-weight: bold;' id='u6048'><font size='4'>×</font></span><span id='u6048-2'>Rimuovi prodotto</span></p>";
      echo" </div>";
      echo"</a>";     
      echo" <div class='clearfix grpelem' id='pu6089-4'><!-- column -->";
      echo"  <a href='IT-product.php?id=".$id_prod."'>";
      echo"  <div class='clearfix colelem' id='u6089-4'><!-- content -->";
      echo"   <p>".$description."</p>";
      echo"  </div>";
      echo"</a>";
      echo"  <div class='clearfix colelem' id='u6090-4'><!-- content -->";
      echo"   <p>Taglia: ".$size."</p>";
      echo"  </div>";
      echo" </div>";
      echo" <div class='clearfix grpelem' id='pu6091-4'><!-- column -->";
      echo"  <div class='clearfix colelem' id='u6091-4'><!-- content -->";
      echo"   <p>€ ".number_format(($price), 2, '.', '')."</p>";
      echo"  </div>";
      echo"  <div class='clearfix colelem' id='u6093-4'><!-- content -->";
     echo"<input type='number' onkeypress='return false;' onChange=\"changeqt('".$codpro."')\" id='qts".$codpro."' value=".$value." min='1' max=".$qt_avail." style='border: thin double #666666; border-radius: 1px; width: 45px;'>";
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
   echo"<br>";
   echo"<br>";


   echo"</tr>";
 
  }
   echo"</table>";
  }
   ?>
