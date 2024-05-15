<div class="main p-3">
    <div class="text-center">
    <h1 style="text-align: center;padding: 10px;">Form phản hồi</h1>
        <div class="wrapper">
            <form class="row g-3 needs-validation" method="POST" action="index.php?quanly=guiphanhoi" novalidate enctype="multipart/form-data">
                <div class="col-md-6"> 
                    <label for="inputState" class="form-label">Thể loại</label>
                    <select id="inputState" class="form-select" name="theloai">
                        <option selected value="Cơ sở vật chất">Cơ sở vật chất</option>
                        <option value="Môn học">Môn học </option>
                        <option value="Giảng viên ">Giảng viên</option>
                        <option value="Học phí">Học phí</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Nội dung phản ánh</label>
                    <textarea class="form-control" id="tomtat" rows="5" style="resize: none;" name="tomtat"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Đề xuất cải thiện vấn đề: </label>
                    <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Hình ảnh hoặc tài liệu minh họa</label>
                    <input type="file" class="form-control" id="validationCustom02" placeholder="file" name="file" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ý kiến khác</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Ý kiến khác" name="ykien"  required>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="phanhoi">Gửi phản hồi</button>
                </div>
            </form>
        </div>
    </div>
</div>
