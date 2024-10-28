<style>
    .bg-glass {
      background: linear-gradient(135deg, rgba(255, 255,255 , 0.1) , rgba(255, 255,255 , 0) );
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
    }
</style>
<div class="col-md-12 col-sm-12 mt-2">
    <div class="alert alert-warning shadow" role="alert">
        <h5><i class='bx bx-error-alt' ></i> หากชำระเงินเข้าสู่ระบบแล้วไม่มีการคืนเงิน <b>ทุกกรณี</b></h5>
    </div>
</div>
<div class="col-md-4 col-sm-12 mt-2 hvr-shrink" data-bs-toggle="modal" data-bs-target="#truewallet">
    <div class="card bg-white text-black mb-3 shadow" data-aos="zoom-in-up">
        <div class="card-body text-center">

            <img src="assets/img/icons/truewallet.png" alt="truewallet" height="120px" class="center-menu mt-3 mb-3">
            <h4 class="text-dark">เติมเงินด้วย True Wallet</h4>
            <button class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#truewallet">เติมเงิน</button></td>
            

        </div>
    </div>
</div>

<div class="col-md-4 col-sm-12 mt-2 hvr-shrink" data-bs-toggle="modal" data-bs-target="#bank">
    <div class="card bg-white text-black mb-3 shadow" data-aos="zoom-in-up">
        <div class="card-body text-center">

            <img src="assets/img/icons/slipscanpay.png" height="120px" alt="Bank" class="center-menu mt-3 mb-3">
            <h4 class="text-dark">เติมเงินด้วยสแกนสลิปธนาคาร</h4>
            
            <button class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#bank">เติมเงิน</button></td>
        </div>
    </div>
</div>


