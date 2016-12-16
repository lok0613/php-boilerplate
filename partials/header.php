<html>
<head>
	<title><?php echo $lang['title']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/main.css"/>


	<div class="container-fluid">
		<div class="container">
			<a href="<?= $site->getRoute('home')?>">
				<img src="http://www.hkccfl.org.hk/images/hkccfl_logo-1.png" alt="logo" class="img-responsive"/>
			</a>

			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="#"><?= $lang['about_us']?></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">我們的工作</span></a>
								<ul class="dropdown-menu">
									<li><a href="#">緊急</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div id="langs" style="display: none">
				<a href="<?= $site->getRoute(null, 'en')?>">English</a>
				<a href="<?= $site->getRoute(null, 'zh')?>">中文</a>
			</div>
		</div>
	</div>
