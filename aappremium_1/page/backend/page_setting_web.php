
<div class="col-md-9 col-sm-12" data-aos="fade-up">
    <div class="card card-hover shadow-lg px-4 py-3" style="background-color: #fff;">
        <h5 class="card-title"><i class='bx bx-cog' ></i> ตั้งค่าเว็บไซต์</h5><hr>


        <div class="form-group row">
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web name</label>
                <input type="text" class="form-control" placeholder="name" id="web_name" value="<?=$web_rows['web_name']?>">
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web title</label>
                <input type="text" class="form-control" placeholder="name" id="web_title" value="<?=$web_rows['web_title']?>">
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web url img <a href="https://imgbb.com" target="_blank">imgbb.com</a></label>
                <input type="text" class="form-control" placeholder="name" id="web_img01" value="<?=$web_rows['web_img01']?>">
            </div>
            <!-- <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web phone ใช้รับเงิน Gif wallet</label>
                <input type="text" class="form-control" placeholder="name" id="web_phone" value="<?=$web_rows['web_phone']?>">
            </div> -->

        </div>

        <div class="form-group row">
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web line</label>
                <input type="text" class="form-control" placeholder="Line" id="web_line" value="<?=$web_rows['web_line']?>">
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web facebook</label>
                <input type="text" class="form-control" placeholder="Facenook" id="web_facebook" value="<?=$web_rows['web_facebook']?>">
            </div>
        

        </div>
        
        <div class="form-group">
            <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> web description</label>
            <textarea id="web_description" rows="5" placeholder="web_description" class="form-control" ><?=$web_rows['web_description']?></textarea>
        </div>

        <div class="form-group">
            <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> web keywords</label>
            <textarea id="web_keywords" rows="5" placeholder="web_keywords" class="form-control" ><?=$web_rows['web_keywords']?></textarea>
        </div>

        <div class="form-group row">
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web view</label>
                <input type="text" class="form-control" placeholder="name" id="web_view" value="<?=$web_rows['web_view']?>">
            </div>

        </div>


        <div class="form-group mb-4 mt-4">
            <button class="btn btn-info w-25" onclick="update_web_info(<?=$web_rows['id']?>)"><i class="fa-solid fa-pen-to-square"></i> แก้ไข</button>
        </div>
    </div>


    <div class="card card-hover shadow-lg px-4 py-3" style="background-color: #fff;">
    <h5 class="card-title"><i class='bx bx-wallet' ></i> ตั้งค่าระบบเติมเงิน</h5><hr>

        <div class="form-group row">
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> ชื่อบัญชี</label>
                <input type="text" class="form-control" placeholder="name" id="web_slip_name" value="<?=$web_rows['web_slip_name']?>">
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> หมายเลขบัญชี</label>
                <input type="text" class="form-control" placeholder="name" id="web_slip_account" value="<?=$web_rows['web_slip_account']?>">
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> ธนาคาร</label>
                <select name="web_slip_bank" id="web_slip_bank" class="form-control">
                    <option value="ธนาคารกสิกร" <?php if($web_rows['web_slip_bank'] == 'ธนาคารกสิกร') echo "selected"; ?>>ธนาคารกสิกร</option>
                    <option value="ธนาคารกรุงศรี" <?php if($web_rows['web_slip_bank'] == 'ธนาคารกรุงศรี') echo "selected"; ?>>ธนาคารกรุงศรี</option>
                    <option value="ธนาคารกรุงไทย" <?php if($web_rows['web_slip_bank'] == 'ธนาคารกรุงไทย') echo "selected"; ?>>ธนาคารกรุงไทย</option>
                    <option value="ธนาคารกรุงเทพ" <?php if($web_rows['web_slip_bank'] == 'ธนาคารกรุงเทพ') echo "selected"; ?>>ธนาคารกรุงเทพ</option>
                    <option value="ธนาคารไทยพาณิชย์" <?php if($web_rows['web_slip_bank'] == 'ธนาคารไทยพาณิชย์') echo "selected"; ?>>ธนาคารไทยพาณิชย์</option>
                    <option value="ธนาคารออมสิน" <?php if($web_rows['web_slip_bank'] == 'ธนาคารออมสิน') echo "selected"; ?>>ธนาคารออมสิน</option>
                    <option value="พร้อมเพย์" <?php if($web_rows['web_slip_bank'] == 'พร้อมเพย์') echo "selected"; ?>>พร้อมเพย์</option>
                    <!--<option value="brand-03.png" <?php if($web_rows['web_slip_bank'] == 'brand-09.png') echo "selected"; ?>>ธนาคารไทยพาณิชย์</option>
                    <option value="brand-07.png" <?php if($web_rows['web_slip_bank'] == 'brand-10.png') echo "selected"; ?>>ธนาคารไทยพาณิชย์</option>-->
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> web phone ใช้รับเงิน Gif wallet</label>
                <input type="text" class="form-control" placeholder="name" id="web_phone" value="<?=$web_rows['web_phone']?>">
            </div>
            <div class="form-group col-md-6">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> Key api <a href="https://verify.ptrdc.xyz/" target="_blank">verify.ptrdc.xyz</a></label>
                <input type="text" class="form-control" placeholder="name" id="web_slip_key" value="<?=$web_rows['web_slip_key']?>">
            </div>

            <div class="form-group mb-4 mt-4">
                <button class="btn btn-info w-25" onclick="update_web_pay(<?=$web_rows['id']?>)"><i class="fa-solid fa-pen-to-square"></i> บันทึก</button>
            </div>

        </div>




    </div>

</div>



