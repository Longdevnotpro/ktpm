
<html lang="en">
<?php
require "../config/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin khách hàng</title>
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
    $makh = $_POST["makh"];
    $tenkh = $_POST["tenkh"];
    $gioitinh = $_POST["gioitinh"];
    $ngaydki = $_POST["ngaydki"];
    $sdt = $_POST["sdt"];
    $diachi = $_POST["diachi"];



//mai them lai

if ($makh != "" && $tenkh != "" && $gioitinh != "" && $ngaydki != "" && $sdt != ""  && $diachi != "" ){
    $sql = "Update khachhang set makh ='$makh', tenkh = '$tenkh', gioitinh ='$gioitinh', ngaydki = '$ngaydki',sdt ='$sdt', diachi = '$diachi' where id = $id ";
    $qr = mysqli_query($conn, $sql);
}
}
?>

<?php
$sql = "SELECT * FROM khachhang WHERE id = '$id'";
$qr = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($qr);

?>

<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM Sửa thông tin khách hàng</h1>
        <table>
            <tr>
                <td><span>Mã KH:</span></td>
                <td><input type="text" name="makh" value="<?php echo $row['makh'];?>"></td>
            </tr>
            <tr>
                <td> <span>Tên KH:</span></td>
                <td> <input type="text" name="tenkh" value="<?php echo $row['tenkh'];?>"></td>
            </tr>
            <tr>
                <td><span>Giới tính:</span></td>
                <td><input type="text" name="gioitinh" value="<?php echo $row['gioitinh'];?>"></td>
            </tr>
            <tr>
                <td> <span>Ngày Đki:</span></td>
                <td> <input type="text" name="ngaydki" value="<?php echo $row['ngaydki'];?>"></td>
            </tr>
            <tr>
                <td><span>Số điện thoại:</span></td>

                <td><input type="text" name="sdt" value="<?php echo $row['sdt'];?>"></td>
            </tr>
            <tr>
                <td><span>Địa chỉ:</span></td>
                <td> <input type="text" name="diachi" value="<?php echo $row['diachi'];?>"></td>
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
