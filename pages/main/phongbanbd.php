<link rel="stylesheet" href="css/thongke.css">
<div class="main p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="text-center">
                    <?php
                    if (isset($_SESSION['id_ql'])) {
                    ?>
                        <h1>
                            Xin chào: <?php echo $_SESSION['tenql'] ?>
                        </h1>
                        <?php
                        if (isset($_GET['id'])) {
                            $phongban_id = $_GET['id'];

                            $query = "SELECT trangthai, COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = $phongban_id GROUP BY trangthai";
                            $result = $mysqli->query($query);

                            // Tạo mảng dữ liệu để sử dụng trong biểu đồ
                            $data = array();
                            while ($row = $result->fetch_assoc()) {
                                if ($row['trangthai'] == 5) {
                                    $tenTrangThai = 'Đã duyệt';
                                } else {
                                    $tenTrangThai = 'Đang trong quá trình chờ duyệt';
                                }

                                $data[] = array($tenTrangThai, (int)$row['soluong']);
                            }

                            if (empty($data)) {
                                echo "<p>Không tìm thấy phản hồi nào dành cho phòng ban này.</p>";
                            } else {
                            ?>
                                <!DOCTYPE html>
                                <html lang="en">

                                <head>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        google.charts.load("current", {
                                            packages: ["corechart"]
                                        });
                                        google.charts.setOnLoadCallback(drawChart);

                                        function drawChart() {
                                            // Sử dụng dữ liệu từ truy vấn cơ sở dữ liệu
                                            var data = google.visualization.arrayToDataTable([
                                                ['Trạng Thái', 'Số Lượng'],
                                                <?php
                                                foreach ($data as $row) {
                                                    echo "['" . $row[0] . "', " . $row[1] . "],";
                                                }
                                                ?>
                                            ]);

                                            var options = {
                                                title: 'Số lượng số đơn đã duyệt và chưa duyệt của phòng ban',
                                                is3D: true,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                            chart.draw(data, options);
                                        }
                                    </script>
                                </head>

                                <body>
                                    <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
                                </body>

                                </html>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="list-group mt-3">
                    <li class="list-group-item"><a href="index.php?quanly=phongbanbd&id=0">Phòng quản Lý sinh viên</a></li>
                    <li class="list-group-item"><a href="index.php?quanly=phongbanbd&id=1">Phòng đào tạo</a></li>
                    <li class="list-group-item"><a href="index.php?quanly=phongbanbd&id=2">Phòng công nghệ thông tin</a></li>
                    <li class="list-group-item"><a href="index.php?quanly=phongbanbd&id=3">Phòng kinh tế</a></li>
                    <li class="list-group-item"><a href="index.php?quanly=phongbanbd&id=4">Phòng sư phạm</a></li>
                    <li class="list-group-item"><a href="index.php?quanly=phongbanbd&id=5">Khoa nông nghiệp</a></li>
                </ul>
            </div>
            
            <body>
                <div class="container">
                <h1>Tổng số lượng phản hồi đã giải quyết của từng phòng ban</h1>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="stati turquoise ">
                                <i class="icon-exclamation icons"></i>
                                <div>
                                    <b>
                                        <?php
              $sql_phongkhoa = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = 0 AND trangthai = 5";
              $result_phongkhoa = mysqli_query($mysqli, $sql_phongkhoa);
              $row_phongkhoa = mysqli_fetch_assoc($result_phongkhoa);
              echo $row_phongkhoa['soluong'];
              ?>
                                    </b>
                                    <span>Phòng quản Lý sinh viên</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stati turquoise left">
                                <i class="icon-organization icons"></i>
                                <div>
                                    <b>
                                        <?php
              $sql_phongkhoa = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = 1 AND trangthai = 5";
              $result_phongkhoa = mysqli_query($mysqli, $sql_phongkhoa);
              $row_phongkhoa = mysqli_fetch_assoc($result_phongkhoa);
              echo $row_phongkhoa['soluong'];
              ?>
                                    </b>
                                    <span>Phòng đào tạo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stati bg-turquoise ">
                                <i class="icon-trophy icons"></i>
                                <div>
                                    <b>
                                        <?php
              $sql_phongkhoa = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = 2 AND trangthai = 5";
              $result_phongkhoa = mysqli_query($mysqli, $sql_phongkhoa);
              $row_phongkhoa = mysqli_fetch_assoc($result_phongkhoa);
              echo $row_phongkhoa['soluong'];
              ?>
                                    </b>
                                    <span>Công nghệ thông tin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stati bg-turquoise left">
                                <i class="icon-screen-smartphone icons"></i>
                                <div>
                                    <b>
                                        <?php
              $sql_phongkhoa = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = 3 AND trangthai = 5";
              $result_phongkhoa = mysqli_query($mysqli, $sql_phongkhoa);
              $row_phongkhoa = mysqli_fetch_assoc($result_phongkhoa);
              echo $row_phongkhoa['soluong'];
              ?>
                                    </b>
                                    <span>Kinh tế</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="stati emerald ">
                                <i class="icon-screen-desktop icons"></i>
                                <div>
                                    <b>
                                        <?php
              $sql_phongkhoa = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = 4 AND trangthai = 5";
              $result_phongkhoa = mysqli_query($mysqli, $sql_phongkhoa);
              $row_phongkhoa = mysqli_fetch_assoc($result_phongkhoa);
              echo $row_phongkhoa['soluong'];
              ?>
                                    </b>
                                    <span>Sư phạm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stati emerald left">
                                <i class="icon-plane icons"></i>
                                <div>
                                    <b>
                                        <?php
              $sql_phongkhoa = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = 5 AND trangthai = 5";
              $result_phongkhoa = mysqli_query($mysqli, $sql_phongkhoa);
              $row_phongkhoa = mysqli_fetch_assoc($result_phongkhoa);
              echo $row_phongkhoa['soluong'];
              ?>
                                    </b>
                                    <span>Khoa nông nghiệp</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stati bg-emerald ">
                                <i class="icon-notebook icons"></i>
                                <div>
                                    <b>
                                        <?php
              $sql_phongkhoa = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = 6 AND trangthai = 5";
              $result_phongkhoa = mysqli_query($mysqli, $sql_phongkhoa);
              $row_phongkhoa = mysqli_fetch_assoc($result_phongkhoa);
              echo $row_phongkhoa['soluong'];
              ?>
                                    </b>
                                    <span>Phòng Nghiên Cứu và Phát Triển</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>

        </div>
        </body>

        </html>
            <?php
                    }
            ?>
        </div>
    </div>
</div>
<?php
if (isset($_SESSION['id_sv'])) {
?>
    <h1>
        Xin chào: <?php echo $_SESSION['tensv'] ?>
    </h1>
<?php
}
?>
<?php
if (isset($_SESSION['id_gv'])) {
?>
    <h1>
        Xin chào: <?php echo $_SESSION['tengv'] ?>
    </h1>

<?php
}
?>

</div>
</div>
