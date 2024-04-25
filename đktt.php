<?php
require 'check.php';

    // nhận dữ liệu từ form
$fullname = $_POST['fullname'];
$usename = $_POST['usename'];
$Matkhau = $_POST['password'];
$Thudientu = $_POST['email'];
$Dateofbirth = $_POST['birthday'];
$Gt = $_POST['gender'];
$Tt = $_POST['city'];
$listsothich = array("thethao","nghenhac","muasam","dulich");
$sothich = "";
foreach($listsothich as $listsothich){
    if(isset($_POST["{$listsothich}"])){
        $sothich =$sothich ." ". $_POST["{$listsothich}"];
    }
}
$Motabanthan = $_POST['gtbt'];
$diachi = $_POST['address'];
// kết nối CSDL
// viết lại SQL để thêm dữ liệu
$themsql = "INSERT INTO dktt
(fullname ,usename, password, email, birthday, gender, city, sothich, gioithieu,diachi) VALUES
 ('$fullname','$usename', '$Matkhau', '$Thudientu', '$Dateofbirth', '$Gt', '$Tt', '$sothich', '$Motabanthan','$diachi')";
//echo $themsql; exit;

// thực thi câu lệnh thêm
if (mysqli_query($conn, $themsql)
)
echo "Thêm Thành Công!!!";

?>