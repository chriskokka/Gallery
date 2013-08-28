<?php
// force UTF-8 Ø

if (!defined('WEBPATH'))
	die();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo $_zp_themeroot; ?>/css/style.css" />
	
		<link rel="stylesheet" type="text/css" href="<?php echo $_zp_themeroot; ?>/css/elastislide.css" />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
		
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

<div class="container-fluid" id="container_image_page">
	<div class="row-fluid">
		<div class="span4"></div>
			<div class="span4">
				<div id="rg-gallery" class="rg-gallery">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-carousel">
								<ul>
									<?php
									while (next_image()): 								
										?>
										<li><a href="#"><img src="<?php echo html_encode(pathurlencode(getDefaultSizedImage())); ?>" data-large="<?php echo html_encode(pathurlencode(getDefaultSizedImage())); ?>" alt="<?php printBareImageTitle(); ?>" /></a></li>	
									<?php endwhile; ?>										
								</ul>
							</div>
						</div><!-- End Elastislide Carousel Thumbnail Viewer -->
				</div><!-- rg-gallery -->
			</div>
		<div class="span4"></div>
	</div><!--Row-fluid-->
	<div class="row-fluid">
		<div class="span5"></div>
		<div class="span1">	
			<a class="btn"  id="buy_btn" href="/zenphoto/index.php?p=order&Uri=<?php echo stripURIForEmail(pathurlencode(getDefaultSizedImage()))?>">Buy this photo</a>
		</div>
		<div class="span6"><input type="hidden" id="start_pic_gallery" href="<?php echo stripURIForGallery(getRequestUri()) ?>"></div>
	</div><!--Row-fluid-->
<div id="fake-hr"></div>
</div><!--Container-fluid-->		
<footer>	
	<p id="copyright-text">© 2013 Chris Kokka</p>
	<br>
	<br>
</footer>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/gallery.js"></script>
</body>
</html>



