<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        
        <!-- CSS -->
        
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="css/product.css">
        
        <!-- JS -->
        
        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/product.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <div class="product_header">
        	
        	<div class="product_header_left">
        		
        	</div>
        	<div class="product_header_mid">
        		<div class="product_header_mid_left" id="product_header_mid_left">

        		</div>
        		<div class="product_header_mid_right" id="product_header_mid_right">

        		</div>
        	</div>
        	<div class="product_header_right">
        		
        	</div>
        	
        </div> <!-- | CLOSE | .product_header -->

        <div class="product_body">
        	
        	<div class="product_window_left">
        		
        	</div> <!-- | CLOSE | .product_window_left -->
        	
        	<div class="product_menu" id="product_menu">
        		
        		<?php include 'product_menu.php'; ?>
        		
        	</div> <!-- | CLOSE | .product_menu -->
        	
        	<!-- BEGIN PRODUCT FUNCTIONALITY -->
        	
        	<div class="product_page">
        		
        		<div id="product_page_welcome" style="text-align: center;">
        			
        			<h1> Congratulations! </h1>
        			
        			<div class="welcome_button" id="welcome_button_101" onmouseover="welcome_button_select()" onmouseout="welcome_button_deselect()" onclick="displayproductmenu()">
        				<div id="welcome_button_text">
        				<p></p><br/>
        				<h2>Click To Get Started</h2>
        				</div>
        			</div>
        			
        		</div> <!-- | CLOSE | #product_page_welcome -->
        		
        		<div class="product_page_content" id="product_page_content_101">
        			
        			<?php include 'product_module_flow_101.php'; ?>
        		
        		</div> <!-- | CLOSE | #product_page_content_101 -->
        		
        		<div class="product_page_content" id="product_page_content_102">
        			
        			<?php include 'product_module_flow_102.php'; ?>
        		
        		</div> <!-- | CLOSE | #product_page_content_102 -->
        		
        		<!-- | START | Product Module Content -->
        		
        		<?php include 'product_module_001_content.php'; ?>
        		<?php include 'product_module_002_content.php'; ?>
        		
        		<!-- | END | Product Module Content -->
        		
        	</div> <!-- | CLOSE | .product_page -->
        	
        	<div class="product_window_right">
        		
        		<?php include 'product_comment_windows.php'; ?>
        		
        	</div> <!-- | CLOSE | .product_window_right -->
        	
        </div> <!-- | CLOSE | .product_body -->

        <div class="product_footer">
        	
        </div> <!-- | CLOSE | .product_footer -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
