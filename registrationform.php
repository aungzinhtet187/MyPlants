<!DOCTYPE html>
<!-- author:Zainab -->
<!-- description: Team MYPLANTS's Project-->
<!-- validated: Ok -->

<html lang="en">
<head>
<title>MYPLANTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Zainab">
<meta name="description" content="Plant identification project">
<meta name="keywords" content="Plant identification, Plant, take care of plants">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

	

<body>
<header>	
<?php
	include("header.php");
	
?>
</header>


    <article >
		<br>
		
		<div class="registration_div">
        <form id="register" method="post" action="regpost.php" class="registration">
    <fieldset class="registration_fieldset">
        <legend>User Information</legend>
        <div class="register_form">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Please fill in Username" required="required" pattern="^[a-zA-Z]+$" maxlength="20">
        </div>
    
        <div class="register_form">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Please fill in your name" required="required" maxlength="20">
        </div>
    
        <div class="register_form">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required="required">
        </div>
        <div class="register_form">
            <label for="age">Age:</label>
            <input type="date" name="age" id="age" required="required">
        </div>
    
        <div class="register_form">
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" placeholder="name@domain.com" required="required">
        </div>
    
        <div class="register_form">
            <label for="city">City/Town:</label>
            <input type="text" name="city" id="city" placeholder="Please fill in your city" required="required" maxlength="20">
        </div>
    
        <div class="register_form">
            <label for="state_name">State</label>
            <select name="state_name" id="state_name" required="required">
                <option value="" disabled selected>Select your state</option>
                <option value="sarawak">Sarawak</option>
                <option value="sabah">Sabah</option>
                <option value="labuan">labuan</option>
                <option value="johor">Johor</option>
                <option value="melaka">Melaka</option>
                <option value="negeri_sembilan">Negeri Sembilan</option>
                <option value="selangor">Selangor</option>
                <option value="pahang">Pahang</option>
                <option value="perak">Perak</option>
                <option value="terengganu">Terengganu</option>
                <option value="kelantan">Kelantan</option>
                <option value="penang">Penang</option>
                <option value="kedah">Kedah</option>
                <option value="perlis">Perlis</option>
            </select>
        </div>
        <div class="register_form">
            <label for="phone_number">Phone number:</label>
            <input type="tel" name="phone_number" id="phone_number" placeholder="123-456-6789" required="required" pattern="\d{1,10}">
        </div>

<div class="registration_submit">
    <input type="submit" value="Submit" class="button">
    <input type="reset" value="Cancel" class="button">
</div>
 </fieldset>

</form>
</div>
</article>	
<footer>
<?php
	include("footer.php");
	
?>
</footer>
</body>

</html>