
<html lang="en">
<?php
require "../config/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa đơn bán hàng</title>
    <link rel="stylesheet" href="../../asset/css/add-insert.css">
</head>
<body>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}

?>

<?php
if(isset($_POST["insert"])){
    $mahd = $_POST["mahd"];
    $manv = $_POST["manv"];
    $ngayban = $_POST["ngayban"];
    $tenhang = $_POST["tenhang"];
    $soluong = $_POST["soluong"];
    $dongia = $_POST["dongia"];


//mai them lai

if ($mahd != "" && $manv != "" && $ngayban != "" && $tenhang != "" && $soluong != ""  && $dongia != "" ){
    $sql = "Update banhang set mahd ='$mahd', manv = '$manv', ngayban ='$ngayban', tenhang = '$tenhang',soluong ='$soluong', dongia = '$dongia' where id = $id ";
    $qr = mysqli_query($conn, $sql);
}
}
?>

<?php
$sql = "SELECT * FROM banhang WHERE id = '$id'";
$qr = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($qr);

?>
<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM sửa thông tin đơn bán hàng</h1>
        <table>
            <tr>
                <td><span>Mã HĐ:</span></td>
                <td><input type="text" name="mahd" value="<?php echo $row['mahd'];?>"></td>
            </tr>
            <tr>
                <td> <span>MÃ NV:</span></td>
                <td> <input type="text" name="manv" value="<?php echo $row['manv'];?>"></td>
            </tr>
            <tr>
                <td><span>Ngày bán:</span></td>
                <td><input type="text" name="ngayban" value="<?php echo $row['ngayban'];?>"></td>
            </tr>
            <tr>
                <td> <span>Tên hàng</span></td>
                <td> <input type="text" name="tenhang" value="<?php echo $row['tenhang'];?>"></td>
            </tr>
            <tr>
                <td><span>Số lượng</span></td>

                <td><input type="text" name="soluong" value="<?php echo $row['soluong'];?>"></td>
            </tr>
            <tr>
                <td><span>Đơn giá</span></td>
                <td> <input type="text" name="dongia" value="<?php echo $row['dongia'];?>"></td>
            </tr>
        </table>
        </div>
        <div class="form-button">
        <input type="submit" name="insert" value="Sửa">
    <input type="button" value="Thoát" onclick="history.go(-2);">
        </div>

</form>
</div>
</body>
</html>
