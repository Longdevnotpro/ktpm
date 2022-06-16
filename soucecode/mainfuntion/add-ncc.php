
<html lang="en">
<?php
require "../config/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form thêm nhà cung cấp</title>
    <link rel="stylesheet" href="../../asset/css/add-insert.css">
    
</head>
<body>
<?php
    if(isset($_POST["add"])){
        $mancc = $_POST["mancc"];
        $tenncc = $_POST["tenncc"];
        $ngaycc = $_POST["ngaycc"];
        $email = $_POST["email"];
        $thoigianhopdong = $_POST["thoigianhopdong"];

        if($mancc == ""){echo "Vui long nhap ma nha cung cap";}
        if($tenncc == ""){echo "Vui long nhap ten nha cung cap";}
        if($ngaycc == ""){echo "Vui long nhap ngay cung cap";}
        if($email == ""){echo "Vui long nhap email nha cung cap";}
        if($thoigianhopdong == ""){echo "Vui long nhap thoi gian hop dong";}

    if ($mancc != "" && $tenncc != "" && $ngaycc != "" && $email != "" && $thoigianhopdong != "" ){
        $sql = "insert into nhacungcap(mancc, tenncc, ngaycc, email, thoigianhopdong) value('$mancc', '$tenncc', '$ngaycc', '$email', '$thoigianhopdong')";
        $qr = mysqli_query($conn, $sql);
    }
    }
    ?>

<div class="wrap"> 
<form action="" method="POST">
    <div class="form-input">
        <h1 class="header">FORM Thêm nhà cung cấp</h1>
        <table>
            <tr>
                <td><span>Mã NCC:</span></td>
                <td><input type="text" name="mancc"></td>
            </tr>
            <tr>
                <td> <span>Tên NCC:</span></td>
                <td> <input type="text" name="tenncc"></td>
            </tr>
            <tr>
                <td><span>Ngày cung cấp:</span></td>
                <td><input type="text" name="ngaycc"></td>
            </tr>
            <tr>
                <td> <span>Email:</span></td>
                <td> <input type="text" name="email"></td>
            </tr>
            <tr>
                <td><span>Thời gian hợp đồng:</span></td>

                <td><input type="text" name="thoigianhopdong"></td>
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
