    <?php
    // CSDL
    include "connect.php"; //ket noi CSDL

    //danh sach sinh vien
    $sql = "SELECT * FROM table_students";
    $result = $conn->query($sql);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DanhSachThanhVienNhom</title>
        <link rel="stylesheet" href="makecolor.css">
    </head>
    <body>
    <h2>DANH SACH THANH VIEN NHOM</h2>

    <form action="index.php" method="GET">
        <label for="search">Tim kiem sinh vien:</label>
        <input type="text" name="search" id="search" placeholder="Tim kiem theo ten hoac que quan">
        <button type="submit">Tim kiem</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Ho Ten</th>
            <th>Ngay Sinh</th>
            <th>Gioi Tinh</th>
            <th>Noi Sinh</th>
            <th>Trinh do hoc van</th>
            <th>Nhom</th>
            <th>Hanh Dong</th>
        </tr>
        <tbody>
            
        <?php 

        //Tim kiem thong tin sinh vien theo ten hoac que quan
        $search = $_GET['search'] ?? "";
        $query = "SELECT * FROM table_students WHERE fullname LIKE '%$search%' OR hometown LIKE '%$search%' ";
        $result = $conn->query($query);



        //LAp qua cac hang du lieu duoc tra ve
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td class="btn function"><?php echo $row["id"]; ?></td>
                <td><?php echo $row["fullname"]; ?></td>
                <td class="btn function"><?php echo date("d-m-Y", strtotime($row["dob"])); ?></td>
                <td class="btn function"><?php echo $row["gender"] == 1 ? "Nam" :  "Nu"; ?></td>
                <td class="btn function"><?php echo $row["hometown"]; ?></td>
                <td class="btn function">
                    <?php $levels=["Tien si", "Thac si", "Ky su",  "Khac"];
                    echo $levels[$row["level_id"]]; ?>
                </td>
                <td class="btn function"><?php echo $row["group_id"];?></td>

                <td class="btn function">

                <?php // Chuyen sang trang chinh sua thong tin user?>
                    <a class="btn edit" href="edit.php?id=<?php echo $row["id"]; ?>" >Sua</a>  

                    <?php //Dung de xoa thong tin sinh vien?>
                    <a class="btn delete" href="delete.php?id=<?php echo $row["id"]; ?>" onclick = "return confirm('Ban chac chan mua xoa ?')//Hoi lai, lua chon xem chac chan muon xoa hay khong?;">Xoa</a> 
                </td>
            </tr>
        <?php } ?>

        
        </tbody>
    </table>
    <td>
    <?php 
        // Nếu có từ khóa tìm kiếm thì nút sẽ là "Quay về trang chủ"
        if ($search) {
            echo '<a class="editadd" href="index.php">Quay về</a>';
        } else {
            echo '<a class="editadd" href="add.php">Thêm sinh viên</a>';
        }
        ?>
    </td>      

    </body>
    </html>