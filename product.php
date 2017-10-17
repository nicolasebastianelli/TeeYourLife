<?php
session_start();
 if(isset($_GET['id']) && !empty($_GET['id']) )
 {
  $id=$_GET['id'];
 }
 else
 {
 header("location:index.php");
 }
  $lerror = 0;
  $addmessage = 0;
  $cartmessage=0;
  $errsize=0;
  $readyexist=0;
  if(isset($_SESSION['errsize'])) 
 {
  $errsize=$_SESSION['errsize'];
  }
    if(isset($_SESSION['readyexist'])) 
 {
  $readyexist=$_SESSION['readyexist'];
  }
  if(isset($_SESSION['loginerr'])) 
 {
  $lerror=$_SESSION['loginerr'];
  }
 if(isset($_SESSION['addmsg'])) 
 {
  $addmessage=$_SESSION['addmsg'];
}
 if(isset($_SESSION['cartmsg'])) 
 {
  $cartmessage=$_SESSION['cartmsg'];
}
 unset($_SESSION['loginerr']);
 unset($_SESSION['readyexist']);
 unset($_SESSION['addmsg']);
 unset($_SESSION['cartmsg']);
 unset($_SESSION['errsize']);
  $ncart = 0;
 $conn=mysqli_connect("127.0.0.1","root","","my_teeyourlife") or die("Errore di connessione".mysql_error());    
 $query="SELECT * FROM prodotti where id_prod ='".$id."'";
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $images=$row['imagesb'];
 $descrizione=$row['description'];
 $prezzo=$row['price']; 
 $query="SELECT * FROM quantita where id_prod ='".$id."'";
 $result = mysqli_query($conn,$query);
 $sizeqt=array();
 $codsize=array();
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
  $size=$row['size'];
  $qt=$row['qt_avail'];
  $code=$row['code_size'];
  $codsize[$code]=$size;
  $sizeqt[$size]=$qt;
  $boolsize=array("S"=>"false","M"=>"false","L"=>"false","XL"=>"false");
 }
 mysqli_close($conn);
  if (isset ($_SESSION['cart'])) 
 {
 foreach($_SESSION['cart'] as $codpro => $value) 
  {
    $ncart=$ncart+$value;
    foreach($codsize as $code => $size) 
    {
    if($code==$codpro)
    {
    if($sizeqt[$size]==$value)
    {
     $boolsize[$size]=true;
    }
    }
    }
  } 
 } 
?>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?4058492607"/>
  <title>TYL : PRODUCT</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4071467339"/>
  <link rel="stylesheet" type="text/css" href="css/master_en.css?182554046"/>
  <link rel="stylesheet" type="text/css" href="css/product.css?144546145" id="pagesheet"/>
    <link href="css/alertify.core.css" rel="stylesheet" type="text/css" >
 <link href="css/alertify.default.css" rel="stylesheet" type="text/css" >

  <!-- Other scripts -->
    <script type="text/javascript" src="scripts/alertify.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
  <script type="text/javascript">  
   document.documentElement.className += ' js';
</script>
<script>
    function submitOnClick(formName){
        document.forms[formName].submit();
    }
</script>
   </head>
 <body>
