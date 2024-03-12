<?php
$id=$_GET['id'];
if(isset($_POST['duyet'])){
    // Xử lý khi duyệt phản hồi
    $mucdo = $_POST['mucdo'];
    $phongkhoa = $_POST['phongkhoa'];
    $sql_duyet = "UPDATE tbl_cosovatchat SET trangthai = 2,mucdo = '$mucdo',phongban = '$phongkhoa' WHERE id_csvc = '$id'";
    mysqli_query($mysqli,$sql_duyet);
    echo '<script type="text/javascript">alert("Đã duyệt phản hồi");    window.location.href = "index.php?quanly=lichsuphanhoicosovatchatcd"; </script>';
} else if(isset($_POST['huyduyet'])){
    // Xử lý khi không duyệt phản hồi
    $lido = $_POST['lido'];
    $sql_duyet = "UPDATE tbl_cosovatchat SET trangthai = 1,lidohuy = '$lido' WHERE id_csvc = '$id'";
    mysqli_query($mysqli,$sql_duyet);
    echo '<script type="text/javascript">alert("Không duyệt phản hồi");    window.location.href = "index.php?quanly=lichsuphanhoicosovatchatcd"; </script>';
}
?>
