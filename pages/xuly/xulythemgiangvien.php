<?php
$tengv = $_POST['tengv'];
$taikhoan = $_POST['taikhoan'];
$matkhau = md5($_POST['matkhau']);
$ngaysinh = $_POST['ngaysinh'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh_time = time().'_'.$hinhanh;
$bangcap = $_FILES['bangcap']['name'];
$bangcap_tmp = $_FILES['bangcap']['tmp_name'];
$bangcap_time = time().'_'.$bangcap;
$sodienthoai = $_POST['sodienthoai'];
$ngaylamviec = $_POST['ngaylamviec'];
$ngaythoiviec = $_POST['ngaythoiviec'];
$trinhdo = $_POST['trinhdo'];
$facebook = $_POST['facebook'];
$chuyennganh = $_POST['chuyennganh'];
$khoa = $_POST['khoa'];
$chunhiem = $_POST['chunhiem'];
$magv = rand(0,9999);
$id_ql = $_SESSION['id_ql'];
if(isset($_POST['themgiangvien'])){
    $sql_them = "INSERT INTO tbl_giangvien(tengv,ngaysinh,hinhanh,taikhoan,matkhau,trinhdo,bangcap,sodienthoai,facebook,ngaylamviec,ngaythoiviec,chuyennganh,khoa,magv,chunhiem,id_ql) VALUES('".$tengv."','".$ngaysinh."','".$hinhanh_time."','".$taikhoan."','".$matkhau."','".$trinhdo."','".$bangcap_time."','".$sodienthoai."','".$facebook."','".$ngaylamviec."','".$ngaythoiviec."','".$chuyennganh."','".$khoa."','".$magv."','".$chunhiem."','".$id_ql."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'images/hinhanhgv/'.$hinhanh_time);
    move_uploaded_file($bangcap_tmp,'images/bangcapgv/'.$bangcap_time);
    echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php?quanly=danhsachgiangvien"; </script>';
}else if(isset($_POST['suagiangvien'])){
    $id = $_GET['id'];
    // Lấy thông tin giảng viên cần sửa từ cơ sở dữ liệu
    $sql = "SELECT * FROM tbl_giangvien WHERE id_gv = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);

    // Kiểm tra nếu có hình ảnh mới được tải lên
    if($hinhanh != '') {
        // Unlink ảnh cũ
        unlink('images/hinhanhgv/'.$row['hinhanh']);
        // Di chuyển và lưu ảnh mới
        move_uploaded_file($hinhanh_tmp, 'images/hinhanhgv/'.$hinhanh_time);
    } else {
        $hinhanh_time = $row['hinhanh']; // Giữ nguyên tên ảnh cũ
    }

    // Kiểm tra nếu có bằng cấp mới được tải lên
    if($bangcap != '') {
        // Unlink bằng cấp cũ
        unlink('images/bangcapgv/'.$row['bangcap']);
        // Di chuyển và lưu bằng cấp mới
        move_uploaded_file($bangcap_tmp, 'images/bangcapgv/'.$bangcap_time);
    } else {
        $bangcap_time = $row['bangcap']; // Giữ nguyên tên bằng cấp cũ
    }

    // Cập nhật thông tin giảng viên vào cơ sở dữ liệu
    $sql_update = "UPDATE tbl_giangvien SET tengv='". $tengv."', ngaysinh='".$ngaysinh."', 
    hinhanh='". $hinhanh_time."', taikhoan='". $taikhoan."', matkhau='". $matkhau."', 
    trinhdo='". $trinhdo."', bangcap='". $bangcap_time."', sodienthoai ='".$sodienthoai."', 
    facebook ='".$facebook."', ngaylamviec ='".$ngaylamviec."', ngaythoiviec ='".$ngaythoiviec."', 
    chuyennganh ='".$chuyennganh."', khoa ='".$khoa."', chunhiem ='".$chunhiem."', id_ql ='".$id_ql."' 
    WHERE id_gv='$id'";

    mysqli_query($mysqli,$sql_update);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=danhsachgiangvien"; </script>';
}
else if(isset($_POST['capnhapgiangvien'])){
    $id = $_GET['id'];
    // Lấy thông tin giảng viên cần sửa từ cơ sở dữ liệu
    $sql = "SELECT * FROM tbl_giangvien WHERE id_gv = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);

    // Kiểm tra nếu có hình ảnh mới được tải lên
    if($hinhanh != '') {
        // Unlink ảnh cũ
        unlink('images/hinhanhgv/'.$row['hinhanh']);
        // Di chuyển và lưu ảnh mới
        move_uploaded_file($hinhanh_tmp, 'images/hinhanhgv/'.$hinhanh_time);
    } else {
        $hinhanh_time = $row['hinhanh']; // Giữ nguyên tên ảnh cũ
    }

    // Kiểm tra nếu có bằng cấp mới được tải lên
    if($bangcap != '') {
        // Unlink bằng cấp cũ
        unlink('images/bangcapgv/'.$row['bangcap']);
        // Di chuyển và lưu bằng cấp mới
        move_uploaded_file($bangcap_tmp, 'images/bangcapgv/'.$bangcap_time);
    } else {
        $bangcap_time = $row['bangcap']; // Giữ nguyên tên bằng cấp cũ
    }

    // Cập nhật thông tin giảng viên vào cơ sở dữ liệu
    $sql_update = "UPDATE tbl_giangvien SET tengv='". $tengv."', ngaysinh='".$ngaysinh."', 
    hinhanh='". $hinhanh_time."', taikhoan='". $taikhoan."', 
    trinhdo='". $trinhdo."', bangcap='". $bangcap_time."', sodienthoai ='".$sodienthoai."', 
    facebook ='".$facebook."', 
    chuyennganh ='".$chuyennganh."', khoa ='".$khoa."', chunhiem ='".$chunhiem."' 
    WHERE id_gv='$id'";

    mysqli_query($mysqli,$sql_update);
    echo '<script type="text/javascript">alert("Cập nhập thông tin thành công");    window.location.href = "index.php?quanly=thongtincanhangv"; </script>';
}else{
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_giangvien WHERE id_gv = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('images/hinhanhgv/'.$row['hinhanh']);
        unlink('images/bangcapgv/'.$row['bangcap']);
    }
    $sql_xoa = "DELETE FROM tbl_giangvien WHERE id_gv ='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=danhsachgiangvien"; </script>';
}
?>
