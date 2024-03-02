<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Thêm thông tin quản lý</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemquanly" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="tenql" placeholder="Họ và tên"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="validationDefaultUsername" class="form-label">Tài khoản</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" id="validationDefaultUsername" name="taikhoan"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="inputPassword4" name="matkhau" required>
                </div>
               
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Quyền hạn</label>
                    <select id="inputState" class="form-select" name="quyenhan">
                        <option selected value="0">Phòng đào tạo</option>
                        <option value="2">Phòng khảo thí</option>
                        <option value="3">Phòng công tác sinh viên</option>
                        <option value="4">Phòng kỹ thuật</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="themquanly">Thêm quản lý</button>
                </div>
            </form>
        </section>
    </div>
</div>