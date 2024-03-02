<?php
$id_ql = $_SESSION['id_ql'];
if(isset($_POST['themttsinhvien'])){
    $cccd = $_POST['CCCD'];
    $bhyt = $_POST['BHYT'];
    $chuongtrinh = $_POST['chuongtrinh'];
    $ngayvaotruong = $_POST['ngayvaotruong'];
    $ngaytotnghiep = $_POST['ngaytotnghiep'];
    $tencha = $_POST['tencha'];
    $sdtcha = $_POST['sdtcha'];
    $tenme = $_POST['tenme'];
    $sdtme = $_POST['sdtme'];
    $id_sv = $_POST['id_sv'];
    $sql_themtt = "INSERT INTO tbl_ttsinhvien(cccd,bhyt,chuongtrinh,ngayvaotruong,ngaytotnghiep,tencha,sdtcha,tenme,sdtme,id_sv,id_ql) VALUES('".$cccd."','".$bhyt."','".$chuongtrinh."','".$ngayvaotruong."','".$ngaytotnghiep."','".$tencha."','".$sdtcha."','".$tenme."','".$sdtme."','".$id_sv."','".$id_ql."')";
    mysqli_query($mysqli,$sql_themtt);
    echo '<script type="text/javascript">alert("Thêm thông tin thành công"); window.location.href = "index.php?quanly=xemthemsv&id=' . $id_sv . '"; </script>';
}else if(isset($_POST['suattsinhvien'])){
    $cccd = $_POST['CCCD'];
    $bhyt = $_POST['BHYT'];
    $chuongtrinh = $_POST['chuongtrinh'];
    $ngayvaotruong = $_POST['ngayvaotruong'];
    $ngaytotnghiep = $_POST['ngaytotnghiep'];
    $tencha = $_POST['tencha'];
    $sdtcha = $_POST['sdtcha'];
    $tenme = $_POST['tenme'];
    $sdtme = $_POST['sdtme'];
    $id_sv = $_POST['id_sv'];
    $id = $_GET['id'];
    $sql_update_tt = "UPDATE tbl_ttsinhvien SET cccd='". $cccd."',bhyt='".$bhyt."', 
    chuongtrinh='". $chuongtrinh."', ngayvaotruong='". $ngayvaotruong."', ngaytotnghiep='". $ngaytotnghiep."', tencha='". $tencha."'
   ,sdtcha='". $sdtcha."', tenme ='".$tenme."', sdtme ='".$sdtme."', id_sv ='".$id_sv."', id_ql ='".$id_ql."' WHERE id_sv='$id'";
   mysqli_query($mysqli,$sql_update_tt);
   echo '<script type="text/javascript">alert("Sửa thông tin thành công"); window.location.href = "index.php?quanly=xemthemsv&id=' . $id_sv . '"; </script>';
}else if(isset($_POST['capnhapsinhvien'])){
    $cccd = $_POST['CCCD'];
    $bhyt = $_POST['BHYT'];
    $chuongtrinh = $_POST['chuongtrinh'];
    $tencha = $_POST['tencha'];
    $sdtcha = $_POST['sdtcha'];
    $tenme = $_POST['tenme'];
    $sdtme = $_POST['sdtme'];
    $id = $_GET['id'];
    $sql_update_tt = "UPDATE tbl_ttsinhvien SET cccd='". $cccd."',bhyt='".$bhyt."', 
    chuongtrinh='". $chuongtrinh."', tencha='". $tencha."'
   ,sdtcha='". $sdtcha."', tenme ='".$tenme."', sdtme ='".$sdtme."' WHERE id_sv='$id'";
   mysqli_query($mysqli,$sql_update_tt);
   echo '<script type="text/javascript">alert("Cập nhập thông tin thành công");    window.location.href = "index.php?quanly=ttsinhvien"; </script>';
}else  {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM tbl_ttsinhvien WHERE id_sv ='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công"); window.location.href = "index.php?quanly=xemthemsv&id=' . $id . '"; </script>';
 }
?>
