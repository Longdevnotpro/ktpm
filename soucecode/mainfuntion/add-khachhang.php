<?php
require "../config/config.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form-thêm-khách hàng</title>
    <link rel="stylesheet" href="../../asset/css/add-insert.css">
</head>
<body>
<?php
if(isset($_POST["add"])){
    $makh = $_POST["makh"];
    $tenkh = $_POST["tenkh"];
    $gioitinh = $_POST["gioitinh"];
    $ngaydki = $_POST["ngaydki"];
    $sdt = $_POST["sdt"];
    $diachi = $_POST["diachi"];

   

if ($makh != "" && $tenkh != "" && $gioitinh != "" && $ngaydki != "" && $sdt != ""  && $diachi != "" ){
    $sql = "insert into khachhang(makh, tenkh, gioitinh, ngaydki, sdt, diachi) value('$makh', '$tenkh', '$gioitinh','$ngaydki','$sdt', '$diachi')";
    $qr = mysqli_query($conn, $sql);
}
}
?>

<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM Thêm khách hàng</h1>
        <table>
            <tr>
                <td><span>Mã KH:</span></td>
                <td><input type="text" name="makh"></td>
            </tr>
            <tr>
                <td> <span>Tên KH:</span></td>
                <td> <input type="text" name="tenkh"></td>
            </tr>
            <tr>
                <td><span>Giới tính:</span></td>
                <td><input type="text" name="gioitinh"></td>
            </tr>
            <tr>
                <td> <span>Ngày đăng kí:</span></td>
                <td> <input type="text" name="ngaydki"></td>
            </tr>
            <tr>
                <td><span>Số điện thoại:</span></td>

                <td><input type="text" name="sdt"></td>
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

