<head>
<!-- CSS -->

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/allstyles.css">
<style>
.hide { display: none; }
</style>

<!-- JS -->

<script src="../js/vendor/jquery-1.10.2.min.js"></script>
<script src="../js/actboss.js"></script>

</head>
<!-- <body onload="size_check()"> -->
<body>
	
<!-- DETECT MOBILE -->

<script>

function mobile_check()
{
	var isMobile = 
	{
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};
	
	if( isMobile.any() )
	{
		// alert ('Mobile');
		document.getElementsByClassName('icon_left').style.display = 'none';
		document.getElementsByClassName('icon_right').style.display = 'none';
	}
}

mobile_check();

</script>

<div class="background background4">
	<div class="icon_left"></div>
	<div class="icon_product" id="theformula" onmouseover="hightlight_product(1)" onclick="select_product(1)">
	
	</div>
	<div class="icon_right"></div>
	<div class="copy" style="height: 3260px; width: 100%; background-color: black; margin-top: 50%; color: #D700C8">
		<center>
		<br/>
		<br/>
		<br/>
		<h1>Imagine this... =D</h1>
		<br/>
		<br/>
		<h1>Waking up tomorrow</h1>
		<br/>
		<br/>
		<h1>Next to the perfect woman</h1>
		<br/>
		<br/>
		<h1>She is Gorgeous...</h1>
		<br/>
		<h1>She is Feminine...</h1>
		<br/>	
		<h1>She is Fun...</h1>
		<br/>
		<br/>
		<h1>How is it?</h1>
		<br/>
		<br/>
		<h1>Think about it...</h1>
		<br/>
		<h1>Picture it...</h1>
		<br/>
		<h1>Feel it...</h1>
		<br/>
		<br/>
		<h1>This is reality for you</h1>
		<br/>
		<h1>If you are willing to envision it</h1>
		<br/>
		<br/>
		<h1>Now is your chance</h1>
		<br/>
		<h1>Stand up and claim what is rightfully yours</h1>
		<br/>
		<br/>
		<h1>The women are only the beginning...</h1>
		<br/>
		<br/>
		<h1>This is about Courage</h1>
		<br/>
		<h1>This is about Power</h1>
		<br/>
		<h1>This is about Destiny</h1>
		<br/>
		<br/>
		<h1>This is about changing your life...</h1>
		<br/>
		<h1>And changing the world...</h1>
		<br/>
		<br/>
		<h1>So take action now</h1>
		<br/>
		<!--
		<h1>Join the thousands of others who are <br/>making their dreams come true</h1>
		<br/>
		-->
		</br/>
		<h1>Because if you dont...</h1>
		<br/>
		<h1>Someone else will</h1>
		<div class="icon_product" id="theformula" onmouseover="hightlight_product(1)" onclick="select_product(1)" style="margin-left: 25%">
			
		</div>
		</center>
	</div>
</div>

</body>