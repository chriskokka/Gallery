<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html>
<html>
<head>
	<?php zp_apply_filter('theme_head'); ?>
	<title><?php printBareGalleryTitle(); ?> | <?php echo gettext("Archive view"); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" />
	<?php jqm_loadScripts(); ?>
</head>

<body>
<?php zp_apply_filter('theme_body_open'); ?>

<div data-role="page" id="mainpage">

			<?php jqm_printMainHeaderNav(); ?>

<div data-role="content">	
		<div class="content-primary">		
			<h2 id="archive-text"><?php echo gettext("Gallery archive"); ?></h2>
			<div id="archive">
				<?php printAllDates(); ?>			
			</div>
		<footer>
			<div id="fake-hr"></div>
			<p id="copyright-text">© 2013 Chris Kokka</p>
		</footer>
</div><!-- /content -->
</div><!-- /page -->
<?php zp_apply_filter('theme_body_close');
?>
</body>
</html>