<!-- ประวัติการเติมเงิน -->
<div class="col-md-12 col-sm-12 mt-4">
<!-- crad_tung text-black -->
    <div class="card bg-white shadow mb-3"> 
        <div class="card-header text-dark"><i class="fa-solid fa-wallet" style="color:#fff;"></i> Topup History - ประวัติการเติมเงิน</div>
        <div class="card-body">
        <?php
            $result = $connect->query("SELECT * FROM pp_topup WHERE username = '".$users_username."'; ");
            $rewardshistorys = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <?php if($result->num_rows == 0) : ?>
            <div class="alert alert-dismissible alert-warning">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
            <h4 class="alert-heading">Warning!</h4>
            <p class="mb-0">ยังไม่มีประวัติการทำรายการ.</p>
            </div>
                            
        <?php else: ?>                           
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center mt-2">
                    <div class="table-responsive">
                        <table id="tbl_topuphistory" cellspacing="1" class="table table-striped table-bordered display text-black">
                            <thead>
                                <tr>
                                    <th class="text-dark">#Order</th>
                                    <th class="text-dark"><i class="fa-solid fa-computer"></i> Pay</th>
                                    <th class="text-dark"><i class="fa-solid fa-credit-card"></i> Credit</th>
                                    <th class="text-dark"><i class="fa-solid fa-font-awesome"></i> Status</th>
                                    <th class="text-dark"><i class="fa-solid fa-clock"></i> Time</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($rewardshistorys as $rewardshistory) :  ?>
                                <tr>
                                    <td><?= $rewardshistory['id']; ?></td>
                                    <td><?= $rewardshistory['topupby']; ?></td>
                                    <td><?= $rewardshistory['point']; ?></td>
                                    <td>
                                        <?php if($rewardshistory['status'] == 1): ?>
                                        <span style="color:#1b4d0a;"><i class="fa-solid fa-check"></i> ผ่าน</span>
                                        <?php else: ?>
                                        <span style="color:#1b4d0a;"><i class="fa-solid fa-circle-info"></i> รอแอดมินตรวจสอบ</span>
                                        <?php endif ?>
                                    </td>
                                    <td><?= th($rewardshistory['topuptime']); ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

        <?php endif; ?>  
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="howtotopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">วิธีเติมเงินด้วยอังเป่า</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="assets/img/aungpao_truewallet.png" style="height: 100%;width: 100%; " alt="a" class="card-img-top img-proflie">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info w-100" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="truewallet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5> Topup - เติมเงิน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-sm-12">
                    <div class="p-2 mb-3 text-black">
                        
                        <div class="card-body">

                            <div class="mb-4 text-center">
                                <img src="assets/img/icons/truewallet.png" style="height: 9.9rem;width: 9.9rem; " alt="a" class="card-img-top img-proflie">
                            </div>
                            <div class="form-group mb-3">
                                <label class="col-form-label text-dark" for="inputDefault"><i class="fa-solid fa-link"></i> Aungpao - ลิ้งอังเป่า <a href="" data-bs-toggle="modal" data-bs-target="#howtotopup"> วิธีเติมเงินด้วยอังเป่า</a> </label>
                                <input type="text" class="form-control" placeholder="https://gift.truemoney.com/campaign/?v=xxxx" id="link_topup">
                            </div>
                            <div class="form-group mb-3">
                                <div class="g-recaptcha d-flex align-items-center justify-content-center" style="margin-top: 15px;" data-sitekey="<?php echo SITE_KEY; ?>"></div>
                            </div>

                            <div class="form-group mb-3">
                                <button onclick="topups()" class="btn btn-primary w-100"><i class="fa-solid fa-circle-check"></i> ตรวจสอบข้อมูล</button>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bank" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5 class="text-dark">Topup Slip - เติมเงินสลิป</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="col-md-12 col-sm-12" data-aos="zoom-in">
                    <div class="p-2 mb-3 text-black">
                        
                        <div class="card-body">

                            <!-- <h6><i class="fa-solid fa-circle-dollar-to-slot"></i> Topup Slip - เติมเงินสลิป</h6> -->
                            <div class="form-group">
                                <div class="text-center pointer">
                                    <img src="https://cdn.discordapp.com/attachments/1097917702875660358/1102660427453825074/slipscanpay.png" alt="null" width="30%"><br>
                                    <!--<span class="badge rounded-pill bg-info mb-2 mt-3" style="font-size: 0.9rem;" >ชื่อบัญชี : <span><?=$web_rows['web_slip_name'] ?></span></span><br>
                                    <span class="badge rounded-pill bg-info mb-2" style="font-size: 0.9rem;" >เลขที่บัญชี : <span id="backid"><?=$web_rows['web_slip_account'] ?></span></span><br>
                                    <span class="badge rounded-pill bg-info mb-2" style="font-size: 0.9rem;" >เลขที่บัญชี : <span id="backidx"><?=$web_rows['web_slip_bank'] ?></span></span><br>
                                     <button class="btn btn-success btn-sm" onclick="copy_backid()"><i class="fa-solid fa-copy"></i> คัดลอกเลขบัญชี</button>-->
                                </div>

                                <script>
                                    document.getElementById("cp_btn").addEventListener("click", copy_backid);

                                    function copy_backid() {
                                        var copyText = document.getElementById("backid");
                                        var textArea = document.createElement("textarea");
                                        textArea.value = copyText.textContent;
                                        document.body.appendChild(textArea);
                                        textArea.select();
                                        document.execCommand("Copy");

                                        Swal.fire(
                                            'คัดลอก',
                                            'เลขบัญชี ' + textArea.value + ' แล้ว!!',
                                            'success'
                                        )

                                        textArea.remove();


                                    }
                                </script>
                            </div>
                            <div class="form-group mt-1">
                                <!--<div class="text-center pointer mb-2">
                                    <img src="assets/img/icons/picture.png" alt="null" width="20%" id="output" onclick="click_image()">
                                </div>-->
                            </div>
                            <h5 class="mb-0 mt-0">ชื่อบัญชี : <?=$web_rows['web_slip_name'] ?></h5>
                            <h5 class="mb-0 mt-0">ธนาคาร : <?=$web_rows['web_slip_bank'] ?></h5>
                            <!--<h5 class="mb-0 mt-0">เลขที่บัญชี : <?=$web_rows['web_slip_account'] ?></h5>-->
                            <div class="input-group text-start mb-2">
                                <input type="text" class="form-control text-center" id="backid" value="<?=$web_rows['web_slip_account'] ?>" disabled="">
                                <button class="btn btn-outline-success" onclick="copy_backid()">คัดลอกเลขบัญชี</button>
                            </div>
                            <div class="form-group ">
                                <label for="formFile" class="form-label mt-0 text-dark"><i class="fa-regular fa-image"></i> รูปสลิป (สลิปที่มี Qrcode เท่านั้น!!)</label>
                                <input class="form-control text-dark" type="file" id="photo" accept="image/*" onchange="loadFile(event)">

                                <small class="text-center" id="msg" style="color:red"></small>
                            </div>
                            <div class="form-group mt-4">
                                <button onclick="ok_slip()" class="btn btn-primary btn-slip w-100"><i class="fa-solid fa-circle-check"></i> ตรวจสอบข้อมูล</button>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<script>

    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };

    function click_image(){
        $('#photo').click();
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/jsqr@1.1.0/dist/jsQR.js"></script>
<script>

    function File2Base64(file) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = (error) => reject(error);
        });
    }
    async function imageDataFromSource(source) {
        const image = Object.assign(new Image(), {
            src: source
        });
        await new Promise((resolve) => image.addEventListener('load', () => resolve()));
        const context = Object.assign(document.createElement('canvas'), {
            width: image.width,
            height: image.height,
        }).getContext('2d');
        context.imageSmoothingEnabled = false;
        context.drawImage(image, 0, 0);
        return context.getImageData(0, 0, image.width, image.height);
    }
    //
