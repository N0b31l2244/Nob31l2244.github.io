<div class="col-md-12 col-sm-12 mt-4"></div>

<?php
if($users_status == $admin_status){

if(@$_GET['m'] == "main"){
    include 'page/backend/page_main.php';
}else if(@$_GET['m'] == "shopapi"){ 
    include 'page/backend/page_shop_api.php';
}else if(@$_GET['m'] == "users"){ 
    include 'page/backend/page_users.php';
}else if(@$_GET['m'] == "setting"){ 
    include 'page/backend/page_setting_web.php';
}else if(@$_GET['m'] == "api"){ 
    include 'page/backend/page_setting_api.php';
}else if(@$_GET['m'] == "history"){ 
    include 'page/backend/page_history.php';
}else if(@$_GET['m'] == "historypshop"){ 
    include 'page/backend/page_historypshop.php';
}else if(@$_GET['m'] == "topup"){ 
    include 'page/backend/page_topup.php';
}else if(!preg_match('/^[a-zA-Z0-9\_]*$/', @$_GET['m'])){ //addreward
    include 'view/backend/view_main.php';
}else{
    include 'view/backend/view_main.php';
}
}
?>



<div class="col-md-3 col-sm-12">
    <div class="card card-hover shadow-lg px-4 py-3 mb-3" style="background-color: #fff;">
        <h5 class="card-title"><i class='bx bx-cog' ></i> จัดการระบบหลังบ้าน</h5><hr>
        <a href="manage/main" class="btn btn-info mb-1"><i class="fa-solid fa-chart-pie"></i> หน้าแรก</a>
        <a href="manage/api" class="btn btn-info mb-1"><i class="fa-solid fa-terminal"></i> ตั้งค่า Api byshop</a>
        <a href="manage/shopapi" class="btn btn-info mb-1"><i class="fa-solid fa-cart-flatbed"></i> จัดการสินค้าจาก API</a>
        <a href="manage/history" class="btn btn-info mb-1"><i class="fa-solid fa-clock-rotate-left"></i> ประวัติการสั่งซื้อ</a>      
        <a href="manage/users" class="btn btn-info mb-1"><i class="fa-solid fa-users-gear"></i> จัดการผู้ใช้</a>
        <a href="manage/topup" class="btn btn-info mb-1"><i class="fa-solid fa-money-bill-wave"></i> ประวัติการเติมเงิน</a>
        <a href="manage/setting" class="btn btn-info mb-1"><i class="fa-solid fa-screwdriver-wrench"></i> ตั้งค่าเว็บไซต์</a>
        <!-- <a href="manage/setting_pay" class="btn btn-info mb-1"><i class="fa-solid fa-money-bill"></i> ตั้งค่าระบบเติมเงิน</a> -->
        
    </div>
</div>