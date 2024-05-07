<?php
include("../config/config.php");
session_start();

if (isset($_POST['dangnhap'])){
    $email = $_POST['name'];
    $matkhau = md5($_POST['password']);

    // Check if the user is an administrator
    $sql_ql = "SELECT * FROM tbl_quanly WHERE taikhoan = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1 ";
    $result_ql= mysqli_query($mysqli, $sql_ql);
    $count_ql = mysqli_num_rows($result_ql);

    if ($count_ql > 0){
        $row_dangnhap = mysqli_fetch_array($result_ql);
        $_SESSION['tenql'] = $row_dangnhap['tenql'];
        $_SESSION['id_ql'] = $row_dangnhap['id_ql'];
        $_SESSION['quyenhan'] = $row_dangnhap['quyenhan'];
        echo "<script>
                alert('Đăng nhập thành công');
                window.location.href = '../index.php'; 
              </script>";
        exit();
    } 

   
    $sql_sinhvien = "SELECT * FROM tbl_sinhvien WHERE taikhoan = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1 ";
    $result_sinhvien = mysqli_query($mysqli, $sql_sinhvien);
    $count_sinhvien = mysqli_num_rows($result_sinhvien);
    
  
    $sql_giangvien = "SELECT * FROM tbl_giangvien WHERE taikhoan = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1 ";
    $result_giangvien = mysqli_query($mysqli, $sql_giangvien);
    $count_giangvien = mysqli_num_rows($result_giangvien);

    if ($count_sinhvien > 0 || $count_giangvien > 0){
        if ($count_sinhvien > 0) {
            $row_sinhvien = mysqli_fetch_array($result_sinhvien);
            $_SESSION['tensv'] = $row_sinhvien['tensv'];
            $_SESSION['id_sv'] = $row_sinhvien['id_sv'];
        } else if ($count_giangvien > 0) {
            $row_giangvien = mysqli_fetch_array($result_giangvien);
            $_SESSION['tengv'] = $row_giangvien['tengv'];
            $_SESSION['id_gv'] = $row_giangvien['id_gv'];
        }
        echo "<script>
                alert('Đăng nhập thành công');
                window.location.href = '../index.php'; 
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Đăng nhập thất bại');
                window.location.href = '../dangnhap.php'; 
              </script>";
        exit();
    }
} else {
    echo "<script>
            window.location.href = '../dangnhap.php'; 
          </script>";
    exit();
}
?>
