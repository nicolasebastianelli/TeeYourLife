<?php
 session_start();
  if (!isset ($_SESSION['mail'])|| empty($_SESSION['mail'])) 
 {
  $_SESSION['lerr'] = 2;
  header("location:IT-index.php");
  }
  $ncart = 0;
 if (isset ($_SESSION['cart'])) 
 { 
 foreach($_SESSION['cart'] as $codpro => $value) 
  {
  $ncart=$ncart+$value;
  } 
 }
  $empty = 0;
 $nameupdate= 0;
 $surnameupdate= 0;
 $capupdate=0;
 $cityupdate= 0;
 $addressupdate= 0;
 $pswupdate=0;
 $pwsnotupdate=0;
 if(isset($_SESSION['empty'])) 
 {
  $empty=$_SESSION['empty'];
 }
 if(isset($_SESSION['nup'])) 
 {
  $nameupdate=$_SESSION['nup'];
 }
 if(isset($_SESSION['snup'])) 
 {
  $surnameupdate=$_SESSION['snup'];
 }
  if(isset($_SESSION['capup'])) 
 {
  $capupdate=$_SESSION['capup'];
 }
  if(isset($_SESSION['ctup'])) 
 {
  $cityupdate=$_SESSION['ctup'];
 }
  if(isset($_SESSION['adrsup'])) 
 {
  $addressupdate=$_SESSION['adrsup'];
 }
 if(isset($_SESSION['pswup'])) 
 {
  $pswupdate=$_SESSION['pswup'];
 }
if(isset($_SESSION['pwsnup'])) 
 {
  $pwsnotupdate=$_SESSION['pwsnup'];
 }

 unset($_SESSION['empty']);
 unset($_SESSION['nup']);
 unset($_SESSION['snup']);
 unset($_SESSION['capup']);
 unset($_SESSION['ctup']);
 unset($_SESSION['adrsup']);
 unset($_SESSION['pswup']);
 unset($_SESSION['pwsnup']);
$conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());    
      $query="SELECT * FROM clienti where code_cli  ='".$_SESSION['cod']."'";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      mysqli_close($conn);    
?>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <link rel="shortcut icon" href="../images/favicon.ico?4058492607"/>
  <title>TYL : IL MIO ACCOUNT</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../css/site_global.css?4071467339"/>
  <link rel="stylesheet" type="text/css" href="../css/master_en.css?146998342"/>
  <link rel="stylesheet" type="text/css" href="../css/myaccount.css?4249843011" id="pagesheet"/>
   <link href="../css/alertify.core.css" rel="stylesheet" type="text/css" >
 <link href="../css/alertify.default.css" rel="stylesheet" type="text/css" >

  <!-- Other scripts -->
  <script src="../scripts/alertify.min.js"></script>
  <script>
    function submitOnClick(formName){
        document.forms[formName].submit();
    }
