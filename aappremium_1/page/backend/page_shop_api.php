
<?php
    $result = $connect->query("SELECT * FROM pp_shop_stock_api; ");
    $shopapis = $result->fetch_all(MYSQLI_ASSOC);

    $url = 'https://byshop.me/api/money';
    $headers = array(
        // 'User-Agent: HMPRSLIPAPI',
    );

    $data = array( 'keyapi' => $web_rows['web_keyapi'] );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {

    }else{
        $data = json_decode($response, true);
		if($data['status'] == "success"){
            $api_money = $data['money'];
        }else{
            $api_money = "0.00";
        }
		
        
    }
?>
<div class="col-md-9 col-sm-12" data-aos="fade-up">

    <div class="card card-hover shadow-lg px-4 py-3" style="background-color: #fff;">
        <h5 class="card-title"><i class='bx bx-cog' ></i> จัดการสินค้าจาก API Byshop.me</h5><hr>

            <div class="text-end">
                <button class="btn btn-light">ยอดเงิน API คงเหลือ <b class="text-primary">฿<?=$api_money?></b> บาท</button>
                <button type="button" class="btn btn-info mb-1" onclick="update_sop_api(0)"><i class="fa-solid fa-arrows-rotate"></i> อัพเดทสินค้า</button>
                <button type="button" class="btn btn-info mb-1" onclick="update_sop_api(1)"><i class="fa-solid fa-arrows-rotate"></i> อัพเดทบางส่วน</button>
            </div>

        <div class="table-responsive mt-3">
        <div style="overflow-x:auto;">
            <table id="tbl_shopapi" cellspacing="1" class="table table-striped table-bordered display text-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><i class="fa-solid fa-computer"></i> สินค้า</th>
                        <th><i class="fa-solid fa-credit-card"></i> ราคาเรา</th>
                        <th><i class="fa-solid fa-credit-card"></i> ราคา api</th>
                        <th><i class="fa-solid fa-font-awesome"></i> สต็อก</th>
                        <th><i class="fa-solid fa-font-awesome"></i> สถานะ</th>
                        <th><i class="fa-solid fa-clock"></i> ข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach($shopapis as $shopapi) :  ?>
                    <tr>
                        <td><?= $shopapi['product_id']; ?></td>
                        <td><?= $shopapi['name']; ?></td>
                        <td><?= number_format($shopapi['price_web'],2); ?></td>
                        <td><?= number_format($shopapi['price'],2); ?></td>
                        <td><?= $shopapi['stock']; ?></td>
                        <?php if($shopapi['stock']<=0): ?>
                        <td><span class="badge bg-danger"><i class="fa-solid fa-check"></i> <?= $shopapi['status']; ?></span></td>
                        <?php else: ?>
                        <td><span class="badge bg-success"><i class="fa-solid fa-check"></i> <?= $shopapi['status']; ?></span></td>
                        <?php endif; ?>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#editShopModal<?= $shopapi['id']; ?>">
                            <i class="fa-regular fa-pen-to-square"></i> แก้ไข</button>
                            <?php if($shopapi['showitem'] == 0): ?>
                                <button type="button" class="btn btn-sm btn-danger mb-1" onclick="showshop(<?= $shopapi['id']; ?>)"><i class="fa-solid fa-eye-slash"></i> ปิด</button>
                            <?php else: ?>
                                <button type="button" class="btn btn-sm btn-success mb-1" onclick="showshop(<?= $shopapi['id']; ?>)"><i class="fa-solid fa-eye"></i> เปิด</button>
                            <?php endif; ?>
                            
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>

<?php  foreach($shopapis as $shopapi) :  ?>
<!-- Modal -->
<div class="modal fade" id="editShopModal<?= $shopapi['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-regular fa-circle-question"></i> ข้อมูล <?= $shopapi['name']; ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group text-center"><img src="<?= $shopapi['img']; ?>" alt="shop" width="10%"></div>
            
            <div class="form-group">
                <label class="col-form-label" for="inputDefault"><i class="fa-regular fa-image"></i> Url รูปสินค้า</label>
                <input type="text" class="form-control" placeholder="img" id="img<?= $shopapi['id']; ?>" value="<?= $shopapi['img']; ?>">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> ซื้อสินค้า</label>
                <input type="text" class="form-control" placeholder="name" id="name<?= $shopapi['id']; ?>" value="<?= $shopapi['name']; ?>">
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-coins"></i> ราคาเรา</label>
                    <input type="text" class="form-control" placeholder="mypoint" id="mypoint<?= $shopapi['id']; ?>" value="<?= $shopapi['price_web']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-coins"></i> ราคา api</label>
                    <input type="text" class="form-control" disabled placeholder="apipoint" id="apipoint" value="<?= $shopapi['price']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-box-open"></i> สต็อก</label>
                    <input type="text" class="form-control" disabled placeholder="apipoint" id="apipoint" value="<?= $shopapi['stock']; ?>">
                </div>

            </div>
            
            

            <div class="form-group">
                <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> ข้อมูลสินค้าแสดงหน้าเว็บ</label>
                <textarea id="info<?= $shopapi['id']; ?>" class="summernote" name="info" rows="5" placeholder="info" ><?= $shopapi['info']; ?></textarea>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" onclick="edit_shop_api(<?= $shopapi['id']; ?>)"><i class="fa-solid fa-pen-to-square"></i> แก้ไข</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> ปิดหน้าต่างนี้</button>
        </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
