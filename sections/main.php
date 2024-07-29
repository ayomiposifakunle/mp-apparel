<main style="margin-top: 10%;">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h1 class="fs-small" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">ABOUT US</h1>
<p>
Welcome to Matching-Pair Apparels, where fashion meets harmony! <br> <br>
We believe that every outfit tells a story, and nothing says style and sophistication like perfectly matched attire. Our mission is to provide you with effortless matching top and bottom sets that elevate your wardrobe and simplify your shopping experience. <br> <br>
Our Brand was born out of a love for coordinated fashion and the desire to make stylish dressing accessible and fun. We noticed that finding matching pieces that complement each other seamlessly could be a challenge, and we set out to change that. <br> <br>
Our passion for fashion and commitment to quality has driven us to curate a collection that is both trendy and timeless.
 
<h1>Why Choose Us?</h1>
Fashion-Forward Designs: Our team of designers stays ahead of the fashion curve, bringing you the latest trends and timeless classics. <br> <br>
Quality Craftsmanship: We prioritize quality in every stitch, ensuring that our clothes are made to last and provide you with the utmost comfort. <br> <br>
Effortless Shopping: We make it easy to find the perfect match with our carefully curated sets, saving you time and effort. <br> <br>
Exceptional Customer Service: Our dedicated customer service team is here to help you with any questions or concerns, ensuring a seamless shopping experience. <br> <br>
Thank you for choosing Us. We look forward to helping you create effortlessly stylish looks, one matching set at a time.</p>
				</div>			
				<div class="col-sm-9 padding-right">	
					<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#massagingdevice" data-toggle="tab">mens pair</a></li>
								<li><a href="#homecomfortdevice" data-toggle="tab">womens pair</a></li>
								<li><a href="#kitchendevices" data-toggle="tab">ladies underwear</a></li>
								<li><a href="#interiordecor" data-toggle="tab">childrens pair</a></li>
								<li><a href="#babiespair" data-toggle="tab">babies pair</a></li>
							</ul>
						</div>
						<div class="tab-content" style="cursor: pointer;">
							<div class="tab-pane fade active in" id="massagingdevice" >
								<?php
						$data = "SELECT * FROM menspair WHERE name LIKE '%$search%' LIMIT 9";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
							<a href="./productdetails/productdmen.php?id=<?php echo $x["id"]; ?>">
							<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt="" style="height: 35vh;"/>
											<p><?php echo $x["name"]; ?></p>
											
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
						} else {
							$no_product= 'NO PRODUCT IN THIS CATEGORY YET';
                            echo $no_product;
						}
								?>
							</div>
							
							<div class="tab-pane fade" id="homecomfortdevice" >
					<!-- <h1 class="fw-bold text-center">homecomfortdevice coming soon</h1>	-->
					<?php
						$data = "SELECT * FROM `womenspair` WHERE name LIKE '%$search%' LIMIT 9";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<a href="./productdetails/productdwomen.php?id=<?php echo $x["id"]; ?>">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt="" style="height: 35vh;"/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											
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
						} else {
							$no_product= 'NO PRODUCT IN THIS CATEGORY YET';
                            echo $no_product;
						}
								?>
							</div>

							<div class="tab-pane fade" id="kitchendevices" >
					<!-- <h1 class="fw-bold text-center">kitchendevices coming soon</h1> -->
					<?php
						$data = "SELECT * FROM ladiesunderwear WHERE name LIKE '%$search%' LIMIT 9";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<a href="./productdetails/productdladies.php?id=<?php echo $x["id"]; ?>">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt="" style="height: 35vh;"/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											
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
						} else {
							$no_product= 'NO PRODUCT IN THIS CATEGORY YET';
                            echo $no_product;
						}
								?>
							</div>
							<div class="tab-pane fade" id="interiordecor" >
					<!-- <h1 class="fw-bold text-center">interiordecor coming soon</h1> -->
					<?php
						$data = "SELECT * FROM childrenspair WHERE name LIKE '%$search%' LIMIT 9";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<a href="./productdetails/productdchildren.php?id=<?php echo $x["id"]; ?>">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt="" style="height: 35vh;"/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											
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
						} else {
							$no_product= 'NO PRODUCT IN THIS CATEGORY YET';
                            echo $no_product;
						}
								?>
							</div>
							<div class="tab-pane fade" id="babiespair" >
					<!-- <h1 class="fw-bold text-center">homecomfortdevice coming soon</h1>	-->
					<?php
						$data = "SELECT * FROM `babiespair` WHERE name LIKE '%$search%' LIMIT 9";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<a href="./productdetails/productdbabies.php?id=<?php echo $x["id"]; ?>">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt="" style="height: 35vh;"/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
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
						} else {
							$no_product= 'NO PRODUCT IN THIS CATEGORY YET';
                            echo $no_product;
						}
								?>
							</div>
						</div>
					</div>
					</div>		
			</div>
		</div>
	</main>