<style>
    .bg-glass {
        background: linear-gradient(135deg, rgba(255, 255,255 , 0.1) , rgba(255, 255,255 , 0) );
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

<div class="col-md-12 col-sm-12 mt-4 mb-2" data-aos="fade-up">

    <div id="carouselExampleFade" class="carousel slide carousel-fade shadow" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/img/bn/1320x400.png" class="d-block w-100 rounded-3" alt="1320x400.png">
            </div>
            <div class="carousel-item">
            <img src="assets/img/bn/1320x400.png" class="d-block w-100 rounded-3" alt="1320x400.png">
            </div>
            <div class="carousel-item">
            <img src="assets/img/bn/1320x400.png" class="d-block w-100 rounded-3" alt="1320x400.png">
            </div>
            <div class="carousel-item">
            <img src="assets/img/bn/1320x400.png" class="d-block w-100 rounded-3" alt="1320x400.png">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

<div class="col-md-12 col-sm-12 mt-2"></div>
<div class="col-lg-3">
    <div class="container-sm mb-2 mb-lg-0 shadow  p-3 ps-0 pe-0 bg-white border-ys count-only" style="border-radius: 1vh;">
        <center>
            <div class="row justify-content-center align-self-center">
            <div class="col-6 col-lg-4 p-2 img-a">
                <img src="assets/img/icons/ready.png" alt="" style="height: 68px;">
            </div>
                <div class="col-6 col-lg-6 text-start">
                    <span class="text-main" id="count" style="font-size: 30px;" data-target="14407">31</span>
                    <span style="font-size: 25px;" class="text-main">&nbsp;ชิ้น</span>
                    <br>
                    <span class="text-secondary">สินค้าทั้งหมด</span>
                </div>
            </div>
        </center>
    </div>
</div>
<div class="col-lg-3">
    <div class="container-sm mb-2 mb-lg-0 shadow  p-3 ps-0 pe-0 bg-white border-ys count-only" style="border-radius: 1vh;">
        <center>
            <div class="row justify-content-center align-self-center">
            <div class="col-6 col-lg-4 p-2 img-a">
                <img src="assets/img/icons/sell1.png" alt="" style="height: 68px;">
            </div>
                <div class="col-6 col-lg-6 text-start">
                    <span class="text-main" id="count" style="font-size: 30px;" data-target="14407"><?=number_format($count_history,0)?></span>
                    <span style="font-size: 25px;" class="text-main">&nbsp;ชิ้น</span>
                    <br>
                    <span class="text-secondary">จำหน่ายแล้วทั้งหมด</span>
                </div>
            </div>
        </center>
    </div>
</div>
<div class="col-lg-3">
    <div class="container-sm mb-2 mb-lg-0 shadow  p-3 ps-0 pe-0 bg-white border-ys count-only" style="border-radius: 1vh;">
        <center>
            <div class="row justify-content-center align-self-center">
            <div class="col-6 col-lg-4 p-2 img-a">
                <img src="assets/img/icons/profile1.png" alt="" style="height: 68px;">
            </div>
                <div class="col-6 col-lg-6 text-start">
                    <span class="text-main" id="count" style="font-size: 30px;" data-target="14407"><?=number_format($count_users,0)?></span>
                    <span style="font-size: 25px;" class="text-main">&nbsp;คน</span>
                    <br>
                    <span class="text-secondary">มีสมาชิกทั้งหมด</span>
                </div>
            </div>
        </center>
    </div>
</div>
<div class="col-lg-3">
    <div class="container-sm mb-2 mb-lg-0 shadow  p-3 ps-0 pe-0 bg-white border-ys count-only" style="border-radius: 1vh;">
        <center>
            <div class="row justify-content-center align-self-center">
            <div class="col-6 col-lg-4 p-2 img-a">
                <img src="assets/img/icons/server1.png" alt="" style="height: 68px;">
            </div>
                <div class="col-6 col-lg-6 text-start">
                    <span class="text-main" id="count" style="font-size: 30px;" data-target="14407">Online</span>
                    <br>
                    <span class="text-secondary">สถาะเซิฟเวอร์</span>
                </div>
            </div>
        </center>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-12 mt-2 mb-4 ">
    <div class="crad rounded-3" style="">
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

<div class="col-md-12 col-sm-12 col-12 mt-4 mb-4">
    <div class="card-body rounded-3" style="">
        <h4 class="m-2 text-dark"><i class='bx bx-store' ></i> รายการสินค้า <span class="text-dark-50" style="font-size: 16px;">( ร้านค้า )</span></h4><hr>

       <div class=" row">
            <?php 
                $result_category = $connect->query("SELECT * FROM pp_category_api WHERE status = '1' ORDER BY id asc;");
                $res_categorys = $result_category->fetch_all(MYSQLI_ASSOC);
                $i= 1;
                foreach($res_categorys as $res_category) : 

                $count_pshopall = $connect->query("SELECT SUM(stock) AS sum_stock FROM pp_shop_stock_api WHERE category = '".$res_category['id']."'"); 
                $row_pshopall = mysqli_fetch_assoc($count_pshopall); 
                $rows_pshopall = $row_pshopall['sum_stock'];
            ?>

                <div class="col-md-31 col-sm-12 col-6 pointer" data-bs-toggle="modal" data-bs-target="#byshop<?=$res_category['id']?>">
                    <div class="card bg-white shadow border-ys" data-aos="zoom-in">
                        <div class="row p-3">
                            <div class="col-12">
                            <center>
                                <img  src="<?=$res_category['img']?>" style="border-color: #;border-style: solid;border-width: 3px;height: 6.9rem;width: 6.9rem;border-radius: 50%;" alt="a" class="card-img-top img-proflie mb-2 hvr-icon">
                            </center>
                            </div>
                            <div class="col-12 mt-1">
                                <h4 class="text-center text-dark"><?=$res_category['name']?></h4>
                                <!-- <small style="font-size: 10px;"><?=$res_category['platform']?></small> -->
                                <!-- <button class="btn btn-sm btn-outline-warning w-100 p-2 mb-1">รายละเอียดเพิ่มเติม</button> -->
                                <button class="btn btn-sm btn-outline-primary w-100 p-2 mb-2">สั่งซื้อสินค้า</button>.
                                <small class="text-center text-dark"><i class='bx bxs-cart-download' ></i> คงเหลือ <?=$rows_pshopall ?> ชิ้น</small>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
       </div>


    </div>
</div>

<?php foreach ($res_categorys as $res_category) : ?>
<!-- Modal -->
<div class="modal fade" id="ShopModal<?=$res_category['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?=$res_category['name']?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <center><img src="<?=$res_category['img']?>" class="p-4" style="width:11.1rem;"></center>
            <h5><?=$res_category['name']?></h5>
            
        </div>
        <p><?=$res_category['info']?></p>
    
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-danger w-40" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php  endforeach; ?>

<?php  foreach($res_categorys as $res_category) : ?>
  <!-- Modal -->
<div class="modal fade" id="byshop<?=$res_category['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-white">
        <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel"><?=$res_category['name']?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-md-4">
                    <div class="text-center mb-4">
                        <img src="<?=$res_category['img']?>" style="border-color: #000;border-style: solid;border-width: 3px;height: 6.9rem;width: 6.9rem;border-radius: 50%;" alt="<?=$res_category['img']?>" class="card-img-top img-proflie">
                    </div>
                </div>
                <div class="col-md-8">
                    <select class="form-select" onchange="get_info(value,<?=$res_category['id']?>)" id="idshop<?=$res_category['id'] ?>" aria-label="Default select example" >
            
                        <option selected>เลือกรายการ</option>
                        <?php 
                            $id_c = $res_category['id'];
                            $result_shop = $connect->query("SELECT * FROM pp_shop_stock_api WHERE category = '".$id_c."' ORDER BY price_web asc;");
                            $res_shop = $result_shop->fetch_all(MYSQLI_ASSOC);
                            $i= 1;
                            foreach($res_shop as $res_shops) : 
                        ?>

                        <option value="<?=$res_shops['id'] ?>"><?=$res_shops['name'] ?> </option>
                        <?php endforeach ?>
                    </select>

                    <div class="form-group mt-2">
                        <h6 class="text-dark"><span id="price_web<?=$res_category['id'] ?>"></span></h6>
                    </div>
                    <div class="form-group">
                        <h6 class="text-dark"><span id="stock<?=$res_category['id'] ?>"></span></h6>
                    </div>

                </div>
           </div>
            <!-- <center>
                <img src="<?=$res_category['img']?>" alt="<?=$res_category['img']?>" width="70%" height="200px" class="mb-3">
            </center> -->
          
            <div class="col-12 m-2">
                
                <!-- <div id="price_web<?=$res_category['id'] ?>"></div>
                <center><div id="stock<?=$res_category['id'] ?>"></div></center> -->

                <div id="info<?=$res_category['id'] ?>"></div>

           </div>


        </div>
        <div class="modal-footer">
            <?php if(!empty($_SESSION['username'])): ?>
            <button type="button" class="btn btn-primary" onclick="byshopa(<?=$res_category['id'] ?>)">ซื้อสินค้า</button>
            <?php else: ?>
            <button type="button" class="btn btn-primary" onclick="CradURL('./page/login')">เข้าสู่ระบบเพื่อซื้อสินค้า</button>
            <?php endif ?>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<?php endforeach; ?>

<script>

function get_info(id,modal){
// var property = document.getElementById('photo').files[0];
var form_data = new FormData();
form_data.append("id", id);

$.ajax({
    url: 'system/master.php?showinfo',
    method: 'POST',
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    dataType: "json",
    beforeSend: function() {
        $('#msg').html('Loading......');
    },
    success: function(data) {
        console.log(data.info)
        // $( "#info"+modal ).html( data.info );
        if(data.info != null){
            document.getElementById("info"+modal).innerHTML = data.info;
            document.getElementById("price_web"+modal).innerHTML = '<i class="fa-solid fa-sack-dollar text-warning"></i> ราคา: <span class="badge bg-info">'+data.price_web+' บาท</span>';
            // document.getElementById("stock"+modal).innerHTML = "<h4 class='text-center'> สินค้าคงเหลือ"+ data.stock +"ชิ้น </h4>";
            if(data.stock == 0){
                document.getElementById("stock"+modal).innerHTML = '<p class="text-cennter"><i class="fa-solid fa-circle-notch fa-spin text-danger"></i> <span class="badge bg-danger">สินค้าหมด</span></p>';
            }else{
                document.getElementById("stock"+modal).innerHTML = '<p class="text-cennter"><i class="fa-solid fa-box-open text-warning"></i> คงเหลือ : <span class="badge bg-success">'+data.stock+' ชิ้น</span></p>';
            }
        }else{
            document.getElementById("info"+modal).innerHTML ="";
            document.getElementById("price_web"+modal).innerHTML = "";
            document.getElementById("stock"+modal).innerHTML = '';
        }
        // $("#btn").prop("disabled", true);
        // $( "#return" ).html( data );
        // $("#btn").prop("disabled", false); 
    }
});
}

</script>