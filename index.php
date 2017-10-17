<?php
 session_start();
 $message1 = 0;
 $message2 = 0;
 $message3 = 0;
 $ordmsg=0;
 $lerr = 0;
 $error= 0;
 if(isset($_SESSION['lerr'])) 
 {
  $lerr=$_SESSION['lerr'];
 }
 if(isset($_SESSION['msg1'])) 
 {
  $message1=$_SESSION['msg1'];
 }
 if(isset($_SESSION['ordmsg'])) 
 {
  $ordmsg=$_SESSION['ordmsg'];
 }
  if(isset($_SESSION['errr'])) 
 {
  $error=$_SESSION['errr'];
 }
  if(isset($_SESSION['msg2'])) 
 {
  $message2=$_SESSION['msg2'];
 }
  if(isset($_SESSION['msg3'])) 
 {
  $message3=$_SESSION['msg3'];
 }
 unset($_SESSION['errr']);
 unset($_SESSION['lerr']);
 unset($_SESSION['msg1']);
 unset($_SESSION['msg2']);
 unset($_SESSION['msg3']);
 unset($_SESSION['ordmsg']);
 $ncart = 0;
 if (isset ($_SESSION['cart'])) 
 {
 
 foreach($_SESSION['cart'] as $codpro => $value) 
  {
  $ncart=$ncart+$value;
  } 
 } 

?>

<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <meta name="generator" content="7.0.314.244">
  <link rel="shortcut icon" href="images/favicon.ico?4058492607">
  <title>TYL : HOME</title>
  <!-- CSS -->
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" >
   <link rel="stylesheet" type="text/css" href="css/site_global.css?4071467339">
  <link rel="stylesheet" type="text/css" href="css/master_en.css?182554046">
  <link rel="stylesheet" type="text/css" href="css/index.css?76235141" id="pagesheet">
   <link href="css/alertify.core.css" rel="stylesheet" type="text/css" >
 <link href="css/alertify.default.css" rel="stylesheet" type="text/css" >


  <!-- Other scripts -->
  <script src="scripts/alertify.min.js"></script>
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
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive gradient rounded-corners clearfix colelem" id="u1202" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1204-4"><!-- content --><p>HOME</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u2294"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient rounded-corners clearfix colelem" id="u2295" href="shop.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2296-4"><!-- content --><p>SHOP</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u1215"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient rounded-corners clearfix colelem" id="u1218" href="contact-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1221-4"><!-- content --><p>CONTACT US</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u1222"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu gradient rounded-corners clearfix colelem" id="u1223" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1225-4"><!-- content --><p>ABOUT US</p></div></a>
      </li>
     </ul>
     <div class="grpelem" id="u433"><!-- custom html -->
      <hr>
