<?php
if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
    unset($_SESSION['tenql']);
    unset($_SESSION['quyenhan']);
    unset($_SESSION['id_ql']);
    unset($_SESSION['tensv']);
    unset($_SESSION['id_sv']);
    unset($_SESSION['tengv']);
    unset($_SESSION['id_gv']);
    header('location:dangnhap.php');
}
?>

<body>
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-grid-alt"></i>
            </button>
            <div class="sidebar-logo">
                <a href="index.php">Hỗ trợ sinh viên</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <?php
            if(isset($_SESSION['id_ql']) || isset($_SESSION['id_sv']) || isset($_SESSION['id_gv'])){
                if(isset($_SESSION['quyenhan']) && ($_SESSION['quyenhan'] == 0 || $_SESSION['quyenhan'] == 1 || $_SESSION['quyenhan'] == 2)){
                    ?>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-agenda"></i>
                    <span>Nhiệm vụ</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-popup"></i>
                    <span>Thông báo</span>
                </a>
            </li>
            <?php
                    if(isset($_SESSION['quyenhan']) && $_SESSION['quyenhan'] == 0){
                        ?>
            <li class="sidebar-item">
                <a href="index.php?quanly=hoso" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>Hồ sơ</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
                    aria-expanded="false" aria-controls="auth">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>Thêm</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="index.php?quanly=themgiangvien" class="sidebar-link">Thêm thông tin giảng viên</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=themsinhvien" class="sidebar-link ">Thêm thông tin sinh viên</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=themquanly" class="sidebar-link ">Thêm thông tin quản lý</a>
                    </li>
                </ul>
            </li>
            <?php
                    }
                    ?>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
                    aria-expanded="false" aria-controls="auth">
                    <i class="fa-solid fa-list-check"></i>
                    <span>Danh sách</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="index.php?quanly=danhsachcackhoa" class="sidebar-link">Giảng viên theo khoa</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=danhsachlop" class="sidebar-link">Lớp theo khoa</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=danhsachgiangvien" class="sidebar-link">Thông tin giảng viên</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=danhsachsinhvien" class="sidebar-link">Thông tin sinh viên</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
                    aria-expanded="false" aria-controls="auth">
                    <i class="lni lni-protection"></i>
                    <span>Xác thực</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="index.php?quanly=doimatkhau" class="sidebar-link">Đổi mật khẩu</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=thongtincanhan" class="sidebar-link">Thông tin cá nhân</a>
                    </li>
                </ul>
            </li>
            <?php
                } elseif(isset($_SESSION['id_sv'])){
                ?>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                    data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                    <i class="lni lni-layout"></i>
                    <span>Phản hồi</span>
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two"
                            aria-expanded="false" aria-controls="multi-two">
                            Hai liên kết
                        </a>
                        <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Link 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Link 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-popup"></i>
                    <span>Thông báo</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
                    aria-expanded="false" aria-controls="auth">
                    <i class="lni lni-protection"></i>
                    <span>Xác thực</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="index.php?quanly=doimatkhausv" class="sidebar-link">Đổi mật khẩu</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=thongtincanhansv" class="sidebar-link">Thông tin cá nhân</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-cog"></i>
                    <span>Cài đặt</span>
                </a>
            </li>
            <?php
                }else if(isset($_SESSION['id_gv'])){?>
                 <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
                    aria-expanded="false" aria-controls="auth">
                    <i class="lni lni-protection"></i>
                    <span>Xác thực</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="index.php?quanly=doimatkhaugv" class="sidebar-link">Đổi mật khẩu</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index.php?quanly=thongtincanhangv" class="sidebar-link">Thông tin cá nhân</a>
                    </li>
                </ul>
            </li>
                <?php
                }
            }
            ?>
        </ul>
        <div class="sidebar-footer">
            <a href="index.php?dangxuat=1" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Đăng xuất</span>
            </a>
        </div>
    </aside>
</body>
