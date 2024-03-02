<div class="main p-3">
    <div class="text-center">
        <form action="" method="POST">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin cá nhân</h3>
                            </div>
                            <?php
                            if (isset($_POST['capnhap'])) {
                                $tenql = $_POST['tenquanly'];
                                $taikhoan = $_POST['taikhoan'];
                                $matkhau = md5($_POST['matkhau']);

                                $sql_capnhap = 'UPDATE tbl_quanly SET tenql = "'.$tenql.'", taikhoan = "'.$taikhoan.'", matkhau = "'.$matkhau.'" WHERE id_ql = "'.$_SESSION['id_ql'].'"';
                                $kq_capnhap = mysqli_query($mysqli, $sql_capnhap);
                                if ($kq_capnhap) {
                                    echo '<p style="color:green;text-align:center;">Thông tin đã được thay đổi</p>';
                                } else {
                                    echo '<p style="color:red;text-align:center;">Đã xảy ra lỗi, vui lòng thử lại</p>';
                                }
                            }
                            ?>
                            <div class="card-body">
                                <?php
                                $sql = "SELECT * FROM tbl_quanly WHERE id_ql = '".$_SESSION['id_ql']."'";
                                $qr = mysqli_query($mysqli, $sql);
                                $row = mysqli_fetch_array($qr);
                                ?>
                                <div class="mb-3">
                                    <label for="tenquanly" class="form-label">Tên quản lý</label>
                                    <input type="text" class="form-control" name="tenquanly" id="tenquanly" value="<?php echo $row['tenql'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="taikhoan" class="form-label">Tài khoản</label>
                                    <input type="text" class="form-control" name="taikhoan" id="taikhoan" value="<?php echo $row['taikhoan'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="matkhau" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" name="matkhau" id="matkhau" value="<?php echo $row['matkhau'] ?>" required>
                                </div>
                                <div class="d-grid">
                                    <input type="submit" class="btn btn-primary btn-block" name="capnhap" value="Cập nhập">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
