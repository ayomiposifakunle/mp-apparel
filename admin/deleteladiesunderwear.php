<?php include '../config/session.php'; ?>
<?php include '../config/database.php'; ?>

<?php
$id = $_GET["id"];

$delete = "DELETE from ladiesunderwear WHERE id=$id";
$deleteq = $conn->query($delete);
if($deleteq == TRUE){
    echo '<script> alert("product deleted successfully"); </script>';
    header('location: products.php');
}

?>