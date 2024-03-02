<link rel="stylesheet" href="css/table.css">
<?php
  $sql = "SELECT * FROM tbl_giangvien  WHERE id_gv = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_array($qr);
?>
<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa thông tin giảng viên</h6>
            <form class="row g-3 p-3" method="POST"
                action="index.php?quanly=xulythemgiangvien&id=<?php echo $row['id_gv'] ?>"
                enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tengv"
                        placeholder="Họ và tên" value="<?php echo $row['tengv'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationDefaultUsername" class="form-label">Tài khoản</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" id="validationDefaultUsername" name="taikhoan"
                            aria-describedby="inputGroupPrepend2" value="<?php echo $row['taikhoan'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="inputPassword4" name="matkhau"
                        value="<?php echo $row['matkhau'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" id="inputEmail4" name="ngaysinh"
                        value="<?php echo $row['ngaysinh'] ?>">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="inputAddress" name="hinhanh"
                        value="<?php echo $row['hinhanh'] ?>">
                        <img src="images/hinhanhgv/<?php echo $row['hinhanh'] ?>" width="150px">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Bằng cấp</label>
                    <input type="file" class="form-control" id="inputAddress2" name="bangcap"
                        value="<?php echo $row['bangcap'] ?>">
                        <img src="images/bangcapgv/<?php echo $row['bangcap'] ?>" width="150px">
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="inputCity" name="sodienthoai"
                        value="<?php echo $row['sodienthoai'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Ngày làm việc</label>
                    <input type="date" class="form-control" id="inputCity" name="ngaylamviec"
                        value="<?php echo $row['ngaylamviec'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Ngày thôi việc</label>
                    <input type="date" class="form-control" id="inputCity" name="ngaythoiviec"
                        value="<?php echo $row['ngaythoiviec'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Trình độ</label>
                    <select id="inputState" class="form-select" name="trinhdo">
                        <option value="1" <?php if ($row['trinhdo'] == '1') echo 'selected'; ?>>Giáo sư</option>
                        <option value="2" <?php if ($row['trinhdo'] == '2') echo 'selected'; ?>>Phó giáo sư</option>
                        <option value="3" <?php if ($row['trinhdo'] == '3') echo 'selected'; ?>>Tiến sĩ</option>
                        <option value="4" <?php if ($row['trinhdo'] == '4') echo 'selected'; ?>>Thạc sĩ</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="inputZip"
                        value="<?php echo $row['facebook'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Chuyên ngành</label>
                    <input type="text" class="form-control" name="chuyennganh" id="inputZip"
                        value="<?php echo $row['chuyennganh'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="khoa" class="form-label">Khoa</label>
                    <input type="text" class="form-control" name="khoa" id="khoa" value="<?php echo $row['khoa'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Chủ nhiệm</label>
                    <select id="inputState" class="form-select" name="chunhiem">
                        <option value="0">Không</option>
                        <?php
                            $sql_lop ="SELECT DISTINCT lop FROM tbl_sinhvien ORDER BY lop DESC";
                            $query_lop = mysqli_query($mysqli,$sql_lop);
                            while($row_lop = mysqli_fetch_array($query_lop)){
                        ?>
                        <option value="<?php echo $row_lop['lop'] ?>"
                            <?php if ($row_lop['lop'] == $row['chunhiem']) echo 'selected'; ?>>
                            <?php echo $row_lop['lop'] ?></option>
                        <?php
            }
        ?>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="suagiangvien">Sửa giảng viên</button>
                </div>
            </form>
        </section>
    </div>
</div>