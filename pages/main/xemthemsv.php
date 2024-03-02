<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT * FROM tbl_ttsinhvien,tbl_sinhvien  WHERE tbl_ttsinhvien.id_sv=tbl_sinhvien.id_sv AND tbl_ttsinhvien.id_sv = '$_GET[id]' ";
$qr = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($qr);
?>
<body>
    <?php
    if ($row) { // Kiểm tra xem có dữ liệu hay không
    ?>
        <div class="main p-3">
            <div class="text-center">
                <h2>Thông tin sinh viên: <?php echo $row['tensv'] ?></h2>
                <div class="header_fixed">
                    <table>
                        <thead>
                            <tr>
                                <th>CCCD</th>
                                <th>BHYT</th>
                                <th>Chương trình</th>
                                <th>Ngày vào trường</th>
                                <th>Ngày tốt nghiệp</th>
                                <th>Họ và tên cha</th>
                                <th>SĐT Cha</th>
                                <th>Họ và tên mẹ</th>
                                <th>SĐT mẹ</th>
                                <?php
                                   if($_SESSION['quyenhan']==0){
                                ?>
                                <th>Sửa</th>
                                <th>Xóa</th>
                                <?php
                                   }
                                   ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $row['cccd'] ?></td>
                                <td><?php echo $row['bhyt'] ?></td>
                                <td><?php
                                    if ($row['chuongtrinh'] == '1') {
                                        echo "Cử nhân";
                                    } else if ($row['chuongtrinh'] == '2') {
                                        echo "Kỹ sư";
                                    } else if ($row['chuongtrinh'] == '3') {
                                        echo "Thạc sĩ";
                                    } else if ($row['chuongtrinh'] == '4') {
                                        echo "Tiến sĩ";
                                    } else if ($row['chuongtrinh'] == '5') {
                                        echo "Khác";
                                    }
                                    ?></td>
                                <td><?php echo $row['ngayvaotruong'] ?></td>
                                <td><?php echo $row['ngaytotnghiep'] ?></td>
                                <td><?php echo $row['tencha'] ?></td>
                                <td><?php echo $row['sdtcha'] ?></td>
                                <td><?php echo $row['tenme'] ?></td>
                                <td><?php echo $row['sdtme'] ?></td>
                                <?php
                                   if($_SESSION['quyenhan']==0){
                                ?>
                                <td><a class="sua" href="index.php?quanly=suattsinhvien&id=<?php echo $row['id_sv'] ?>" class="btn btn-primary">Sửa</a></td>
                                <td><a class="delete" href="index.php?quanly=xulythemttsinhvien&id=<?php echo $row['id_sv'] ?>" class="btn btn-danger" >Xóa</a></td>
                                <?php
                                   }
                                   ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
    } else { // Nếu không có dữ liệu
    ?>
        <div class="main p-3">
            <div class="text-center">
                <p>Thông tin của sinh viên chưa được thêm!</p>
                <a href="index.php?quanly=themsinhvien" style="color: red;">Thêm thông tin sinh viên tại đây</a>
            </div>
        </div>
    <?php
    }
    ?>
</body>
</html>
