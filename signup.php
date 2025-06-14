<!DOCTYPE html>
<!-- author:Ivy, Sim Min Chuin-->
<!-- description: Team MYPLANTS's Project-->
<!-- validated: Ok -->
<html lang="en">
<head>
<title>MYPLANTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Ivy">
<meta name="description" content="Plant identification project">
<meta name="keywords" content="Plant identification, Plant, take care of plants">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

	
<body>
<?php include ('connection.php'); ?>

<header>	
<?php
	include("header.php");

?>
</header>


<div class= "box" align="center" >       
<article>

    <section class="login-page">

        <h2 class="login">Login</h2>
        
        <input type="radio" name="mode" id="user-button" class="button-user" checked>
        <label for="user-button">User Mode</label>

        <input type="radio" name="mode" id="admin-button" class="button-admin">
        <label for="admin-button">Admin Mode</label>
        

            <form method="post" action='adminconfirm.php' class="signup-form" id="adminsignup">
                <div class="input-group">
                    <label>Username:</label>
                    <input type="text" name="username" id="username" placeholder="Please fill in your Username" required="required" pattern="^[a-zA-Z]+$" maxlength="20">
                </div>
                <div class="input-group">
                    <label>Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required="required">
                </div>
                <div class="input-groups">
                    <button type="submit" class="btn" name="login_user">Login</button>
                </div>
        
                <p class="signup-link">
                    Not yet a member? <a href="registrationform.php" class="signup-button">Sign up</a>
                </p>
            </form>


            <form method="post" action='checklogin.php' class="signup-form" id="usersignup">
                <div class="input-group">
                    <label>Username:</label>
                    <input type="text" name="username" id="username" placeholder="Please fill in your Username" required="required" pattern="^[a-zA-Z]+$" maxlength="20">
                </div>
                <div class="input-group">
                    <label>Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required="required">
                </div>
                <div class="input-groups">
                    <button type="submit" class="btn" name="login_user">Login</button>
                </div>
        
                <p class="signup-link">
                    Not yet a member? <a href="registrationform.php" class="signup-button">Sign up</a>
                </p>
            </form>
    </section>

		
</article>
        
</div>
<footer>
<?php
	include("footer.php");
	
?>
</footer>
</body>

</html>