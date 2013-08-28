<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mail sent</title>
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
					<?php
					require_once('/PHPMailer/class.phpmailer.php');
					$mail             = new PHPMailer();
					$body             = $_POST['name'].'('.$_POST['email'].') soovib pilti:  '.$_POST['picture'].' ja kirjutab:  '.$_POST['message'];
					$mail->IsSMTP(); 
					$mail->Host       = "172.17.7.4";
					$mail->Port		  = 25;
					$mail->SetFrom('info@uptime.ee', '');
					$address = "chris_kokka@hotmail.com";
					$mail->AddAddress($address);
					$mail->Subject = "Pildisoov";
					$mail->MsgHTML($body);
					if(!$mail->Send()){
					?>
						<h1 id="align_center">Failed to send mail</h1>
						<h4 id="align_center">Please try again...</h4>
					<?php
					}else{
					?>
						<h1 id="align_center">Mail sent.</h1>
						<h4 id="align_center">We will contact you shortly.</h4>
					<?php
					}
					?>
				</div>
			<div class="span1"></div>
		</div><!--Row-fluid-->
		<div class="row-fluid">
			<div class="span12" id="align_center">
				<a  href="/zenphoto/index.php" class="btn">Front page</a>
			</div>
		</div><!--Row-fluid-->
	</div><!--Container-fluid-->
</body>
</html>
