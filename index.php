<?php
include 'config/database.php';
?>

<?php
$search = "";
if(isset($_POST["search"])){
 $search = trim($_POST["searchtext"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'sections/head.php'; ?>
<body style="padding: 0px; margin: 0px;">
<marquee behavior="" direction="">Order Via Call: 07012847395 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thank you for shopping with us</marquee>
<?php include 'sections/nav.php'; ?>
<?php include 'sections/header.php'; ?>	
<?php include 'sections/main.php'; ?>	
<?php include 'sections/customerreview.php'; ?>



    <div id="carouselHacked" class="carousel slide carousel-fade container" data-ride="carousel" style="margin-top: 5%;">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
                    <img src="./images/774bae2667d9afdf5a69479bd6c49252.jpg" alt="img" style="width: 100%; height: 65vh">
                <h1>Name</h1>
                <p>Comment</p>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                <img src="./images/download (3).jpg" alt="img" style="width: 100%; height: 65vh">
                <h1>Name</h1>
                <p>Comment</p>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                <img src="./images/download (1).jpg
                " alt="img" style="width: 100%; height: 65vh">
                <h1>Name </h1>
                    <p>Comment</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<?php include 'sections/footer.php'; ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./js/activenav.js"> </script>
</body>
</html>