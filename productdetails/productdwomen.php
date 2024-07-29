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
$id = $_GET["id"];

$select = "SELECT * FROM womenspair WHERE id=$id";
$selectq = $conn->query($select);
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

<!DOCTYPE html>
<html lang="en">
<?php include '../sections/categorieshead.php'; ?>
<body>
<?php include '../sections/categoriesnav.php'; ?>

<section>
		<div class="container">
			<div class="">
					<div class="product-details">
						<div class="col-sm-5">
							<div class="view-product">
								<?php
while($d = $selectq->fetch_assoc()){
	?>
								<img src="<?php echo '../uploads/'.$d['image'] ;?>" alt="" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information">
								<h2><?php echo $d['name'] ;?></h2>
								<span>
									<span><?php echo $d['price'] ;?></span>
								<form action="#" method="post" enctype="multipart/form-data">
								<button class="btn btn-fefault cart" name="add-to-cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>

								<input type="hidden" value="<?php echo $d["name"]; ?>" name="name">
										<input type="hidden" value="<?php echo 'uploads/'.$d['image']; ?>" name="image">
										<input type="hidden" value="<?php echo $d["price"]; ?>" name="price">
										<input type="hidden" value="1" name="quantity">
								</form>
								</span>
								<p><b>Availability:</b> In Stock</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<?php
}					
?>	
				</div>
			</div>
		</div>
	</section>

<?php include '../sections/categoriesfooter.php'; ?>
  
    <script src="../js/jquery.js"></script>
	<script src="../js/price-range.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>