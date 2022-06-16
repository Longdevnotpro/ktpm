
<html lang="en">
<?php
require "../config/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form sửa thông tin linh kiện</title>
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
    $malk = $_POST["malk"];
    $tenlk = $_POST["tenlk"];
    $ngaynhap = $_POST["ngaynhap"];
    $loailk = $_POST["loailk"];
    $soluong = $_POST["soluong"];
    $dongia = $_POST["dongia"];


//mai them lai

if ($malk != "" && $tenlk != "" && $ngaynhap != "" && $loailk != "" && $soluong != ""  && $dongia != "" ){
    $sql = "Update linhkien set malk ='$malk', tenlk = '$tenlk', ngaynhap ='$ngaynhap', loailk = '$loailk',soluong ='$soluong', dongia = '$dongia' where id = $id ";
    $qr = mysqli_query($conn, $sql);
}
}
?>

<?php
$sql = "SELECT * FROM linhkien WHERE id = '$id'";
$qr = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($qr);

?>

<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM sửa thông tin linh kiện</h1>
        <table>
            <tr>
                <td><span>Mã LK</span></td>
                <td><input type="text" name="malk" value="<?php echo $row['malk'];?>"></td>
            </tr>
            <tr>
                <td> <span>Tên LK</span></td>
                <td> <input type="text" name="tenlk" value="<?php echo $row['tenlk'];?>"></td>
            </tr>
            <tr>
                <td><span>Ngày nhập:</span></td>
                <td><input type="text" name="ngaynhap" value="<?php echo $row['ngaynhap'];?>"></td>
            </tr>
            <tr>
                <td> <span>Loại LK:</span></td>
                <td> <input type="text" name="loailk" value="<?php echo $row['loailk'];?>"></td>
            </tr>
            <tr>
                <td><span>Số lượng:</span></td>

                <td><input type="text" name="soluong" value="<?php echo $row['soluong'];?>"></td>
            </tr>
            <tr>
                <td><span>Đơn giá:</span></td>
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
