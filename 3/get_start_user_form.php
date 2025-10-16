<!DOCTYPE html>
<html lang="en">
<title>MediCare-Dhaka | Address Registration | Health Services</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="get_start_landing.css">
	
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.nav_logo {height:50px;width:70px; }
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white"><img class="nav_logo" src="medicare_logo.png" alt="MediCare Logo Dhaka"></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Offers</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Products</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Offers </a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Products</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact </a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">MediCare</h1>
  <p class="w3-xlarge">Delivery Address Registration </p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"><a href="https://m.me/medicare.dhaka/">Get Help -Massenger</button></a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Registration :</h1>
      <h5 class="w3-padding-32">Fill out your products delivery address here and get 10% discount on your Gross amounts 
</h5>

      <p class="w3-text-grey"> Here is about description of "how to get 10% Discount & how to filled Form"</p>
    </div>

<div class="w3-row">
<div class="w3-half w3-card-2 w3-round">
<div class="w3-container w3-center w3-green">
<h1 style="text-align:centre;padding-top:0">Filled Here</h1>
</div>
<img style="height:50px;width:100%;" src="medicare_cover.png">
<br>
<form class="w3-container" method="post" action="process.php">
<label class="w3-label w3-text-black"><b>Name</b></label>
<p><input class="w3-input w3-border w3-round" type="text" placeholder="Your name" name="name" required></p>
<label class="w3-label w3-text-black"><b>Email</b></label>
<p><input class="w3-input w3-border w3-round" type="text" placeholder="Your email " name="email" required pattern="[a-z0-9._%+-]+@[gmail]+\.[com]{2,4}$" ></p>
<label class="w3-label w3-text-black"><b>Phone No.</b></label>
<p><input class="w3-input w3-border w3-round" type="text" placeholder="Your phone number " name="phone" 
pattern="[01][0-9]{10}"
required ></p>
<label class="w3-label w3-text-black"><b>Product Link</b></label>
<p><input class="w3-input w3-border w3-round" type="link" placeholder="Paste your product link here" name="p_link" required ></p>
<label class="w3-label w3-text-black"><b>Delivery Address</b></label>
<p><input class="w3-input w3-border w3-round" type="text" placeholder="Your Delivery Address" name="address" required ></p>


<p class="w3-center"><button class="w3-btn w3-green w3-round" style="width:100%;height:50px" name="btn-save">SUBMIT</button></p>
</form>
<div class="w3-container w3-center w3-light-grey">
After submitted the form,  you'll get a replay your form submission copy to your Email. 
</div>
</div>


    <div class="w3-third w3-center">
    	<img src="medicare_logo.png" alt="MediCare Logo">
      <i class="fa fa- w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>
    
    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">This is your COVID -19  Advise to your visitors for MediCare as a doctor </h1>
</div>
<br>
<?php
  // This program generates a web pages that gets 
  // the user's information, saves it to a file, 
  // and displays it on the web page.
  // Name of the ip address log.
  $outputWebBug = 'visitor.csv';

  // Get the ip address and info about client.
  @ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
  @ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
  
  // Get the query string from the URL.
  $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
  
  // Write the ip address and info to file.
  @ $fileHandle = fopen($outputWebBug, "a");
  if ($fileHandle)
  {
    $string ='"'.$QUERY_STRING.'","' // everything after "?" in the URL
      .$_SERVER['REMOTE_ADDR'].'","' // ip address
      .$hostname.'","' // hostname
      .$_SERVER['HTTP_USER_AGENT'].'","' // browser and operating system
      .$_SERVER['HTTP_REFERER'].'","' // where they got the link for this page
      .$details->loc.'","' // latitude, longitude
      .$details->org.'","' // internet service provider
      .$details->city.'","'  // city
      .$details->region.'","' // state
      .$details->country.'","' // country
      .date("D dS M,Y h:i a").'"' // date
      ."\n"
      ;
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }

  $string = '<code>'
    .'<p>'.$QUERY_STRING.'</p><p>IP address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$_SERVER['REMOTE_ADDR'].'</p><p>Hostname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$hostname.'</p><p>Browser and OS:&nbsp;'
    .$_SERVER['HTTP_USER_AGENT'].'</p><p>'
    .$_SERVER['HTTP_REFERER'].'</p><p>Coordinates:&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->loc.'</p><p>ISP provider:&nbsp;&nbsp;&nbsp;'
    .$details->org.'</p><p>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->city.'</p><p>State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->region.'</p><p>Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->country.'</p><p>Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .date("D dS M,Y h:i a").'</p></code>'
    ;

  echo '<!DOCTYPE html><html><body style="height:5px;width:100%">
  <h2 style="text-align:left"> Your Browser :</h2>
  <p>Function by <a href="https://facebook.com/freelancer.milonbd.com" target="blank">Freelancer Milon</a></p></br>';
  echo $string;
  echo '</body></html>';
?>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <div class="w3-container w3-center w3-light-grey">
      <ul style="list-style:none;display:inline;text-decoration:none">
       <li><a href="#">Privency Policy</a></li>
	   <li><a href="#">Terms & Conditions </a></li>
	</ul>
	       <center><a class="copyrighted-badge" title="Copyrighted.com Registered &amp; Protected" target="_blank" href="https://www.copyrighted.com/website/vNEhRJHtfElKYaDd"><img  alt="Copyrighted.com Registered &amp; Protected" border="0" width="120" height="55" srcset="https://static.copyrighted.com/badges/125x75/04_2x.png 2x" src="https://static.copyrighted.com/badges/125x75/04.png" /></a><script src="https://static.copyrighted.com/badges/helper.js"></script></center>
<p style="margin-top:3px"><p>&#169; 2021 copyright all right reserved <a href="https://www.copyrighted.com/website/vNEhRJHtfElKYaDd"><br><img style="height:30px;width:30px;border-radius:.5rem;text-decoration:none;font-weight:20px;" src="medicare_logo.png">  MediCare </a></p></p>
</div>

 <p>Design by <a href="#" target="_blank">Freelancer Milon</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {  
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
