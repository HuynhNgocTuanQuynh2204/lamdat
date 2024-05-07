<?php
if(isset($_POST['timkiem'])){
   $tukhoa = $_POST['tukhoa'];
} else{
   $tukhoa = '';
}
$sql_lietke_phanhoi = "SELECT * FROM tbl_phanhoi,tbl_sinhvien WHERE tbl_phanhoi.id_sv = tbl_sinhvien.id_sv AND (tbl_phanhoi.theloai LIKE '%" . $tukhoa . "%' OR tbl_phanhoi.thoigian LIKE '%" . $tukhoa . "%') ORDER BY tbl_phanhoi.id_phanhoi DESC";
$query_lietke_phanhoi= mysqli_query($mysqli, $sql_lietke_phanhoi);
?>

<div class="main p-3">
    <div class="text-center">
        <div class="container" style="padding: 10px;">
            <div class="row justify-content-center mt-2">
                <div class="col-lg-6">
                    <form class="form-inline" action="index.php?quanly=timkiemphanhoisinhvien" method="POST">
                        <div class="input-group w-100">
                            <input type="search" name="tukhoa" class="form-control"
                                placeholder="Nhập thể loại phản hồi hoặc ngày phản hồi để tìm kiếm " aria-label="Search">
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
        <h1 style="text-align: center;padding: 10px;">Thông tin được tìm kiếm</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Họ và tên sinh viên</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Khoa</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Mức độ ưu tiên</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Hoàn thành</th>
                            <th scope="col">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_phanhoi)) {
              $i++;
            ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['tensv'] ?></td>
                            <td><?php echo $row['lop'] ?></td>
                            <td><?php echo $row['khoa'] ?></td>
                            <td><?php echo $row['theloai'] ?></td>
                            <td><?php echo $row['mucdo'] ?></td>
                            <td>
                                <img class="img img-responsive" width="100%" height="150px"
                                    src="images/file/<?php echo $row['file'] ?>">
                            </td>
                            <td>
                                <?php
                    if ($row['trangthai'] == 0) {
                        echo '<b style="color:red">Đang chờ xét duyệt</b>';
                    } else if ($row['trangthai'] == 1) {
                        echo '<b style="color: blueviolet">QTV đã từ chối phản hồi</b>';
                    } else if ($row['trangthai'] == 2) {
                        echo '<b style="color:darkblue">Đã duyệt phản hồi và gửi đơn vị có liên quan</b>';
                    }else if ($row['trangthai'] == 3) {
                        echo '<b style="color:darkblue">Đang trong quá trình giải quyết</b>';
                    } else if ($row['trangthai'] == 4) {
                        echo '<b style="color:darkblue">Phản hồi đã giải quyết thành công vui lòng xác nhận</b>';
                    } else {
                        echo '<b style="color:darkblue">Phản hồi đã được giải quyết</b>';
                    }
                    ?>
                            </td>
                            <td><?php echo $row['thoigian'] ?></td>
                            <td><?php echo $row['hoanthanh'] ?></td>
                            <td>
                                <a href="index.php?quanly=duyetphanhoiql&id=<?php echo $row['id_phanhoi'] ?>"
                                    class="btn btn-danger ">Duyệt phản hồi</a><br><br>
                                <a href="index.php?quanly=khongduyetphanhoi&id=<?php echo $row['id_phanhoi'] ?>"
                                    class="btn btn-success">Không duyệt </a><br><br>
                                <a href="index.php?quanly=chitietphanhoi&id=<?php echo $row['id_phanhoi'] ?>"
                                    class="btn btn-info">Xem chi tiếtt</a>
                            </td>
                        </tr>
                        <?php }
           ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>