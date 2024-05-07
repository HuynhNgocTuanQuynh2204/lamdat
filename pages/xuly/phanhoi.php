<?php
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');
   $theloai = $_POST['theloai'];
    $ykien = $_POST['ykien'];
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_time = time().'_'.$file;
    $id_sv = $_SESSION['id_sv'];
    $noidung = $_POST['noidung'];
    $tomtat = $_POST['tomtat'];

    if(isset($_POST['phanhoi'])){
        $sql_them = "INSERT INTO tbl_phanhoi(id_sv,theloai,mucdo,ykien,file,noidung,tomtat,thoigian,hoanthanh,trangthai,phongban,lidohuy,goigam) VALUES('".$id_sv."','".$theloai."','Đợi xác nhận','".$ykien."','".$file_time."','".$noidung."','".$tomtat."','".$now."','Chưa hoàn thành',0,0,0,0)";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($file_tmp,'images/file/'.$file_time);
        echo '<script type="text/javascript">alert("Gửi phản hồi thành công");    window.location.href = "index.php?quanly=lichsuphanhoi"; </script>';
    }else if(isset($_POST['suaphanhoi'])){
        if($file != ''){
            move_uploaded_file($file_tmp,'images/file/'.$file_time);
            $sql_update = "UPDATE tbl_phanhoi SET theloai = '".$theloai."', ykien = '".$ykien."', file = '".$file_time."', noidung = '".$noidung."', tomtat = '".$tomtat."' WHERE id_phanhoi = '$_GET[id]'";
            $sql = "SELECT * FROM tbl_phanhoi WHERE id_phanhoi = '$_GET[id]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
               unlink('images/file/'.$row['file']);
            }
        }else{
            $sql_update = "UPDATE tbl_phanhoi SET theloai = '".$theloai."', ykien = '".$ykien."', noidung = '".$noidung."', tomtat = '".$tomtat."' WHERE id_phanhoi = '$_GET[id]'";
        }
        mysqli_query($mysqli,$sql_update);
        echo '<script type="text/javascript">alert("Sửa phản hồi thành công");    window.location.href = "index.php?quanly=lichsuphanhoi"; </script>';

    }else{
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_phanhoi WHERE id_phanhoi = '$id' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('images/file/'.$row['file']);
        }
        $sql_xoa = "DELETE FROM tbl_phanhoi WHERE id_phanhoi = '$id'";
        mysqli_query($mysqli,$sql_xoa);
        echo '<script type="text/javascript">alert("Xóa phản hồi thành công");    window.location.href = "index.php?quanly=lichsuphanhoi"; </script>';
    }

?>