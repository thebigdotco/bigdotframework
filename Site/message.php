<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="The Big Dot Company">
<meta name="robots" content="noindex, nofollow">
<!-- website, framework, template,  -->
<title>Contact - Big Dot Framework 2.0</title>


</head>

<body>
<div class="header">
<div class="headercont">
<div class="headertagline">
Big Dot Framework 2.0 "Pure HTML &amp; CSS"
</div>
<div class="headersocial">
<div class="headersocialholder">
<div class="headersocialicon">
<a href="https://plus.google.com/" target="_blank"><img src="img/social/google-01.svg" alt="Google Icon" width="20" height="20"/></a> 
</div>
<div class="headersocialicon">
<a href="http://twitter.com/" target="_blank"><img src="img/social/twitter-01.svg" alt="Twitter Icon" width="20" height="20"/></a> 
</div>
<div class="headersocialicon">
<a href="https://www.linkedin.com/" target="_blank"><img src="img/social/linkedin-01.svg" alt="LinkedIn Icon" width="20" height="20"/></a> 
</div>
<div class="headersocialicon">
<a href="https://www.facebook.com/" target="_blank"><img src="img/social/facebook-01.svg" alt="Facebook Icon" width="20" height="20"/></a> 
</div>
</div>
</div>
</div>
</div>


<div class="mainwrap">
<div class="navwrapper">
<div class="navlogo">
<a href="index.html" target="_blank"><img src="img/logo-01.png" alt="Logo" width="265" height="101"></a>
</div>
<div class="navdynamic">
<nav>

  <label for="drop" class="toggle menusmall">Menu</label>
  <input type="checkbox" id="drop" />
  <ul class="menu">
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-1" class="toggle">Features</label>
      <a href="#">Features</a>
      <input type="checkbox" id="drop-1"/>
      <ul>
      	<li><a href="elements.html">Elements</a></li>
        <li><a href="pricing-table.html">Pricing Table</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </li>
   
      
    
    <li><a href="blog.html">Blog</a></li>
    <li><a href="contact.html">Contact</a></li>

  </ul>
</nav>
</div>
</div>
<div class="maincontainers0">
<h1 class="h1adj">Contact Us</h1>
<p><strong>Please Note:</strong> This is a sample contact page. To request features or support for Big Dot Framework 2.0, or discuss modifications, please use the contact information on our <a class="acopy" href="http://thebig.co/contact">main site</a>.</p>
<div class="imageframe">
<div id="slider">
<iframe style="margin-bottom:-13px;"
src="map" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
  </div>
</div>
<img class="shadow" src="img/photo-shadow.png" alt="Photo shadow"/>





<div class="halfwidthleft">
<p>
<strong>Address:</strong><br>
Big Dot Framework 2.0<br>
12 Street Name<br>
Townsville,<br>
BDF 20
</p>
<p>
<strong>Phone:</strong> <br>
0123 456 789
</p>

<p><strong>Email:</strong> <br>
bd2@thebig.co
</p>

<p><strong>Social:</strong> <br>
<div class="bodysocialicon">
<a href="https://plus.google.com/" target="_blank"><img src="img/social/google-01.svg" alt="Google Icon" width="20" height="20"/></a> 
</div>
<div class="bodysocialicon">
<a href="http://twitter.com/" target="_blank"><img src="img/social/twitter-01.svg" alt="Twitter Icon" width="20" height="20"/></a> 
</div>
<div class="bodysocialicon">
<a href="https://www.linkedin.com/" target="_blank"><img src="img/social/linkedin-01.svg" alt="LinkedIn Icon" width="20" height="20"/></a> 
</div>
<div class="bodysocialicon">
<a href="https://www.facebook.com/" target="_blank"><img src="img/social/facebook-01.svg" alt="Facebook Icon" width="20" height="20"/></a> 
</div>
</p>

</div>
<div class="halfwidthright">
<div class="contactsubmit">



<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: Big Dot Framework 2.0'; 
    $to = 'will@mailserved.co.uk, will@thebig.co'; 
    $subject = 'Contact from Big Dot Framework 2.0';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
				
