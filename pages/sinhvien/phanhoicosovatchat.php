<div class="main p-3">
    <div class="text-center">
        <div class="wrapper">
            <form class="row g-3 needs-validation" method="POST" action="index.php?quanly=guiphanhoicosovatchat" novalidate enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Phòng hoặc khu vực cụ thể</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Khu vực cụ thể" name="khuvuc" required>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Mô tả vấn đề</label>
                    <textarea class="form-control" id="tomtat" rows="5" style="resize: none;" name="tomtat"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Gợi ý hoặc đề xuất cải thiện: </label>
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
