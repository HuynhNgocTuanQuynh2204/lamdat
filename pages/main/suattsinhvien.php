<link rel="stylesheet" href="css/table.css">
<?php
  $sql = "SELECT * FROM tbl_ttsinhvien  WHERE id_sv = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_array($qr);
?>
<div class="main p-3">
    <div class="text-center">
        <div class="container mt-5" style="padding-top: 50px;">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa thông tin sinh viên</h6>
            <form class="row g-3" method="POST" action="index.php?quanly=xulythemttsinhvien&id=<?php echo $row['id_sv'] ?>">
                <div class="col-md-6">
                    <label for="CCCD" class="form-label">CCCD</label>
                    <input type="text" class="form-control" name="CCCD" id="CCCD" value="<?php echo $row['cccd'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="BHYT" class="form-label">BHYT</label>
                    <input type="text" class="form-control" name="BHYT" id="BHYT" value="<?php echo $row['bhyt'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="chuongtrinh" class="form-label">Chương trình</label>
                    <select id="chuongtrinh" class="form-select" name="chuongtrinh">
                        <option value="1" <?php if ($row['chuongtrinh'] == '1') echo 'selected'; ?>>Cử Nhân</option>
                        <option value="2" <?php if ($row['chuongtrinh'] == '2') echo 'selected'; ?>>Kỹ sư</option>
                        <option value="3" <?php if ($row['chuongtrinh'] == '3') echo 'selected'; ?>>Thạc sĩ</option>
                        <option value="4" <?php if ($row['chuongtrinh'] == '4') echo 'selected'; ?>>Tiến sĩ</option>
                        <option value="5" <?php if ($row['chuongtrinh'] == '5') echo 'selected'; ?>>Khác</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label">Họ và tên</label>
                    <select id="inputState" class="form-select" name="id_sv" required>
                        <?php
                        $sql_lop ="SELECT * FROM tbl_sinhvien ORDER BY tensv DESC";
                        $query_lop = mysqli_query($mysqli, $sql_lop);
                        while ($row_lop = mysqli_fetch_array($query_lop)) {
                            ?>
                        <option value="<?php echo $row_lop['id_sv'] ?>"
                            <?php if ($row_lop['id_sv'] == $row['id_sv']) echo 'selected'; ?>>
                            <?php echo $row_lop['tensv'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-6">
                    <label for="ngayvaotruong" class="form-label">Ngày vào trường</label>
                    <input type="date" class="form-control" name="ngayvaotruong" id="ngayvaotruong"
                        value="<?php echo $row['ngayvaotruong'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="ngaytotnghiep" class="form-label">Ngày tốt nghiệp</label>
                    <input type="date" class="form-control" name="ngaytotnghiep" id="ngaytotnghiep"
                        value="<?php echo $row['ngaytotnghiep'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="tencha" class="form-label">Họ và tên cha</label>
                    <input type="text" class="form-control" name="tencha" id="tencha"
                        value="<?php echo $row['tencha'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="sdtcha" class="form-label">SĐT cha</label>
                    <input type="text" class="form-control" name="sdtcha" id="sdtcha"
                        value="<?php echo $row['sdtcha'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="tenme" class="form-label">Họ và tên mẹ</label>
                    <input type="text" class="form-control" name="tenme" id="tenme" value="<?php echo $row['tenme'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="sdtme" class="form-label">SĐT cha mẹ</label>
                    <input type="text" class="form-control" name="sdtme" id="sdtme" value="<?php echo $row['sdtme'] ?>">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="suattsinhvien">Sửa</button>
                </div>
            </form>
        </div>
    </div>
</div>