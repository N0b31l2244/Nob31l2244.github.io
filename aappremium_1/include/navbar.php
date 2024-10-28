<style>
    .underline-active {
        display: inline-block;
        color: #000;
        text-decoration: none;
    }
    .underline-active::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #000;
        transition: width .3s;
    }
    .underline-active:hover::after {
        width: 100%;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top py-4" style="background: #fff;">
    <div class="container">
        <!-- <a href="<?=LOCAL_WEB?>"><img src="assets/img/logo2.png" style="height: 6.1rem;width: 7.9rem;border-radius: 0%;" alt="a" class="card-img-top img-proflie mb-2"></a> -->
        <a class="navbar-brand text-dark" href="#"><?=$web_rows['web_name'] ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-sliders"></i>
        </button>
        <div class="collapse navbar-collapse" style="background: #fff;" id="navbarColor02">
        <ul class="navbar-nav me-auto text-center text-dark">
            <li class="nav-item">
                <a class="hvr-icon-up nav-link underline-active text-dark <?php if(@$_GET['page'] == "home"){ echo "active"; } ?>" href="page/home"><small style="font-size: 16px;"><i class='bx bx-home-alt hvr-icon' ></i> หน้าแรก</small></a>
            </li>
            <li class="nav-item">
                <a class="hvr-icon-up nav-link underline-active text-dark <?php if(@$_GET['page'] == "shop"){ echo "active"; } ?>" href="page/shop"><small style="font-size: 16px;"><i class='bx bx-cart hvr-icon' ></i> ร้านค้า</small></a>
            </li>
            
            <!-- <li class="nav-item">
                <a class="hvr-icon-up nav-link <?php if(@$_GET['page'] == "history"){ echo "active"; } ?>" href="page/history"><small><i class="fa-solid fa-box-open hvr-icon"></i> ประวัติการสั่งซื้อ</small></a>
            </li> -->
            <?php if(isset($_SESSION['username'])): ?>

            <!-- <li class="nav-item">
            <a class="hvr-icon-up nav-link <?php if(@$_GET['page'] == "history"){ echo "active"; } ?>" href="page/history"><small><i class="fa-solid fa-box-open hvr-icon"></i> ประวัติการสั่งซื้อ</small></a>
            </li> -->

            <li class="nav-item">
                <a class="hvr-icon-up nav-link underline-active text-dark <?php if(@$_GET['page'] == "topup"){ echo "active"; } ?>" href="page/topup"><small style="font-size: 16px;"><i class='bx bx-wallet-alt hvr-icon' ></i> เติมเงิน</small></a>
            </li>

            <li class="nav-item">
                <a class="hvr-icon-up nav-link underline-active text-dark <?php if(@$_GET['page'] == "history"){ echo "active"; } ?>" href="page/history"><small style="font-size: 16px;"><i class='bx bx-history hvr-icon' ></i> ประวัติการสั่งซื้อ</small></a>
            </li>
            <?php endif ?>
            <li class="nav-item">
                <a class="hvr-icon-up nav-link underline-active text-dark" href="<?=$web_rows['web_facebook']?>"><small style="font-size: 16px;"><i class='bx bx-user hvr-icon' ></i> ติดต่อ</small></a>
            </li>
            
        </ul>
        <?php if(isset($_SESSION['username'])): ?>
            <div class="d-flex flex-row-reverse">
                <ul class="navbar-nav me-auto ms-auto text-center">
                    <li class="nav-item">
                        <button class="btn btn-light">ยอดเงินคงเหลือ <b class="text-primary">฿<?=number_format($users_point,2)?></b> บาท</button>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-info hvr-icon-up"><i class="fa-solid fa-user hvr-icon"></i> <?=$users_username?></button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop2" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                    <?php if($users_status == $admin_status): ?>
                                        <a class="dropdown-item" href="manage/main"><i class="fa-solid fa-code"></i> จัดการหลังบ้าน</a>
                                    <?php endif;?>
                                    <a class="dropdown-item" href="page/profile"><i class="fa-solid fa-user hvr-icon"></i> ข้อมูลส่วนตัว</a>
                                    <button class="dropdown-item" onclick="logout()"><i class="fa-solid fa-right-from-bracket hvr-icon"></i> ออกจากระบบ</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        
        <?php else:?>
            <div class="d-flex flex-row-reverse">
                <ul class="navbar-nav me-auto ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-login hvr-icon-up" href="page/login"><i class="fa-solid fa-user-lock hvr-icon"></i> เข้าสู่ระบบ</a>
                        <a class="btn btn-login hvr-icon-up" href="page/register"><i class="fa-solid fa-address-book hvr-icon"></i> สมัครสมาชิก</a>
                    </li>
                </ul>
            </div>
        <?php endif;?>
        </div>
    </div>
    </nav>