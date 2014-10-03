<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>D-Tech Website Career Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.loading-indicator.css" />
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
                    <li><a class="active" href="career.php">CAREER</a></li>
                    <li><a href="http://dtechsystems.co.uk/blog/" target="_blank">BLOG</a></li>
                    <li><a href="contact_us.php">CONTACT US</a></li>
                </ul>
            </nav>
            <div class="social_media">
            	<div class="sm_icon sm_icon_1"></div>
                <div class="sm_icon sm_icon_2"></div>
                <div class="sm_icon sm_icon_3"></div>
                 <div class="clearfix"></div>
            </div>
            <p>© COPYRIGHT 2014.<br>
ALL RIGHT RESERVED DTECH SYSTEMS</p>
        </div>
       <!-- <div class="btn_products"> Our Products</div>-->
    <div class="career_page">
    	<div class="inner_career_div">
        	<div class="career_page_content">
            	<h2>CAREER</h2>
                <p>Thank you for visiting our Careers page. We are always looking for talented people to be hired and given a chance to unleash their expertise. Just send us your resume' and let us know about your talent. We will surely give you a call to get you on-board.</p>
                <form class="cv_form" method="post" action="sendcareers.php" 
                enctype='multipart/form-data'>
                	<label for="name">NAME*</label>
                	<input type="text" name="name">
                    <label for="email">EMAIL*</label>
                    <input type="email" name="email">
                    <label for="cv">DESIGNATION*</label>
                    <select name="job_designation">
                    	<option>iOS Developer</option>
                        <option>Android Developer</option>
                        <option>SEO Expert</option>
                        <option>Social Media Marketing</option>
                        <option>Content Writer</option>
                        <option>Digital Marketing Expert</option>
                        <option>PHP Developer</option>
                        <option>Web Designer</option>
                        <option>Graphic Designer</option>
                        <option>Illustrator</option>
                        <option>Admin</option>
                        <option>Technical Content Writer</option>
                        <option>Business Development/Client Executive</option>
                    </select>
                    <label for="cv">JOB TYPE*</label>
                    <select name="job_type">
                    	<option>Full-Time</option>
                        <option>Part-Time</option>
                        <option>Internship</option>
                        <option>Contract</option>
                    </select>
                    
                    <input type="button" name="button" value="Upload CV" 
                    onclick="jQuery('#file').trigger('click')" />
                    <input type="file" name="file" id="file" style="display:none" />
                    <input type="submit" name="button" value="SEND">
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
            </div>
        	
        </div>
    	
    </div>
</div>
 <script src="js/jquery.js"></script>
 <script src="js/jquery.loading-indicator.min.js"></script>
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