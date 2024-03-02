<link rel="stylesheet" href="css/table.css">
<?php
  $sql = "SELECT * FROM tbl_sinhvien  WHERE id_sv = '$_SESSION[id_sv]' ";
  $qr = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_array($qr);
?>
<div class="main p-3">
    <div class="text-center">
    <a href="index.php?quanly=ttsinhvien" class="btn btn-info" style="margin-left: 560px;">Thông tin chi tiết</a>
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Thông tin sinh viên</h6>
            <form class="row g-3 p-3" method="POST"
                action="index.php?quanly=xulythemsinhvien&id=<?php echo $row['id_sv'] ?>"
                enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tensv"
                        placeholder="Họ và tên" value="<?php echo $row['tensv'] ?>">
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
                    <label for="inputEmail4" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" id="inputEmail4" name="ngaysinh"
                        value="<?php echo $row['ngaysinh'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="chuyennganh" class="form-label">Chuyên ngành</label>
                    <input type="text" class="form-control" name="chuyennganh" id="chuyennganh" value="<?php echo $row['chuyennganh'] ?>">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" id="inputAddress" name="hinhanh"
                        value="<?php echo $row['hinhanh'] ?>">
                        <img src="images/hinhanhsv/<?php echo $row['hinhanh'] ?>" width="150px">
                </div>
               
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="inputCity" name="sodienthoai"
                        value="<?php echo $row['sodienthoai'] ?>">
                </div>
               
                <div class="col-md-6">
                    <label for="diachi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="diachi" id="diachi" value="<?php echo $row['diachi'] ?>">
                </div>

                <div class="col-md-6">
                    <label for="lop" class="form-label">Lớp</label>
                    <input type="text" class="form-control" name="lop" id="lop" value="<?php echo $row['lop'] ?>">
                </div>

                <div class="col-md-6">
                    <label for="khoa" class="form-label">Khoa</label>
                    <input type="text" class="form-control" name="khoa" id="khoa" value="<?php echo $row['khoa'] ?>">
                </div>                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="capnhapsinhvien">Cập nhâp thông tin sinh viên</button>
                </div>
            </form>
        </section>
    </div>
</div>