</script>
<script>
function CheckLength(name) {

			var password = document.getElementById(name).value;

			if (password.length < 8 )
			{
			lengtherr();
			}
			else
			{
			document.forms['fpass'].submit();
			}
		}
	</script>
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
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
     <a class="nonblock nontext clip_frame grpelem" id="u674" href="IT-index.php"><!-- image -->
		<img class="block" id="u674_img" src="../images/logo.png" alt="" width="220" height="220"/></a>
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
        <a href="../myaccount.php">
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
            <p>FRENCH</p>
           </div>
          </div>
         </li>
         <li class="MenuItemContainer clearfix colelem" id="u2653"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2656"><!-- horizontal box -->
           <div class="clip_frame grpelem" id="u2658"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2659-4"><!-- content -->
            <p>SPANISH</p>
           </div>
          </div>
         </li>
         <li class="MenuItemContainer clearfix colelem" id="u2667"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2670"><!-- horizontal box -->
           <div class="clip_frame grpelem" id="u2673"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2671-4"><!-- content -->
            <p>GERMAN</p>
           </div>
          </div>
         </li>
        </ul>
       </div>
      </li>
     </ul>
     <div class="clearfix grpelem" id="u2674-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <ul class="MenuBar clearfix grpelem" id="menuu5257"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u5313"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5314"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5316-6"><!-- content -->
         <p id="u5316-4"><span id="u5316">&nbsp; </span><span id="u5316-2">Ciao.</span><?php if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])){echo"<span id='u5316-3'>ACCEDI</span>";} else{echo "<span id='u5316-3'>".$_SESSION['name']."</span>";} ?></p>
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
         <a href='IT-myorder.php'>
         <li class="MenuItemContainer clearfix colelem" id="u5365"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5366"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5367-4"><!-- content -->
            <p>I Miei Ordini</p>
           </div>
          </div>
         </li>
         </a>
         <a href='IT-myaccount.php'>
         <li class="MenuItemContainer clearfix colelem" id="u5358"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5359"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5360-4"><!-- content -->
            <p>Il Mio Profilo</p>
           </div>
          </div>
         </li>
         </a>
         <a href='IT-mywishlist.php'> 
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
      <a href="IT-register.php">
      <li class="MenuItemContainer clearfix grpelem" id="u5327"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5328"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5329-4"><!-- content -->
         <p>Registrati</p>
        </div>
       </div>
      </li>
      </a>
      <a href="IT-cart.php">
      <li class="MenuItemContainer clearfix grpelem" id="u5320"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5321"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5322-4"><!-- content -->
         <p>Carrello (<?php echo($ncart);?>)</p>
        </div>
       </div>
      </li>
      </a>
     </ul>
    </div>
    <div class="rgba-background rounded-corners clearfix colelem" id="u6102"><!-- group -->
     <img class="grpelem" id="u6121-4" src="../images/u6121-5.png" alt="My Account" width="352" height="57"/><!-- rasterized frame -->
    </div>
    <img class="colelem" id="u6174-4" src="../images/u6174-5.png" alt="Change your infos" width="1017" height="57"/><!-- rasterized frame -->
    <div class="clearfix colelem" id="pu6146"><!-- group -->
     <div class="clearfix grpelem" id="u6146"><!-- column -->
      <div class="position_content" id="u6146_position_content">
       <div class="clearfix colelem" id="u6148-4"><!-- content -->
        <p>Nome:</p>
       </div>
       <form name="fname" action="IT-updateip.php" method = "POST" >
       <div class="clearfix colelem" id="u6149-4"> <!-- content -->
        <input type="text" placeholder=<?php echo"' ".$_SESSION['name']."'"; ?> name="name"style="border: thin inset #000000; font-family: Arial, Helvetica, sans-serif; font-size: medium; width: 220px;">
       </div>
       </form>
       <a href="#">
       <div onclick="submitOnClick('fname')" class="Button gradient rounded-corners clearfix colelem" id="buttonu6150"><!-- container box -->
        <div  class="clearfix grpelem" id="u6151-4"><!-- content -->
         <p>Modifica</p>
        </div>
       </div>
       </a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u6179"><!-- column -->
      <div class="position_content" id="u6179_position_content">
       <div class="clearfix colelem" id="u6180-4"><!-- content -->
        <p>Cognome:</p>
       </div>
       <form name="fsurname" action="IT-updateip.php" method = "POST" >
       <div class="clearfix colelem" id="u6181-4"><!-- content -->
        <input type="text" placeholder=<?php echo"' ".$row['surname']."'"; ?> name="surname" style="border: thin inset #000000; font-family: Arial, Helvetica, sans-serif; font-size: medium; width: 220px;">
       </div>
       </form>
       <a href="#">
       <div onclick="submitOnClick('fsurname')" class="Button gradient rounded-corners clearfix colelem" id="buttonu6182"><!-- container box -->
        <div class="clearfix grpelem" id="u6184-4"><!-- content -->
         <p>Modifica</p>
        </div>
       </div>
       </a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u6185"><!-- column -->
      <div class="position_content" id="u6185_position_content">
       <div class="clearfix colelem" id="u6186-4"><!-- content -->
        <p>CAP:</p>
       </div>
       <form name="fcap" action="IT-updateip.php" method = "POST" >
       <div class="clearfix colelem" id="u6187-4"><!-- content -->
        <input type="text" maxlength="5" placeholder=<?php echo"' ".$row['cap']."'"; ?> name="cap" style="border: thin inset #000000; font-family: Arial, Helvetica, sans-serif; font-size: medium; width: 220px;">
       </div>
        </form>
       <a href="#">
       <div onclick="submitOnClick('fcap')" class="Button gradient rounded-corners clearfix colelem" id="buttonu6188"><!-- container box -->
        <div class="clearfix grpelem" id="u6190-4"><!-- content -->
         <p>Modifica</p>
        </div>
       </div>
       </a>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu6209"><!-- group -->
     <div class="clearfix grpelem" id="u6209"><!-- column -->
      <div class="position_content" id="u6209_position_content">
       <div class="clearfix colelem" id="u6210-4"><!-- content -->
        <p>Città:</p>
       </div>
       <form name="fcity" action="IT-updateip.php" method = "POST" >
       <div class="clearfix colelem" id="u6211-4"><!-- content -->
        <input type="text" name="city" placeholder=<?php echo"' ".$row['city']."'"; ?> style="border: thin inset #000000; font-family: Arial, Helvetica, sans-serif; font-size: medium; width: 220px;">
       </div>
       </form>
       <a href="#">
       <div onclick="submitOnClick('fcity')" class="Button gradient rounded-corners clearfix colelem" id="buttonu6212"><!-- container box -->
        <div class="clearfix grpelem" id="u6214-4"><!-- content -->
         <p>Modifica</p>
        </div>
       </div>
       </a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u6215"><!-- column -->
      <div class="position_content" id="u6215_position_content">
       <div class="clearfix colelem" id="u6216-4"><!-- content -->
        <p>Indirizzo:</p>
       </div>
       <form name="faddress" action="IT-updateip.php" method = "POST" >
       <div class="clearfix colelem" id="u6217-4"><!-- content -->
       <input type="text" placeholder=<?php echo"' ".$row['address']."'"; ?> name="address"style="border: thin inset #000000; font-family: Arial, Helvetica, sans-serif; font-size: medium; width: 220px;">
       </div>
       </form>
       <a href="#">
       <div onclick="submitOnClick('faddress')" class="Button gradient rounded-corners clearfix colelem" id="buttonu6218"><!-- container box -->
        <div class="clearfix grpelem" id="u6219-4"><!-- content -->
         <p>Modifica</p>
        </div>
       </div>
       </a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u6221"><!-- column -->
      <div class="position_content" id="u6221_position_content">
       <div class="clearfix colelem" id="u6222-4"><!-- content -->
        <p>Password:</p>
       </div>
       <div class="clearfix colelem" id="u6235-4"><!-- content -->
        <p>Set:</p>
       </div>
       <form name="fpass" action="IT-updateip.php" method = "POST" >
       <div class="clearfix colelem" id="u6223-4"><!-- content -->
        <input type="password" name="pass" id="pass" style="border: thin inset #000000; font-family: Arial, Helvetica, sans-serif; font-size: medium; width: 220px;">
       </div>
       <div class="clearfix colelem" id="u6234-4"><!-- content -->
        <p>Repeat:</p>
       </div>
       <div class="clearfix colelem" id="u6233-4"><!-- content -->
        <input type="password" name="repass" style="border: thin inset #000000; font-family: Arial, Helvetica, sans-serif; font-size: medium; width: 220px;">
       </div>
       </form>
       <a href="#">
       <div onclick="CheckLength('pass')" class="Button gradient rounded-corners clearfix colelem" id="buttonu6224"><!-- container box -->
        <div class="clearfix grpelem" id="u6225-4"><!-- content -->
         <p>Modifica</p>
        </div>
       </div>
       </a>
      </div>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="browser_width colelem" id="u1428"><!-- group -->
     <div class="clearfix" id="u1428_align_to_page">
      <div class="clearfix grpelem" id="u1435-4"><!-- content -->
       <p>© 2014 TeeYourLife di Nicola Sebastianelli, All Rights Reserved</p>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!--[if lt IE 9]>
  <div class="preload_images">
   <img class="preload" src="images/u6150-r-grad.png" alt=""/>
   <img class="preload" src="images/u6150-grad.png" alt=""/>
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
		function empty() {
		reset();
			alertify.error("Valore non settato");
			return false;
		}
		function nameupdate(){
		reset();
			alertify.success("Nome aggiornato con successo");
			return false;
			}
		function surnameupdate(){
		reset();
			alertify.success("Cognome aggiornato con successo");
			return false;
		}
				function capupdate(){
		reset();
			alertify.success("CAP aggiornato con successo");
			return false;
		}
				function cityupdate(){
		reset();
			alertify.success("Città aggiornato con successo");
			return false;
		}
			function addressupdate(){
		reset();
			alertify.success("Indirizzo aggiornato con successo");
			return false;
		}

	function pswupdate(){
		reset();
			alertify.success("Password aggiornato con successo");
			return false;
		}

	function pwsnotupdate(){
		reset();
			alertify.error("Password non corretta");
			return false;
		}
		function lengtherr(){
		reset();
			alertify.error("La password deve essere di almeno 8 caratteri");
			return false;
		}

		


				
	</script>
<?php

if($empty >1)
{
echo "<script>empty();</script>";
}
if($nameupdate>1)
{
echo "<script>nameupdate();</script>";
}
if($surnameupdate>1)
{
echo "<script>surnameupdate();</script>";
}
if($capupdate>1)
{
echo "<script>capupdate();</script>";
}
if($cityupdate>1)
{
echo "<script>cityupdate();</script>";
}
if($addressupdate>1)
{
echo "<script>addressupdate();</script>";
}
if($pwsnotupdate>1)
{
echo "<script>pwsnotupdate();</script>";
}
if($pswupdate>1)
{
echo "<script>pswupdate();</script>";
}

?>

   </body>
</html>
