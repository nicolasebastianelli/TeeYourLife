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
  $send =0;
    if(isset($_SESSION['empty'])) 
 {
  $empty=$_SESSION['empty'];
 }
   if(isset($_SESSION['msgsend'])) 
 {
  $send=$_SESSION['msgsend'];
 }

 unset($_SESSION['empty']);
  unset($_SESSION['msgsend']);
?>

<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?4058492607"/>
  <title>TYL : CONTACT US</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4071467339"/>
  <link rel="stylesheet" type="text/css" href="css/master_en.css?182554046"/>
  <link rel="stylesheet" type="text/css" href="css/contact-us.css?352385688" id="pagesheet"/>
     <link href="css/alertify.core.css" rel="stylesheet" type="text/css" >
 <link href="css/alertify.default.css" rel="stylesheet" type="text/css" >

  <!-- Other scripts -->
  <script src="scripts/alertify.min.js"></script>
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <!--HTML Widget code-->
  
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

  
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pmenuu344"><!-- group -->
     <ul class="MenuBar clearfix grpelem" id="menuu344"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u1201"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1202" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1204-4"><!-- content --><p>HOME</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u2294"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u2295" href="shop.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2296-4"><!-- content --><p>SHOP</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u1215"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u1218" href="contact-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1221-4"><!-- content --><p>CONTACT US</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u1222"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1223" href="about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1225-4"><!-- content --><p>ABOUT US</p></div></a>
      </li>
     </ul>
     <div class="grpelem" id="u433"><!-- custom html -->
      <hr>
</div>
     <div class="grpelem" id="u658"><!-- simple frame --></div>
     <a class="nonblock nontext clip_frame grpelem" id="u674" href="index.php"><!-- image --><img class="block" id="u674_img" src="images/logo.png" alt="" width="220" height="220"/></a>
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
        <a href="IT/IT-contact-us.php">
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
     <div class="clearfix grpelem" id="u2674-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <ul class="MenuBar clearfix grpelem" id="menuu5257"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u5313"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5314"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5316-6"><!-- content -->
         <p id="u5316-4"><span id="u5316">&nbsp; </span><span id="u5316-2">Hi.</span><?php if(!isset($_SESSION['mail']) || empty($_SESSION['mail'])){echo"<span id='u5316-3'>LogIn</span>";} else{echo "<span id='u5316-3'>".$_SESSION['name']."</span>";} ?></p>
        </div>
        <div class="clip_frame grpelem" id="u5317"><!-- image --></div>
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
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5328"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5329-4"><!-- content -->
         <p>Register</p>
        </div>
       </div>
      </li>
      </a>
      <a href="cart.php">
      <li class="MenuItemContainer clearfix grpelem" id="u5320"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u5321"><!-- horizontal box -->
        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u5322-4"><!-- content -->
         <p>Cart (<?php echo($ncart);?>)</p>
        </div>
       </div>
      </li>
      </a>
     </ul>
    </div>
    <div class="rgba-background rounded-corners clearfix colelem" id="u1452"><!-- group -->
     <img class="grpelem" id="u1014-4" src="images/u1014-4.png" alt="Tell us something beautiful" width="811" height="57"/><!-- rasterized frame -->
    </div>
    <div class="clearfix colelem" id="pu1438-4"><!-- group -->
     <div class="clearfix grpelem" id="u1438-4"><!-- content -->
      <p>YOUR FEEDBACK IS IMPORTANT:</p>
     </div>
     <div class="clearfix grpelem" id="u1444-4"><!-- content -->
      <p>GET IN TOUCH:</p>
     </div>
     <div class="clearfix grpelem" id="u1449-4"><!-- content -->
      <p>WRITE TO US ON FACEBOOK:</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu1439"><!-- group -->
     <div class="grpelem" id="u1439"><!-- custom html -->
      <hr>
</div>
     <div class="grpelem" id="u1447"><!-- custom html -->
      <hr>
</div>
     <div class="grpelem" id="u1450"><!-- custom html -->
      <hr>
</div>
    </div>
    <form class="form-grp clearfix colelem" id="u539" method="post" enctype="multipart/form-data" action="asktous.php"><!-- none box -->
     <div class="fld-grp clearfix grpelem" id="widgetu551" data-required="true"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u553-4" for="widgetu551_input"><!-- content -->
       <span class="actAsPara">Name:</span>
      </label>
      <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u555-4"><!-- content --><input class="wrapped-input" placeholder="Enter Name" type="text" spellcheck="false" id="widgetu551_input" name="name" tabindex="2"/></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu541" data-required="true" data-type="email"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u545-4" for="widgetu541_input"><!-- content -->
       <span class="actAsPara">Email:</span>
      </label>
      <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u542-4"><!-- content --><input class="wrapped-input" type="text" placeholder="Enter Mail" spellcheck="false" id="widgetu541_input" name="mail" tabindex="3"/></span>
     </div>
     <input class="submit-btn NoWrap grpelem" id="u557-17" type="submit" value="" tabindex="5"/><!-- state-based BG images -->
     <div class="fld-grp clearfix grpelem" id="widgetu546" data-required="false"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u549-4" for="widgetu546_input"><!-- content -->
       <span class="actAsPara">Message:</span>
      </label>
      <span class="fld-textarea actAsDiv clearfix grpelem" id="u547-4"><!-- content --><textarea class="wrapped-input" placeholder="Enter Your Message" id="widgetu546_input" name="message" tabindex="4"></textarea></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu751" data-required="true"><!-- none box -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u752-4" for="widgetu751_input"><!-- content -->
       <span class="actAsPara">Surname:</span>
      </label>
      <span class="fld-input NoWrap actAsDiv clearfix grpelem" id="u753-4"><!-- content --><input class="wrapped-input" placeholder="Enter Surname" type="text" id="widgetu751_input" name="surname" tabindex="1"/></span>
     </div>
    </form>
    <div class="clearfix colelem" id="pu1446-7"><!-- group -->
     <div class="clearfix grpelem" id="u1446-7"><!-- content -->
      <p id="u1446-2">Call us at: 333&#45;272&#45;8894</p>
      <p id="u1446-4">n.sebastianelli@live.it</p>
      <p>&nbsp;</p>
     </div>
     <div class="grpelem" id="u605"><!-- custom html -->
      
<div class="fb-comments" data-href="https://www.facebook.com/pages/Tee-Your-Life/409884105814115?ref=hl" data-width="349" data-colorscheme="light" data-action="comment" data-num-posts="3" data-order_by="social"></div>

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
  <div class="preload_images">
   <img class="preload" src="images/u557-17-r.png" alt=""/>
   <img class="preload" src="images/u557-17-m.png" alt=""/>
   <img class="preload" src="images/u557-17-fs.png" alt=""/>
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
Muse.Utils.initWidget('#widgetu539', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu539 */
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
			alertify.error("Enter all field");
			return false;
		}
		function send() {
			reset();
			alertify.success("Message send successfully ");
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
if($empty>1)
{
echo "<script>empty();</script>";
}
if($send>1)
{
echo "<script>send();</script>";
}

?>
   </body>
</html>
