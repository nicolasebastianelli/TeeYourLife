<?php
 session_start();
 $ncart = 0;
 if (isset ($_SESSION['cart'])) 
 {
 
 foreach($_SESSION['cart'] as $codpro => $value) 
  {
  $ncart=$ncart+$value;
  } 
 } 
 $empty =0;
 $lerror = 0;
 $remove = 0; 
  if(isset($_SESSION['lerr'])) 
 {
  $lerror=$_SESSION['lerr'];
  }
   if(isset($_SESSION['empty'])) 
 {
  $empty=$_SESSION['empty'];
 }
  if(isset($_SESSION['remove'])) 
 {
  $remove=$_SESSION['remove'];
 }
 unset($_SESSION['remove']);
 unset($_SESSION['lerr']);
 unset($_SESSION['empty']);
 $subtot=0;
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
    {
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
      }
?>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <link rel="shortcut icon" href="../images/favicon.ico?4058492607"/>
  <title>TYL : CARRELLO</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../css/site_global.css?4071467339"/>
  <link rel="stylesheet" type="text/css" href="../css/master_en.css?381059958"/>
  <link rel="stylesheet" type="text/css" href="../css/cart.css?302776764" id="pagesheet"/>
    <link href="../css/alertify.core.css" rel="stylesheet" type="text/css" >
  <link href="../css/alertify.default.css" rel="stylesheet" type="text/css" >
  <!-- Other scripts -->
    <script src="../scripts/alertify.min.js"></script>
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
<script>
    function submitOnClick(formName){
        document.forms[formName].submit();
    }
</script>
<script>
function changeqt(str1)
{
var str2 = document.getElementById("qts"+str1); 
window.location.href ="IT-changeqtcart.php?codpro="+str1+"&qt="+str2.value;
}
</script>
<script>
function loadcart()
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("u6037").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","IT-loadcart.php",true);
xmlhttp.send();
}
</script>

   </head>
 <body>
 <script>loadcart();</script>
  <div class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="u2674-3"><!-- content -->
    <p>&nbsp;</p>
   </div>
   <div class="clearfix grpelem" id="ppmenuu344"><!-- column -->
    <div class="clearfix colelem" id="pmenuu344"><!-- group -->
     <ul class="MenuBar clearfix grpelem" id="menuu344"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u1201"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1202" href="IT-index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1204-4"><!-- content --><p>HOME</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u2294"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u2295" href="IT-shop.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2296-4"><!-- content --><p>SHOP</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u1215"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1218" href="IT-contact-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1221-4"><!-- content --><p>CONTATTACI</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u1222"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1223" href="IT-about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1225-4"><!-- content --><p>CHI SIAMO</p></div></a>
      </li>
     </ul>
     <div class="grpelem" id="u433"><!-- custom html -->
      <hr>
