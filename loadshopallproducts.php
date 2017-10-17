<?php

$conn=mysqli_connect("","root","","my_teeyourlife") or die("Errore di connessione".mysqli_error());   

$query="SELECT * FROM prodotti";

$result = mysqli_query($conn,$query);

echo "<br>";

echo "<table id='prodotti' align='center' width='100%' cellspacing='0' cellpadding='0' height:'315px'>";
$i=0;
echo "<tr>";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
   
  if ($i!=3)
  {
  
  
   echo "<td style='width:210px;height:315px';>";
   echo "<div class='SlideShowWidget clearfix grpelem' id='slideshowu5989'><!-- none box -->";
   echo "<div class='popup_anchor' id='u6011popup'>";
   echo "<div class='SlideShowContentPanel clearfix' id='u6011'><!-- stack box -->";
   echo " <div class='SSSlide clip_frame clearfix grpelem' id='u6012' style='left: -10px; top: 0px'><!-- image -->";
   echo "  <div id='u6012_clip'>";
   echo " <img class='ImageInclude position_content' id='u6012_img' src='".$row['imagesl']."' alt='' data-width='210' data-height='315'>";
   echo "  </div>";
   echo " </div>";
   echo "</div>";
   echo " </div>";
   echo "</div>";
   echo "<div class='clearfix grpelem' id='u6024-4'><!-- content -->";
   echo "<p>".$row['description']."</p>";
   echo "</div>";
   echo "<div class='clearfix grpelem' id='u6025-4'><!-- content -->";
   echo " <p>€ ".$row['price']."</p>";
   echo "</div>";
   echo "<a href = 'product.php?id=".$row['id_prod']."'>";
   echo "<div class='rounded-corners grpelem' id='u6026'>";
   echo "</div>";
   echo "</a>";
   echo "</td>";

  $i++;
  }
  else
  {
   echo "</tr>";   
   echo "<tr>";
   echo "<td style='width:210px;height:315px';>";
   echo "<br>";
   echo "<div class='SlideShowWidget clearfix grpelem' id='slideshowu5989'><!-- none box -->";
   echo "<div class='popup_anchor' id='u6011popup'>";
   echo "<div class='SlideShowContentPanel clearfix' id='u6011'><!-- stack box -->";
   echo " <div class='SSSlide clip_frame clearfix grpelem' id='u6012' style='left: -10px; top: 0px'><!-- image -->";
   echo "  <div id='u6012_clip'>";
   echo " <img class='ImageInclude position_content' id='u6012_img' src='".$row['imagesl']."' alt='' data-width='210' data-height='315'>";
   echo "  </div>";
   echo " </div>";
   echo "</div>";
   echo " </div>";
   echo "</div>";
   echo "<div class='clearfix grpelem' id='u6024-4'><!-- content -->";
   echo "<p>".$row['description']."</p>";
   echo "</div>";
   echo "<div class='clearfix grpelem' id='u6025-4'><!-- content -->";
   echo " <p>€ ".$row['price']."</p>";
   echo "</div>";
   echo "<a href = 'product.php?id=".$row['id_prod']."'>";
   echo "<div class='rounded-corners grpelem' id='u6026'>";
   echo "</div>";
   echo "</a>";
   echo "</td>";
   $i=1;
  }
   
  }
  echo "</tr>";
echo "</table>";

mysqli_close($conn);
?>