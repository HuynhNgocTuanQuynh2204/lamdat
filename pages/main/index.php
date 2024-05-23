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
                        Xin chào: <?php echo $_SESSION['tenql']; ?>
                    </h1>
                    <?php
                        if ($_SESSION['quyenhan'] == 0) {
                            $query = "SELECT trangthai, COUNT(*) AS soluong FROM tbl_phanhoi GROUP BY trangthai";
                            $result = $mysqli->query($query);

                            // Tạo mảng dữ liệu để sử dụng trong biểu đồ
                            $data = array();
                            while ($row = $result->fetch_assoc()) {
                                if ($row['trangthai'] == 5) {
                                    $tenTrangThai = 'Đã hoàn thành';
                                } else {
                                    $tenTrangThai = 'Đang trong quá trình giải quyết';
                                }

                                // Gộp số lượng cho cùng một trạng thái
                                if (isset($data[$tenTrangThai])) {
                                    $data[$tenTrangThai] += (int)$row['soluong'];
                                } else {
                                    $data[$tenTrangThai] = (int)$row['soluong'];
                                }
                            }
                            ?>
                            <?php
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
                                        foreach ($data as $tenTrangThai => $soluong) {
                                            echo "['" . $tenTrangThai . "', " . $soluong . "],";
                                        }
                                        ?>
                                    ]);

                                    var options = {
                                        title: 'Số lượng số đơn đã duyệt và chưa duyệt của tất cả các phòng',
                                        is3D: true,
                                        colors: ['#4CAF50', '#FF9800'], // Màu cho Đã hoàn thành và Đang trong quá trình giải quyết
                                        width: '100%',
                                        height: 500,
                                        chartArea: {
                                            left: '10%',
                                            width: '80%',
                                            height: '80%'
                                        }
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                    chart.draw(data, options);
                                }
                                </script>
                                <style>
                                #piechart_3d {
                                    width: 100%;
                                    height: 500px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                                </style>
                            </head>

                            <body>
                                <div class="d-flex justify-content-center">
                                    <div id="piechart_3d"></div>
                                </div>
                            </body>

                            </html>
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
                if ($_SESSION['quyenhan'] == 0) {?>
            <h1 class="text-center my-4">Số lượng phản hồi đã giải quyết và chưa giải quyết của từng phòng ban</h1>
            <?php
            $phongbans = [
                'Phòng quản lý sinh viên' => 0,
                'Phòng đào tạo' => 1,
                'Công nghệ thông tin' => 2,
                'Kinh tế' => 3,
                'Sư phạm' => 4,
                'Khoa nông nghiệp' => 5,
                'Phòng kế toán' => 6,
                'Phòng công tác sinh viên' => 7
            ];

            foreach ($phongbans as $tenphong => $maphong) {
                $sql_total = "SELECT COUNT(*) AS total FROM tbl_phanhoi WHERE phongban = $maphong";
                $result_total = mysqli_query($mysqli, $sql_total);
                $row_total = mysqli_fetch_assoc($result_total);

                $sql_hoanthanh = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = $maphong AND trangthai = 5";
                $result_hoanthanh = mysqli_query($mysqli, $sql_hoanthanh);
                $row_hoanthanh = mysqli_fetch_assoc($result_hoanthanh);

                $sql_chuahoanthanh = "SELECT COUNT(*) AS soluong FROM tbl_phanhoi WHERE phongban = $maphong AND trangthai != 5";
                $result_chuahoanthanh = mysqli_query($mysqli, $sql_chuahoanthanh);
                $row_chuahoanthanh = mysqli_fetch_assoc($result_chuahoanthanh);
            ?>
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="stati turquoise">
                        <i class="icon-exclamation icons"></i>
                        <div>
                            <b><?php echo $row_total['total']; ?></b>
                            <span><?php echo $tenphong; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stati turquoise">
                        <i class="icon-exclamation icons"></i>
                        <div>
                            <b><?php echo $row_hoanthanh['soluong']; ?></b>
                            <span>Đã hoàn thành-<?php echo $tenphong; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stati red">
                        <i class="icon-exclamation icons"></i>
                        <div>
                            <b><?php echo $row_chuahoanthanh['soluong']; ?></b>
                            <span>Chưa hoàn thành-<?php echo $tenphong; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <?php
                }else{?>
        <img src="images/DHBACLIEU.jpg" alt="">
        <?php
            }
        ?>
        </div>
        <?php
            } elseif (isset($_SESSION['id_sv'])) {
                header("location:index.php?quanly=phanhoi");
        ?>
        <h1>
            Xin chào: <?php echo $_SESSION['tensv']; ?>
        </h1>
        <?php
            } elseif (isset($_SESSION['id_gv'])) {
        ?>
        <h1>
            Xin chào: <?php echo $_SESSION['tengv']; ?>
        </h1>
        <img src="images/DHBACLIEU.jpg" alt="">
        <?php
            }
        ?>
    </div>
</div>
