<!DOCTYPE html>
<html lang="en">
<!-- Description: Identify HTML -->
<!-- Author: Kristine Chia Siew Shuen -->
<!-- Validation: OK -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPLANTS</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>	
<?php
	include("header.php");
	
?>
</header>
<article>
	<div class="identifycontainer"> 
		<h1>Identify Your Plants Now 🔎</h1><br>
		<p><strong>Dear fellow plant enthusiast,</strong></p>
		<p><strong>Have you ever stumbled upon a plant and are curious to know its species, genera, and families?</strong></p>
		<p><strong>Worry not! Come and upload a picture below and we will help you identify them!</strong></p> 
		<div class="upload-box">
			<h3>🌱 Upload Plants Picture Here: 🌱</h3>
			<form action="identify_process.php" method="post" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" id="fileToUpload"> <br>
				<input type="submit" value="Upload Image" name="submit">
			</form>
		</div>
	</div> 
	
	<div class="video-container">
    <h2>More plants in Borneo:</h2>
    <iframe src="https://www.youtube.com/embed/AVWRrUCdLK8?si=kI6ThiT7mevDePlv" title="Plants In Borneo 1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" ></iframe>
    <iframe src="https://www.youtube.com/embed/CM_NCq1r2zg?si=hAm7nowndHHhO0gg" title="Plants In Borneo 2"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" ></iframe>
</div>
</article>
<footer>
<?php
	include("footer.php");
?>
</footer>
</body>

</html>