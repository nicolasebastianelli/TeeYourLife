
<?php

$conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());   
$query="SELECT cod_coll, desc_coll FROM collezione";
$result = mysqli_query($conn,$query);
   echo"<left>";
   echo" <div class='clearfix colelem' id='u6039-4'><!-- content -->";
   echo " <p>Collections:</p>";      
   echo "</div>";
   echo"</left>";
   echo"<br>";
   echo"<br>";
   echo"<a href='shop.php' style='text-decoration : none; color : #000000;'>";
   echo"<div class='clearfix grpelem' id='u5562-4'><!-- content -->";
   echo"<p>- All collections</p>";
   echo"</div>";
   echo"</a>";
   echo"<br>";
   echo"<br>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {  
   echo"<a href='shop.php?collection=".$row['cod_coll']."' style='text-decoration : none; color : #000000;'>";
   echo"<div class='clearfix grpelem' id='u5562-4'><!-- content -->";
   echo"<p>- ".$row['desc_coll']."</p>";
   echo"</div>";
   echo"</a>";    
   echo"<br>";
   echo"<br>";
   }

mysqli_close($conn);
?>
