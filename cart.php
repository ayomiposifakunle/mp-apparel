<?php
include './config/session.php';
?>

<?php
include 'config/database.php';
?>

<?php
$user = $_SESSION['userdata']['id'];
?>

<?php
if(isset($_POST["updatecart"])){
	$quantity = trim($_POST["cartquantity"]);
	$updateid = $_POST['cart_id'];
$updatecartquantity = "UPDATE `add-to-cart` SET `quantity`=$quantity WHERE id=$updateid AND user=$user";
$updatecartquantityq = $conn->query($updatecartquantity);
}
?>

<?php
$grandtotal = 0;
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'sections/head.php'; ?>
<body>
<?php include './sections/nav.php'; ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed ">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td class="total delete"><i class="fa fa-times"></i></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$x = "SELECT * FROM `add-to-cart` WHERE user=$user";
						$xquery = $conn->query($x);
						if ($xquery->num_rows > 0){
							while($xdata = $xquery->fetch_assoc()){
								?>
								<tr>
								<td class="name">
								<img src="<?php echo $xdata["image"]; ?>" alt="" style="height: 65px; width: 65px">
								</td>
								<td class="cart_price">
									<p><?php echo $xdata["price"]; ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<form action="" method="post">
										<input type="hidden" name="cart_id" value="<?php echo $xdata['id']; ?>" style="">
										<input class="cart_quantity_input" type="number" min="1" name="cartquantity" value="<?php echo$xdata["quantity"]; ?>" style="width: 59%;">
									<button name="updatecart" style="display: block;">update</button>
										</form>
									</div>
								</td>
								<td class="cart_price">
									<p class="cart_total_price"><?php echo $sub_total = ($xdata['price'] * $xdata['quantity']); ?></p>
								</td>
								<td class="">
									<a class="" href="deletecartitem.php?id=<?php echo $xdata["id"];?>"><i class="fa fa-times"></i></a>
								</td>	

										<?php 									
										$grandtotal += $sub_total;
										 	?>	
							</tr>
						
							<?php
						
							} 
						}else{
							echo "cart is empty";
						}
						?>
      <tr class="table-bottom" style="background-color: #FE980F; color: white">
         <td colspan="3" style="text-align: center;">Grand total</td>
         <td class="cart_price"><p class="cart_total_price" style="color: white;"><?php echo $grandtotal; ?></p></td>
         <td><a href="deleteall.php"  onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grandtotal > 1)?'':'disabled'; ?>"><i class="fa fa-times" style=" "></i></a></td>
      </tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<button style="display: flex; justify-content: center; background-color: #FE980F; margin: 0 auto; border: none; margin-bottom: 5%;"><a href="account.php" style="text-decoration: none; color: white; padding: 8px">checkout</a></button>

	<?php include 'sections/footer.php'; ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="./js/activenav.js"> </script>
</body>
</html>