<style>
    .top-right {
      position: absolute;
      top: 2px;
      left: 10px;
    }
</style>

<style>
    .top-right1 {
      position: absolute;
      bottom: 10px;
      right: 10px;
    }
    .bg-glass {
      background: linear-gradient(135deg, rgba(255, 255,255 , 0.1) , rgba(255, 255,255 , 0) );
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
    }
    .bg-glassx {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) , rgba(255, 255, 255, 0.396) );
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
    }
    .border-ys {
        border: 2px solid rgba(0, 0, 0, 0);
        transition: all .5s ease;
    }

    .border-ys:hover {
        border: 2px solid #5d87ff;
    }
</style>

<div class="col-md-12 col-sm-12 col-12 mt-2 mb-4 ">
    <div class="crad  rounded-3" style="">
        <h4 class="m-2 text-dark"><i class='bx bxs-shopping-bag'></i> รายการสั่งซื้อ <span class="text-dark-50" style="font-size: 16px;">( ล่าสุด )</span></h4><hr>
        <div class="bg-white rounded shadow">
        <marquee direction="left">
            <div class=" d-flex flex-row ">
                <?php
                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://byshop.me/api/history',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 1,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                //ดึกรายการซื้อสินค้า API ใส่ keyapi เพื่อแสดงรายการขาย
                CURLOPT_POSTFIELDS => array('keyapi' => $web_rows['web_keyapi']),  
                CURLOPT_HTTPHEADER => array(
                    'Cookie: PHPSESSID=u8df3d96ij8re36ld76cl64t3p'
                ),
                ));


                    $response = curl_exec($curl);
                    $listbuy = json_decode($response);
                    $product_list_buy = '';
                    //กำหนดรายการขายล่าสุด 10 รายการ
                    for ($i=0; $i < 20 ; $i++) { 
                        $product_list_buy .= '

                        <div class=" d-flex mr-5 mt-3 text-black"> <br>  
                        <img class="img-fluid rounded" style="margin:0 auto;  height: 50px;" src="https://byshop.me/buy/img/img_app/'. substr ($listbuy[$i]->name ,0,2).'.png">
                        <span><b>&nbsp;&nbsp;&nbsp;'. $listbuy[$i]->name .'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                        <br>&nbsp;&nbsp;&nbsp;'. $listbuy[$i]->time .'<br>
                        <b><p style="font-size: 13px">&nbsp;&nbsp;<span class="rounded-pill badge bg-success">&nbsp;&nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i> ขายแล้ว !! &nbsp;&nbsp;</span></b></p>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
                                                ';
                                            }
                    
                    
                    // แสดงรายการขาย
                    echo $product_list_buy;
                    curl_close($curl);
                ?>


                            
                        </div>

                </div>

                    
            </div>
        </marquee>
        </div>
    </div>
</div>

<?php
 $result_load_packz = $connect->query("SELECT * FROM pp_shop_stock_api WHERE showitem = 1");
if ($result_load_packz->num_rows == 0) :?>
    <div class="col-md-12 col-sm-12 mt-2" data-aos="zoom-in-down">
        <div class="alert alert-dismissible alert-danger">
            <strong>เชื่อมต่อเซิฟเวอร์ไม่สำเร็จ! </strong> <a href="page/pshop" class="alert-link">ลองอีกครั้ง</a>.
        </div>
    </div>
<?php else: ?>

