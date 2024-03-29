﻿<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Responsive Image Gallery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="description" content="Responsive Image Gallery with jQuery" />
        <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo $_zp_themeroot; ?>/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_zp_themeroot; ?>/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_zp_themeroot; ?>/css/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
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
		<div class="container">
			
			<div class="content">
				<div id="rg-gallery" class="rg-gallery">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="images/thumbs/1.jpg" data-large="<?php echo $_zp_themeroot; ?>/images/1.jpg" alt="image01" data-description="From off a hill whose concave womb reworded" /></a></li>
									
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
				</div><!-- rg-gallery -->
			</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?php echo $_zp_themeroot; ?>/js/gallery.js"></script>
    </body>
</html>