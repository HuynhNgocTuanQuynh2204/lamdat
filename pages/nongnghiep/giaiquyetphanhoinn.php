<?php
 $id = $_GET['id'];

 $sql_update = "UPDATE tbl_phanhoi SET trangthai = 3 WHERE id_phanhoi = '" . $id . "'";
 $query = mysqli_query($mysqli, $sql_update);
 
 echo '<script type="text/javascript">alert("Nhận thành công"); window.location.href = "index.php?quanly=phanhoinn"; </script>';
 

?>