<?php
$id= $_GET['id'];
$sql_lietke_phanhoi = "SELECT * FROM tbl_cosovatchat,tbl_sinhvien WHERE tbl_cosovatchat.id_sv = tbl_sinhvien.id_sv AND tbl_cosovatchat.id_csvc= '$id' LIMIT 1";
$query_lietke_phanhoi= mysqli_query($mysqli, $sql_lietke_phanhoi);
?>
<div class="main p-3">
    <div class="text-center">
        <h1 style="text-align: center;padding: 10px;">Chi tiết phản hồi</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Tóm tắt</th>
                            <th scope="col">Ý kiến</th>
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
                            <td><?php echo $row['noidung'] ?></td>
                            <td><?php echo $row['tomtat'] ?></td>
                            <td><?php echo $row['ykien'] ?></td>
                        </tr>
                        <?php }
           ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>