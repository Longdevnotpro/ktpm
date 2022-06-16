
<html lang="en">
<?php
require "../config/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form sửa thông tin nhân viên</title>
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
    $manv = $_POST["manv"];
    $tennv = $_POST["tennv"];
    $ngaysinh = $_POST["ngaysinh"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $diachi = $_POST["diachi"];


//mai them lai

if ($manv != "" && $tennv != "" && $ngaysinh != "" && $sdt != "" && $email != ""  && $diachi != "" ){
    $sql = "Update nhanvien set manv ='$manv', tennv = '$tennv', ngaysinh ='$ngaysinh', sdt = '$sdt',email ='$email', diachi = '$diachi' where id = $id ";
    $qr = mysqli_query($conn, $sql);
}
}
?>

<?php
$sql = "SELECT * FROM nhanvien WHERE id = '$id'";
$qr = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($qr);

?>

<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM Sửa thông tin nhân viên</h1>
        <table>
            <tr>
                <td><span>Mã NV:</span></td>
                <td><input type="text" name="manv" value="<?php echo $row['manv'];?>"></td>
            </tr>
            <tr>
                <td> <span>Tên NV:</span></td>
                <td> <input type="text" name="tennv" value="<?php echo $row['tennv'];?>"></td>
            </tr>
            <tr>
                <td><span>Ngày sinh:</span></td>
                <td><input type="text" name="ngaysinh" value="<?php echo $row['ngaysinh'];?>"></td>
            </tr>
            <tr>
                <td> <span>Số điện thoại:</span></td>
                <td> <input type="text" name="sdt" value="<?php echo $row['sdt'];?>"></td>
            </tr>
            <tr>
                <td><span>Email:</span></td>

                <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
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

