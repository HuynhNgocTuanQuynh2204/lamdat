<?php
  $sql_sua = "SELECT * FROM tbl_phanhoi WHERE id_phanhoi='$_GET[id]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
    $row = mysqli_fetch_array($query_sua);
?>
<div class="main p-3">
    <div class="text-center">
        <h1 style="text-align: center;padding: 10px;">Lí do từ chối</h1>
        <form class="row g-3 needs-validation" method="POST"
            action="index.php?quanly=duyetphanhoi&id=<?php echo $row['id_phanhoi'] ?>" novalidate
            enctype="multipart/form-data">
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Lí do từ chối: </label>
                <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"><?php echo $row['lidohuy'] ?></textarea>
            </div>
        </form>
    </div>
</div>