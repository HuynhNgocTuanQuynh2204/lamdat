<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT * FROM tbl_sinhvien,tbl_quanly WHERE tbl_sinhvien.id_ql = tbl_quanly.id_ql 
ORDER BY tbl_sinhvien.id_sv DESC";
$qr = mysqli_query($mysqli, $sql);
?>

<body>
    <div class="main p-3">
        <div class="text-center">
            <div class="text-center">
                <div class="btn-group">
                    <a href="index.php?quanly=danhsachlop" class="btn btn-primary">Khoa công nghệ thông tin</a>
                    <a href="index.php?quanly=danhsachcaclopkhoanongnghiep" class="btn btn-secondary">Khoa nông
                        nghiệp</a>
                    <a href="index.php?quanly=danhsachcaclopkhoakinhte" class="btn btn-success">Khoa kinh tế</a>
                    <a href="index.php?quanly=danhsachcaclopkhoasupham" class="btn btn-info">Khoa sư phạm</a>
                </div>
                <div class="container mt-5">
                    <?php
        $sql_lop = "SELECT DISTINCT lop FROM tbl_sinhvien WHERE khoa = 'Kinh tế' ORDER BY lop DESC";
        $kq = mysqli_query($mysqli, $sql_lop);
    ?>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Lớp
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php
                        while($row_lop = mysqli_fetch_array($kq)){
                    ?>
                                    <li><a class="dropdown-item"
                                            href="index.php?quanly=kinhte&lop=<?php echo $row_lop['lop'] ?>"><?php echo $row_lop['lop'] ?></a>
                                    </li>
                                    <?php
                        }
                    ?>
                                </ul>
                            </div>
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
                                    if($_SESSION['quyenhan']==0 ){
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
                    if($row['lop']==$_GET['lop']){
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
                                        href="index.php?quanly=xemthemsv&id=<?php echo $row['id_sv'] ?>">Xem</a>
                                </td>
                                <?php
                                    if($_SESSION['quyenhan']==0 ){
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
                        }}
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>