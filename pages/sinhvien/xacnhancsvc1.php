<?php
  $id = $_GET['id'];
  require("carbon/autoload.php");
  use Carbon\Carbon;
  use Carbon\CarbonInterval;
  $now = Carbon::now('Asia/Ho_Chi_Minh');
  $now->format('Y-m-d H:i:s');
  $sql_update = "UPDATE tbl_cosovatchat SET trangthai = 5 ,hoanthanh = '" . $now . "' WHERE id_csvc = " . $id;
    $query = mysqli_query($mysqli, $sql_update);

    echo '<script type="text/javascript">alert("Cảm ơn bạn đã xác nhận!Nếu có vấn đề gì không hài lòng vui lòng liên hệ về trường theo số điện thoại"); window.location.href = "index.php?quanly=lichsuphanhoicosovatchat"; </script>';
 

?>