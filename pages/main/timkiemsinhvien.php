<link rel="stylesheet" href="css/table.css">
<?php
 if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
} else{
    $tukhoa = '';
}
$sql = "SELECT * FROM tbl_sinhvien,tbl_quanly WHERE tbl_sinhvien.id_ql = tbl_quanly.id_ql AND
tbl_sinhvien.tensv LIKE '%" . $tukhoa . "%'";
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
            <h6 style="text-align: center;padding: 10px;">Tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h6>
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
                            <td><img src="images/hinhanhsv/<?php echo $row['hinhanh'] ?> "></td>
                            <td><?php echo $row['tensv'] ?></td>
                            <td><?php echo $row['ngaysinh'] ?></td>
                            <td><?php echo $row['diachi'] ?></td>
                            <td><?php echo $row['sodienthoai'] ?></td>
                            <td><?php echo $row['lop'] ?></td>
                            <td><?php echo $row['khoa'] ?></td>
                            <td><a class="them"
                                    href="index.php?quanly=xemthemsv&id=<?php echo $row['id_sv'] ?>">Xem</a><br>
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