<?php
require "../config/config.php";
?>

<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
?>


<?php
$sql = "DELETE FROM nhaphang WHERE id = '$id'";
$qr = mysqli_query($conn, $sql);
header("location:../admin/quanlidonnhap-ad.php");
?>