</div>
     <div class="grpelem" id="u658"><!-- simple frame --></div>
     <a class="nonblock nontext clip_frame grpelem" id="u674" href="IT-index.php"><!-- image --><img class="block" id="u674_img" src="../images/logo.png" alt="" width="220" height="220"/></a>
     <div class="grpelem" id="u711"><!-- simple frame --></div>
     <div class="grpelem" id="u788"><!-- simple frame --></div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu931"><!-- none box -->
      <div class="popup_anchor" id="u947popup">
       <div class="ContainerGroup clearfix" id="u947"><!-- stack box -->
        <div class="Container invi grpelem" id="u949"><!-- simple frame --></div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u937"><!-- none box -->
       <div class="popup_anchor">
        <a class="nonblock nontext Thumb popup_element" id="u938" href="https://www.facebook.com/pages/Tee-Your-Life/409884105814115" target="_blank"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="grpelem" id="u1017"><!-- simple frame --></div>
     <div class="grpelem" id="u1024"><!-- simple frame --></div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu1031"><!-- none box -->
      <div class="popup_anchor" id="u1045popup">
       <div class="ContainerGroup clearfix" id="u1045"><!-- stack box -->
        <div class="Container invi grpelem" id="u1046"><!-- simple frame --></div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u1041"><!-- none box -->
       <div class="popup_anchor">
        <a class="nonblock nontext Thumb popup_element" id="u1042" href="http://www.pinterest.com/" target="_blank"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu1047"><!-- none box -->
      <div class="popup_anchor" id="u1061popup">
       <div class="ContainerGroup clearfix" id="u1061"><!-- stack box -->
        <div class="Container invi grpelem" id="u1062"><!-- simple frame --></div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u1057"><!-- none box -->
       <div class="popup_anchor">
        <a class="nonblock nontext Thumb popup_element" id="u1058" href="http://www.instagram.com" target="_blank"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu1063"><!-- none box -->
      <div class="popup_anchor" id="u1077popup">
       <div class="ContainerGroup clearfix" id="u1077"><!-- stack box -->
        <div class="Container invi grpelem" id="u1078"><!-- simple frame --></div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u1073"><!-- none box -->
       <div class="popup_anchor">
        <a class="nonblock nontext Thumb popup_element" id="u1074" href="https://plus.google.com/" target="_blank"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu1079"><!-- none box -->
      <div class="popup_anchor" id="u1093popup">
       <div class="ContainerGroup clearfix" id="u1093"><!-- stack box -->
        <div class="Container invi grpelem" id="u1095"><!-- simple frame --></div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u1089"><!-- none box -->
       <div class="popup_anchor">
        <a class="nonblock nontext Thumb popup_element" id="u1096" href="http://www.twitter.com" target="_blank"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="grpelem" id="u1132"><!-- simple frame --></div>
     <ul class="MenuBar clearfix grpelem" id="menuu2506"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u2562"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u2563"><!-- horizontal box -->
        <div class="clip_frame grpelem" id="u2584"><!-- image --></div>
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2565-4"><!-- content -->
         <center>
         <p>ITALIANO</p>
         </center>
        </div>
        <div class="clip_frame grpelem" id="u2566"><!-- image --></div>
       </div>
       <div class="SubMenu  MenuLevel1 clearfix" id="u2567"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u2568"><!-- vertical box -->
        <a href="../cart.php">
         <li class="MenuItemContainer clearfix colelem" id="u2582"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2583"><!-- horizontal box -->
           <div class="clip_frame grpelem" id="u2564"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2585-4"><!-- content -->
            <p>INGLESE</p>
           </div>
          </div>
         </li>
         </a>
         <li class="MenuItemContainer clearfix colelem" id="u2660"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2663"><!-- horizontal box -->
           <div class="clip_frame grpelem" id="u2665"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2666-4"><!-- content -->
            <p>FRANCESE</p>
           </div>
          </div>
         </li>
         <li class="MenuItemContainer clearfix colelem" id="u2653"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2656"><!-- horizontal box -->
           <div class="clip_frame grpelem" id="u2658"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2659-4"><!-- content -->
            <p>SPAGNOLO</p>
           </div>
          </div>
         </li>
         <li class="MenuItemContainer clearfix colelem" id="u2667"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2670"><!-- horizontal box -->
           <div class="clip_frame grpelem" id="u2673"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2671-4"><!-- content -->
            <p>TEDESCO</p>
           </div>
          </div>
         </li>
        </ul>
       </div>
      </li>
     </ul>
     <ul class="MenuBar clearfix grpelem" id="menuu5257"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u5313"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5314"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5316-6"><!-- content -->
         <p id="u5316-4"><span id="u5316">&nbsp; </span><span id="u5316-2">Ciao.</span><?php if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])){echo"<span id='u5316-3'>Accedi</span>";} else{echo "<span id='u5316-3'>".$_SESSION['name']."</span>";} ?></p>
        </div>
        <div class="clip_frame grpelem" id="u5317"><!-- image --></div>
       </div>
       <div class="SubMenu  MenuLevel1 clearfix" id="u5318"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u5319"><!-- vertical box -->
        <?php if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])){
       echo "<a href='IT-login.php'>"; 
        echo "<li class='MenuItemContainer clearfix colelem' id='u5334'><!-- horizontal box -->";                
         echo "<div class='MenuItem MenuItemWithSubMenu gradient rounded-corners clearfix grpelem' id='u5335'><!-- horizontal box -->";         
         echo  "<div class='MenuItemLabel NoWrap clearfix grpelem' id='u5337-4'><!-- content -->";
          echo  "<p>ACCEDI</p>";
          echo "</div>";           
         echo "</div>";        
        echo "</li>";
        echo"</a>";
         } ?>
         <?php if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){echo"<a href='IT-myorder.php'>";} else{echo"<a href='#' id='error'>";}  ?>
         <li class="MenuItemContainer clearfix colelem" id="u5365"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5366"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5367-4"><!-- content -->
            <p>I Miei Ordini</p>
           </div>
          </div>
         </li>
         </a>
         <?php if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){echo"<a href='IT-myaccount.php'>";} else{echo"<a href='#' id='error2'>";}  ?>
         <li class="MenuItemContainer clearfix colelem" id="u5358"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5359"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5360-4"><!-- content -->
            <p>Il Mio Profilo</p>
           </div>
          </div>
         </li>
         </a>
         <?php if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){echo"<a href='IT-mywishlist.php'>";} else{echo"<a href='#' id='error3'>";}  ?>
         <li class="MenuItemContainer clearfix colelem" id="u5351"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5352"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5353-4"><!-- content -->
            <p>La Mia Lista Dei Desideri</p>
           </div>
          </div>
         </li>
         </a>
         <?php if(isset($_SESSION['mail']) || !empty($_SESSION['mail'])){
         echo "<a href='IT-logout.php'"; 
         echo "<li class='MenuItemContainer clearfix colelem' id='u5344'><!-- horizontal box -->";
          echo"<div class='MenuItem MenuItemWithSubMenu gradient rounded-corners clearfix grpelem' id='u5345'><!-- horizontal box -->";
          echo" <div class='MenuItemLabel NoWrap clearfix grpelem' id='u5346-4'><!-- content -->";
           echo" <p>ESCI</p>";
           echo"</div>";
          echo"</div>";
         echo"</li>";
         echo"</a>";
         }
         ?>
        </ul>
       </div>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u5327"><!-- vertical box -->
      <a href="IT-register.php">
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5328"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5329-4"><!-- content -->
         <p>Registrati</p>
        </div>
       </div>
       </a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u5320"><!-- vertical box -->
      <a href="IT-cart.php">
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem MuseMenuActive" id="u5321"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5322-4"><!-- content -->
         <p>Carrello (<?php echo($ncart);?>)</p>
        </div>
       </div>
       </a>
      </li>
     </ul>
    </div>
    <div class="clearfix colelem" id="pu6037"><!-- group -->
     <div class="clearfix grpelem" id="u6037"><!-- group -->
     </div>
     <div class="rounded-corners clearfix grpelem" id="u6038"><!-- column -->
      <div class="clearfix colelem" id="u6039-4"><!-- content -->
       <p>Totale Provvisorio (<?php echo($ncart);?> prodotti):</p>
      </div>
      <div class="clearfix colelem" id="u6040-4"><!-- content -->
       <p>€ <?php echo(number_format(($subtot), 2, '.', '')); ?></p>
      </div>
      <a href="IT-checkout.php">
      <div class="Button gradient rounded-corners clearfix colelem" id="buttonu6041"><!-- container box -->
       <div class="clearfix grpelem" id="u6044-4"><!-- content -->
        <p>Procedi all'acquisto</p>
       </div>
      </div>
      </a>
     </div>
    </div>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u6041-r-grad.png" alt=""/>
   <img class="preload" src="images/u6041-grad.png" alt=""/>
  </div>
  <![endif]-->
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="../scripts/museutils.js?3865766194" type="text/javascript"></script>
  <script src="../scripts/jquery.musemenu.js?3788803530" type="text/javascript"></script>
  <script src="../scripts/webpro.js?3903299128" type="text/javascript"></script>
  <script src="../scripts/musewpslideshow.js?138381373" type="text/javascript"></script>
  <script src="../scripts/jquery.museoverlay.js?4250894771" type="text/javascript"></script>
  <script src="../scripts/touchswipe.js?4156838003" type="text/javascript"></script>
  <script src="../scripts/jquery.tobrowserwidth.js?3842421675" type="text/javascript"></script>
  <script src="../scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
