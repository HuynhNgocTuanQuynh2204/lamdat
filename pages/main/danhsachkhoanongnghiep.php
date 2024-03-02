<link rel="stylesheet" href="css/table.css">
<div class="main p-3">
    <div class="text-center">
        <div class="btn-group">
            <a href="index.php?quanly=danhsachcackhoa" class="btn btn-primary">Khoa công nghệ thông tin</a>
            <a href="index.php?quanly=danhsachkhoanongnghiep" class="btn btn-secondary">Khoa nông nghiệp</a>
            <a href="index.php?quanly=danhsachkhoakinhte" class="btn btn-success">Khoa kinh tế</a>
            <a href="index.php?quanly=danhsachkhoasupham" class="btn btn-info">Khoa sư phạm</a>
        </div>
        <?php
$sql = "SELECT * FROM tbl_giangvien,tbl_quanly WHERE tbl_giangvien.id_ql = tbl_quanly.id_ql 
ORDER BY tbl_giangvien.id_gv DESC";
$qr = mysqli_query($mysqli, $sql);
?>
<body>
    <div class="main p-3">
        <div class="text-center">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Khoa nông nghiệp</h6>
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
                        if($row['khoa']=='Nông nghiệp'){
                    $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['magv'] ?></td>
                            <td><img src="images/hinhanhgv/<?php echo $row['hinhanh'] ?>"></td>
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
                              <td><img src="images/bangcapgv/<?php echo $row['bangcap'] ?>"></td>
                            <td><?php echo $row['taikhoan'] ?></td>
                            <td><?php echo $row['chuyennganh'] ?></td>
                            <td><?php echo $row['ngaylamviec'] ?></td>
                            <td><?php echo $row['ngaythoiviec'] ?></td>
                            <td><a class="them" href="index.php?quanly=xemthem&id=<?php echo $row['id_gv'] ?>">Xem</a><br>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

    </div>
</div>