<div>
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pmenuu344"><!-- group -->
     <ul class="MenuBar clearfix grpelem" id="menuu344"><!-- horizontal box -->
      <li class="MenuItemContainer clearfix grpelem" id="u1201"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u1202" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1204-4"><!-- content --><p>HOME</p></div></a>
      </li>
      <li class="MenuItemContainer clearfix grpelem" id="u2294"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u2295" href="shop.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u2296-4"><!-- content --><p>SHOP</p></div></a>
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
        <?php echo"<a href='IT/IT-product.php?id=".$id."'>"; ?>
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
    <div class="SlideShowWidget clearfix colelem" id="slideshowu4981"><!-- none box -->
     <div class="popup_anchor" id="u4992popup">
      <div class="SlideShowContentPanel clearfix" id="u4992"><!-- stack box -->
       <div class="SSSlide clip_frame grpelem" id="u4997"><!-- image -->
        <img class="block ImageInclude" id="u4997_img" <?php echo"data-src='".$images."'"?> src="images/blank.gif" alt="" data-width="382" data-height="573">
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu5595"><!-- group -->
     <div class="clip_frame grpelem" id="u5595"><!-- image -->
      <img class="block" id="u5595_img" src="images/logo3.jpg" alt="" width="111" height="111"/>
     </div>
     <div class="clearfix grpelem" id="pu5570-4"><!-- column -->
      <div class="clearfix colelem" id="u5570-4"><!-- content -->
       <p><?php echo($prezzo);?> €</p>
      </div>
      <form name="myForm" action="addcart.php" method = "POST" >
      <input type="hidden" name="id" value="<?php echo($id);?>">
      <div class="clearfix colelem" id="u5573-4"><!-- content -->
       <p>
       <select required name="size"tabindex="1" style="width: 207px; ">
       <option disabled value=''>--size--</option>
       <?php if ($sizeqt[S]!=0) {if($boolsize[S]=="true"){echo"<option disabled>S&nbsp;&nbsp;-&nbsp;&nbsp;Maximum number of products reached</option>";}else{echo"<option value='S'>S</option>";}} else {echo"<option disabled>S&nbsp;&nbsp;-&nbsp;&nbsp;Sold Out</option>";}?>
       <?php if ($sizeqt[M]!=0) {if($boolsize[M]=="true"){echo"<option disabled>M&nbsp;&nbsp;-&nbsp;&nbsp;Maximum number of products reached</option>";}else{echo"<option value='M'>M</option>";}} else {echo"<option disabled>M&nbsp;&nbsp;-&nbsp;&nbsp;Sold Out</option>";}?> 
       <?php if ($sizeqt[L]!=0) {if($boolsize[L]=="true"){echo"<option disabled>L&nbsp;&nbsp;-&nbsp;&nbsp;Maximum number of products reached</option>";}else{echo"<option value='L'>L</option>";}} else {echo"<option disabled>L&nbsp;&nbsp;-&nbsp;&nbsp;Sold Out</option>";}?>       
       <?php if ($sizeqt[XL]!=0){if($boolsize[XL]=="true"){echo"<option disabled>XL&nbsp;&nbsp;-&nbsp;&nbsp;Maximum number of products reached</option>";}else{echo"<option value='XL'>XL</option>";}} else {echo"<option disabled>XL&nbsp;&nbsp;-&nbsp;&nbsp;Sold Out</option>";}?>
       </select>
       </p>
      </div>
      </form>
     </div>
    </div>
    <form name="myForm2" action="addwish.php" method = "POST" >
    <input type="hidden" name="id" value="<?php echo($id);?>">
    </form>
    <div class="clearfix colelem" id="ppu5569-4"><!-- group -->
     <div class="clearfix grpelem" id="pu5569-4"><!-- column -->
      <div class="clearfix colelem" id="u5569-4"><!-- content -->
       <p><?php echo($descrizione);?></p>
      </div>
     </div>
     <a href="#">
     <div class="Button gradient rounded-corners clearfix grpelem" onclick="submitOnClick('myForm')" id="buttonu5581"><!-- container box -->      <div class="rounded-corners grpelem" id="u5584"><!-- simple frame --></div>
      <div class="Button gradient rounded-corners clearfix grpelem" id="buttonu5586"><!-- container box -->
       <div class="clearfix grpelem" id="u5588-4"><!-- content -->
        <p>Add to Cart</p>
       </div>
      </div>
     </div>
     </a>
    </div>
    <a href="#">
    <div class="Button gradient rounded-corners clearfix colelem" onclick="submitOnClick('myForm2')" id="buttonu5590"><!-- container box -->
     <div class="clearfix grpelem" id="u5591-4"><!-- content -->
      <p>Add to Wishlist</p>
     </div>
    </div>
    </a>
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
   <img class="preload" src="images/u5581-r-grad.png" alt=""/>
   <img class="preload" src="images/u5581-grad.png" alt=""/>
   <img class="preload" src="images/u5586-r-grad.png" alt=""/>
   <img class="preload" src="images/u5586-grad.png" alt=""/>
   <img class="preload" src="images/u5590-r-grad.png" alt=""/>
   <img class="preload" src="images/u5590-grad.png" alt=""/>
  </div>
  <![endif]-->
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
Muse.Utils.initWidget('#slideshowu4981', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,fullScreen:false})); });/* #slideshowu4981 */
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
		function addmsg(){
		reset();
			alertify.success("Item added to the wishlist successfully");
			return false;
		}
				function cartmsg(){
		reset();
			alertify.success("Item added to cart successfully");
			return false;
		}
		function lerr() {
			reset();
			alertify.error("Please login");
			return false;
		}
		function errsize() {
			reset();
			alertify.error("Select a size");
			return false;
		}
		function readyexist() {
			reset();
			alertify.error("This product already exist in the wishlist");
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


if($lerror>1)
{
echo "<script>lerr();</script>";
}
if($readyexist>1)
{
echo "<script>readyexist();</script>";
}
if($addmessage>1)
{
echo "<script>addmsg();</script>";
}
if($cartmessage>1)
{
echo "<script>cartmsg();</script>";
}
if($errsize>1)
{
echo "<script>errsize();</script>";
}

?>
</div>
   </body>
</html>
