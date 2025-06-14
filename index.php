<!DOCTYPE html>
<!-- author: Sim Min Chuin & Kristine -->
<!-- description: Team MYPLANTS's Project-->
<!-- validated: Ok -->

<html lang="en">
<head>
<title>MYPLANTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Sim Min Chuin, Kristine">
<meta name="description" content="Plant identification project">
<meta name="keywords" content="Plant identification, Plant, take care of plants">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>	
<?php
	include("header.php");
	include("regdatabase.php");
	include("enquirydatabase.php");
	include("databaseadmin.php");
	include("deletedatabase.php");
	


?>
</header>

<article>
<section class="index-intro">
				<div class="index-intro-about">
					<img src="images/logo.jpeg" alt="Myplant's image">
					<div class="index-intro-about-text">
					<h2>What is MYPLANTS?</h2>
					<p>Welcome to <span id="intro-highlight">MYPLANTS</span>! We're all about Malaysia's endangered plants. We'll show you how to care for them and provide info about these special plants. Plus, we want to hear what you think! Join our community, where you can share your thoughts and learn from others. Together, we can help these plants thrive and keep Malaysia's natural beauty alive for generations to come.
					</p>
					
				</div>
			</div>
</section>

<div class="index-upload">
    <h3>Upload Your Pictures</h3>
    <form action="identify_process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</div>
<!-- google maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.654573189191!2d101.6873461140199!3d3.139003997700649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdbb68f7c2f7e3%3A0xf7406e5fc0bd10d2!2sKuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur%2C%20Malaysia!5e0!3m2!1sen!2sus!4v1631432767782!5m2!1sen!2sus"

    ></iframe>
	
	<iframe  src="https://www.youtube.com/embed/JqNF9d0K0Iw?si=tgBhGsnN0X6Iw0ym" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" ></iframe>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/MfIJCJp8mkI?si=hA_LPpnEqs9ywXAd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</article>
<!-- Brief introduction of our group -->	
<footer>
<?php
	include("footer.php");
	
?>
</footer>
</body>
</html>