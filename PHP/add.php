<?php include "connect.php"; //ket noi CSDL?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD STUDENT</title>
    <link rel="stylesheet" href="makecolor1.css">
</head>
<body>
    <h1>Add Student</h1>
        <form action="update.php" method="POST">

        <?php // Nhap them thong tin id?>
        <label for="id">ID: </label>
        <input type="text" name="id" placeholder="Nhap ID" required><br>

        <?php // Nhap them ten ?>
        <label for="HoTen">Nhap ho ten: </label>
        <input type="text" name="fullname" placeholder="Nhap ho ten" required><br>

        <?php //Nhap thong tin ngay-thang-nam sinh ?>
        <label for="DateOfBirth">Ngay sinh: </label>
        <input type="date" name="DateOfBirth" placeholder="Nhap ngay sinh" required><br>

        <?php //Chon gioi tinh ?>
        <label for="gender">Gioi tinh: </label>
        <input type="radio" name = "gender" value = "0" required> Nam
        <input type="radio" name = "gender" value = "1" required> Nu <br>

        <?php //Nhap thong tin que quan ?>
        <label for="hometown">Que Quan: </label>
        <input type="text" name = "hometown" placeholder="Nhap que quan" required><br>

        <?php //Lua chon chuc vu ?>
        <label for="level_id">Trinh do hoc van: </label>
        <select name="level_id">
            <option value="0">Tien si</option>
            <option value="1">Thac si</option>
            <option value="2">Ky su</option>
            <option value="3">Khac</option>
        </select><br>

        <?php //Chon nhom cho user?>
        <label for="group_id">Nhom: </label>
        <select name="group_id">
            <option value="1">Nhom 1</option>
            <option value="2">Nhom 2</option>
            <option value="3">Nhom 3</option>
            <option value="4">Nhom 4</option>
            <option value="5">Nhom 5</option>
            <option value="6">Nhom 6</option>
            <option value="7">Nhom 7</option>
            <option value="8">Nhom 8</option>
            <option value="9">Nhom 9</option>
            
        </select><br>
        
        <?php //Luu thong tin muon them?>
        <button type="submit">Save</button>
    </form>
    <a class="editql"href="index.php" > Quay lai</a>
</body>
</html>