<?php
   $sql = 'SELECT * FROM tbl_quanly WHERE id_ql = '.$_GET['id'];
   $qr = mysqli_query($mysqli,$sql);
   $row = mysqli_fetch_array($qr);
?>
<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
            <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa thông tin quản lý</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemquanly&id=<?php echo $row['id_ql'] ?>"
                enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tenql"
                        placeholder="Họ và tên" value="<?php echo $row['tenql'] ?>">
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
                    <label for="inputState" class="form-label">Quyền hạn</label>
                    <select id="inputState" class="form-select" name="quyenhan">
                        <option value="0" <?php if ($row['quyenhan'] == '0') echo 'selected'; ?>>Phòng đào tạo</option>
                        <option value="2" <?php if ($row['quyenhan'] == '2') echo 'selected'; ?>>Phòng khảo thí</option>
                        <option value="3" <?php if ($row['quyenhan'] == '3') echo 'selected'; ?>>Phòng công tác sinh
                            viên</option>
                        <option value="4" <?php if ($row['quyenhan'] == '4') echo 'selected'; ?>>Phòng kỹ thuật</option>
                        <option value="5" <?php if ($row['quyenhan'] == '5') echo 'selected'; ?>>Phòng quản Lý sinh viên</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="suaquanly">Sửa quản lý</button>
                </div>
            </form>
        </section>
    </div>
</div>