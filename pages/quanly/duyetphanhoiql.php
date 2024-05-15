<?php
  $sql_sua = "SELECT * FROM tbl_phanhoi WHERE id_phanhoi='$_GET[id]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
    $row = mysqli_fetch_array($query_sua);
?>
<div class="main p-3">
    <div class="text-center">
    <h1 style="text-align: center;padding: 10px;">Vui lòng chọn mức độ ưu tiên và phòng khoa (Bộ phận phụ trách) trước khi duyệt</h1>
    
            <form class="row g-3 needs-validation" method="POST" action="index.php?quanly=duyetphanhoi&id=<?php echo $row['id_phanhoi'] ?>" novalidate enctype="multipart/form-data">
                <div class="col-md-6 mx-auto"> 
                    <label for="validationCustom04" class="form-label">Mức độ ưu tiên</label>
                    <select class="form-select" id="validationCustom04" name="mucdo">
                        <option value="Cao">Cao</option>
                        <option value="Trung bình">Trung bình</option>
                        <option value="Thấp">Thấp</option>
                    </select>
                </div>
                <div class="col-md-6 mx-auto"> 
                    <label for="inputState" class="form-label">Phòng khoa</label>
                    <select id="inputState" class="form-select" name="phongkhoa">
                        <option selected value="0">Phòng quản Lý sinh viên </option>
                        <option value="1">Phòng đào tạo </option>
                        <option value="2">Công nghệ thông tin</option>
                        <option value="3">Kinh tế</option>
                        <option value="4">Sư phạm</option>
                        <option value="5">Khoa nông nghiệp</option>
                        <option value="6">Phòng kế toán</option>
                        <option value="7">Phòng công tác sinh viên</option>
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="duyet">Duyệt</button>
                </div>
            </form>
      
    </div>
</div>
