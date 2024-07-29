<?php
include '../config/session.php';
?>

<?php
include '../config/database.php';
?>

<?php
$user = $_SESSION['userdata']['id'];
?>

<?php
if(isset($_POST['add-to-cart'])){
$name = $_POST["name"];
$image = $_POST["image"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$check = "SELECT * FROM `add-to-cart` WHERE name='$name' AND image='$image' AND user=$user";
$checkq = $conn->query($check);
if($checkq->num_rows > 0){
echo "<script> alert('product is already in your cart'); </script>";
} else{
$insert = "INSERT INTO `add-to-cart`(`name`, `image`, `price` , `quantity`, `user`) VALUES ('$name','$image','$price', '$quantity', $user)";
$insertq = $conn->query($insert);

if($insertq == TRUE){
	echo "<script> alert('added to cart'); </script>";
} else{
	echo 'not inserted';
}
}
}
?>

<?php
$search = "";
if(isset($_POST["search"])){
 $search = trim($_POST["searchtext"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../sections/categorieshead.php'; ?>
<body style="padding: 0px; margin: 0px;">
<?php include '../sections/categoriesnav.php'; ?> 
<main>
<div class="tab-content" style="cursor: pointer;">
							<div class="tab-pane fade active in" id="massagingdevice" >
								<?php
						$data = "SELECT * FROM menspair WHERE name LIKE '%$search%'";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<a href="../productdetails/productdmen.php?id=<?php echo $x["id"]; ?>"> 
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo '../uploads/'.$x['image']; ?>" alt="" style="height: 35vh;"/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><button name="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
										<input type="hidden" value="<?php echo $x["name"]; ?>" name="name">
										<input type="hidden" value="<?php echo 'uploads/'.$x['image']; ?>" name="image">
										<input type="hidden" value="<?php echo $x["price"]; ?>" name="price">
										<input type="hidden" value="1" name="quantity">
										</div>
										
									</div>
								</div>
								</a>
							</form>
							<?php
							}
						}
								?>
							</div>
</div>
</main>



    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/price-range.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
	<script src="../js/activenav.js"> </script>
</body>
</html>