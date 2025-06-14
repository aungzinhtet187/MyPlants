<!DOCTYPE html>
<!--File Header Comment-->
<!-- Description: Plant identification project-->
<!--Author: Ivy Lim-->
<!--Date: 10/10/2023 -->
<!--Validated: 14/10/2023-->
<html lang="en">
<head>
<title>MYPLANTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Ivy Lim">
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

<article>
<section class="enquiry-form">
  <form class="signup-form1" action="enquiryform.php" method="post">

  <div class="form-header">
    <h1>Enquiry Form</h1>
  </div>
  <div class="form-body">

      <!-- Firstname and Lastname -->
      <div class="horizontal-group">
          <div class="form-group left">
              <label for="firstname" class="label-title">First name: *</label>
              <input type="text" id="firstname" name="firstname" class="form-input" maxlength="25" required="required" pattern="[A-Za-z] {1-9}"  title=""/>
          </div>
          <div class="form-group right">
              <label for="lastname" class="label-title">Last name: *</label>
              <input type="text" id="lastname" name="lastname" class="form-input" maxlength="25" required="required" pattern="[A-Za-z] {1-9}" title=""/>
          </div>
      </div>

  <div class="form-group">

  <label for="email" class="label-title">Email address: *</label>
    <input type="email" id="email" name="email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"    >  
    </div>
  
  
  
  
  <div class="label-title">                 
  <fieldset>
    <legend>Address </legend>
    <label for="streetaddress">Street address: *</label>
    <input type="text" id="streetaddress" name="streetaddress" maxlength="40" required="required"><br><br>
    <label for="citytown">City/town: *</label>
    <input type="text" id="citytown" name="citytown" maxlength="20" required="required" ><br><br>
    
    <label for="state">State: *</label>
          <select id="state" name="state" >    
            <option value="none">Select State</option>    
            <option value="johor">Johor</option>    
            <option value="kedah">Kedah</option>    
            <option value="kelantan">Kelantan</option>    
            <option value="malacca">Malacca</option>    
            <option value="negerisembilan">Negeri Sembilan</option>    
            <option value="pahang">Pahang</option>    
            <option value="penang">Penang</option>
        <option value="perak">Perak</option>    
            <option value="perlis">Perlis</option>    
            <option value="sabah">Sabah</option>    
            <option value="sarawak">Sarawak</option>
        <option value="selangor">Selangor</option>    
            <option value="terengganu">Terengganu</option>    
            <option value="kualalumpur">Kuala Lumpur</option>    
            <option value="labuan">Labuan</option>
        <option value="putrajaya">Putra Jaya</option>
          </select> 
      <br><br>    
    <label for="postcode">Postcode: *</label>
    <input type="text" id="postcode" name="postcode" maxlength="5" required="required"><br><br>
    
    <div class="form-group">
    <label for="phonenumber" class="label-title">Phone number: *</label>
          <input type="tel" name="phonenumber" id="phonenumber" maxlength="10" required="required" placeholder="Enter Mobile no."/>
      </div>

  <label for="plant">Plant: * </label>
  <select id ="plant" name="plant" >
  <option value="none">Select plant type</option>
  <option value="dipterocarpaceae">Dipterocarpaceae</option>
    <option value="lauraceae">Lauraceae</option>
    <option value="burseraceae">Burseraceae</option>
      <option value="myristicaceae">Myristicaceae</option>
    <option value="chrysobalanaceae">Chrysobalanaceae</option>
      <option value="meliaceae">Meliaceae</option>
      <option value="ebenaceae">Ebenaceae</option>
  </select><br>

  <br>
  
  
  <label for="comments">Comments:</label><br>

  <textarea id="comments" name="comments" placeholder="write  your comments here.."  ></textarea>

  <div class="paragraph">
  <p>*required</p>
  </div>
  </fieldset>
  </div>

    <div class="form-footer">
    <input type= "reset"  class="btn"  id="reset" value="Reset "/>
    <button type="submit" class="btn">Submit</button>
    </div>


    </div>
  

  </form>
</section>
</article>
		
<footer>
<?php
	include("footer.php");
	
?>
</footer>


</body>
</html>