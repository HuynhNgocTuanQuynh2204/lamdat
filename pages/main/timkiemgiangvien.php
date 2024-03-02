<link rel="stylesheet" href="css/table.css">
<?php
 if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
} else{
    $tukhoa = '';
}
$sql = "SELECT * FROM tbl_giangvien,tbl_quanly WHERE tbl_giangvien.id_ql = tbl_quanly.id_ql AND
tbl_giangvien.tengv LIKE '%" . $tukhoa . "%'";
$qr = mysqli_query($mysqli, $sql);
?>

<body>
    <div class="main p-3">
        <div class="text-center">
            <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemgiangvien" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control"
                                    placeholder="Nhập tên giảng viên" aria-label="Search">
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
                            <th>MGV</th>
                            <th>Hình ảnh</th>
                            <th>Họ và tên</th>
                            <th>Ngày sinh</th>
                            <th>Trình độ</th>
                            <th>Bằng cấp</th>
                            <th>Email</th>
                            <th>Chuyên Ngành</th>
                            <th>Ngày làm việc</th>
                            <th>Ngày thôi việc</th>
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
                            <td><?php echo $row['magv'] ?></td>
                            <td><img src="images/hinhanhgv/<?php echo $row['hinhanh'] ?> "></td>
                            <td><?php echo $row['tengv'] ?></td>
                            <td><?php echo $row['ngaysinh'] ?></td>
                            <td><?php if($row['trinhdo']==1){
                                echo 'Giáo sư';
                            }else if($row['trinhdo']==2){
                               echo 'Phó giáo sư';
                            }else if($row['trinhdo']==3){
                                echo 'Tiến sĩ';
                            }else{
                                echo 'Thạc sĩ';
                            } ?></td>
                            <td><img src="images/bangcapgv/<?php echo $row['bangcap'] ?> "></td>
                            <td><?php echo $row['taikhoan'] ?></td>
                            <td><?php echo $row['chuyennganh'] ?></td>
                            <td><?php echo $row['ngaylamviec'] ?></td>
                            <td><?php echo $row['ngaythoiviec'] ?></td>
                            <td><a class="them"
                                    href="index.php?quanly=xemthem&id=<?php echo $row['id_gv'] ?>">Xem</a><br>
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