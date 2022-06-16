
<html lang="en">
<?php
require "../config/config.php";

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form thêm nhân viên</title>
    <link rel="stylesheet" href="../../asset/css/add-insert.css">
    
</head>
<body>
<?php
if(isset($_POST["add"])){
    $manv = $_POST["manv"];
    $tennv = $_POST["tennv"];
    $ngaysinh = $_POST["ngaysinh"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $diachi = $_POST["diachi"];

   

if ($manv != "" && $tennv != "" && $ngaysinh != "" && $sdt != "" && $email != ""  && $diachi != "" ){
    $sql = "insert into nhanvien(manv, tennv, ngaysinh, sdt, email, diachi) value('$manv', '$tennv', '$ngaysinh','$sdt','$email', '$diachi')";
    $qr = mysqli_query($conn, $sql);
}
}
?>

<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM Thêm nhân viên</h1>
        <table>
            <tr>
                <td><span>Mã Nhân viên:</span></td>
                <td><input type="text" name="manv"></td>
            </tr>
            <tr>
                <td> <span>Tên nhân viên:</span></td>
                <td> <input type="text" name="tennv"></td>
            </tr>
            <tr>
                <td><span>Ngày sinh:</span></td>
                <td><input type="text" name="ngaysinh"></td>
            </tr>
            <tr>
                <td> <span>Số điện thoại:</span></td>
                <td> <input type="text" name="sdt"></td>
            </tr>
            <tr>
                <td><span>Email:</span></td>

                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td><span>Địa chỉ</span></td>
                <td> <input type="text" name="diachi"></td>
            </tr>
        </table>
        </div>
        <div class="form-button">
            <input type="submit" name="add" value="Thêm">
            <input type="button" name="exit" value="Thoát" onclick="history.go(-2);">
        </div>

</form>
</div>
</body>
</html>
