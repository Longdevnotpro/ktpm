<html lang="en">
<?php
require "../config/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form thêm đơn bán hàng</title>
    <link rel="stylesheet" href="../../asset/css/add-insert.css">
</head>
<body>
<?php
if(isset($_POST["add"])){
    $mahd = $_POST["mahd"];
    $manv = $_POST["manv"];
    $ngayban = $_POST["ngayban"];
    $tenhang = $_POST["tenhang"];
    $soluong = $_POST["soluong"];
    $dongia = $_POST["dongia"];

   

if ($mahd != "" && $manv != "" && $ngayban != "" && $tenhang != "" && $soluong != ""  && $dongia != "" ){
    $sql = "insert into banhang(mahd, manv, ngayban, tenhang, soluong, dongia) value('$mahd', '$manv', '$ngayban','$tenhang','$soluong', '$dongia')";
    $qr = mysqli_query($conn, $sql);
}
}
?>
<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM Thêm đơn bán hàng</h1>
        <table>
            <tr>
                <td><span>Mã HĐ:</span></td>
                <td><input type="text" name="mahd"></td>
            </tr>
            <tr>
                <td> <span>MÃ NV:</span></td>
                <td> <input type="text" name="manv"></td>
            </tr>
            <tr>
                <td><span>Ngày bán:</span></td>
                <td><input type="text" name="ngayban"></td>
            </tr>
            <tr>
                <td> <span>Tên hàng</span></td>
                <td> <input type="text" name="tenhang"></td>
            </tr>
            <tr>
                <td><span>Số lượng</span></td>

                <td><input type="text" name="soluong"></td>
            </tr>
            <tr>
                <td><span>Đơn giá</span></td>
                <td> <input type="text" name="dongia"></td>
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