<?php
$tensv = $_POST['tensv'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh_time = time().'_'.$hinhanh;
$taikhoan = $_POST['taikhoan'];
$matkhau = md5($_POST['matkhau']);
$ngaysinh = $_POST['ngaysinh'];
$diachi = $_POST['diachi'];
$sodienthoai = $_POST['sodienthoai'];
$lop = $_POST['lop'];
$khoa = $_POST['khoa'];
$chuyennganh = $_POST['chuyennganh'];
$masv = rand(0,9999);
$id_ql = $_SESSION['id_ql'];
if(isset($_POST['themsinhvien'])){
    $sql_them = "INSERT INTO tbl_sinhvien(tensv,hinhanh,taikhoan,matkhau,masv,ngaysinh,diachi,sodienthoai,lop,khoa,chuyennganh,id_ql) VALUES('".$tensv."','".$hinhanh_time."','".$taikhoan."','".$matkhau."','".$masv."','".$ngaysinh."','".$diachi."','".$sodienthoai."','".$lop."','".$khoa."','".$chuyennganh."','".$id_ql."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'images/hinhanhsv/'.$hinhanh_time);
    echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php?quanly=danhsachsinhvien"; </script>';
}else if(isset($_POST['themttsinhvien'])){
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
}else  if(isset($_POST['suasinhvien'])){
   $id=$_GET['id'];

     if($hinhanh !=''){
        move_uploaded_file($hinhanh_tmp,'images/hinhanhsv/'.$hinhanh_time);       
        $sql_update = "UPDATE tbl_sinhvien SET tensv='". $tensv."',hinhanh='".$hinhanh_time."', 
        taikhoan='". $taikhoan."', matkhau='". $matkhau."', ngaysinh='". $ngaysinh."', sodienthoai='". $sodienthoai."'
       ,diachi='". $diachi."', lop ='".$lop."', khoa ='".$khoa."' WHERE id_sv='$id'";

        $sql = "SELECT * FROM tbl_sinhvien WHERE id_sv = '$id' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
           unlink('images/hinhanhsv/'.$row['hinhanh']);
        }
     }else{
        $sql_update = "UPDATE tbl_sinhvien SET tensv='". $tensv."',
        taikhoan='". $taikhoan."', matkhau='". $matkhau."', ngaysinh='". $ngaysinh."', sodienthoai='". $sodienthoai."'
       ,diachi='". $diachi."', lop ='".$lop."', khoa ='".$khoa."' WHERE id_sv='$id'";
     }
     mysqli_query($mysqli,$sql_update);
     echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=danhsachsinhvien"; </script>';
}else  if(isset($_POST['capnhapsinhvien'])){
    $id=$_GET['id'];
 
      if($hinhanh !=''){
         move_uploaded_file($hinhanh_tmp,'images/hinhanhsv/'.$hinhanh_time);       
         $sql_update = "UPDATE tbl_sinhvien SET tensv='". $tensv."',hinhanh='".$hinhanh_time."', 
         taikhoan='". $taikhoan."', ngaysinh='". $ngaysinh."', sodienthoai='". $sodienthoai."'
        ,diachi='". $diachi."', lop ='".$lop."', khoa ='".$khoa."' WHERE id_sv='$id'";
 
         $sql = "SELECT * FROM tbl_sinhvien WHERE id_sv = '$id' LIMIT 1";
         $query = mysqli_query($mysqli,$sql);
         while($row = mysqli_fetch_array($query)){
            unlink('images/hinhanhsv/'.$row['hinhanh']);
         }
      }else{
         $sql_update = "UPDATE tbl_sinhvien SET tensv='". $tensv."',
         taikhoan='". $taikhoan."', ngaysinh='". $ngaysinh."', sodienthoai='". $sodienthoai."'
        ,diachi='". $diachi."', lop ='".$lop."', khoa ='".$khoa."' WHERE id_sv='$id'";
      }
      mysqli_query($mysqli,$sql_update);
      echo '<script type="text/javascript">alert("Cập nhập thông tin thành công");    window.location.href = "index.php?quanly=thongtincanhansv"; </script>';
 }else{
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_sinhvien WHERE id_sv = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('images/hinhanhsv/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sinhvien WHERE id_sv ='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=danhsachsinhvien"; </script>';
 }
?>
