<?php include 'Controller/check.php';
      include_once 'Controller/index1.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<style type="text/css">
		  body{min-height: fit-content;
             height: -webkit-fill-available;}
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
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Movex</h1>
							<small class="site-description">Welcome <?= $_SESSION['nomcomplet'] ?></small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
							<li class="menu-item"><a href="movies.php"><i class="fa fa-film" aria-hidden="true"></i> Movies</a></li>
							<li class="menu-item"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
							<li class="menu-item"><a href="account.php"><i class="fa fa-user" aria-hidden="true"></i> Account</a></li>
							<li class="menu-item"><a href="Controller/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						</ul> <!-- .menu -->

						<div class="search-form">
							<input type="text" placeholder="Search..." onkeypress="goSearch(event);">
							<button><i class="fa fa-search"></i></button>
						</div>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
					<h2 class="section-title"> <i class="fa fa-calendar" aria-hidden="true"></i> Last Added</h2>
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
										<?php for($i=0;$i<3;$i++):?>
										<li style="height: 765px;"><a href="single.php?id=<?= $LastFilms[$i]->getId_film(); ?>"><img src="<?= $LastFilms[$i]->getLinkIMG(); ?>" alt="<?= $LastFilms[$i]->getTitre(); ?>" style="height: 100%;"/></a></li>
										<?php endfor;?>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
<!-- 									<div class="col-sm-6 col-md-12"> -->
<!-- 										<div class="latest-movie"> -->
<!-- 											<a href="#"><img src="dummy/thumb-1.jpg" alt="Movie 1"></a> -->
<!-- 										</div> -->
<!-- 									</div> -->
<!-- 									<div class="col-sm-6 col-md-12"> -->
<!-- 										<div class="latest-movie"> -->
<!-- 											<a href="#"><img src="dummy/thumb-2.jpg" alt="Movie 2"></a> -->
<!-- 										</div> -->
<!-- 									</div> -->
										<?php for($i=3;$i<5;$i++):?>
										<div class="col-sm-6 col-md-12">
											<div class="latest-movie">
												<a href="single.php?id=<?= $LastFilms[$i]->getId_film(); ?>"><img src="<?= $LastFilms[$i]->getLinkIMG(); ?>" alt="<?= $LastFilms[$i]->getTitre(); ?>"></a>
											</div>
										</div>
									<?php endfor;?>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
									<?php for($i=5;$i<9;$i++):?>
									<div class="col-sm-6 col-md-3">
										<div class="latest-movie">
											<a href="single.php?id=<?= $LastFilms[$i]->getId_film(); ?>"><img src="<?= $LastFilms[$i]->getLinkIMG(); ?>" alt="<?= $LastFilms[$i]->getTitre(); ?>"></a>
										</div>
									</div>
									<?php endfor;?>
						</div>
						<h2 class="section-title"><i class="fa fa-star" aria-hidden="true"></i> Most Popular</h2>
						<div class="row">
							<?php for($i=0;$i<4;$i++):?>
									<div class="col-sm-6 col-md-3">
										<div class="latest-movie">
											<a href="single.php?id=<?= $MostPopu[$i]->getId_film(); ?>"><img src="<?= $MostPopu[$i]->getLinkIMG(); ?>" alt="<?= $MostPopu[$i]->getTitre(); ?>"></a>
										</div>
									</div>
									<?php endfor;?>
						</div> <!-- .row -->
						<h2 class="section-title"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Most Suggested</h2>
						<div class="row">
							<?php for($i=0;$i<4;$i++):?>
									<div class="col-sm-6 col-md-3">
										<div class="latest-movie">
											<a href="single.php?id=<?= $MostSugg[$i]->getId_film(); ?>"><img src="<?= $MostSugg[$i]->getLinkIMG(); ?>" alt="<?= $MostSugg[$i]->getTitre(); ?>"></a>
											<p style="text-align: center;">
												<div class="star-rating" title="Rated <?= $MostSugg[$i]->getRating() ?> out of 5">
												<span style="width:<?= $MostSugg[$i]->getRating() * 100 / 5  ?>%">
												<strong class="rating">
												<?= $MostSugg[$i]->getRating() ?>
												</strong> out of 5
												</span>
												</div>
												 - <?= $MostSugg[$i]->getQualite()?>
											</p>
										</div>
									</div>
									<?php endfor;?>
						</div> <!-- .row -->
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
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/search.js"></script>
		<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
		
		
	</body>

</html>