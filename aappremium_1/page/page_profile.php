<style>
    .bg-glass {
      background: linear-gradient(135deg, rgba(255, 255,255 , 0.1) , rgba(255, 255,255 , 0) );
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
    }
</style>
<div class="col-md-4 col-sm-12 mt-4"></div>
<div class="col-md-4 col-sm-12 mt-4" data-aos="zoom-in">
    <center>
        <img src="<?=$web_rows['web_img01']?>" style="border-color: #7a8288;border-style: solid;border-width: 3px;height: 9.9rem;width: 9.9rem;border-radius: 50%;" alt="a" class="card-img-top img-proflie">
    </center>
    <div class="text-center mt-3">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h4 class="text-dark">สวัสดี, <?=$users_username;?></h4>
                <p class="text-dark"><?=$users_email;?></p>
            </div>
            <div class="col-md-12 col-sm-12">
                <?php if($users_status== 9): ?>
                    <span class="badge rounded-pill bg-primary mb-4" style="font-size: 0.9rem;"><i class="fa-solid fa-rocket"></i> สถานะ : Admin</span><br> 
                <?php elseif($users_status== 3): ?>
                    <span class="badge rounded-pill bg-info mb-4" style="font-size: 0.9rem;"><i class="fa-solid fa-rocket"></i> สถานะ : Agent</span><br> 
                <?php else: ?>
                    <span class="badge rounded-pill bg-success mb-4" style="font-size: 0.9rem;"><i class="fa-solid fa-rocket"></i> สถานะ : Member</span><br> 
                <?php endif; ?>
                <!-- <span class="badge rounded-pill bg-success mb-4" style="font-size: 0.9rem;"><i class="fa-solid fa-rocket"></i> สถานะ : Member</span><br> -->
                <button class="btn btn-light">ยอดเงินคงเหลือ <b class="text-primary">฿<?=number_format($users_point,2)?></b> บาท</button>
                <button class="btn btn-primary" onclick="logout()"><i class="fa-solid fa-right-from-bracket hvr-icon"></i> ออกจากระบบ</button>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-12 mt-4"></div>

<div class="col-md-6 col-sm-12 mt-4">
    <div class="card border-light bg-white mb-3 shadow-lg">
        <div class="card-header text-dark"><i class="fa-solid fa-user-pen"></i> User Info - ข้อมูลผู้ใช้</div>
        <div class="card-body">

            <div class="form-group">
                <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> E-mail (อีเมล)</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" disabled placeholder="username" id="username" value="<?=$users_email?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> Username (ชื่อผู้ใช้)</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" class="form-control" disabled placeholder="username" id="username" value="<?=$users_username?>">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> Point (พอยท์)</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-coins"></i></span>
                        <input type="text" class="form-control" disabled placeholder="username" id="username" value="<?=number_format($users_point,2)?>">
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<div class="col-md-6 col-sm-12 mt-4">
    <div class="card border-light bg-white shadow-lg">
        <div class="card-header text-dark"><i class="fa-solid fa-unlock"></i> Change Passwrod - เปลี่ยนรหัสผ่าน</div>
        <div class="card-body">

            <div class="form-group">
                <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-unlock"></i> Password (รหัสผ่านเก่า)</label>
                <div class="input-group">
                    <input type="password" class="form-control password" placeholder="Password" id="password">
                    <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-lock"></i> New - Password (รหัสผ่านใหม่)</label>
                    <div class="input-group">
                        <input type="password" class="form-control passwordx" placeholder="New - Password" id="newpassword">
                        <span class="input-group-text" onclick="password_show_hidex();">
                        <i class="fas fa-eye" id="show_eyex"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eyex"></i>
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-clock-rotate-left"></i> Re - Password (ยืนยันรหัสผ่านใหม่)</label>
                    <div class="input-group">
                        <input type="password" class="form-control passwordy" placeholder="Re - Password" id="repassword">
                        <span class="input-group-text" onclick="password_show_hidey();">
                        <i class="fas fa-eye" id="show_eyey"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eyey"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="g-recaptcha d-flex align-items-center justify-content-center" style="margin-top: 15px;" data-sitekey="<?php echo SITE_KEY; ?>"></div>
            </div>

            <div class="form-group mt-4 mb-4">
                <button onclick="repasswordNew()" class="btn btn-primary w-100"><i class="fa-solid fa-circle-check"></i> เปลี่ยนรหัสผ่าน</button>
            </div>

        </div>
    </div>
</div>


<script>
    function password_show_hide() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
    function password_show_hidex() {
        var x = document.getElementById("newpassword");
        var show_eye = document.getElementById("show_eyex");
        var hide_eye = document.getElementById("hide_eyex");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
    function password_show_hidey() {
        var x = document.getElementById("repassword");
        var show_eye = document.getElementById("show_eyey");
        var hide_eye = document.getElementById("hide_eyey");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
</script>