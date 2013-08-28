<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
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
		<div class="span2"></div>
		<div class="span8">
			<form action="/zenphoto/index.php?p=mailsent" method="POST" class="form-horizontal well" id="rounded_corners">
				<fieldset>
					<legend>Enter your data</legend>
							  
						<div class="control-group">
							<label class="control-label ui-input-text" for="name">Name:</label>
							<div class="controls">
								<input type="text" class="input-large ui-input-text ui-body-c" id="name" name="name">
							</div>
						</div>
							  
						<div class="control-group">
							<label class="control-label ui-input-text" for="email">Email:</label>
							<div class="controls">
								<input type="text" class="input-large ui-input-text ui-body-c" id="email" name="email">
							</div>
						</div>
										 
							  
						<div class="control-group">
							<label class="control-label ui-input-text" for="message">Message:</label>
							<div class="controls">
								<textarea id="message" name="message" placeholder="Enter your message..." class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset"></textarea>
							</div>
						</div>
							  
						<div class="control-group">
							<div class="controls">
								<input type="hidden" class="input-large " id="picture" name="picture" value="<?php echo stripURIForEmail(getRequestUri())?>">
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="robot_check">Kui palju on kaks pluss kaks?:</label>
							<div class="controls" id="robot_check_margin">
								<input type="text" class="input-small" id="robot_check" name="robot_check">
								<br/>
								<div id="error"></div>
							</div>
						</div>
						
						<input type="submit"  class="btn btn-large" value="Order picture" id="order_pic_btn">
							
				</fieldset>
			</form>
		</div>
		<div class="span2"></div>
	</div><!--Row-fluid-->
<div id="fake-hr"></div>
</div><!--Container-fluid-->
<footer>	
	<p id="copyright-text">© 2013 Chris Kokka</p>
</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#order_pic_btn').on('click',function(event){
			event.preventDefault();			
			if($('#robot_check').val() == '4'){	
				$('form').submit();
			}else{
				$('#error').html('Kirjuta vastuseks: 4');
			}
		})
	});
</script>
</body>
</html>
