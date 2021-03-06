<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="public/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="public/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="public/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="public/themes/js/jquery-1.7.2.min.js"></script>
		<script src="public/bootstrap/js/bootstrap.min.js"></script>				
		<script src="public/themes/js/superfish.js"></script>	
		<script src="publi/themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">						
							<li><b><?php echo $_SESSION['login']?></b> Đang Online </li>		
							<li><a href="index.php?controller=users&action=logout">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.php">Home</a></li>	
							<!-- <li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>		 -->																		
							<li><a href="./products.html">Product</a></li>
							<li><a href="./products.html">News</a></li>
							<li><a href="index.php?controller=users&action=listUsers">User</a></li>
						</ul>
					</nav>
				</div>
			</section>