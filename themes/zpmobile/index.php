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

		<?php
		if(function_exists('printLatestImages')) {
			?>
			<?php $latestimages = getImageStatistic(10,'latest','',false, 0,'desc'); ?>
			
				<?php 
				$count = '';
				$latestimages = array_reverse($latestimages);
				foreach($latestimages as $image) { 
					$count++;
					switch($count) {
						case 1:
							?>
							<div class="row-fluid">
								<div class="span1"></div>
								<div class="span2">
									<a href="<?php echo html_encode($image->getImageLink());?>" title="<?php echo html_encode($image->getTitle());?>">
										<div id="image-border"><img src="<?php echo $image->getCustomImage(null, 230, 230, 230, 230, null, null,true,NULL); ?>" alt="<?php echo $image->getTitle();?>"></div>
									</a>
									<div id="pic_desc"><i><?php echo $image->getTitle() ?></i></div>
								</div>
							<?php
							break;
						case 2:
							?>
							<div class="span2">
								<a class=" " href="<?php echo html_encode($image->getImageLink());?>" title="<?php echo html_encode($image->getTitle());?>">
									<div id="image-border"><img src="<?php echo $image->getCustomImage(null, 230, 230, 230, 230, null, null,true,NULL); ?>" alt="<?php echo $image->getTitle();?>"></div>
								</a>
								<div id="pic_desc"><i><?php echo $image->getTitle() ?></i></div>
							</div>
							<?php
							break;
						case 3:
							?>
							<div class="span2">
								<a class=" " href="<?php echo html_encode($image->getImageLink());?>" title="<?php echo html_encode($image->getTitle());?>">
									<div id="image-border"><img src="<?php echo $image->getCustomImage(null, 230, 230, 230, 230, null, null,true,NULL); ?>" alt="<?php echo $image->getTitle();?>"></div>
								</a>
								<div id="pic_desc"><i><?php echo $image->getTitle() ?></i></div>
							</div>
							<?php
							break;
						case 4:
							?>
							<div class="span2">
								<a class=" " href="<?php echo html_encode($image->getImageLink());?>" title="<?php echo html_encode($image->getTitle());?>">
									<div id="image-border"><img src="<?php echo $image->getCustomImage(null, 230, 230, 230, 230, null, null,true,NULL); ?>" alt="<?php echo $image->getTitle();?>"></div>
								</a>
								<div id="pic_desc"><i><?php echo $image->getTitle() ?></i></div>
							</div>
							<?php
							break;
						case 5:
							?>
							<div class="span2">
								<a class=" " href="<?php echo html_encode($image->getImageLink());?>" title="<?php echo html_encode($image->getTitle());?>">
									<div id="image-border"><img src="<?php echo $image->getCustomImage(null, 230, 230, 230, 230, null, null,true,NULL); ?>" alt="<?php echo $image->getTitle();?>"></div>
								</a>
								<div id="pic_desc"><i><?php echo $image->getTitle() ?></i></div>
							</div>
							<div class="span1"></div>
							</div><!--Row-fluid-->
							<?php
							$count = '';
							break;					
					}
				}
			}
		?>		
		<br/>
<div id="fake-hr"></div>
</div><!--Container-fluid-->
<footer>	
	<p id="copyright-text">© 2013 Chris Kokka</p>
</footer>
</div><!-- /page -->
</body>
</html>
