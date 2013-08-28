<?php 
// force UTF-8 Ø
if (!defined('WEBPATH')) die(); ;
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Galerii</title>
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

<div  class="container-fluid">
			
				<?php 
					$count = '';
					while (next_album()): 
					$count++; 
					switch($count) {
						case 1:
							?>
							<div class="row-fluid" id="row_fluid_bottom">
								<div class="span1"></div>
								<div class="span2">
									<a id="no_hover_link" href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle();?>"><div id="album_title"><?php echo printAlbumTitle();?></div><div id="image-border"><?php printCustomAlbumThumbImage(getAnnotatedAlbumTitle(), null, 140, 140, 140, 140, NULL, null, NULL,NULL); ?></div></a>
								</div>
							<?php
							break;
						case 2:
							?>
							<div class="span2">
									<a id="no_hover_link" href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle();?>"><div id="album_title"><?php echo printAlbumTitle();?></div><div id="image-border"><?php printCustomAlbumThumbImage(getAnnotatedAlbumTitle(), null, 140, 140, 140, 140, NULL, null, NULL,NULL); ?></div></a>
							</div>
							<?php
							break;
						case 3:
							?>
							<div class="span2">
									<a id="no_hover_link" href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle();?>"><div id="album_title"><?php echo printAlbumTitle();?></div><div id="image-border"><?php printCustomAlbumThumbImage(getAnnotatedAlbumTitle(), null, 140, 140, 140, 140, NULL, null, NULL,NULL); ?></div></a>
							</div>
							<?php
							break;
						case 4:
							?>
							<div class="span2">
									<a id="no_hover_link" href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle();?>"><div id="album_title"><?php echo printAlbumTitle();?></div><div id="image-border"><?php printCustomAlbumThumbImage(getAnnotatedAlbumTitle(), null, 140, 140, 140, 140, NULL, null, NULL,NULL); ?></div></a>
							</div>
							<?php
							break;
						case 5:
							?>
							<div class="span2">
									<a id="no_hover_link" href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext('View album:'); ?> <?php printAnnotatedAlbumTitle();?>"><div id="album_title"><?php echo printAlbumTitle();?></div><div id="image-border"><?php printCustomAlbumThumbImage(getAnnotatedAlbumTitle(), null, 140, 140, 140, 140, NULL, null, NULL,NULL); ?></div></a>
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
