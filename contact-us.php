<?php
include 'config/session.php';
?>

<?php
include 'config/database.php';
?>

<?php
if(isset($_POST["submit"])){
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$insert = "INSERT INTO `contact-form`(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
$insertq = $conn->query($insert);
if($insertq == TRUE){
	echo "<script> alert('submitted') </script>";
}
}
?>

 <!DOCTYPE html>
<html lang="en">
<?php include 'sections/head.php'; ?>
<body>
<?php include 'sections/nav.php'; ?>
	 <div id="contact-page" class="container" style="margin-top: 5%;">
    	<div class="bg">   	
    		<div class="row">  	
	    		<div class="col-sm-12">
	    			<div class="contact-form">
	    				<h2 class="title text-center">CONTACT US</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>  			
	    	</div>  
    	</div>	
    </div>
<?php include 'sections/footer.php'; ?>
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="./js/activenav.js"> </script>
</body>
</html>