</div>
     <div class="museBGSize grpelem" id="u658"><!-- simple frame --></div>
     <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u674" href="index.php"><!-- image --><img class="block" id="u674_img" src="images/logo.png" alt="" width="220" height="220"/></a>
     <div class="museBGSize grpelem" id="u711"><!-- simple frame --></div>
     <div class="museBGSize grpelem" id="u788"><!-- simple frame --></div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu931"><!-- none box -->
      <div class="popup_anchor" id="u947popup">
       <div class="ContainerGroup clearfix" id="u947"><!-- stack box -->
        <div class="Container invi museBGSize grpelem" id="u949"><!-- simple frame --></div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u937"><!-- none box -->
       <div class="popup_anchor">
        <a class="nonblock nontext Thumb popup_element" id="u938" href="https://www.facebook.com/pages/Tee-Your-Life/409884105814115" target="_blank"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="museBGSize grpelem" id="u1017"><!-- simple frame --></div>
     <div class="museBGSize grpelem" id="u1024"><!-- simple frame --></div>
     <div class="PamphletWidget clearfix grpelem" id="pamphletu1031"><!-- none box -->
      <div class="popup_anchor" id="u1045popup">
       <div class="ContainerGroup clearfix" id="u1045"><!-- stack box -->
        <div class="Container invi museBGSize grpelem" id="u1046"><!-- simple frame --></div>
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
        <div class="Container invi museBGSize grpelem" id="u1062"><!-- simple frame --></div>
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
        <div class="Container invi museBGSize grpelem" id="u1078"><!-- simple frame --></div>
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
        <div class="Container invi museBGSize grpelem" id="u1095"><!-- simple frame --></div>
       </div>
      </div>
      <div class="ThumbGroup clearfix grpelem" id="u1089"><!-- none box -->
       <div class="popup_anchor">
        <a class="nonblock nontext Thumb popup_element" id="u1096" href="http://www.twitter.com" target="_blank"><!-- simple frame --></a>
       </div>
      </div>
     </div>
     <div class="museBGSize grpelem" id="u1131"><!-- simple frame --></div>
     <ul class="MenuBar clearfix grpelem" id="menuu2506"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u2562"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u2563"><!-- horizontal box -->
        <div class="museBGSize clip_frame grpelem" id="u2564"><!-- image --></div>
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2565-4"><!-- content -->
         <center>
         <p>ENGLISH</p>
         </center>
        </div>
        <div class="clip_frame grpelem" id="u2566"><!-- image --></div>
       </div>
       <div class="SubMenu  MenuLevel1 clearfix" id="u2567"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u2568"><!-- vertical box -->
        <a href="IT/IT-index.php">
         <li class="MenuItemContainer clearfix colelem" id="u2582"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu gradient clearfix grpelem" id="u2583"><!-- horizontal box -->
           <div class="museBGSize clip_frame grpelem" id="u2584"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2585-4"><!-- content -->
            <p>ITALIAN</p>
           </div>
          </div>
         </li>
         </a>
         <li class="MenuItemContainer clearfix colelem" id="u2660"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu gradient clearfix grpelem" id="u2663"><!-- horizontal box -->
           <div class="museBGSize clip_frame grpelem" id="u2665"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2666-4"><!-- content -->
            <p>FRENCH</p>
           </div>
          </div>
         </li>
         <li class="MenuItemContainer clearfix colelem" id="u2653"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu gradient clearfix grpelem" id="u2656"><!-- horizontal box -->
           <div class="museBGSize clip_frame grpelem" id="u2658"><!-- image --></div>
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2659-4"><!-- content -->
            <p>SPANISH</p>
           </div>
          </div>
         </li>
         <li class="MenuItemContainer clearfix colelem" id="u2667"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu gradient clearfix grpelem" id="u2670"><!-- horizontal box -->
           <div class="museBGSize clip_frame grpelem" id="u2673"><!-- image --></div>
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
          <p id="u5316-4"><span id="u5316">&nbsp; </span><span id="u5316-2">Hi.</span><?php if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])){echo"<span id='u5316-3'>LogIn</span>";} else{echo "<span id='u5316-3'>".$_SESSION['name']."</span>";} ?></p>
        </div>
        <div class="museBGSize clip_frame grpelem" id="u5317"><!-- image --></div>
       </div>
       <div class="SubMenu  MenuLevel1 clearfix" id="u5318"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem" id="u5319"><!-- vertical box -->
        <?php if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])){
       echo "<a href='login.php'>"; 
        echo "<li class='MenuItemContainer clearfix colelem' id='u5334'><!-- horizontal box -->";                
         echo "<div class='MenuItem MenuItemWithSubMenu gradient rounded-corners clearfix grpelem' id='u5335'><!-- horizontal box -->";         
         echo  "<div class='MenuItemLabel NoWrap clearfix grpelem' id='u5337-4'><!-- content -->";
          echo  "<p>LOGIN</p>";
          echo "</div>";           
         echo "</div>";        
        echo "</li>";
        echo"</a>";
         } ?>
         <?php if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){echo"<a href='myorder.php'>";} else{echo"<a href='#' id='error'>";}  ?>
         <li class="MenuItemContainer clearfix colelem" id="u5365"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5366"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5367-4"><!-- content -->
            <p>My Order</p>
           </div>
          </div>
         </li>
         </a>
         <?php if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){echo"<a href='myaccount.php'>";} else{echo"<a href='#' id='error2'>";}  ?>
         <li class="MenuItemContainer clearfix colelem" id="u5358"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5359"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5360-4"><!-- content -->
            <p>My Account</p>
           </div>
          </div>
         </li>
         </a>
         <?php if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){echo"<a href='mywishlist.php'>";} else{echo"<a href='#' id='error3'>";}  ?>
         <li class="MenuItemContainer clearfix colelem" id="u5351"><!-- horizontal box -->
          <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u5352"><!-- horizontal box -->
           <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5353-4"><!-- content -->
            <p>My Wishlist</p>
           </div>
          </div>
         </li>
         </a>
           <?php if(isset($_SESSION['mail']) || !empty($_SESSION['mail'])){
         echo "<a href='logout.php'"; 
         echo "<li class='MenuItemContainer clearfix colelem' id='u5344'><!-- horizontal box -->";
          echo"<div class='MenuItem MenuItemWithSubMenu gradient rounded-corners clearfix grpelem' id='u5345'><!-- horizontal box -->";
          echo" <div class='MenuItemLabel NoWrap clearfix grpelem' id='u5346-4'><!-- content -->";
           echo" <p>LOGOUT</p>";
           echo"</div>";
          echo"</div>";
         echo"</li>";
         echo"</a>";
         }
         ?>
        </ul>
       </div>
      </li>
      <a href="register.php">
      <li class="MenuItemContainer clearfix grpelem" id="u5327"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u5328"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5329-4"><!-- content -->
         <p>Register</p>
        </div>
       </div>
      </li>
      </a>
      <li class="MenuItemContainer clearfix grpelem" id="u5320"><!-- vertical box -->
      <a href="cart.php">
       <div class="MenuItem MenuItemWithSubMenu gradient clearfix colelem" id="u5321"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5322-4"><!-- content -->
         <p>Cart (<?php echo($ncart);?>)</p>
        </div>
       </div>
       </a>
      </li>
     </ul>
    </div>
    <div class="rgba-background rounded-corners clearfix colelem" id="u5604"><!-- group -->
     <img class="grpelem" id="u5659-4" src="images/u5659-4.png" alt="Welcome to TeeYourLife" width="811" height="57"><!-- rasterized frame -->
    </div>
    <img class="colelem" id="u5672-4" src="images/u5672-4.png" alt="Try the our new spring&#45;summer collection" width="1018" height="82"><!-- rasterized frame -->
    <div class="clearfix colelem" id="pu5671"><!-- group -->
     <a href="product.php?id=6"><div class="rounded-corners grpelem" id="u5671"><!-- simple frame --></div></a>
     <a href="product.php?id=5"><div class="rounded-corners grpelem" id="u5670"><!-- simple frame --></div></a>
     <a href="product.php?id=1"><div class="rounded-corners grpelem" id="u5660"><!-- simple frame --></div></a>
    </div>
    <div class="clearfix colelem" id="pu5692-4"><!-- group -->
     <div class="clearfix grpelem" id="u5692-4"><!-- content -->
      <p>Free and fast shipping</p>
     </div>     
     <div class="clearfix grpelem" id="u5700-4"><!-- content -->
      <p>Fall&#45;Winter 2013</p>
     </div>    
    </div>
    <div class="clearfix colelem" id="pu5685"><!-- group -->
     <div class="rounded-corners grpelem" id="u5685"><!-- simple frame --></div>
    <a href="shop.php?collection=1"> 
    <div class="rounded-corners grpelem" id="u5693"><!-- simple frame --></div> 
    </a>
    </div>
    <div class="verticalspacer"></div>
    <div class="gradient browser_width colelem" id="u1428"><!-- group -->
     <div class="clearfix" id="u1428_align_to_page">
      <div class="clearfix grpelem" id="u1435-4"><!-- content -->
       <p>© 2014 TeeYourLife di Nicola Sebastianelli, All Rights Reserved</p>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/followus_text2.png" alt="">
   <img class="preload" src="images/down-arrow-livello%20164x642.png" alt="">
   <img class="preload" src="images/down-arrow-livello%20164x64.png" alt="">
   <!--[if lt IE 9]>
   <img class="preload" src="images/u1202-r-grad.png" alt=""/>
   <img class="preload" src="images/u1202-m-grad.png" alt=""/>
   <img class="preload" src="images/u1202-a-grad.png" alt=""/>
   <img class="preload" src="images/u2583-r-grad.png" alt=""/>
   <img class="preload" src="images/u2583-m-grad.png" alt=""/>
   <img class="preload" src="images/u2663-r-grad.png" alt=""/>
   <img class="preload" src="images/u2663-m-grad.png" alt=""/>
   <img class="preload" src="images/u5335-r-grad.png" alt=""/>
   <img class="preload" src="images/u5335-grad.png" alt=""/>
   <img class="preload" src="images/u5328-r-grad.png" alt=""/>
   <img class="preload" src="images/u5328-m-grad.png" alt=""/>
   <img class="preload" src="images/u5328-a-grad.png" alt=""/>
   <![endif]-->
  </div>
  
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?3865766194" type="text/javascript"></script>
  <script src="scripts/jquery.musemenu.js?3788803530" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?291134478" type="text/javascript"></script>
  <script src="scripts/webpro.js?3903299128" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?138381373" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?4250894771" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?4156838003" type="text/javascript"></script>
  <script src="scripts/jquery.tobrowserwidth.js?3842421675" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
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
		function login() {
		reset();
			alertify.success("Login completed successfully");
			return false;
		}
		function logout(){
		reset();
			alertify.success("Logout completed successfully");
			return false;
			}
		function signup(){
		reset();
			alertify.success("You have registered successfully");
			return false;
		}
				function registererror(){
		reset();
			alertify.error("You are already registered");
			return false;
		}
				function lerr(){
		reset();
			alertify.error("Please Login");
			return false;
		}

		function ordmsg(){
		reset();
			alertify.alert("Thank you for purchasing our products <3");
			return false;
		}
        	$("#error").on( 'click', function () {
			reset();
			alertify.error("Please login");
			return false;
		});
            $("#error2").on( 'click', function () {
			reset();
			alertify.error("Please login");
			return false;
		});
		$("#error3").on( 'click', function () {
			reset();
			alertify.error("Please login");
			return false;
		});



	</script>

<?php

if($message1>1)
{
echo "<script>login();</script>";
}
if($lerr>1)
{
echo "<script>lerr();</script>";
}
if($message2>1)
{
echo "<script>logout();</script>";
}
if($message3>1)
{
echo "<script>signup();</script>";
}
if($error>1)
{
echo "<script>registererror();</script>";
}
if($ordmsg>1)
{
echo "<script>ordmsg();</script>";
}


?>

   </body>
</html>
