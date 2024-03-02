<link rel="stylesheet" href="css/table.css">
<div class="main p-3">
    <div class="text-center">
        <div class="btn-group">
            <a href="index.php?quanly=hoso" class="btn btn-primary">Tài khoản quản lý</a>
            <a href="index.php?quanly=taikhoangiangvien" class="btn btn-secondary">Tài khoản giảng viên</a>
            <a href="index.php?quanly=taikhoansinhvien" class="btn btn-success">Tài khoản sinh viên</a>
    </div>
        <?php
        $sql = "SELECT * FROM tbl_giangvien
        ORDER BY tbl_giangvien.id_gv DESC";
        $qr = mysqli_query($mysqli, $sql);
        ?>
<body>
    <div class="main p-3">
        <div class="text-center">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Tài khoản giảng viên</h6>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ và tên</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
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
                            <td><?php echo $row['tengv'] ?></td>
                            <td><?php echo $row['taikhoan'] ?></td>
                            <td><?php echo $row['matkhau'] ?></td>
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

    </div>
</div>