$('.browser_width').toBrowserWidth();/* browser width elements */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#pamphletu931', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_trigger',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:400,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu931 */
Muse.Utils.initWidget('#pamphletu1031', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_trigger',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:400,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu1031 */
Muse.Utils.initWidget('#pamphletu1047', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_trigger',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:400,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu1047 */
Muse.Utils.initWidget('#pamphletu1063', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_trigger',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:400,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu1063 */
Muse.Utils.initWidget('#pamphletu1079', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_trigger',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:400,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu1079 */
Muse.Utils.initWidget('#slideshowu6052', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,fullScreen:false})); });/* #slideshowu6052 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
 <script type="text/javascript">
		function reset () {
			$("#toggleCSS").attr("href", "alertify.default.css");
			alertify.set({
				labels : {
					ok     : "OK",
					cancel : "Cancel"
				},
				delay : 5000,
				buttonReverse : false,
				buttonFocus   : "ok"
			});
		}		
     		function lerr() {
			reset();
			alertify.error("Effettuare l'accesso");
			return false;
		}
        function empty() {
			reset();
			alertify.error("Carrello vuoto");
			return false;
		}
		function remove() {
			reset();
			alertify.success("Prodotto rimosso dal carrello");
			return false;
		}
		    	$("#error").on( 'click', function () {
			reset();
			alertify.error("Effettuare l'accesso");
			return false;
		});
            $("#error2").on( 'click', function () {
			reset();
			alertify.error("Effettuare l'accesso");
			return false;
		});
		$("#error3").on( 'click', function () {
			reset();
			alertify.error("Effettuare l'accesso");
			return false;
		});



	</script>
<?php
if($lerror>1)
{
echo "<script>lerr();</script>";
}
if($empty>1)
{
echo "<script>empty();</script>";
}
if($remove>1)
{
echo "<script>remove();</script>";
}
?>
   </body>
</html>
