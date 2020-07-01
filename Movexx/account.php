<?php include 'Controller/check.php';
        include 'Controller/BillTrait.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | My Account</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<style type="text/css">
		a:hover {text-decoration: none;}
		</style>
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Movex</h1>
							<small class="site-description">Welcome <?= $_SESSION['nomcomplet'] ?></small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
							<li class="menu-item  "><a href="movies.php"><i class="fa fa-film" aria-hidden="true"></i> Movies</a></li>
							<li class="menu-item"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
							<li class="menu-item current-menu-item"><a href="account.php"><i class="fa fa-user" aria-hidden="true"></i> Account</a></li>
							<li class="menu-item"><a href="Controller/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						</ul> <!-- .menu -->

					
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<span>Account</span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-8">
									<table class="table" style="height: 100%;width: 100%;" >
										<tr  class="warning">
											<th></th>
											<th>Movie</th>
											<th>Purchase Date</th>
											<th>Price</th>
										</tr>
										<?php $sum=0; foreach ($liste as $f):?>
										<tr>
											<td><img src="<?= $f->getLinkIMG()?>" width="55px" height="75px" style="margin-left: 25%;margin-right: 25%;"></td>
											<td><?= $f->getTitle()?></td>
											<td><?= $f->getDate()?></td>
											<td>$<?= $f->getPrice()?></td>	
										</tr>
										<?php $sum+= $f->getPrice(); endforeach;?>
										<tr>
											<td></td><td></td>
											<th style="text-align: right;" class="danger">Total :</th><th class="danger">$<?= $sum ?></th>
										</tr>
										<tr>
										    <td colspan="4"><a style="float: right;width: 25%;" class="btn btn-success" role="button">
													 				<i class="fa fa-credit-card" aria-hidden="true"></i> Pay
																</a></td>
										</tr>
									</table>
								</div>
								<div class="col-md-3 col-md-offset-1"  >
									<div class="team">
									<figure class="team-image"><img src="dummy/user.png" alt=""></figure>
									<h2 class="team-name"><?= $_SESSION['nomcomplet'] ?></h2>
									<small class="team-title">Client</small><br>
									<small class="team-title"><?= $_SESSION['login'] ?></small>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						
					</div> <!-- .row -->

					<div class="colophon">Copyright 2019 Master 3I, Designed by A.Zouheir & K.Othmane. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>