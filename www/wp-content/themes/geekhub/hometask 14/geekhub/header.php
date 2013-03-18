<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo( 'name' );  ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>


<body class="main-page">
	<div class="wrapper">
		<div class="header">
			<h1>
				<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
			</h1>
			
			<ul class="social-net">
					<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
			</ul>
			
			<ul class="nav">
				<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
			</ul>
			
			<span class="description"><?php bloginfo('description'); ?></span>
	</div>
	
	<div id="content">