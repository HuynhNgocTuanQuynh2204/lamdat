<?php
  $id = $_GET['id'];
  $noidung = $_POST['noidung'];
  $sql_update = "UPDATE tbl_phanhoi SET trangthai = 4, goigam = '" . $noidung . "' WHERE id_phanhoi = " . $id;
    $query = mysqli_query($mysqli, $sql_update);

    echo '<script type="text/javascript">alert("Gửi thành công"); window.location.href = "index.php?quanly=phanhoiqlsv"; </script>';
 

?>