<?php
 session_start();
 if(isset($_SESSION['mail']) || !empty($_SESSION['mail']))
 {
 header("location:index.php");
 }
  $error = 0;
   if(isset($_SESSION['err'])) 
 {
  $error=$_SESSION['err'];
 }
 unset($_SESSION['err']);
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
  <title>TYL : LOGIN</title>
  <!-- CSS -->
  
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4071467339">
  <link rel="stylesheet" type="text/css" href="css/master_en.css?4092102162">
  <link rel="stylesheet" type="text/css" href="css/login.css?3826789396" id="pagesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/alertify.core.css" rel="stylesheet" type="text/css" >
 <link href="css/alertify.default.css" rel="stylesheet" type="text/css" >

  <!-- Other scripts -->
  <script type="text/javascript" src="scripts/alertify.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="u2674-3"><!-- content -->
    <p>&nbsp;</p>
   </div>
   <div class="clearfix grpelem" id="pmenuu344"><!-- group -->
    <ul class="MenuBar clearfix grpelem" id="menuu344"><!-- horizontal box -->
     <li class="MenuItemContainer clearfix grpelem" id="u1201"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem MuseMenuActive" id="u1202" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1204-4"><!-- content --><p>HOME</p></div></a>
     </li>
     <li class="MenuItemContainer clearfix grpelem" id="u2294"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u2295" href="shop.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2296-4"><!-- content --><p>SHOP</p></div></a>
     </li>
     <li class="MenuItemContainer clearfix grpelem" id="u1215"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1218" href="contact-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1221-4"><!-- content --><p>CONTACT US</p></div></a>
     </li>
     <li class="MenuItemContainer clearfix grpelem" id="u1222"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1223" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1225-4"><!-- content --><p>ABOUT US</p></div></a>
     </li>
    </ul>
    <div class="grpelem" id="u433"><!-- custom html -->
     <hr>
</div>
    <div class="grpelem" id="u658"><!-- simple frame --></div>
    <a class="nonblock nontext clip_frame grpelem" id="u674" href="index.php"><!-- image -->
	   <img class="block" id="u674_img" src="images/logo.png" alt="" width="220" height="220"></a>
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
    <div class="grpelem" id="u1131"><!-- simple frame --></div>
    <ul class="MenuBar clearfix grpelem" id="menuu2506"><!-- horizontal box -->
     <li class="MenuItemContainer clearfix grpelem" id="u2562"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u2563"><!-- horizontal box -->
       <div class="clip_frame grpelem" id="u2564"><!-- image --></div>
       <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2565-4"><!-- content -->
        <center>
         <p>ENGLISH</p>
         </center>
       </div>
       <div class="clip_frame grpelem" id="u2566"><!-- image --></div>
      </div>
      <div class="SubMenu  MenuLevel1 clearfix" id="u2567"><!-- vertical box -->
       <ul class="SubMenuView clearfix colelem" id="u2568"><!-- vertical box -->
       <a href="IT/IT-login.php">
        <li class="MenuItemContainer clearfix colelem" id="u2582"><!-- horizontal box -->
         <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2583"><!-- horizontal box -->
          <div class="clip_frame grpelem" id="u2584"><!-- image --></div>
          <div class="MenuItemLabel NoWrap clearfix grpelem" id="u2585-4"><!-- content -->
           <p>ITALIAN</p>
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
    <ul class="MenuBar clearfix grpelem" id="menuu5257"><!-- horizontal box -->
    <a href="register.php">
     <li class="MenuItemContainer clearfix grpelem" id="u5327"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5328"><!-- horizontal box -->
       <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5329-4"><!-- content -->
        <p>Register</p>
       </div>
      </div>
     </li>
     </a>
     <li class="MenuItemContainer clearfix grpelem" id="u5320"><!-- vertical box -->
     <a href="cart.php">
      <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5321"><!-- horizontal box -->
       <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5322-4"><!-- content -->
        <p>Cart (<?php echo($ncart);?>)</p>
       </div>
      </div>
      </a>
     </li>
    </ul>
   </div>
   
   <div class="verticalspacer">
   <div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="controllogin.php" method="post" id="lean_overlay">

	<!--HEADER-->
    <div class="header">
    <center><!--TITLE--><h1>Login</h1><!--END TITLE--></center>
    </div>
    <!--END HEADER-->
	<br>
	<br>
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME-->
		<input name="mail" type="text" class="input username" value="E-mail" onfocus="this.value=''" style="width: 234px" ><!--END USERNAME-->
    <!--PASSWORD-->
		<input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" style="width: 237px" ><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button" ><!--END LOGIN BUTTON-->
    <a href="register.php"><!--REGISTER BUTTON--><input type="button" name="submit" value="Register" class="register" ></a>
    <!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>

   
   </div>
   <div class="browser_width grpelem" id="u1428"><!-- group -->
    <div class="clearfix" id="u1428_align_to_page">
     <div class="clearfix grpelem" id="u1435-4"><!-- content -->
      <p>© 2014 TeeYourLife di Nicola Sebastianelli, All Rights Reserved</p>
     </div>
    </div>
   </div>
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
      function errore() {
			reset();
			alertify.error("Error: E-mail or Password incorrect");
			return false;
		}
		</script>

<?php

if($error>1)
{
echo "<script>errore();</script>";
}

?>
</div>
   </body>
</html>
