<style>
    .bg-glass {
      background: linear-gradient(135deg, rgba(255, 255,255 , 0.1) , rgba(255, 255,255 , 0) );
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
    }
</style>
<div class="col-md-4 col-sm-12"></div>
<div class="col-md-4 col-sm-12">
    <div class="card bg-white mb-2 mt-4" data-aos="zoom-in">
        <div class="card-body">
            <div class="text-center">
                <!-- <center> -->
                    <img  src="assets/img/anya.jpg" style="border-color: #7a8288;border-style: solid;border-width: 3px;height: 9.9rem;width: 9.9rem;border-radius: 50%;" alt="a" class="card-img-top img-proflie mb-2">
                <!-- </center> -->
                <h3 class="text-dark">สร้างบัญชีใหม่</h3>
                <p class="mb-2 text-dark">ฉันมีบัญชีแล้ว, <a href="?page=login" class="alert-link">เข้าสู่ระบบ</a>
            </div>

            <div class="form-group">
                <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-user"></i> Username (ชื่อผู้ใช้)</label>
                <input type="text" class="form-control" placeholder="Username" id="username">
            </div>
            <div class="form-group">
                <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-lock"></i> Password (รหัสผ่าน)</label>
                <div class="input-group">
                    <input type="password" class="form-control password" placeholder="Password" id="password">
                    <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-lock"></i> Re - Password (ยืนยันรหัสผ่าน)</label>
                <div class="input-group">
                    <input type="password" class="form-control passwordx" placeholder="Re - Password" id="repassword">
                    <span class="input-group-text" onclick="password_show_hidex();">
                    <i class="fas fa-eye" id="show_eyex"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eyex"></i>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-envelope"></i> E-mail (อีเมล)</label>
                <input type="email" class="form-control" placeholder="E-mail" id="email">
            </div>
            <div class="form-group">
                <div class="g-recaptcha d-flex align-items-center justify-content-center" style="margin-top: 15px;" data-sitekey="<?php echo SITE_KEY; ?>"></div>
            </div>
            <div class="form-group mt-3 mb-2">
                <button onclick="register()" class="btn btn-primary w-100"><i class="fa-regular fa-address-book"></i> สร้างบัญชี</button>
            </div>
          
        </div>
    </div>
    
</div>
<div class="col-md-4 col-sm-12"></div>

<script src="assets/js/jquery-3.4.1.min.js"></script>
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
        var x = document.getElementById("repassword");
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
    
</script>

