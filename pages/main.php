<div class="wrapper">
    <style>
    .wrapper {
        display: flex;
    }
    </style>
    <?php
        include("sidebar/sidebar.php")
        ?>

    <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='hoso'){
                include("main/hoso.php");
            }
            
            else if($tam =='themgiangvien'){
                include("main/themgiangvien.php");
            }

            else if($tam =='themquanly'){
                include("main/themquanly.php");
            }

            else if($tam =='suaquanly'){
                include("main/suaquanly.php");
            }

            else if($tam =='suagiangvien'){
                include("main/suagiangvien.php");
            }

            else if($tam =='suasinhvien'){
                include("main/suasinhvien.php");
            }

            else if($tam =='doimatkhausv'){
                include("main/doimatkhausv.php");
            }

            else if($tam =='guiphanhoicosovatchat'){
                include("xuly/phanhoicosovatchat.php");
            }

            else if($tam =='duyetcosovatchat'){
                include("xuly/duyetcosovatchat.php");
            }

            else if($tam =='lichsuphanhoicosovatchatcd'){
                include("quanly/lichsuphanhoicosovatchatcd.php");
            }

            else if($tam =='lidotuchoicsvc'){
                include("quanly/lidotuchoicsvc.php");
            }

            else if($tam =='khongduyetcsvc'){
                include("quanly/khongduyetcsvc.php");
            }

            else if($tam =='duyetphanhoicsvc'){
                include("quanly/duyetphanhoicsvc.php");
            }

            else if($tam =='cosovatchatcntt'){
                include("cntt/cosovatchatcntt.php");
            }

            else if($tam =='chitietcosovatchatcntt'){
                include("cntt/chitietcosovatchatcntt.php");
            }

            else if($tam =='giaiquyetcsvccntt'){
                include("cntt/giaiquyetcsvccntt.php");
            }

            else if($tam =='giaiquyetcsvccnttxong'){
                include("cntt/giaiquyetcsvccnttxong.php");
            }

            else if($tam =='giaiquyetcsvccnttxong1'){
                include("cntt/giaiquyetcsvccnttxong1.php");
            }

            else if($tam =='cosovatchatkt'){
                include("kinhte/cosovatchatkt.php");
            }

            else if($tam =='chitietcosovatchatkt'){
                include("kinhte/chitietcosovatchatkt.php");
            }

            else if($tam =='giaiquyetcsvckt'){
                include("kinhte/giaiquyetcsvckt.php");
            }

            else if($tam =='giaiquyetcsvcktxong'){
                include("kinhte/giaiquyetcsvcktxong.php");
            }

            else if($tam =='giaiquyetcsvcktxong1'){
                include("kinhte/giaiquyetcsvcktxong1.php");
            }

            else if($tam =='cosovatchatsp'){
                include("supham/cosovatchatsp.php");
            }

            else if($tam =='chitietcosovatchatsp'){
                include("supham/chitietcosovatchatsp.php");
            }

            else if($tam =='giaiquyetcsvcsp'){
                include("supham/giaiquyetcsvcsp.php");
            }

            else if($tam =='giaiquyetcsvcspxong'){
                include("supham/giaiquyetcsvcspxong.php");
            }

            else if($tam =='giaiquyetcsvcspxong1'){
                include("supham/giaiquyetcsvcspxong1.php");
            }

            else if($tam =='cosovatchatnn'){
                include("nongnghiep/cosovatchatnn.php");
            }

            else if($tam =='chitietcosovatchatnn'){
                include("nongnghiep/chitietcosovatchatnn.php");
            }

            else if($tam =='giaiquyetcsvcnn'){
                include("nongnghiep/giaiquyetcsvcnn.php");
            }

            else if($tam =='giaiquyetcsvcnnxong'){
                include("nongnghiep/giaiquyetcsvcnnxong.php");
            }

            else if($tam =='giaiquyetcsvcnnxong1'){
                include("nongnghiep/giaiquyetcsvcnnxong1.php");
            }

            else if($tam =='lichsuphanhoicosovatchatkd'){
                include("quanly/lichsuphanhoicosovatchatkd.php");
            }

            else if($tam =='lichsuphanhoicosovatchatdd'){
                include("quanly/lichsuphanhoicosovatchatdd.php");
            }

            else if($tam =='suacosovatchat'){
                include("sinhvien/suacosovatchat.php");
            }

            else if($tam =='xacnhancsvc'){
                include("sinhvien/xacnhancsvc.php");
            }

            else if($tam =='chitietcosovatchat'){
                include("sinhvien/chitietcosovatchat.php");
            }

            else if($tam =='xacnhancsvc1'){
                include("sinhvien/xacnhancsvc1.php");
            }

            else if($tam =='phanhoicosovatchat'){
                include("sinhvien/phanhoicosovatchat.php");
            }

            else if($tam =='lichsuphanhoicosovatchat'){
                include("sinhvien/lichsuphanhoicosovatchat.php");
            }

            else if($tam =='ttsinhvien'){
                include("main/ttsinhvien.php");
            }

            else if($tam =='thongtincanhansv'){
                include("main/thongtincanhansv.php");
            }
            

            else if($tam =='doimatkhaugv'){
                include("main/doimatkhaugv.php");
            }

            else if($tam =='thongtincanhangv'){
                include("main/thongtincanhangv.php");
            }

            else if($tam =='suattsinhvien'){
                include("main/suattsinhvien.php");
            }

            else if($tam =='themsinhvien'){
                include("main/themsinhvien.php");
            }

            else if($tam =='xemthemsv'){
                include("main/xemthemsv.php");
            }

            else if($tam =='xulythemgiangvien'){
                include("xuly/xulythemgiangvien.php");
            }

            else if($tam =='xulythemsinhvien'){
                include("xuly/xulythemsinhvien.php");
            }

            else if($tam =='xulythemquanly'){
                include("xuly/xulythemquanly.php");
            }

            else if($tam =='xulythemttsinhvien'){
                include("xuly/xulythemttsinhvien.php");
            }

            else if($tam =='danhsachgiangvien'){
                include("main/danhsachgiangvien.php");
            }

            else if($tam =='danhsachsinhvien'){
                include("main/danhsachsinhvien.php");
            }

            else if($tam =='doimatkhau'){
                include("main/doimatkhau.php");
            }

            else if($tam =='thongtincanhan'){
                include("main/thongtincanhan.php");
            }

            else if($tam =='taikhoangiangvien'){
                include("main/taikhoangiangvien.php");
            }

            else if($tam =='taikhoansinhvien'){
                include("main/taikhoansinhvien.php");
            }

            else if($tam =='danhsachlop'){
                include("main/danhsachlop.php");
            }

            else if($tam =='danhsachcaclopkhoanongnghiep'){
                include("main/danhsachcaclopkhoanongnghiep.php");
            }

            else if($tam =='danhsachcaclopkhoakinhte'){
                include("main/danhsachcaclopkhoakinhte.php");
            }

            else if($tam =='danhsachcaclopkhoasupham'){
                include("main/danhsachcaclopkhoasupham.php");
            }

            else if($tam =='cntt'){
                include("main/cntt.php");
            }

            else if($tam =='nongnghiep'){
                include("main/nongnghiep.php");
            }

            else if($tam =='kinhte'){
                include("main/kinhte.php");
            }

            else if($tam =='supham'){
                include("main/supham.php");
            }

            else if($tam =='danhsachcackhoa'){
                include("main/danhsachcackhoa.php");
            }

            else if($tam =='danhsachkhoanongnghiep'){
                include("main/danhsachkhoanongnghiep.php");
            }

            else if($tam =='danhsachkhoakinhte'){
                include("main/danhsachkhoakinhte.php");
            }

            else if($tam =='danhsachkhoasupham'){
                include("main/danhsachkhoasupham.php");
            }
   
            else if($tam =='timkiemgiangvien'){
                include("main/timkiemgiangvien.php");
            }

            else if($tam =='timkiemsinhvien'){
                include("main/timkiemsinhvien.php");
            }


            else if($tam =='xemthem'){
                include("main/danhsachxemthemgv.php");
            }
            
            else {
                include("main/index.php");
            }
          ?>
</div>