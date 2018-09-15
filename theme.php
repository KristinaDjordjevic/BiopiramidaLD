<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
		<meta name="description" content="<?=wCMS::page('description')?>">
		<meta name="keywords" content="<?=wCMS::page('keywords')?>">

		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--[if lte IE 8]><script src="<?=wCMS::asset('assets/js/ie/html5shiv.js')?>"></script><![endif]-->
		<link rel="stylesheet" href="<?=wCMS::asset('assets/css/main.css')?>" />
		<link rel="stylesheet" href="<?=wCMS::asset('assets/css/style.css')?>">
		<!--[if lte IE 9]><link rel="stylesheet" href="<?=wCMS::asset('assets/css/ie9.css')?>" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?=wCMS::asset('assets/css/ie8.css')?>" /><![endif]-->
		<?=wCMS::css()?>

	</head>
	
	<body>
		<?//=wCMS::alerts()?>
		<?=wCMS::settings()?>

		<!-- Page Wrapper -->
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1>
						<a class="navbar-brand" href="<?=wCMS::url()?>">
							<?=wCMS::get('config','siteTitle')?>
						</a>
					</h1>
					<?php if(wCMS::$currentPage !== wCMS::get('config', 'login') && !wCMS::$loggedIn) : ?>
					<div id="langBar">
						<a href="pocetna"><img src="files/serbian.png"></a>
						<a href="eng/"><img src="files/english.png"></a>
					</div>
					<?php endif; ?>
					
					<nav>
						<a href="#menu">Meni</a>
					</nav>
				</header>

			<!-- Menu -->
			

				<nav id="menu">
					<div class="inner">
						<h2>Meni</h2>
						<ul class="links">
							<?=wCMS::menu()?>
						</ul>
						<a href="#" class="close">Close</a>
					</div>
				</nav>

				<?=wCMS::page('content')?>


		</div>

		<script src="<?=wCMS::asset('assets/js/jquery.min.js')?>"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?=wCMS::asset('assets/js/skel.min.js')?>"></script>
		<script src="<?=wCMS::asset('assets/js/jquery.scrollex.min.js')?>"></script>
		<script src="<?=wCMS::asset('assets/js/util.js')?>"></script>
		<!--[if lte IE 8]><script src="<?=wCMS::asset('assets/js/ie/respond.min.js')?>"></script><![endif]-->
		<script src="<?=wCMS::asset('assets/js/main.js')?>"></script>
		<?=wCMS::js()?>

	</body>
</html>