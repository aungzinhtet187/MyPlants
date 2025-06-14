
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Ivy Lim, Sim Min Chuin">
<meta name="description" content="Plant identification project">
<meta name="keywords" content="Plant identification, Plant, take care of plants">
<link rel="stylesheet" type="text/css" href="style.css">
</head>




<body>

<header>    
<?php
    include("header.php");
	include("adminconfirm.php");
   

    
    
?>
</header>

<article>
    <section class="admin-dashboard">
        <div class="admin-dashboard-container">
        <h3> Admin Dashboard</h3>
        
       <div class="form-button">
                   <a href="logout.php" class="adminb">Log Out</a>
                   </div>
                   </body>
        
        
        <div class="admin-dashboard-innercontainer">
        <section class="admin-dashboard-card">
        <a href="view.php"><img src="images/Abstractimage.jpeg" alt="user"></a>
        <p>View SignUp</p>
        </section>
        
        <section class="admin-dashboard-card">
        <a href="view_enquiry.php"><img src="images/Abstractimage.jpeg" alt="enquiry"></a>
        <p>View Enquiries</p>
        </section>
        
        <section class="admin-dashboard-card">
        <a href="delete_enquiry.php"><img src="images/Abstractimage.jpeg" alt="delete_enquiry"></a>
        <p>Delete Enquiries</p>
        </section>
        
        <section class="admin-dashboard-card">
        <a href="delete_register.php"><img src="images/Abstractimage.jpeg" alt="delete_view"></a>
        <p>Delete Views</p>
        </section>
        </section>
        </div>
        </div>
        
    </section>
	
	


</article>


<footer>
<?php
    include("footer.php");
    
?>
</footer>
</body>
</html>




 