</script>
<script>

    function ok_slip(){

        var vidFileLength = $("#photo")[0].files.length;
        var url = $('#photo').val();
        var idxDot = url.lastIndexOf(".") + 1;
        var extFile = url.substr(idxDot, url.length).toLowerCase();
        // console.log(extFile)
        if(vidFileLength === 0){
            $('#msg').html('<i class="fa-solid fa-triangle-exclamation"></i> กรุณาเลือกรูปภาพสลืป');
            return false;
        }
        var property = document.getElementById('photo').files[0];
        
        if (extFile == "png" || extFile == "jpeg" || extFile == "jpg") {
            
            var qrcode;
            const reader = new FileReader();
            reader.onload = async function(e) {
                const URLBase64 = await File2Base64(property);
                const ImageData = await imageDataFromSource(URLBase64);
                const code = jsQR(ImageData.data, ImageData.width, ImageData.height);
                qrcode = code.data;
                console.log(qrcode)
                if (code && code.data) {
                //--
                    var form_data = new FormData();
                    form_data.append( 'qrcode', qrcode );
                    console.log(qrcode);
                    $.ajax({
                        url: 'system/master.php?rdcwslipapi=api',
                        // url: 'cmd.php?slipapi=api',
                        method: 'POST',
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
                            $('#msg').html('<i class="fa fa-spinner fa-spin fa-fw"></i> กำลังตรวจสอบข้อมูล..');
                            $(".btn-slip").html('<i class="fa fa-spinner fa-spin fa-fw"></i> กำลังตรวจสอบข้อมูล..');
                            $(".btn-slip").prop("disabled", true);
                        },
                        success: function(data) {
                            $( "#return" ).html( data );
                            // $("#btn").prop("disabled", false); 
                            $(".btn-slip").prop("disabled", false);
                            $(".btn-slip").html('<i class="fa-solid fa-circle-check"></i> ตรวจสอบข้อมูล');
                            // $('#msg').html('<i class="fa-solid fa-triangle-exclamation"></i> เติมเงินไม่สำเร็จ.');
                        }
                    });
            //--
                }
            }
            reader.readAsDataURL(property);
        }else{
            $('#msg').html('<i class="fa-solid fa-triangle-exclamation"></i> นามสกุลไฟล์ไม่ถูกต้อง');
        }
       
    }

    document.getElementById("cp_btn").addEventListener("click", copy_backid);

    function copy_backid() {
        var copyText = document.getElementById("backid");
        var textArea = document.createElement("textarea");
        textArea.value = copyText.textContent;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("Copy");

        Swal.fire(
            'คัดลอก',
            'เลขบัญชี '+ textArea.value +' แล้ว!!',
            'success'
        )

        textArea.remove();
        
        
    }
</script>