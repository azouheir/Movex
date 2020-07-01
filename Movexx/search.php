<?php 
include 'Controller/check.php';
include 'Controller/searchTrait.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Search results</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<style type="text/css">
		a:hover {text-decoration: none;}</style>
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
							<li class="menu-item "><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
							<li class="menu-item current-menu-item"><a href="movies.php"><i class="fa fa-film" aria-hidden="true"></i> Movies</a></li>
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
							<span>Search Results</span>
						</div>
						<div class="movie-list">
					<?php $j=0; for($i=0;$i<count($liste)/4;$i++): $k=0;?>
				           <div class="pages" id="page<?=$i+1?>">
						<?php while($k<4 && $j<count($liste)):?>
						     <div class="movie">
								<figure class="movie-poster"><img src="<?= $liste[$j]->getLinkIMG()?>" alt="#"></figure>
								<div class="movie-title"><a href="single.php?id=<?= $liste[$j]->getId_film()?>"><?= $liste[$j]->getTitre()?></a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
					         </div>
				    <?php $j++ ; $k++; endwhile;?>
				            </div>
					<?php endfor;?>
						<div class="pagination">
							<?php for($i=0;$i<count($liste)/4;$i++):?>
							<a class="page-number" onclick="showPage(<?= $i ?>)"><?= $i+1 ?></a>
							<?php endfor;?>
						</div>
					</div>
				</div> <!-- .container -->
			  </div>
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
		<script type="text/javascript">
   		showPage(0);
		
		function showPage(i) {
			 var liste_button = document.getElementsByClassName("page-number");
			 var liste_page = document.getElementsByClassName("pages");
			if(i>=0 && i<liste_page.length ){
    		    for (let index = 0; index < liste_page.length; index++) {
    		        if(index!=i){
        		        liste_page[index].setAttribute("style","display:none;");
        		        liste_button[index].setAttribute("class", "page-number");
        		        }
    		        else {
        		        liste_page[index].setAttribute("style", "display:block;");
						liste_button[index].setAttribute("class", "page-number current");
        		        }
    		    }
			}
		}
		</script>
	</body>

</html>