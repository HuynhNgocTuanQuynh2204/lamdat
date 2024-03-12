<?php
$id_sv = $_SESSION['id_sv'];
$sql_lietke_phanhoi = "SELECT * FROM tbl_cosovatchat,tbl_sinhvien WHERE tbl_cosovatchat.id_sv = tbl_sinhvien.id_sv AND tbl_cosovatchat.id_sv = '$id_sv' ORDER BY tbl_cosovatchat.id_csvc DESC";
$query_lietke_phanhoi= mysqli_query($mysqli, $sql_lietke_phanhoi);
?>
<div class="main p-3">
    <div class="text-center">
        <div class="container" style="padding: 10px;">
            <div class="row justify-content-center mt-2">
                <div class="col-lg-6">
                    <form class="form-inline" action="index.php?quanly=timkiemsinhvien" method="POST">
                        <div class="input-group w-100">
                            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập số phòng"
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
        <h1 style="text-align: center;padding: 10px;">Lịch sử phản hồi bị từ chối</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Phòng hoặc khu vực cụ thể</th>
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
              if ($row['trangthai'] == 1) {
            ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['khuvuc'] ?></td>
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
                        echo "<b style='color: blueviolet'>QTV đã từ chối phản hồi: <a href='index.php?quanly=lidotuchoicsvc&id={$row['id_csvc']}'>Lí do</a></b>";
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
                                <a href="index.php?quanly=guiphanhoicosovatchat&id=<?php echo $row['id_csvc'] ?>"
                                    class="btn btn-danger ">Xóa </a><br><br>
                                <a href="index.php?quanly=chitietcosovatchat&id=<?php echo $row['id_csvc'] ?>"
                                    class="btn btn-info">Xem chi tiếtt</a>
                            </td>
                        </tr>
                        <?php }}
           ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>