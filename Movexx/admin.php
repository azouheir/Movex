<?php include 'Controller/checkAdmin.php';
        include 'Controller/TraitUpload.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movex | Administrator </title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<style type="text/css">
		.col-md-6{
		  padding-bottom:10px;
		}
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
							<li class="menu-item"><a href="Controller/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<a href="#">Add Movie</a>
							<span></span>
						</div>

						<div class="content">
						<h2 class="section-title"><i class="fa fa-film" aria-hidden="true"></i> Add Movie :</h2><br><br>
						<form class="form-horizontal" method="post" action="TRAITEMENT.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
    									<label class="control-label col-md-6" for="titre">Title:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="titre">
    										</div>
    									<label class="control-label col-md-6" for="datesortie">Release date:</label>
    										<div class="col-md-6">
      											<input type="date" class="form-control" name="datesortie">
    										</div>
    								     <label class="control-label col-md-6" for="description">Description:</label>
    										<div class="col-md-6">
      											<textarea  class="form-control" name="description"></textarea>
    										</div>
    									 <label class="control-label col-md-6" for="directeurs">Directors:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="directeurs" >
    										</div>
    									  <label class="control-label col-md-6" for="stars">Stars:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="stars" >
    										</div>
    									<label class="control-label col-md-6" for="ecrivains">Writers:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="ecrivains" >
    										</div>
    									<label class="control-label col-md-6" for="rating">Rating:</label>
    										<div class="col-md-6">
      											<select class="form-control" name="rating">
      												<option value="1">1</option>
      												<option value="2">2</option>
      												<option value="3">3</option>
      												<option value="4">4</option>
      												<option value="5">5</option>
      											</select>
    										</div>
    									<label class="control-label col-sm-6" for="prix">Price:</label>
    										<div class="col-sm-6">
      											<input type="number" class="form-control" name="prix" step="0.1">
    										</div>
  									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-6" for="categorie">Category:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="categorie">
    										</div>
    									<label class="control-label col-md-6" for="qualite">Quality:</label>
    										<div class="col-md-6">
      											<select class="form-control" name="qualite">
      												<option value="360p">360p</option>
      												<option value="480p">480p</option>
      												<option value="720p">720p</option>
      												<option value="1080p">1080p</option>
      											</select>
    										</div>
    									<label class="control-label col-md-6" for="duree">Time:</label>
    										<div class="col-md-6">
      											<input type="number" class="form-control" name="duree">
    										</div>
    									<label class="control-label col-md-6" for="idPROV">Provider ID:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="idPROV">
    										</div>
    									<label class="control-label col-md-6" for="linkVID">Video link:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="linkVID">
    										</div>
    									<label class="control-label col-md-6" for="linkIMG">Cover link:</label>
    										<div class="col-md-6">
      											<input type="text" class="form-control" name="linkIMG">
    										</div>
    										<div class="col-md-2" style="float: right; margin-right: 50px;">
      											<input type="submit" class="btn btn-warning" value="Save Movie">
    										</div>
    								</div>
								</div>
							</div> <!-- .row -->
							</form>
<hr><br>
							<h4 class="section-title"><i class="fa fa-upload" aria-hidden="true"></i> Uploads:</h4><br><br>
							<div class="row">
								<div class="col-md-6">
								<form action="" method="post" enctype="multipart/form-data" class="form-inline">
    							<div class="form-group">
    								<span class="">
    								Upload Movie : <input type="text" class="form-control" name="IP" placeholder="VMstore IP" required>
    								<input type="file" class="form-control" name="movie" required/>
    								<input type="submit" class="btn btn-warning" value="Upload"/>
    								<div><p style="color: green;"> <?php if($response === true) echo "File posted successfully";?></p></div>
    								</span>
								</div>
								</form>
								</div>
							</div> <!-- .row -->
							<hr><br>
							<div class="row">
							<div class="col-md-6">
								<form action="" method="post" enctype="multipart/form-data" class="form-inline">
								<div class="form-group">
    								<span class="">
    								Upload cover : <input type="file" class="form-control" name="cover" required/>
    								<input type="submit" class="btn btn-warning" value="Upload"/><br><br>
      								<p style="color: green;"> <?php if($response_img === true) echo "Cover posted successfully";?></p>
    								</span>
    							</div>
								</form>
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
	</body>

	
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/search.js"></script>	
		
</html>