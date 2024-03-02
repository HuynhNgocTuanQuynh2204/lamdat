<link rel="stylesheet" href="css/table.css">
  <?php
  $sql = "SELECT * FROM tbl_giangvien  WHERE id_gv = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_array($qr);
?>
<body>
    <div class="main p-3">
        <div class="text-center">
            <h2>Thông tin giảng viên: <?php echo $row['tengv'] ?></h2>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                           <th>Số điện thoại</th>
                           <th>Facebook</th>
                           <th>Chủ nhiệm</th>
                           <th>Khoa</th>
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
                        <tr>
                            <td><?php echo $row['sodienthoai'] ?></td>
                            <td><?php echo $row['facebook'] ?></td>
                            <td><?php if($row['chunhiem']=='0'){
                                echo "Không có lớp chủ nhiệm";
                            }else{
                                echo $row['chunhiem'];
                            } ?></td>
                        <td><?php echo $row['khoa'] ?></td>
                        <?php
                        if($_SESSION['quyenhan']==0 ){
                        ?>
                        <td><a class="sua" href="index.php?quanly=suagiangvien&id=<?php echo $row['id_gv'] ?>" class="btn btn-primary">Sửa</a></td>
                        <td><a class="delete" href="index.php?quanly=xulythemgiangvien&id=<?php echo $row['id_gv'] ?>" class="btn btn-danger">Xóa</a></td>
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