<?php include '../config/session.php'; ?>
<?php include '../config/database.php'; ?>

<?php $id= $_GET["id"]; ?>


<?php
if(isset($_POST["update"])){
    if(!empty($_FILES['image']['name']) && !empty($_POST['price']) && !empty($_POST['name'])){
        $image = $_FILES["image"]["name"];
        $price = trim($_POST["price"]);
        $name = trim($_POST["name"]);
    
    $insert = "UPDATE `menspair` SET `image`='$image',`price`='$price',`name`='$name' WHERE id=$id";
    $insertquery = $conn->query($insert); 
    
    if($insertquery == TRUE){
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"]);
    header('location: products.php');
    }
    }   else {
        echo '<script> alert("Please fill are details for new product"); </script>';
    }
           
    }
?>

<h1>PRODUCT</h1> 
   <table>
    <thead>
        <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = "SELECT * FROM menspair WHERE id =$id";
        $xq = $conn->query($x);
        if($xq->num_rows > 0){
            while($p = $xq->fetch_assoc()){
                ?>
                    <tr>
                        <td><img src="<?php echo '../uploads/'.$p['image']; ?>" alt="img" style="width: 60px; height: 60px;"></td>
                        <td><?php echo $p['name']; ?></td>
                        <td><?php echo $p['price']; ?></td>
                    </tr>
                    <?php
                }
        }
   
        ?>
    </tbody>
   </table>

   <h1>UPDATE PRODUCT</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file"  name="image" placeholder="product's new image">
    <input type="text" name="price" placeholder="product's new price">
    <input type="text" name="name" placeholder="product's new name">
    <button name="update">update</button>
</form> <br> <br>
<a href="../admin/products.php">View all products</a>