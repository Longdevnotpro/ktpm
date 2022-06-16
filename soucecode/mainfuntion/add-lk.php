
<html lang="en">
<?php
require "../config/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form thêm linh kiện</title>
    <link rel="stylesheet" href="../../asset/css/add-insert.css">
</head>
<body>
<?php
if(isset($_POST["add"])){
    $malk = $_POST["malk"];
    $tenlk = $_POST["tenlk"];
    $ngaynhap = $_POST["ngaynhap"];
    $loailk = $_POST["loailk"];
    $soluong = $_POST["soluong"];
    $dongia = $_POST["dongia"];

   

if ($malk != "" && $tenlk != "" && $ngaynhap != "" && $loailk != "" && $soluong != ""  && $dongia != "" ){
    $sql = "insert into linhkien(malk, tenlk, ngaynhap, loailk, soluong, dongia) value('$malk', '$tenlk', '$ngaynhap','$loailk','$soluong', '$dongia')";
    $qr = mysqli_query($conn, $sql);
}
}
?>
<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM Thêm linh kiện</h1>
        <table>
            <tr>
                <td><span>Mã LK:</span></td>
                <td><input type="text" name="malk"></td>
            </tr>
            <tr>
                <td> <span>Tên LK:</span></td>
                <td> <input type="text" name="tenlk"></td>
            </tr>
            <tr>
                <td><span>Ngày nhập:</span></td>
                <td><input type="text" name="ngaynhap"></td>
            </tr>
            <tr>
                <td> <span>Loại LK</span></td>
                <td> <input type="text" name="loailk"></td>
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
