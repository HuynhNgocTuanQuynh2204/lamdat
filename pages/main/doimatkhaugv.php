<div class="main p-3">
    <div class="text-center">
        <form action="" method="POST">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Đổi mật khẩu</h3>
                            </div>
                            <?php
                                    if (isset($_POST['doimatkhaugv'])){
                                        $matkhau_cu = md5($_POST['password_cu']);
                                        $matkhau_moi = md5($_POST['password_moi']);
                                        
                                        if(isset($_SESSION['id_gv'])) {
                                            $id_gv = $_SESSION['id_gv'];
                                            $sql_gv = "SELECT * FROM tbl_giangvien WHERE id_gv = '".$id_gv."' AND matkhau ='".$matkhau_cu."' LIMIT 1";
                                            $result_gv = mysqli_query($mysqli, $sql_gv);
                                            $count_gv = mysqli_num_rows($result_gv);

                                            if ($count_gv > 0) {
                                                $sql_update_gv = "UPDATE tbl_giangvien SET matkhau ='".$matkhau_moi."' WHERE id_gv = '".$id_gv."'";
                                                $update_gv= mysqli_query($mysqli, $sql_update_gv);
                                                echo '<p style="color:green;text-align:center;">Mật khẩu đã được thay đổi </p>';
                                            } else {
                                                echo '<p style="color:red;text-align:center;">Mật khẩu cũ không đúng, vui lòng nhập lại</p>';
                                            }
                                        }
                                    }
                                    ?>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="password_cu" class="form-label">Mật khẩu cũ</label>
                                    <input type="password" class="form-control" name="password_cu" id="password_cu"
                                        placeholder="Mật khẩu cũ..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="password_moi" class="form-label">Mật khẩu mới</label>
                                    <input type="password" class="form-control" name="password_moi" id="password_moi"
                                        placeholder="Mật khẩu mới..." required>
                                </div>
                                <div class="d-grid">
                                    <input type="submit" class="btn btn-primary btn-block" name="doimatkhaugv"
                                        value="Đổi mật khẩu">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
