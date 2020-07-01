<?php include 'Controller/check.php';
      include_once 'Controller/singlectrl.php';
      if($Film == null) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movex | <?= $Film->getTitre() ?> </title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/Modal.css">
		<style type="text/css">
		a:hover {text-decoration: none;}
        video {
                text-align: center;
                margin: 0 auto;
                display: block;
                width: 900px;
        }
		</style>
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body style="">
			<div id="site-content">
    			<div class="modal-frame">
                  <div class="modal-body">
                    <div class="modal-inner">
                      <button id="close" class="close"><i class="fa fa-times"></i></button>
                      <h3>Please confirm </h3>
                      <p>You want to buy this movie wich costs <b><?=  floatval($Film->getPrix()) ?> $ </b> </p>
                      <a id="buybtn" href="Controller/buyTrait.php?id=<?=$Film->getId_film()?>" class="btn btn-warning" role="button"><i class="fa fa-check" aria-hidden="true"></i> Confirm</a>
                    </div>
                  </div>
                  <div class="modal-overlay"></div>
                </div>
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
							<li class="menu-item  current-menu-item"><a href="movies.php"><i class="fa fa-film" aria-hidden="true"></i> Movies</a></li>
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
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<a href="movies.php">Movies</a>
							<span><?= $Film->getTitre() ?></span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<figure class="movie-poster"><img src="<?= $Film->getLinkIMG() ?>" alt="#" style="width:324px ;height:486px ;margin-left: 20%;"></figure>
								</div>
								<div class="col-md-6">
									<h2 class="movie-title"><?= $Film->getTitre() ?></h2>
									<div class="movie-summary">
										<p><?= $Film->getDescription()?> .</p>
									</div> 
									<ul class="movie-meta">
										<li><strong>Rating:</strong> 
											<div class="star-rating" title="Rated <?= $Film->getRating() ?> out of 5"><span style="width:<?= $Film->getRating() * 100 / 5  ?>%"><strong class="rating"><?= $Film->getRating() ?></strong> out of 5</span></div>
										</li>
										<li><strong>Length:</strong> <?= $Film->getDuree() ?> min</li>
										<li><strong>Quality:</strong> <?= $Film->getQualite() ?></li>
										<li><strong>Premiere:</strong> <?= $Film->getDatesortie() ?></li>
										<li><strong>Category:</strong> <?= $Film->getCategorie() ?></li>
										<li><strong>Price:</strong> <?=  floatval($Film->getPrix()) ?> $ </li>
									</ul>

									<ul class="starring">
										<li><strong>Directors:</strong><p> <?= $Film->getDirecteurs() ?> </p></li>
										<li><strong>Writers:</strong><p> <?= $Film->getEcrivains() ?> </p></li>
										<li><strong>Stars:</strong> <p> <?= $Film->getStars() ?> </p></li>
										<?php if(!$check){?><li>
																<a id="buybtn" class="btn btn-warning modal-popup" role="button">
													 				<i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart
																</a>
											    			</li>
									    <?php } ?>
									</ul>
								</div>
							</div> <!-- .row -->
							<div class="entry-content">
							<?php if($check):?>
							<video id="player" src="<?= $Film->getURL() ?>" controls></video>
							<?php endif;?>
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
	</body>

	
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/search.js"></script>	
		<script type="text/javascript">
		  $modal = $('.modal-frame');

		  function enterNewConvo() {
		    $('.create-chat-input').focus();
		  }

		  function closeModal() {
		    	$modal.removeClass('active');
		      $modal.addClass('leave');
		  }

		  $('.modal-popup').click(function() {
		    $modal.toggleClass('active');
		    $modal.removeClass('leave');
		    enterNewConvo();
		  })

		  $('.modal-overlay').click(function() {
		    closeModal();
		  })

		  $('#close').click(function() {
		    	closeModal();
		  })

		    $(document).keyup(function(e) {
		      if(e.which === 27) {
		        closeModal();
		      }
		    })</script>
</html>