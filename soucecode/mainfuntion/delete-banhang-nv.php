<?php
require "../config/config.php";
?>

<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
?>


<?php
$sql = "DELETE FROM banhang WHERE id = '$id'";
$qr = mysqli_query($conn, $sql);
header("location:../nhanvien/qldonban-nv.php");
?>
