<?php
 require("carbon/autoload.php");
 use Carbon\Carbon;
 use Carbon\CarbonInterval;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
  $tenql = $_POST['tenql'];
  $taikhoan = $_POST['taikhoan'];
  $matkhau = md5($_POST['matkhau']);
  $quyenhan = $_POST['quyenhan'];
 if(isset($_POST['themquanly'])){
    $sql_themql = "INSERT INTO tbl_quanly (tenql, taikhoan, matkhau,ngaytao, quyenhan) VALUES ('$tenql', '$taikhoan', '$matkhau', '$now', '$quyenhan')";
    $query_themql = mysqli_query($mysqli, $sql_themql);
    echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php?quanly=themquanly"; </script>';
 }else if(isset($_POST['suaquanly'])){
    $sql_suaql = "UPDATE tbl_quanly SET tenql = '$tenql', taikhoan = '$taikhoan', matkhau = '$matkhau', quyenhan = '$quyenhan' WHERE id_ql = '$_GET[id]'";
    $query_suaql = mysqli_query($mysqli, $sql_suaql);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=hoso"; </script>';

 }else{
    $sql_xoaql = "DELETE FROM tbl_quanly WHERE id_ql = '$_GET[id]'";
    $query_xoaql = mysqli_query($mysqli, $sql_xoaql);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=hoso"; </script>';
 }
?>