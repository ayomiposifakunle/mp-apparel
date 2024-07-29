<?php
include '../config/session.php';
?>

<?php
include '../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
   <h1>MEN'S PAIR</h1> 
   <table>
    <thead>
        <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = "SELECT * FROM menspair";
        $xq = $conn->query($x);
        if($xq->num_rows > 0){
            while($p = $xq->fetch_assoc()){
                ?>
                    <tr>
                        <td><img src="<?php echo '../uploads/'.$p['image']; ?>" alt="img" style="width: 60px; height: 60px;"></td>
                        <td><?php echo $p['name']; ?></td>
                        <td><?php echo $p['price']; ?></td>
                        <td><a href="./updatemenspair.php?id=<?php echo $p['id'];?>">update</a></td>
                        <td><a href="./deletemenspair.php?id=<?php echo $p['id']; ?>">delete</a></td>
                    </tr>
                    <?php
                }
        }
   
        ?>
    </tbody>
   </table>

   <h1>WOMEN'S PAIR</h1> 
   <table>
    <thead>
        <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = "SELECT * FROM womenspair";
        $xq = $conn->query($x);
    while($p = $xq->fetch_assoc()){
    ?>
        <tr>
            <td><img src="<?php echo '../uploads/'.$p['image']; ?>" alt="img" style="width: 60px; height: 60px;"></td>
            <td><?php echo $p['name']; ?></td>
            <td><?php echo $p['price']; ?></td>
            <td><a href="./updatewomenspair.php?id=<?php echo $p['id'];?>">update</a></td>
            <td><a href="./deletewomenspair.php?id=<?php echo $p['id']; ?>">delete</a></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
   </table>

   <h1>LADIES UNDERWEAR</h1> 
   <table>
    <thead>
        <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = "SELECT * FROM ladiesunderwear";
        $xq = $conn->query($x);
    while($p = $xq->fetch_assoc()){
    ?>
        <tr>
            <td><img src="<?php echo '../uploads/'.$p['image']; ?>" alt="img" style="width: 60px; height: 60px;"></td>
            <td><?php echo $p['name']; ?></td>
            <td><?php echo $p['price']; ?></td>
            <td><a href="./updateladiesunderwear.php?id=<?php echo $p['id'];?>">update</a></td>
            <td><a href="./deleteladiesunderwear.php?id=<?php echo $p['id']; ?>">delete</a></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
   </table>

   <h1>CHILDREN'S PAIR</h1> 
   <table>
    <thead>
        <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = "SELECT * FROM childrenspair";
        $xq = $conn->query($x);
        if($xq->num_rows > 0){
            while($p = $xq->fetch_assoc()){
                ?>
                    <tr>
                        <td><img src="<?php echo '../uploads/'.$p['image']; ?>" alt="img" style="width: 60px; height: 60px;"></td>
                        <td><?php echo $p['name']; ?></td>
                        <td><?php echo $p['price']; ?></td>
                        <td><a href="./updatechildrenspair.php?id=<?php echo $p['id'];?>">update</a></td>
                        <td><a href="./deletechildrenspair.php?id=<?php echo $p['id']; ?>">delete</a></td>
                    </tr>
                    <?php
                }
        } else {
            $no_product = 'NO PRODUCT AVAILABLE FOR THIS CATEGORY YET';
            echo $no_product;
        }
        ?>
    </tbody>
   </table>

   <h1>BABIES PAIR</h1> 
   <table>
    <thead>
        <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $x = "SELECT * FROM babiespair";
        $xq = $conn->query($x);
        if($xq->num_rows > 0){
            while($p = $xq->fetch_assoc()){
                ?>
                    <tr>
                        <td><img src="<?php echo '../uploads/'.$p['image']; ?>" alt="img" style="width: 60px; height: 60px;"></td>
                        <td><?php echo $p['name']; ?></td>
                        <td><?php echo $p['price']; ?></td>
                        <td><a href="./updatebabiespair.php?id=<?php echo $p['id'];?>">update</a></td>
                        <td><a href="./deletebabiespair.php?id=<?php echo $p['id']; ?>">delete</a></td>
                    </tr>
                    <?php
                }
        } else {
            $no_product = 'NO PRODUCT AVAILABLE FOR THIS CATEGORY YET';
            echo $no_product;
        }
        ?>
    </tbody>
   </table> <br> <br> <br>

   <a href="../admin/index.php">Go to Admin Homepage</a>
</body>
</html>