<?php
  $sql_sua = "SELECT * FROM tbl_cosovatchat WHERE id_csvc='$_GET[id]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
    $row = mysqli_fetch_array($query_sua);
?>
<div class="main p-3">
    <div class="text-center">
        <div class="wrapper">
            <form class="row g-3 needs-validation" method="POST" action="index.php?quanly=guiphanhoicosovatchat&id=<?php echo $row['id_csvc'] ?>" novalidate enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Phòng hoặc khu vực cụ thể</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Khu vực cụ thể" name="khuvuc" value="<?php echo $row['khuvuc']  ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Mô tả vấn đề</label>
                    <textarea class="form-control" id="tomtat" rows="5" style="resize: none;" name="tomtat"><?php echo $row['tomtat']  ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Gợi ý hoặc đề xuất cải thiện: </label>
                    <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"><?php echo $row['noidung']  ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Hình ảnh hoặc tài liệu minh họa</label>
                    <input type="file" class="form-control" id="validationCustom02" placeholder="file" name="file" value="<?php echo $row['file']  ?>">
                    <img class="img img-responsive" width="100%" height="150px"
                                    src="images/file/<?php echo $row['file'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Ý kiến khác</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Ý kiến khác" name="ykien"  value="<?php echo $row['ykien']  ?>">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="suaphanhoi">Sửa phản hồi</button>
                </div>
            </form>
        </div>
    </div>
</div>