if ($_POST['submit']) {
    if ($name != '' && $email != ''  && $phone != '' && $message != '') {
        if ($human == '8') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, please try again.</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '8') {
	    echo '<p>You answered the anti-spam question incorrectly! Please try again.</p>';
	}
    } else {
        echo '<p>You need to fill in all fields! Please try again.</p>';
    }
}
?>
	
	<a class="nodec" href="contact.html"><span class="cta">Send Another Message</span></a>
</div>




</div>
</div>

<div class="halfwidthleft">
<div class="quarterwidthleft">
  <div class="icon"> <a href="elements.html"><img src="img/star-01.svg" alt="Star"/></a> 
  </div>
  <p class="center">Loads of features built in a clean and simple way<br>
    <a class="acopy" href="elements.html">See Features</a></p>

</div>
<div class="quarterwidthright">
  <div class="icon"> <a href="about.html"><img src="img/google-01.svg" alt="Google"/></a> 
  </div>
  <p class="center">SEO and Google Page Speed Optimised<br>
    <a class="acopy" href="about.html">Find Out More</a></p>
</div>
</div>

<div class="halfwidthright">
<div class="quarterwidthleft">
<div class="icon"> <a href="http://bdwp.thebig.co/downloads/"><img src="img/wordpress-01.svg" alt="WordPress"/></a> 
  </div>
<p class="center">Basic WordPress Content Management Support<br>
  <a class="acopy" href="http://thebig.co/downloads/bigdotframework2.zip">Download Now</a></p>
</div>
<div class="quarterwidthright">
  <div class="icon"> <a href="contact.html"><img src="img/plane-01.svg" alt="Plane"/></a> 
  </div>
  <p class="center last">Request features and support for the template<br>
    <a class="acopy" href="contact.html">Get in Touch</a></p>
</div>
</div>

</div>

<div class="footer">
<div class="mainwrap">
<div class="halfwidthleft">

<h3>About</h3>
<p class="white">
The Big Dot Company designs and develops websites in Cheltenham. We love giving back to the <strong>design community</strong>, and this open source framework is free to download and use however you wish!</p>
<p class="white">
If you have any questions on how to use Big Dot Framework 2.0, then please <a class="acopy" href="http://thebig.co/contact" target="_blank">get in touch</a>. We can provide basic support for the template and can also discuss bespoke modifications. </p>
</div>
<div class="halfwidthright">

<h3>Widget Area</h3>
<p class="white">
This area can be used for WordPress widgets, or for just about anything else. Footers are a great area to put basic information about your site, provide a contact form or links to your social media pages.</p>
<p class="white last">
The footer area can be configured as a one, two or three fluid column layout. The only limit is your imagination!
</p>
</div>
</div>

</div>
<div class="footerbottom">
<div class="headercont">
<div class="headertagline">
Framework by <span class="linebreak"><a class="acopy" href="http://thebig.co">The Big Dot Company</a></span> </div>
<div class="headersocial">
<div class="footersocialholder">
<div class="headersocialicon">
<a href="https://plus.google.com/" target="_blank"><img src="img/social/google-01.svg" alt="Google Icon" width="20" height="20"/></a> 
</div>
<div class="headersocialicon">
<a href="http://twitter.com/" target="_blank"><img src="img/social/twitter-01.svg" alt="Twitter Icon" width="20" height="20"/></a> 
</div>
<div class="headersocialicon">
<a href="https://www.linkedin.com/" target="_blank"><img src="img/social/linkedin-01.svg" alt="LinkedIn Icon" width="20" height="20"/></a> 
</div>
<div class="headersocialicon">
<a href="https://www.facebook.com/" target="_blank"><img src="img/social/facebook-01.svg" alt="Facebook Icon" width="20" height="20"/></a> 
</div>
</div>
</div>
</div>
</div>
<link href="http://thebig.co/wp-content/uploads/2015/12/favicon.gif" rel="shortcut icon" property="shortcut icon">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" property="shortcut icon" />
<link href="http://thebig.co/wp-content/uploads/2016/03/big-dot-iphone-icon.png" rel="apple-touch-icon-precomposed" property="apple-touch-icon-precomposed">
<link rel="stylesheet" type="text/css" href="css/main.css" property="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" property="stylesheet">
</body>
</html>
