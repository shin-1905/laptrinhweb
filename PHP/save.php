<?php
include "databasename.php"; //ket noi CSDL

$id = intval($_POST["id"]) ?? 0;
$full_name = $_POST["fullname"] ?? '';
$dob = $_POST["dob"] ?? '';
$gender = $_POST["gender"] ?? '';
$hometown = $_POST["hometown"] ?? '';
$level_id = $_POST["level_id"] ?? 0;
$group_id = $_POST["group_id"] ?? 0;

//cap nhat them thong tin user sau khi bam save
$sql = "INSERT INTO table_student (id, fullname, dob, gender, hometown, level_id, group_id) 
VALUES ($id,'$full_name','$dob','$gender','$hometown',$level_id,$group_id)";

if($conn->query($sql) === TRUE){
    
    //quay lai trang chinh
    header("Location: index.php");
}
else{

    //bao loi neu co
    echo "Bug: ". $conn->error;
}
?>