<?php
 session_start();
 if(isset($_SESSION['mail']) || !empty($_SESSION['mail']))
 {
 $_SESSION['errr']=2;
 header("location:index.php");
 }
 
 $errore1 = 0;
 $errore2 = 0;
 $lengtherr=0;
  
 if(isset($_SESSION['rerr1'])) 
 {
  $errore1=$_SESSION['rerr1'];
 }
 if(isset($_SESSION['rerr2'])) 
 {
  $errore2=$_SESSION['rerr2'];
 }
 if(isset($_SESSION['lengtherr'])) 
 {
  $lengtherr=$_SESSION['lengtherr'];
 }


 unset($_SESSION['rerr1']);
 unset($_SESSION['rerr2']);
 unset($_SESSION['lengtherr']);
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
  <title>TYL : REGISTER</title>
  <!-- CSS -->
  
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4071467339">
  <link rel="stylesheet" type="text/css" href="css/master_en.css?4092102162">
  <link rel="stylesheet" type="text/css" href="css/login.css?3826789396" id="pagesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/alertify.core.css" rel="stylesheet" type="text/css" >
 <link href="css/alertify.default.css" rel="stylesheet" type="text/css" >
 <link rel="stylesheet" href="css/fv.css" type="text/css" >
	<!--[if IE]>
	<style>
		.item .tooltip .content{ display:none; opacity:1; }
		.item .tooltip:hover .content{ display:block; }
	</style>
	<![endif]-->


  <!-- Other scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    
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
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem " id="u1202" href="index.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u1204-4"><!-- content --><p>HOME</p></div></a>
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
       <a href="IT/IT-register.php">
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
      <div class="MenuItem MenuItemWithSubMenu clearfix colelem MuseMenuActive" id="u5328"><!-- horizontal box -->
       <div class="MenuItemLabel NoWrap clearfix grpelem " id="u5329-4"><!-- content -->
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
   <div id='wrap'>
		<section class='form'>
			<form action="controlregister.php" method="post" >
				<fieldset>
					<div class="item">
						<label>
							<span style="width: 205px">Name</span>
							<input  data-validate-length-range="6" data-validate-words="2" name="name" required="" tabindex="1" placeholder="ex. John"  />		
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">Surname</span>
							<input name="surname" required="" tabindex="1" data-validate-words="2" placeholder="ex. f. Kennedy" />
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">email</span>
							<input name="email" class='email' tabindex="1"required="required" placeholder="ex. e-mail@example.com"type="email" />
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">Birthday (At least 14 year old)</span>
							<input class='date' type="date" tabindex="1"name="date" required='required' max="<?php $dnow = date('d'); $mnow = date('m'); $ynow = date('Y') - 14; echo($ynow."-".$mnow."-".$dnow); ?>" min="<?php $dnow = date('d'); $mnow = date('m'); $ynow = date('Y') - 100; echo($ynow."-".$mnow."-".$dnow); ?>">
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">Password (at least 8 char)</span>&nbsp;<input type="password" tabindex="1"name="password" id="password" data-validate-length="6,8" required='required'>
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">Repeat password</span>
							<input type="password" name="password2"tabindex="1" data-validate-linked='password' required='required'>
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">Cap</span>
							<input name="cap" required='required' placeholder="ex. 00000"tabindex="1"data-validate-length="5" maxlength="5">
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">Country</span>
							<select class="required" name="country"tabindex="1">
								<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
                  <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
							</select>
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">city</span>
							<input name="city" placeholder="ex. Washington" required tabindex="1" />
						</label>
					</div>
					<div class="item">
						<label>
							<span style="width: 205px">address</span>
							<input name="address"  placeholder="ex. 00 Street" required tabindex="1"/>
						</label>
					</div>
				</fieldset>
				 <input class="buttom" name="submit" id="submit" value="Submit" type="submit" style="width: 117px; height: 29px">
			</form>	
		</section>
	</div>


   
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
  <script>
		// initialize the validator function
		validator.message['date'] = 'not a real date';
		
		// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
		$('form')
			.on('blur', 'input[required], input.optional, select.required', validator.checkField)
			.on('change', 'select.required', validator.checkField)
			.on('keypress', 'input[required][pattern]', validator.keypress);
			
		$('.multi.required')
			.on('keyup blur', 'input', function(){ 
				validator.checkField.apply( $(this).siblings().last()[0] );
			});
		
		// bind the validation to the form submit event
		//$('#send').click('submit');//.prop('disabled', true);
		
		$('form').submit(function(e){
			e.preventDefault();
			var submit = true;
			// evaluate the form using generic validaing
			if( !validator.checkAll( $(this) ) ){
				submit = false;
			}

			if( submit )
				this.submit();
			return false;
		});
		
		/* FOR DEMO ONLY */
		$('#vfields').change(function(){
			$('form').toggleClass('mode2');
		}).prop('checked',false);
		
		$('#alerts').change(function(){
			validator.defaults.alerts = (this.checked) ? false : true;
			if( this.checked )
				$('form .alert').remove();
		}).prop('checked',false);
	</script>

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
      function errore1() {
			reset();
			alertify.error("Password not correct");
			return false;
		}
		function errore2() {
			reset();
			alertify.error("This e-mail already exist");
			return false;
		}
		function lengtherr(){
		reset();
			alertify.error("The password must be at least 8 characters");
			return false;
		}

</script>
<?php
if($errore1>1)
{
echo "<script>errore1();</script>";
}
if($errore2>1)
{
echo "<script>errore2();</script>";
}
if($lengtherr>1)
{
echo "<script>lengtherr();</script>";
}

?>
   </body>
</html>
