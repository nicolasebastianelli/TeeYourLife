<?php
    session_start();
    if (!isset ($_SESSION['mail'])|| empty($_SESSION['mail'])) 
    {
     $_SESSION['lerr'] = 2;
     header("location:index.php");
    }
    else
    {
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());    
      $query="SELECT * FROM acquisti where code_cli = ".$_SESSION['cod']." order by date_purc desc ";
      $result = mysqli_query($conn,$query);
      $row_cnt = mysqli_num_rows($result);
      if($row_cnt == 0)
      {
       echo"<br>"; 
      echo" <div class='clearfix colelem' id='u6039-4'><!-- content -->";
      echo " <p>Nessun prodotto acquistato</p>";      
      echo "</div>"; 
      mysqli_close($conn);
      }
      else
      {
      mysqli_close($conn);
      echo"<table>";
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {    
      $idpurc=$row['id_purc'];
      $date=$row['date_purc'];
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());
      $query1="SELECT * FROM dettaglio where id_purc= ".$idpurc;
      $result1 = mysqli_query($conn,$query1);
      while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
      {
      
      $code_size=$row1['code_size'];
      $qt_purc=$row1['qt_purc'];
      $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());
      $query2="SELECT * FROM quantita where code_size=".$code_size;
      $result2 = mysqli_query($conn,$query2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
      $size=$row2['size'];
      $id_prod=$row2['id_prod'];
      $query3="SELECT * FROM prodotti where id_prod=".$id_prod;
      $result3 = mysqli_query($conn,$query3);
      $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
      $description=$row3['description'];
      $images=$row3['imagesxs'];
      $price=$row3['price'];
      mysqli_close($conn);  
      echo"<tr>";
      echo"<a href='IT-product.php?id=".$id_prod."'>";
      echo"<div class='SlideShowWidget clearfix grpelem' id='slideshowu6274'><!-- none box -->";
      echo"<div class='popup_anchor' id='u6276popup'>";
      echo" <div class='SlideShowContentPanel clearfix' id='u6276'><!-- stack box -->";
      echo"  <div class='SSSlide clip_frame clearfix grpelem' id='u6277'><!-- image -->";
      echo"   <div id='u6277_clip'>";
      echo"    <img class='ImageInclude position_content' id='u6277_img' src='../".$images."' src='images/blank.gif' alt='' data-width='120' data-height='180'/>";
      echo"   </div>";
      echo"  </div>";
      echo" </div>";
      echo"</div>";
      echo"</div>";
      echo"</a>";
      echo"<div class='rounded-corners clearfix grpelem' id='u6271'><!-- column -->";
      echo" <div class='clearfix colelem' id='pu6309-4'><!-- group -->";
      echo"<a href='IT-product.php?id=".$id_prod."'>";
      echo"  <div class='clearfix grpelem' id='u6309-4'><!-- content -->";
      echo"   <p>".$description."</p>";
      echo"  </div>";
      echo"</a>";
      echo"  <div class='clearfix grpelem' id='u6315-4'><!-- content -->";
      echo"   <p>".$date."</p>";
      echo"  </div>";
      echo" </div>";
      echo" <div class='clearfix colelem' id='u6310-4'><!-- content -->";
      echo"  <p>Taglia: ".$size."</p>";
      echo" </div>";
      echo" <div class='clearfix colelem' id='pu6312-4'><!-- group -->";
      echo"  <div class='clearfix grpelem' id='u6312-4'><!-- content -->";
       echo"  <p>Quantita: ".$qt_purc."</p>";
      echo"  </div>";
     echo"   <div class='clearfix grpelem' id='u6311-4'><!-- content -->";
      echo"   <p>Tot. € ".number_format($price*$qt_purc, 2, ',', ' ')."</p>";
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
  }
   echo"</table>";
  }
  }
   ?>
