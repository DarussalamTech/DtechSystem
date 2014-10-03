<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>D-Tech Website About Us Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.loading-indicator.css" />
    <link rel="icon" type="image/png" href="img/dtech_favicon.png">
  <script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
var myCenter=new google.maps.LatLng(51.5642438,-0.0221605);
var marker;

function initialize()
{
	var mapProp = {
	  center:myCenter,
	  zoom:18,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	marker=new google.maps.Marker({
	  position:myCenter,
	  animation:google.maps.Animation.BOUNCE,
	   icon:'img/d.png'
	  });
	
	marker.setMap(map);
	
	var infowindow = new google.maps.InfoWindow({
  content:'<div id="google_map-styling" style="width:206px; height:80px; background:#FFF; padding:10px; position: relative; overflow: hidden; margin: 2px;">'+
      '<h1 style="margin-bottom:-5px; color:#EDB81D;">D-Tech</h1>'+
      '<div>'+
      '<p> Leyton Business Centre' +
      'Unit 17 Etloe Road, '+
      'Leyton, London, E10 7BT '+
      '</p>'+
      '</div>'+
      '</div>'
  });

infowindow.open(map,marker);
}

function changeMap(lat,long){
	var myCenter=new google.maps.LatLng(lat,long);
	
	var mapProp = {
	  center:myCenter,
	  zoom:18,
	  mapTypeId:google.maps.MapTypeId.SATELLITE
	  };
	
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	marker=new google.maps.Marker({
	  position:myCenter,
	  animation:google.maps.Animation.BOUNCE
	  });
	
	marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(document.getElementById('go'), 'click', changeMap);
</script>
<script type="text/javascript">
		$(document).ready(function() {
			<!-- Real-time Validation -->
				<!--Name can't be blank-->
				$('#contact_name').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				<!--Email must be an email -->
				$('#contact_email').on('input', function() {
					var input=$(this);
					var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
					var is_email=re.test(input.val());
					if(is_email){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				<!--Website must be a website -->
				$('#contact_website').on('input', function() {
					var input=$(this);
					if (input.val().substring(0,4)=='www.'){input.val('http://www.'+input.val().substring(4));}
					var re = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
					var is_url=re.test(input.val());
					if(is_url){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				<!--Message cant be blank -->
				$('#contact_message').keyup(function(event) {
					var input=$(this);
					var message=$(this).val();
					//console.log(message);
					if(message){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}	
				});
		
			<!-- After Form Submitted Validation-->
			$("#contact_submit button").click(function(event){
				var form_data=$("#contact").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#contact_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
				if (!error_free){
					event.preventDefault(); 
				}
				else{
					alert('No errors: Form will be submitted');
				}
			});
			
			
			
		});
</script>
<script src="js/jquery.loading-indicator.min.js"></script>

<style type="text/css">
	.gm-style-iw{overflow:hidden !important; height:100px !important;  left:0 !important ; top:0 !important; width: 225px !important;}
</style>

  </head>
  <body style="overflow:hidden;">
<div id="main_wrapper">
  <div class="menu_nav">
        	<div class="logo">
            	<a href="index.html"><img src="img/logo_03.png" alt="d-tech"></a>
            </div>
            <div class="mobile_nav">
            	<a href="#"><span></span></a>
            </div>
            <nav>
            	<ul>
                	<li><a href="index.html">HOME</a></li>
                    <li><a href="about_us.html">ABOUT US</a></li>
                    <li><a href="services.html">WHAT WE DO</a></li>
                    <li><a href="portfolio.html">PORTFOLIO</a></li>
                    <!--<li><a href="products.html">OUR PRODUCTS</a></li>-->
                    <li><a href="clients.html">OUR CLIENTS</a></li>
                    <li><a href="career.php">CAREER</a></li>
                    <li><a href="http://dtechsystems.co.uk/blog/" target="_blank">BLOG</a></li>
                    <li><a class="active" href="contact_us.php">CONTACT US</a></li>
                </ul>
            </nav>
            
            <div class="social_media">
            	<div class="sm_icon sm_icon_1"><a href="https://twitter.com/dtechnet" target="new"></a></div>
                <div class="sm_icon sm_icon_2"><a href="https://www.facebook.com/dtech.co" target="new"></a></div>
                <div class="sm_icon sm_icon_3"></div>
                 <div class="clearfix"></div>
            </div>
            <p>© COPYRIGHT 2014.<br>
ALL RIGHT RESERVED DTECH SYSTEMS</p>
        </div>
    <div class="contact_us">
    	<div class="content_left_bar">
        	<h3>get in touch</h3>
            <h4>& </h4>
            <h5>ping us!</h5>
            <p>Our offices are in London and Riyadh,
                but we are happy to work with clients
                from all over the globe.</p>
           
           <!-- START FORM HTML -->
           <form id="contact" method="post" action="sendemail.php">

			<div>
				<label for="contact_name">Name (Required)</label><span class="error">*</span>
				<input type="text" id="contact_name" name="name">
				
			</div>
			<div>
				<label for="contact_email">Email (Required)</label><span class="error">*</span>
				<input type="email" id="contact_email" name="email">
								
			</div>						
			
			<div>
				<label for="contact_message">Message:</label><span class="error">*</span>
				<textarea id="contact_message" name="message"></textarea>
																
			</div>					
			<!-- Submit Button -->
			<div id="contact_submit">				
				<button type="submit">send</button>
			</div>
		</form>
		<?php
			ini_set("error_reporting",'0');
			@ob_start();
			session_start();
			if(isset($_SESSION['message'])){
				echo "<div class='flash-message'>";
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				echo "</div>";
			} 
		?>
             <!-- END-FORM HTML -->  
           <address>
               <span id="go" onclick="changeMap(24.6673399,46.7078797)">KSA</span> 
               <span id="go" onclick="changeMap(51.5642438,-0.0221605)">London</span> 
               <span id="go" onclick="changeMap(31.565373,74.304555,17)">Lahore</span>
           </address>
        </div>
                <div class="google_map">
                <div id="googleMap" style="width:100%;height:100%;"></div>
                </div>
    </div>
</div>
<script>
	$(document).ready(function(){
		$(".mobile_nav").click(function(){
				$('nav').toggle();
			});
		});
</script>
<script>
	homeLoader = $('body').loadingIndicator({
			  useImage: false,
	}).data("loadingIndicator");
	
	$( window ).load(function() {
		$(".loading-indicator-wrapper").hide();
	});
</script>
  </body>
</html>