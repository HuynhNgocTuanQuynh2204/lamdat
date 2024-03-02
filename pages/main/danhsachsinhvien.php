<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT * FROM tbl_sinhvien,tbl_quanly WHERE tbl_sinhvien.id_ql = tbl_quanly.id_ql 
ORDER BY tbl_sinhvien.id_sv DESC";
$qr = mysqli_query($mysqli, $sql);
?>

<body>
    <div class="main p-3">
        <div class="text-center">
            <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemsinhvien" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên sinh viên"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                                        kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MSV</th>
                            <th>Hình ảnh</th>
                            <th>Họ và tên</th>
                            <th>Ngày sinh</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Lớp</th>
                            <th>Khoa</th>
                            <th>Quản lý</th>
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
                        <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($qr)) {
                    $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['masv'] ?></td>
                            <td><img src="images/hinhanhsv/<?php echo $row['hinhanh'] ?>"></td>
                            <td><?php echo $row['tensv'] ?></td>
                            <td><?php echo $row['ngaysinh'] ?></td>
                            <td><?php echo $row['diachi'] ?></td>
                            <td><?php echo $row['sodienthoai'] ?></td>
                            <td><?php echo $row['lop'] ?></td>
                            <td><?php echo $row['khoa'] ?></td>
                            <td><a class="them"
                                    href="index.php?quanly=xemthemsv&id=<?php echo $row['id_sv'] ?>">Xem</a></td>
                                    <?php
                                   if($_SESSION['quyenhan']==0){
                                ?>
                            <td><a href="index.php?quanly=suasinhvien&id=<?php echo $row['id_sv'] ?>"
                            class="sua">Sửa</a></td>
                            <td><a href="index.php?quanly=xulythemsinhvien&id=<?php echo $row['id_sv'] ?>"
                            class="delete">Xóa</a></td>
                            <?php
                                   }
                                   ?>
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>