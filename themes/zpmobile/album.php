<?php

// force UTF-8 Ø

if (!defined('WEBPATH')) die(); ?>
<!DOCTYPE html>
<html>
<head>
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

		<h2 id="album-text"><?php printAlbumTitle();?></h2>

			<?php 
			$count = '';
			while (next_image()): 
				$count++;
				switch($count) {
						case 1:
							?>
							<div class="row-fluid" id="row_fluid_bottom">
								<div class="span1"></div>
								<div class="span2">
									<a class="" href="<?php echo html_encode(getImageLinkURL());?>" title="<?php printBareImageTitle();?>">
										<div id="image-border"><?php printCustomSizedImage(getAnnotatedImageTitle(), NULL,230, 230, 230, 230, NULL, NULL, NULL, NULL, true, NULL); ?></div>
									</a>
								<!--	<div id="pic_desc"><i><?php echo getAnnotatedImageTitle() ?></i></div>  -->
								</div>
							<?php
							break;
						case 2:
							?>
							<div class="span2">
								<a class=" >" href="<?php echo html_encode(getImageLinkURL());?>" title="<?php printBareImageTitle();?>">
									<div id="image-border"><?php printCustomSizedImage(getAnnotatedImageTitle(), NULL,230, 230, 230, 230, NULL, NULL, NULL, NULL, true, NULL); ?></div>
								</a>
							</div>
							<?php
							break;
						case 3:
							?>
							<div class="span2">
								<a class=" >" href="<?php echo html_encode(getImageLinkURL());?>" title="<?php printBareImageTitle();?>">
									<div id="image-border"><?php printCustomSizedImage(getAnnotatedImageTitle(), NULL,230, 230, 230, 230, NULL, NULL, NULL, NULL, true, NULL); ?></div>
								</a>
							</div>
							<?php
							break;
						case 4:
							?>
							<div class="span2">
								<a class=" >" href="<?php echo html_encode(getImageLinkURL());?>" title="<?php printBareImageTitle();?>">
									<div id="image-border"><?php printCustomSizedImage(getAnnotatedImageTitle(), NULL,230, 230, 230, 230, NULL, NULL, NULL, NULL, true, NULL); ?></div>
								</a>
							</div>
							<?php
							break;
						case 5:
							?>
							<div class="span2">
								<a class=" >" href="<?php echo html_encode(getImageLinkURL());?>" title="<?php printBareImageTitle();?>">
									<div id="image-border"><?php printCustomSizedImage(getAnnotatedImageTitle(), NULL,230, 230, 230, 230, NULL, NULL, NULL, NULL, true, NULL); ?></div>
								</a>
							</div>
							<div class="span1"></div>
							</div><!--Row-fluid-->
							<?php
							$count = ''; // reset to start with a new row;
							break;
							}
						?>
			<?php endwhile; ?>
	
</div><!--Container-fluid-->
<footer>
	<div id="fake-hr"></div>
	<p id="copyright-text">© 2013 Chris Kokka</p>
</footer>
</body>
</html>