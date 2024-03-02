<link rel="stylesheet" href="css/sinhvien.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>


    <section class="p-3">

        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary newUser" data-bs-toggle="modal" data-bs-target="#userForm">Thêm sinh viên
                    <i class="bi bi-people"></i></button>
            </div>
        </div>
    </section>
    <div class="container mt-5" style="padding-top: 50px;">
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Thêm thông tin sinh viên</h6>
        <form class="row g-3" method="POST" action="index.php?quanly=xulythemttsinhvien">
            <div class="col-md-6">
                <label for="CCCD" class="form-label">CCCD</label>
                <input type="text" class="form-control" name="CCCD" id="CCCD">
            </div>
            <div class="col-md-6">
                <label for="BHYT" class="form-label">BHYT</label>
                <input type="text" class="form-control" name="BHYT" id="BHYT">
            </div>
            <div class="col-md-4">
                <label for="chuongtrinh" class="form-label">Chương trình</label>
                <select id="chuongtrinh" class="form-select" name="chuongtrinh">
                    <option value="1">Cử Nhân</option>
                    <option value="2">Kỹ sư</option>
                    <option value="3">Thạc sĩ</option>
                    <option value="4">Tiến sĩ</option>
                    <option value="5">Khác</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Họ và tên</label>
                <select id="inputState" class="form-select" name="id_sv" required>
                    <?php
                            $sql_lop ="SELECT * FROM tbl_sinhvien ORDER BY tensv DESC";
                            $query_lop = mysqli_query($mysqli,$sql_lop);
                            while($row_lop = mysqli_fetch_array($query_lop)){
                        ?>
                    <option value="<?php echo $row_lop['id_sv']  ?>"><?php echo $row_lop['tensv'] ?></option>
                    <?php
                        }
                        ?>
                </select>
            </div>
            <div class="col-6">
                <label for="ngayvaotruong" class="form-label">Ngày vào trường</label>
                <input type="date" class="form-control" name="ngayvaotruong" id="ngayvaotruong">
            </div>
            <div class="col-md-6">
                <label for="ngaytotnghiep" class="form-label">Ngày tốt nghiệp</label>
                <input type="date" class="form-control" name="ngaytotnghiep" id="ngaytotnghiep">
            </div>
            <div class="col-md-6">
                <label for="tencha" class="form-label">Họ và tên cha</label>
                <input type="text" class="form-control" name="tencha" id="tencha">
            </div>
            <div class="col-md-6">
                <label for="sdtcha" class="form-label">SĐT cha</label>
                <input type="text" class="form-control" name="sdtcha" id="sdtcha">
            </div>
            <div class="col-md-6">
                <label for="tenme" class="form-label">Họ và tên mẹ</label>
                <input type="text" class="form-control" name="tenme" id="tenme">
            </div>
            <div class="col-md-6">
                <label for="sdtme" class="form-label">SĐT cha mẹ</label>
                <input type="text" class="form-control" name="sdtme" id="sdtme">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="themttsinhvien">Thêm</button>
            </div>
        </form>
    </div>

    <!--Modal Form-->
    <div class="modal fade" id="userForm">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Thêm sinh viên</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="index.php?quanly=xulythemsinhvien" method="POST" id="myForm"
                        enctype="multipart/form-data">

                        <div class="card imgholder">
                            <label for="imgInput" class="upload">
                                <input type="file" name="hinhanh" id="imgInput" required>
                                <i class="bi bi-plus-circle-dotted"></i>
                            </label>
                            <img src="images/Profile Icon.webp" alt="" width="200" height="200" class="img">
                        </div>

                        <div class="inputField">
                            <div>
                                <label for="name">Tên sinh viên:</label>
                                <input type="text" name="tensv" id="name" required>
                            </div>
                            <div>
                                <label for="taikhoan">Tài khoản:</label>
                                <input type="text" name="taikhoan" id="taikhoan" required>
                            </div>
                            <div>
                                <label for="matkhau">Mật khẩu:</label>
                                <input type="password" name="matkhau" id="matkhau" required>
                            </div>
                            <div>
                                <label for="sDate">Ngày sinh:</label>
                                <input type="date" name="ngaysinh" id="ngaysinh" required>
                            </div>
                            <div>
                                <label for="diachi">Địa chỉ:</label>
                                <input type="text" name="diachi" id="diachi" required>
                            </div>
                            <div>
                                <label for="sodienthoai">Số điện thoại:</label>
                                <input type="text" name="sodienthoai" id="sodienthoai" required>
                            </div>
                            <div>
                                <label for="lop">Lớp:</label>
                                <input type="text" name="lop" id="lop" required>
                            </div>
                            <div>
                                <label for="khoa">Khoa:</label>
                                <input type="text" name="khoa" id="khoa" required>
                            </div>
                            <div>
                                <label for="chuyennganh">Chuyên ngành:</label>
                                <input type="text" name="chuyennganh" id="chuyennganh" required>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                    <button type="submit" form="myForm" name="themsinhvien" class="btn btn-primary submit">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</body>