<meta name="viewport" content="width=device-width" />
<title><?php bloginfo( 'name' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type')?>; charset=<?php bloginfo('charset')?>" />
<title><?php bloginfo('name')?></title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript"></script>
</head>

<body class="inside-page">
	<div class="wrapper">
		<div class="header">
		<h1><a href="#"><img src="wp-content/themes/geekhub/images/logo.png" alt="logo"/></a></h1>
			<ul class="social-net">
				<li ><a href="#" class="fb"></a></li>
				<li><a href="#" class="vk"></a></li>
				<li><a href="#" class="twitter"></a></li>
				<li><a href="#" class="yt"></a></li>
				<li><a href="#" class="vimeo"></a></li>
			</ul>
			<ul class="nav"id='nav'>
				<?php wp_nav_menu('nav'); ?>
			</ul>
			
		</div>