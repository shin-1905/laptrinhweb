<?php
include "connect.php"; //ket noi CSDL

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = intval($_POST["id"]); // dung intval de dam bao id la so nguyen
    $fullname = $_POST["fullname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $hometown = $_POST["hometown"];
    $level_id = intval($_POST["level_id"]);
    $group_id = intval($_POST["group_id"]);

    //cap nhat thong tin user sau khi sua trong edit
    $sql = "UPDATE table_students SET id = '$id', fullname = '$fullname', dob = '$dob', gender = '$gender', hometown = '$hometown', level_id = '$level_id', group_id = '$group_id' WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");  //quay lai trang chinh
}

?>
