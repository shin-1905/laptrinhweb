<?php
include "connect.php"; //ket noi CSDL
////////////////////////////////////////////////////////////////////

//Kiem tra va lam sach gia tri "id"
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
if($id <= 0){
    die("ID khong dung");
};
$sql = "SELECT * FROM table_students WHERE id=$id";
//Xu ly khi khong co du lieu tra ve co so du lieu
$result = $conn->query($sql);
if($result->num_rows === 0){
    die("Khong tim thay thong tin!!!");
}
$row=$result->fetch_assoc();


//////////////////////////////////////////////////////////////////
//*Ghi chu:
// echo $row["..."]; : dung de hien thi gia tri cua noi dung trong dau ngoac kep
//$row : la mot bien mang lien ket chua de lieu mot ban ghi lay tu CSDL
//Dong 78: dung de quay lai trang chinh hien thi danh sach user
//Dong 75: dung de luu thong tin sau khi da edit va quay ve trang chinh
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT STUDENT</title>
    <link rel="stylesheet" href="makecolor2.css">
</head>
<body>
    <h1>Edit Student</h1>
    <form action="update2.php" method="POST">
        
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">


            
        <label for="fullname">fullname:</label>
            <input type="text" name="fullname" value="<?php echo $row["fullname"]; ?>">
        <label for="dob">Dob:</label>
            <input type="date" name="dob" value="<?php echo $row["dob"]; ?>"><br>
        <label for="gender">Gender:</label>
            <input type="radio" name="gender" value= "1" <?php echo ($row["gender"] == 1) ? "Checked" :  ""; ?> required> Nam
            <input type="radio" name="gender" value= "0" <?php echo ($row["gender"] == 0) ? "Checked" :  ""; ?> required> Nu <br>
        <label for="hometown">Hometown:</label>
        <input type="text" name="hometown" value="<?php echo $row["hometown"]; ?>">
        <label for="level_id">Level:</label>
        <select name="level_id" required>
            <option value="0"<?php echo ($row['level_id'] == 0 ) ? 'selected' : ''; ?>>Tien si</option>
            <option value="1"<?php echo ($row['level_id'] == 1 ) ? 'selected' : ''; ?>>Thac si</option>
            <option value="2"<?php echo ($row['level_id'] == 2 ) ? 'selected' : ''; ?>>Ky su</option>
            <option value="3"<?php echo ($row['level_id'] == 3 ) ? 'selected' : ''; ?>>Khac</option>
        </select>

        <label for="group_id">Group:</label>
        <select name="group_id">
            <option value="1" <?php echo ($row['group_id'] == 1) ? 'selected' : '' ?>>Nhom 1</option>
            <option value="2" <?php echo ($row['group_id'] == 2) ? 'selected' : '' ?>>Nhom 2</option>
            <option value="3" <?php echo ($row['group_id'] == 3) ? 'selected' : '' ?>>Nhom 3</option>
            <option value="4" <?php echo ($row['group_id'] == 4) ? 'selected' : '' ?>>Nhom 4</option>
            <option value="5" <?php echo ($row['group_id'] == 5) ? 'selected' : '' ?>>Nhom 5</option>
            <option value="6" <?php echo ($row['group_id'] == 6) ? 'selected' : '' ?>>Nhom 6</option>
            <option value="7" <?php echo ($row['group_id'] == 7) ? 'selected' : '' ?>>Nhom 7</option>
            <option value="8" <?php echo ($row['group_id'] == 8) ? 'selected' : '' ?>>Nhom 8</option>
            <option value="9" <?php echo ($row['group_id'] == 9) ? 'selected' : '' ?>>Nhom 9</option>
            
        </select><br>
        <div class="btn-group">
            <button type="submit">Lưu thông tin</button>
            <a href="index.php" class="btn-back">Quay lại</a>
        </div>
    </form>
</body>
</html>