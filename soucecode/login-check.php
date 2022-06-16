<?php

include '../soucecode/config/config.php';
if(isset($_POST["submit"]) && $_POST["username"] != '' && $_POST != '' ){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $shopcode = $_POST["shopcode"];
    $code = $_POST["code"];

    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password' and shopcode = '$shopcode' and code ='$code'";
    $user = mysqli_query($conn, $sql);
    if(mysqli_num_rows($user) > 0){
        if($code == 'HHL')
        header("Location: nhanvien/trangchunhanvien.php");
        else 
            if($code == 'HHA')
                header("location:admin/trangchuadmin.php");
            else{
                echo "khong hop le";
                header("Location: login.php");
            }
    }
    else{
        header("Location: login.php");
    }
}

else{
    header("Location: login.php");
}
?>