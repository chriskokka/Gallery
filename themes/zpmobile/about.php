<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chris Kokka galerii</title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" />
</head>
<body>
<div class="navbar navbar-fixed-top">  
      <div class="navbar-inner">
			<div class="container">
			  <div class="nav-collapse">  
				<ul class="nav">  
				  <li><a href="/zenphoto" style="font-size: 20px;">Home</a></li>
				  <li><a href="/zenphoto/?p=gallery" style="font-size: 20px;">Gallery</a></li>
				  <li><a href="/zenphoto/?p=about" style="font-size: 20px;">About</a></li>  
				</ul>  
			  </div><!--/.nav-collapse -->
			</div>
      </div>  
</div><!--navbar--> 
  
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span1"></div>
			<div class="span10">
				<h2>About me:</h2>
				<p>My name is: Chris Kokka<br/>
					I am a: Enter_occupation<br/>
				</p>
				<h3>Contact:</h3>
				<p><a href="mailto:this_is@my.email">this_is[at]my.email</a></p>
				<h3>My favorite pages:</h3>
				<p>
					<a href="www.awesomepage.com">www.awesomepage.com</a><br/>
					<a href="www.awesomepage2.com">www.awesomepage2.com</a><br/>
				</p>
			</div>
		<div class="span1"></div>
	</div><!--Row-fluid-->
<div id="fake-hr"></div>
</div><!--Container-fluid-->

<footer>	
	<p id="copyright-text">© 2013 Chris Kokka</p>
</footer>
</body>
</html>
