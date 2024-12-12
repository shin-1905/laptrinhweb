<?php
include "connect.php"; //ket noi CSDL

//nhan gia tri id tu url
$id = intval($_GET["id"]); //intval dam bao id la so nguyen
$sql="DELETE FROM table_students   WHERE id=$id";  //cau lenh nay dung de xoa ban ghi

if($conn->query($sql) === TRUE){

    //quay lai trang chinh
    header("Location: index.php");
}
else{

    //hien thi loi neu co
    echo "Bug: " . $conn->error;
}
?>