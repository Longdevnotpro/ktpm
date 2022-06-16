<?php
require "../config/config.php";
?>

<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
?>


<?php
$sql = "DELETE FROM linhkien WHERE id = '$id'";
$qr = mysqli_query($conn, $sql);
header("location:../admin/qllinhkien-ad.php");
?>
