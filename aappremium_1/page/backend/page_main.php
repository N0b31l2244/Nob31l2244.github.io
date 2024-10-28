
<div class="col-md-9 col-sm-12" data-aos="fade-up">
<div class="card card-hover shadow-lg px-4 py-3" style="background-color: #fff;">
    <h5 class="card-title"><i class='bx bx-cog' ></i> ระบบจัดการหลังบ้าน</h5><hr>

   
        <div class="row">
        <div class="col-md-3 col-sm-12 mt-2 text-center">
        <div class="cardmb-3">
            <div class="card-body hvr-icon-up">
            <div class="text-center">
                <img src="assets/img/icons/user.png" style="border-style: solid;border-width: 0px;height: 5.9rem;width: 5.9rem;border-radius: 50%;" 
                    alt="a" class="card-img-top img-proflie mb-2 hvr-icon">
                <h5>สมาชิกทั้งหมด</h5>
                <span class="badge bg-info"><i class="fa-solid fa-users"></i> <?=number_format($count_users,0)?> คน</span><br>
            </div>
            </div>
        </div>
        </div>

        <div class="col-md-3 col-sm-12 mt-2 text-center">
        <div class="cardmb-3">
            <div class="card-body hvr-icon-up">
            <div class="text-center">
                <img src="assets/img/icons/add-user.png" style="border-style: solid;border-width: 0px;height: 5.9rem;width: 5.9rem;border-radius: 100%;" 
                    alt="a" class="card-img-top img-proflie mb-2 hvr-icon">
                <h5>สมาชิกใหม่วันนี้</h5>
                <span class="badge bg-info"><i class="fa-solid fa-user-plus"></i> +<?=number_format($count_users_day,0)?> คน </span><br>
            </div>
            </div>
        </div>
        </div>

        <div class="col-md-3 col-sm-12 mt-2 text-center">
        <div class="cardmb-3">
            <div class="card-body hvr-icon-up">
            <div class="text-center">
                <img  src="assets/img/icons/top-up.png" style="border-style: solid;border-width: 0px;height: 5.9rem;width: 5.9rem;border-radius: 50%;" 
                    alt="a" class="card-img-top img-proflie mb-2 hvr-icon">
                <h5>รายได้ทั้งหมด</h5>
                <span class="badge bg-info"><i class="fa-solid fa-sack-dollar"></i> <?=number_format($count_point, 2)?> บาท</span><br>
            </div>
            </div>
        </div>
        </div>


        <div class="col-md-3 col-sm-12 mt-2 text-center">
        <div class="cardmb-3">
            <div class="card-body hvr-icon-up">
            <div class="text-center">
                <img  src="assets/img/icons/top-upx.png" style="border-style: solid;border-width: 0px;height: 5.9rem;width: 5.9rem;border-radius: 50%;" 
                    alt="a" class="card-img-top img-proflie mb-2 hvr-icon">
                <h5>รายได้ของวันนี้</h5>
                <span class="badge bg-info"><i class="fa-solid fa-hand-holding-dollar"></i> <?=number_format($count_point_day, 2)?>  บาท</span><br> 
            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6 col-sm-12 mt-2">
            <div class="card mb-3">
                <div class="card-header"><i class="fa-solid fa-caret-right"></i>  กราฟแสดงรายได้</div>
                <div class="card-body">

                <div class="col-md-12">
                    <div class="card">
                    <div class="card-body">
                        <canvas id="chartLine"></canvas>
                    </div>
                    </div>
                </div>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 mt-2">
            <div class="card mb-3">
                <div class="card-header"><i class="fa-solid fa-caret-right"></i> สรุปการเติมเงินของผู้ใช้</div>
                <div class="card-body">

                <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <canvas id="chartPie"></canvas>
                    </div>
                </div>
                </div>

                </div>
            </div>
        </div>

        </div>
    </div>


</div>

