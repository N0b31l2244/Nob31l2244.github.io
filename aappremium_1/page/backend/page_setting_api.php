

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


    $curl_history = curl_init();
    $url_history = "https://byshop.me/api/history";
    $data_history = array( 'keyapi' => $web_rows['web_keyapi'] );

    $curl_history = curl_init($url_history);
    curl_setopt($curl_history, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_history, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl_history, CURLOPT_POSTFIELDS, $data_history);
    curl_setopt($curl_history, CURLOPT_HTTPHEADER, $headers);

    $response_history = curl_exec($curl_history);

    curl_close($curl_history);
    $order_history = json_decode($response_history);


?>

<div class="col-md-9 col-sm-12" data-aos="fade-up">
    <div class="card card-hover shadow-lg px-4 py-3" style="background-color: #fff;">
        <h5 class="card-title"><i class='bx bx-cog' ></i> ตั้งต่า Api เฉพาะเว็บ byshop.me เท่านั้น!!</h5><hr>
            <div class="text-end">
            <button class="btn btn-light">ยอดเงิน API คงเหลือ <b class="text-primary">฿<?=$api_money?></b> บาท</button>
            </div>

            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> Username เว็บ byshop.me</label>
                    <input type="text" class="form-control" placeholder="name" id="web_userapi" value="<?=$web_rows['web_userapi']?>">
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-tag"></i> Api key</label>
                    <input type="text" class="form-control" placeholder="name" id="web_keyapi" value="<?=$web_rows['web_keyapi']?>">
                </div>

            </div>

            <div class="form-group mb-4 mt-4">
                <button class="btn btn-info w-25" onclick="update_web_api(<?=$web_rows['id']?>)"><i class="fa-solid fa-pen-to-square"></i> แก้ไข</button>
            </div>
    </div>

</div>


