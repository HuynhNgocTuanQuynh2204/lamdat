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

            else if($tam =='thongtincanhansv'){
                include("main/thongtincanhansv.php");
            }

            else if($tam =='ttsinhvien'){
                include("main/ttsinhvien.php");
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