<div class="col-md-12 col-sm-12 col-12 mt-4 mb-4">
    <div class="crad rounded-3" style="">
        <h4 class="m-2 text-dark"><i class='bx bx-store' ></i> รายการสินค้า <span class="text-dark-50" style="font-size: 16px;">( ร้านค้า )</span></h4><hr>

            <div class="row">
            <?php 
            
            $load_packz = $result_load_packz->fetch_all(MYSQLI_ASSOC);
            $i= 1;
            foreach ($load_packz as $shop_fetch) : ?>

        <div class="col-md-31 col-sm-12 col-12 px-2 d-flex align-items-stretch" >
            <div class="card bg-white shadow mb-3 w-100 border-ys" data-aos="fade-up">
                <center><img src="<?=$shop_fetch['img']?>" class="p-4" style="width:11.1rem;"></center>
                <?php if($shop_fetch['stock'] == 0): ?>
                    <p class="top-right mt-2"><span class="badge rounded-pill text-bg-danger">สินค้าหมด</span></p>
                    <?php else : ?>
                        <p class="top-right mt-2"><span class="badge rounded-pill text-bg-success">พร้อมจำหน่าย</span></p>
                    <?php endif ?>

                    
                 
                <div class="card-body d-flex flex-column">
                
                    <h5 class="text-dark"><?=$shop_fetch['name']?></h5>
                    <small class="text-dark"><i class="fa-brands fa-creative-commons-share"></i> ประเภทสินค้า <?=$shop_fetch['id']?></small>
                    <small class="text-dark"><i class="fa-regular fa-circle-user"></i> คงเหลือ <?=$shop_fetch['stock']?> ชิ้น</small>
                    <small class="text-dark"><i class="fa-regular fa-clock"></i> สถานะ <?=$shop_fetch['status']?></small>
                    <?php if($shop_fetch['stock'] == 0): ?>
                      <div class="">
                        <small class="text-dark"><i class="fa-solid fa-circle-notch fa-spin text-danger"></i> รออัพเดตสินค้า 23.59 น.</small>
                      </div>
                    <?php endif ?>
                </div>
                <div class="p-2">
                    
                    <h6 class="text-dark-50">$ ราคา <?=number_format($shop_fetch['price_web'], 2)?> เครดิค</h6>
                    
                    <button class="btn btn-outline-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#ShopModal<?=$shop_fetch['id']?>">ข้อมูลเพิ่มเติม</button>
                    <?php if(isset($_SESSION['username'])): ?>
                    <button class="btn btn-primary w-100 mb-2" onclick="buypremium(<?=$shop_fetch['id']?>)">สั่งซื้อ (<?=number_format($shop_fetch['price_web'], 2)?> เครดิค)</button>
                    <?php else: ?>
                    <button class="btn btn-primary w-100 mb-2"  onclick="CradURL('./page/login')">เข้าสู่ระบบเพื่อนสั่งซื้อ </button>
                    <?php endif ?>

                    
                    
                </div>
            </div>
        </div>

            <?php  endforeach; ?>
            </div>

    </div>
</div>


<?php foreach ($load_packz as $shop_fetch) : ?>
<!-- Modal -->
<div class="modal fade" id="ShopModal<?=$shop_fetch['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-white">
      <div class="modal-header">
        <h1 class="modal-title text-dark fs-5" id="exampleModalLabel"><?=$shop_fetch['name']?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <center><img src="<?=$shop_fetch['img']?>" class="p-4" style="width:11.1rem;"></center>
            <h5 class="text-dark"><?=$shop_fetch['name']?></h5>
            <small class="text-dark"><i class="fa-brands fa-creative-commons-share"></i> ประเภทสินค้า <?=$shop_fetch['id']?></small>
            <small class="text-dark"><i class="fa-regular fa-circle-user"></i> คงเหลือ <?=$shop_fetch['stock']?> ชิ้น</small>
            <small class="text-dark"><i class="fa-regular fa-clock"></i> สถานะ <?=$shop_fetch['status']?></small>
            
        </div>

            <h6><?=$shop_fetch['info']?></h6>
    
      </div>
      <div class="modal-footer">
        <?php if(isset($_SESSION['username'])): ?>
        <button class="btn btn-primary w-50 mb-0" onclick="buypremium(<?=$shop_fetch['id']?>)">สั่งซื้อ (<?=number_format($shop_fetch['price_web'], 2)?> เครดิค)</button>
        <?php else: ?>
        <button class="btn btn-primary w-40 mb-0"  onclick="CradURL('./page/login')">เข้าสู่ระบบเพื่อนสั่งซื้อ </button>
        <?php endif ?>
        <button type="button" class="btn btn-danger w-40" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php  endforeach; ?>

<!-- <button class="btn btn-primary w-100 mb-2" onclick="buypremium(100)"> Test สั่งซื้อ ( เครดิค)</button> -->



<?php endif; ?>