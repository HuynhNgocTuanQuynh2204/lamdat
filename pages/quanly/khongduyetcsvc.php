<?php
  $sql_sua = "SELECT * FROM tbl_cosovatchat WHERE id_csvc='$_GET[id]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
    $row = mysqli_fetch_array($query_sua);
?>
<div class="main p-3">
    <div class="text-center">
    <h1 style="text-align: center;padding: 10px;">Nêu rõ lí do không duyệt phản hồi này</h1>
    <form class="row g-3 needs-validation" method="POST" action="index.php?quanly=duyetcosovatchat&id=<?php echo $row['id_csvc']; ?>" novalidate enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Lí do không duyệt</label>
                    <textarea class="form-control" id="tomtat" rows="5" style="resize: none;" name="lido"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="huyduyet">Không duyệt</button>
                </div>
            </form>
       
    </div>
</div>
