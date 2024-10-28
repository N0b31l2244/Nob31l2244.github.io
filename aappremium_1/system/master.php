<?php
require('setting.php');

//ดึงข้อมูล web setting
$web_rows = $connect->query('SELECT * FROM `pp_setting`')->fetch_assoc();

//จำนวนสั่งซื้อทั้งหมด
$count_history = $connect->query('SELECT * FROM pp_history_api ')->num_rows;

//จำนวนสั่งซื้อ api
$count_api_history = $connect->query('SELECT * FROM pp_shop_stock_api ')->num_rows;

$count_sell = $count_history + $count_api_history ;

//จำนวน users ทั้งหมด
$count_users = $connect->query('SELECT * FROM pp_users ')->num_rows;

//จำนวน stock ทั้งหมด
$result_count_stock = $connect->query("SELECT SUM(stock) AS sum_stock FROM pp_shop_stock_api")->fetch_assoc();
$count_shop = $result_count_stock['sum_stock'];

if(isset($_GET['showinfo'])){

	if($_POST['id']){
		$id = $_POST['id'];
		$info_shop = $connect->query("SELECT * FROM `pp_shop_stock_api` WHERE id = '".$id."'")->fetch_assoc();
		$put_data['info'] = $info_shop['info'] ;
		$put_data['price_web'] = $info_shop['price_web'] ;
		$put_data['stock'] = $info_shop['stock'] ;
	}
	echo json_encode($put_data);
}


if(isset($_GET['login'])) {
	if(empty($_POST['username']) || empty($_POST['password']))  {
		DisplayMSG('error','โอ้ะ...โอ!!', 'กรุณาอย่าเว้นช่องว่าง ✍️.','false');
	}
	if(empty($_POST['recaptcha']) )  {
		DisplayMSG('error','โอ้ะ...โอ!!', 'กรุณายืนยันตัวตน.','false');
	}
	if(strlen($_POST['password']) <= 4) {
		DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่านอย่างน้อย 5 ตัวขึ้นไป !!','false');
	}
	if(mb_strlen($_POST['password']) >= 25) {
		DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่านสูงสุด 24 ตัว !!','false');
	}

	$secretKey = SECRET_KEY;
	$captcha = $_POST['recaptcha'];
    $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
		$url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
		$data = array(
			'secret' => $secretKey,
			'response' => $captcha
		);
	
		$options_get = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
	
		$context = stream_context_create($options_get);
		$verify = file_get_contents($url, false, $context);
		$captchaSuccess = json_decode($verify)->success;
			// should return JSON with success as true
		if($captchaSuccess) {

		// $username = $connect->real_escape_string($_POST['username']);
		$username = $connect->real_escape_string($_POST['username']);
		$password = md5($_POST['password'].SECRET_WEB);
		$query = $connect->query('SELECT * FROM pp_users WHERE username = "'.$username.'" AND password = "'.$password.'" ');
		$username_check = $query->num_rows;
		$account = $query->fetch_assoc();
		if($username_check == 0){
			DisplayMSG('error','Error', 'ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง !!','false');
		}
		if($account['status'] == "0"){
			DisplayMSG('error','Banned !!!', 'บัญชีของคุณถูกแบนถาวร !!!','false');
		}else {
			$_SESSION['username'] = $username;
			$connect->query("UPDATE pp_users SET ip = '".$ip."' WHERE username = '$username' ;");
			DisplayMSG('success','Login Success !!!', 'เข้าสู่ระบบสำเร็จ !!','true');
		}
	}else {
        DisplayMSG('error','Are you a rebot!!', 'กรุณายืนยันตัวตน.','true');
    }
}

if(isset($_GET['register'])) {
	if(empty($_POST['username']) || empty($_POST['password']))  {
	   DisplayMSG('error','โอ้ะ...โอ!! ❗️❗️', 'กรุณาอย่าเว้นช่องว่าง ✍️.','false');
    }
    if(empty($_POST['email']))  {
        DisplayMSG('error','โอ้ะ...โอ!! ❗️❗️', 'กรุณากรอกอีเมลที่ติดต่อได้จริง 📵.','false');
    }
	if (!preg_match('/^[a-zA-Z0-9\_]*$/', $_POST['username'])) {
		DisplayMSG('error','โอ้ะ...โอ!!', 'ชื่อผู้ใช้ไม่ถูกต้อง ต้องเป็น A-Z 0-9 เท่านั้น !!.','false');
	}
	if(mb_strlen($_POST['username']) <= 4) {
		DisplayMSG('error','โอ้ะ...โอ!!', 'ชื่อผู้ใช้อย่างน้อย 5 ตัวขึ้นไป !!','false');
	}
	if(mb_strlen($_POST['username']) >= 25) {
		DisplayMSG('error','โอ้ะ...โอ!!', 'ชื่อผู้ใช้สูงสุด 24 ตัวขึ้นไป !!','false');
	}
	if(strlen($_POST['password']) <= 4) {
		DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่านอย่างน้อย 5 ตัวขึ้นไป !!','false');
	}
	if(mb_strlen($_POST['password']) >= 25) {
		DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่านสูงสุด 24 ตัว !!','false');
	}
	if($_POST['password'] != $_POST['repassword'])  {
	  DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่าน ไม่ตรงกัน !!','false');
	}
	if(empty($_POST['recaptcha']) )  {
		DisplayMSG('error','โอ้ะ...โอ!!', 'กรุณายืนยันตัวตน.','false');
	}

	$secretKey = SECRET_KEY;
	$captcha = $_POST['recaptcha'];
	$ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
		$url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
		$data = array(
			'secret' => $secretKey,
			'response' => $captcha
		);
	
		$options_get = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
	
		$context = stream_context_create($options_get);
		$verify = file_get_contents($url, false, $context);
		$captchaSuccess = json_decode($verify)->success;
			// should return JSON with success as true
		if($captchaSuccess) {
			$username = $connect->real_escape_string($_POST['username']);
			$email = $connect->real_escape_string($_POST['email']);
			$password = md5($_POST['password'].SECRET_WEB);
			$query = $connect->query('SELECT * FROM pp_users WHERE username = "'.$username.'" ');
			$username_check = $query->num_rows;
		if($username_check >= 1){
			DisplayMSG('error','Error', ' มีผู้ใช้งานไปแล้ว !!!','false');
		}else {
			$query = $connect->query("INSERT INTO `pp_users` (`id`, `img`, `username`, `password`, `email`, `point`, `ip`, `status`, `timeadd`) VALUES (NULL, 'assets/img/anya.jpg', '".$username."', '".$password."', '".$email."', '0', '".$ip."', '1', '".time()."');");

			$_SESSION['username'] = $username;
            
			DisplayMSG('success','Register Success !!!', 'สมัครสมาชิกสำเร็จ !!!..','true');
		}
	}else {
        DisplayMSG('error','Are you a rebot!!', 'กรุณายืนยันตัวตน.','true');
    }
}

if(isset($_GET['logout'])) {
	session_destroy();
	DisplayMSG('success','Logout Success!!','ออกจากระบบเรียบร้อยแล้ว','true');
	// DisplayMSG('success','Logout Success!!','ออกจากระบบเรียบร้อยแล้ว','true','./home');
}


if(isset($_SESSION['username'])) {
    //ดึงข้อมูล user
    $users = $connect->query('SELECT * FROM `pp_users` WHERE `username` = "'.$_SESSION['username'].'" ')->fetch_assoc();
    $users_status = $users['status'];
    $users_username = $users['username'];
    $users_point = $users['point'];
    $users_profile = $users['img'];
	$users_ip = $users['ip'];
    $users_email = substr($users['email'], 0, 3).'****'.substr($users['email'], strpos($users['email'], "@"));

	$time_24day = time() - 86400; //24*60*60 = 86400
	$result_count_point_day = $connect->query("SELECT SUM(point) AS sum_point FROM pp_topup WHERE topuptime > '".$time_24day."'"); 
	$row_count_point_day = mysqli_fetch_assoc($result_count_point_day); 
	$count_point_day = $row_count_point_day['sum_point'];
	$count_users_day = $connect->query("SELECT * FROM `pp_users` WHERE timeadd > '".$time_24day."'")->num_rows;

	$result_count_point = $connect->query("SELECT SUM(point) AS sum_point FROM pp_topup"); 
	$row_count_point = mysqli_fetch_assoc($result_count_point); 
	$count_point = $row_count_point['sum_point'];


	//repassword
	if(isset($_GET['repassword'])) {
		if(empty($_POST['password']) || empty($_POST['newpassword']) || empty($_POST['repassword']))  {
			DisplayMSG('error','โอ้ะ...โอ!!', 'กรุณาอย่าเว้นช่องว่าง ✍️.','false');
		}
		if(empty($_POST['recaptcha']) )  {
			DisplayMSG('error','โอ้ะ...โอ!!', 'กรุณายืนยันตัวตน.','false');
		}

		if(strlen($_POST['password']) <= 4) {
			DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่านอย่างน้อย 5 ตัวขึ้นไป !!','false');
		}
		if(mb_strlen($_POST['password']) >= 25) {
			DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่านสูงสุด 24 ตัว !!','false');
		}
		if($_POST['newpassword'] != $_POST['repassword'])  {
			DisplayMSG('error','โอ้ะ...โอ!!', 'รหัสผ่าน ไม่ตรงกัน !!','false');
		  }
	
		$secretKey = SECRET_KEY;
		$captcha = $_POST['recaptcha'];
		$ip = $_SERVER['REMOTE_ADDR'];
			// post request to server
		$url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
		$data = array(
			'secret' => $secretKey,
			'response' => $captcha
		);
	
		$optionss = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
	
		$context = stream_context_create($optionss);
		$verify = file_get_contents($url, false, $context);
		$captchaSuccess = json_decode($verify)->success;
			// should return JSON with success as true
		if($captchaSuccess) {
	
			// $password = md5($_POST['password'].SECRET_WEB);
			$password = openssl_encrypt($_POST['password'], $ciphering, $encryption_key, $options, $encryption_iv);
			// $newpassword = md5($_POST['newpassword'].SECRET_WEB);
			$newpassword = openssl_encrypt($_POST['newpassword'], $ciphering, $encryption_key, $options, $encryption_iv);
			$query = $connect->query('SELECT * FROM pp_users WHERE username = "'.$users_username.'" AND password = "'.$password.'" ');
			$username_check = $query->num_rows;
			$account = $query->fetch_assoc();
			if($username_check == 0){
				DisplayMSG('error','Error', 'รหัสผ่านไม่ถูกต้อง !!','false');
			}else{	
				$connect->query("UPDATE pp_users SET password = '".$newpassword."' WHERE username = '$users_username' ;");
				DisplayMSG('success','Reset Password Success !!!', 'เปลี่ยนรหัสผ่านเรียบร้อย !!','true');
			}
		}else {
			DisplayMSG('error','Are you a rebot!!', 'กรุณายืนยันตัวตน.','true');
		}
	}



	//ซื้อด้วย api
	if(isset($_GET['buy_pshop'])) {
		if(empty($_GET['id']))  {
			DisplayMSG('error','Warning ❗️❗️', 'ไม่พบสินค้า ✍️.','false');
		}
		$idshop = $connect->real_escape_string($_GET['id']);
		$shop_info = $connect->query('SELECT * FROM `pp_shop_stock_api` WHERE `id` = "'.$idshop.'" ')->fetch_assoc();
		$product_id = $shop_info['product_id'];
		$product_point = $shop_info['price_web']; //ราคาเรา

		if($users_point < $product_point){
			DisplayMSG('error','Warning ❗️❗️', 'ยอดเงินของคุณไม่เพียงพอ.','true');
		}else{
			$url = 'https://byshop.me/api/buy';
			$headers = array(
			// 'User-Agent: HMPRSLIPAPI',
			);

			$data = array(
				'id' => $product_id,
				'keyapi' => $web_rows['web_keyapi'],//YezRTTmWzTGZL2KQvI5QzAqtdeiHK7//Nf6VcPHagaQdmfaXyvxybejdjZ1gOO//ahNNTU5AewrYfMH1yUEf9hTGnftNJb//Hoz2IFAA1llCj12K7uh8WhoYWdIOyz//WABmhilbQnaoi75EwIQIsPlbOSyVyd
				'username_customer' => $users_username
			);

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
				// echo $data['status'];
				if($data['status'] == "success"){
					
					$product_name = $data['name'];
					$product_price = $data['price'];
					$product_info = $data['info'];
					$product_status = $data['status'];
					// $product_stock = $data['stock'];
					// $product_id = $product_id;
					//check stock
					// check point user
					
					//หัก point
					$point_update = $users_point - $product_point;
					$query_point = $connect->query("UPDATE `pp_users` SET `point` = '".$point_update."' WHERE username = '".$users_username."';");
					//เก็บลงประวัติ
					// $query = $connect->query("INSERT INTO `pp_history` (`id`, `name`, `secretcode`, `timeadd`, `product_id`, `price`, `username`, `status`) 
					// VALUES (NULL, '".$product_name."', '".$product_info."', '".time()."', '".$product_id."', '".$product_price."', '".$users_username."', '1');");
					$query = $connect->query("INSERT INTO `pp_history_api` (`id`, `name`, `status`, `info`, `price`, `timeadd`, `username`, `product_id`) 
					VALUES (NULL, '".$product_name."', '".$product_status."', '".$product_info."', '".$product_point."', '".time()."', '".$users_username."','".$product_id."');");

					DisplayMSG('success','สั่งซื้อ '.$product_name.' เรียบร้อย!!','ตรวจสอบสินค้าได้ที่ ประวัติการสั่งซื้อ','true');

					}else{
					
					$product_message = $data['message'];
					// DisplayMSG('error','ERROR [10121]', 'กรุณาติดต่่อ แอดมิน','false');
					DisplayMSG('error','Warning ❗️❗️', ''.$product_message.'✍️.','true');
				}
			}


		}
	

	}



	//ซื้อด้วย apibyshop หน้า hopme
	if(isset($_GET['buy_pshop2'])) {
		if(empty($_POST['idshop']))  {
			DisplayMSG('error','Warning ❗️❗️', 'ไม่พบสินค้า ✍️.','true');
		}
		$idshop = $connect->real_escape_string($_POST['idshop']);
		// echo $idshop;
		// $idshop = 57;
		$shop_info = $connect->query('SELECT * FROM `pp_shop_stock_api` WHERE `id` = "'.$idshop.'" ')->fetch_assoc();
		$product_id = $shop_info['product_id'];
		$product_point = $shop_info['price_web']; //ราคาเรา

		// echo $idshop;

		if($users_point < $product_point){
			DisplayMSG('error','Warning ❗️❗️', 'ยอดเงินของคุณไม่เพียงพอ.','true');
		}else{
			$url = 'https://byshop.me/api/buy';
			$headers = array(
			// 'User-Agent: HMPRSLIPAPI',
			);

			$data = array(
				'id' => $product_id,
				'keyapi' => $web_rows['web_keyapi'],
				'username_customer' => $users_username
			);

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
				// echo $data['status'];
				if($data['status'] == "success"){
					
					$product_name = $data['name'];
					$product_price = $data['price'];
					$product_info = $data['info'];
					$product_status = $data['status'];
					// $product_stock = $data['stock'];
					// $product_id = $product_id;
					//check stock
					// check point user
					
					//หัก point
					$point_update = $users_point - $product_point;
					$query_point = $connect->query("UPDATE `pp_users` SET `point` = '".$point_update."' WHERE username = '".$users_username."';");
					//เก็บลงประวัติ
					// $query = $connect->query("INSERT INTO `pum_history` (`id`, `name`, `secretcode`, `timeadd`, `product_id`, `price`, `username`, `status`) 
					// VALUES (NULL, '".$product_name."', '".$product_info."', '".time()."', '".$product_id."', '".$product_price."', '".$users_username."', '1');");
					$query = $connect->query("INSERT INTO `pp_history_api` (`id`, `name`, `status`, `info`, `price`, `timeadd`, `username`, `product_id`) 
					VALUES (NULL, '".$product_name."', '".$product_status."', '".$product_info."', '".$product_point."', '".time()."', '".$users_username."','".$product_id."');");

					DisplayMSG('success','สั่งซื้อ '.$product_name.' เรียบร้อย!!','ตรวจสอบสินค้าได้ที่ ประวัติการสั่งซื้อ','true');

					}else{
					
					$product_message = $data['message'];
					// DisplayMSG('error','ERROR [10121]', 'กรุณาติดต่่อ แอดมิน','true');
					DisplayMSG('error','Warning ❗️❗️', ''.$product_message.'✍️.','true');
				}
			}


		}
	

	}

	//เติมเงิน
	if(isset($_GET['topupwallet'])) {
		//echo $_POST['link_topup'] . $web_info['web_phone'];
		if (empty($_POST['link_topup']))  {
			DisplayMSG('error','Error', 'ไม่พบซองอั๋งเปานี้','false');
		}
		$secretKey = SECRET_KEY;
		$captcha = $_POST['recaptcha'];
		$ip = $_SERVER['REMOTE_ADDR'];
		// post request to server
		$url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
		$data = array(
			'secret' => $secretKey,
			'response' => $captcha
		);

		$options_get = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);

		$context = stream_context_create($options_get);
		$verify = file_get_contents($url, false, $context);
		$captchaSuccess = json_decode($verify)->success;
			// should return JSON with success as true
		if($captchaSuccess) {
			
			$link = $_POST['link_topup'];
			$phone = $web_rows['web_phone'];//$web_info['web_phone']; //เบอร์รับอังเปา
			class topup {
				function giftcode($hash = null,$phone = null) {
					if (is_null($hash) || is_null($phone)) return false;
					$ch = curl_init();
					@$hash = explode('?v=',$hash)[1];
					$headers  = [
						'Content-Type: application/json',
						'Accept: application/json'
					];
					$postData = [
						'mobile' => $phone,
						'voucher_hash' => $hash
					];
					curl_setopt($ch, CURLOPT_URL,"https://gift.truemoney.com/campaign/vouchers/$hash/redeem");
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));           
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					curl_setopt ($ch, CURLOPT_SSLVERSION, 7);
					curl_setopt( $ch, CURLOPT_USERAGENT, "aaaaaaaaaaa" );
					$result     = curl_exec ($ch);
					$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
					return json_decode($result,true);
				}
			}
			$topup_truewallet = new topup();
			$truewallet = (object) $topup_truewallet->giftcode($link ,$phone);
			
			if(@$truewallet->status['code'] == 'VOUCHER_OUT_OF_STOCK'){
				DisplayMSG('error','Error', 'ซองเติมเงินนี้ถูกใช้งานไปแล้ว','true');
				// ซองเติมเงินนี้ถูกใช้งานไปแล้ว
			}elseif(@$truewallet->status['code'] == 'VOUCHER_EXPIRED'){
				DisplayMSG('error','Error', 'ซองเติมเงินนี้หมดอายุ','true');
				// ซองเติมเงินนี้หมดอายุ
			}
			elseif(@$truewallet->status['code'] == 'VOUCHER_NOT_FOUND'){
				DisplayMSG('error','Error', 'ไม่พบซอง','true');
				// ไมพบซอง
			}elseif(@$truewallet->status['code'] == null){
				DisplayMSG('error','Error', 'ไม่พบซองอั๋งเปานี้','true');
				// กรอกมั่ว
			}else{
				if(@$truewallet->data['voucher']['member'] != "1"){
					DisplayMSG('error','Error', 'ผู้รับซองต้องเป็น 1 คน','true');
					// ผู้รับซองต้องเป็น 1 คน
				}else{
					// เติมเงินสำเร็จ
					$price = $truewallet->data['voucher']['amount_baht'];
					$sum_point = $users_point + $price;

					

						$query1 = $connect->query("INSERT INTO `pp_topup` (`id`, `topupby`, `topuptime`, `point`, `status`, `username`) VALUES (NULL, 'อั่งเป่า', '".time()."', '".$price."', '1', '".$users_username."');");
						$query2 = $connect->query("UPDATE pp_users SET point = '".$sum_point."' WHERE username = '".$users_username."'");

						DisplayMSG('success','คุณได้รับ '. $price . ' Point', 'ขอบคุณมากๆครับ','true');
					
				
				}
			}

		}else{
			DisplayMSG('error','Error', 'กรุณายืนยันตัวตนใหม่','true');
		}
	}
	//เติมเงินด้วยสลิป
	if(isset($_GET['rdcwslipapi'])) {
		if(empty($_POST['qrcode'])){
			DisplayMSG('error','Error', 'ไม่พบ QRcode นี้!!','false');
		}
		$qrcode_text = $_POST['qrcode'];

		$url = 'https://verify.ptrdc.xyz/api/verify';

		$data = array(
			'qrcode_text' => $qrcode_text,
			'key_api' => $web_rows['web_slip_key'],
			'ip' => $users_ip ,
		);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$response = curl_exec($ch);
		curl_close($ch);

		// echo $response ;

		if ($response === false) {
			DisplayMSG('error','Error', 'เชื่อมต่อผิดพลาด','false');
		} else {
			// แปลง JSON เป็นอาร์เรย์
			$data = json_decode($response, true);
			$slip_status = $data['status'];
			$slip_point =  $data['amount'];
			// $slip_date = $data['data']['transDate'];
			// $slip_from = $data['data']['sender']['account']['value'];
			$slip_onwer = $data['receiver']['acc_no'];
			// $slip_onwer1 = $data['data']['receiver']['proxy']['value'];
			$slip_onwerName = $data['receiver']['name'];
			$slip_transRef = $data['transactionId'];

			$test = trim($slip_onwerName);
			$check_same = $connect->query('SELECT * FROM pp_topup WHERE ref1 = "'.$slip_transRef.'"')->num_rows;
			if($check_same >= 1){
				DisplayMSG('error','Error', 'สลิปนี้ถูกใช้งานแล้ว','true');
			}
			if(empty($slip_onwer)){
				$name_slip = $slip_onwer1;
			}else{
				$name_slip = $slip_onwer;
			}
			$a = $web_rows['web_slip_account'];
			$b = $name_slip;
			$sim = similar_text($a, $b) >= 4;

			if($sim != 1){ //9838225843 
				DisplayMSG('error','Error', 'ไม่พบรายการโอนเงิน !!','false');
				// DisplayMSG('error','Error', ''.$sim.'','false');
			}
			if($slip_status == 1){

				

					$newpoint = $users_point + $slip_point;
					$update_point = $connect->query("UPDATE `pp_users` SET `point` = '".$newpoint."' WHERE username = '".$users_username."';");


					$query1 = $connect->query("INSERT INTO `pp_topup` (`id`, `topupby`, `topuptime`, `point`, `status`, `username`, `ref1`) 
					VALUES (NULL, 'Slip', '".time()."', '".$slip_point."', '1', '".$users_username."', '".$slip_transRef."');");
				
			
				
				// $query = $connect->query("INSERT INTO `pum_topup` (`id`, `type`, `ref1`, `code`, `timeadd`, `point`, `status`, `username`) 
				// VALUES (NULL, 'Slip', '".$slip_transRef."', '".$slip_from."', '".$slip_date."', '".$slip_point."', '1', '".$users_username."');");

				DisplayMSG('success','Payment Success!!','คุณได้รับเงิน จำนวน '.$slip_point.' บาท','true');
			}else{
				DisplayMSG('error','Error', 'เชื่อมต่อผิดพลาด','false');
			}

		}

	}




	//----------------------------- ADMIN FUCNTION --------------------------//
	if($users_status == $admin_status){

		//update info web
		if(isset($_GET['update_web_info'])){

			$id = $connect->real_escape_string($_POST['id']);
			$web_name = $connect->real_escape_string($_POST['web_name']);
			$web_title = $connect->real_escape_string($_POST['web_title']);
			$web_description = $connect->real_escape_string($_POST['web_description']);
			$web_keywords = $connect->real_escape_string($_POST['web_keywords']);
			$web_view = $connect->real_escape_string($_POST['web_view']);
			$web_line = $connect->real_escape_string($_POST['web_line']);
			$web_facebook = $connect->real_escape_string($_POST['web_facebook']);
			$web_img = $connect->real_escape_string($_POST['web_img']);
			// $web_promotion = $connect->real_escape_string($_POST['web_promotion']);

			$query = $connect->query("UPDATE `pp_setting` SET `web_name` = '".$web_name."', 
			`web_title` = '".$web_title."', 
			`web_description` = '".$web_description."', 
			`web_keywords` = '".$web_keywords."', 
			`web_view` = '".$web_view."',
			`web_line` = '".$web_line."',
			`web_facebook` = '".$web_facebook."',
			`web_img01` = '".$web_img."' WHERE id = '".$id."';");
		
			DisplayMSG('success','Update Success !!!', 'แก้ไขเรียบร้อย !!!..' ,'true');

		}

		//update info pay
		if(isset($_GET['update_web_pay'])){

			$id = $connect->real_escape_string($_POST['id']);
			$web_slip_name = $connect->real_escape_string($_POST['web_slip_name']);
			$web_slip_account = $connect->real_escape_string($_POST['web_slip_account']);
			$web_slip_bank = $connect->real_escape_string($_POST['web_slip_bank']);
			$web_phone = $connect->real_escape_string($_POST['web_phone']);
			$web_slip_key = $connect->real_escape_string($_POST['web_slip_key']);
			// $web_promotion = $connect->real_escape_string($_POST['web_promotion']);

			$query = $connect->query("UPDATE `pp_setting` SET `web_slip_name` = '".$web_slip_name."', 
			`web_slip_account` = '".$web_slip_account."', 
			`web_description` = '".$web_description."', 
			`web_slip_bank` = '".$web_slip_bank."', 
			`web_phone` = '".$web_phone."',
			`web_slip_key` = '".$web_slip_key."' WHERE id = '".$id."';");
		
			DisplayMSG('success','Update Success !!!', 'แก้ไขเรียบร้อย !!!..' ,'true');

		}

		//edit users
		if(isset($_GET['edit_users'])){

			if(empty($_POST['id']))  {
				DisplayMSG('error','Warning ❗️❗️', 'ไม่พบ user ✍️.','false');
			}

			$id = $connect->real_escape_string($_POST['id']);
			$email = $connect->real_escape_string($_POST['email']);
			$point = $connect->real_escape_string($_POST['point']);
			$status = $connect->real_escape_string($_POST['status']);

			$query = $connect->query("UPDATE `pp_users` SET `email` = '".$email."', 
			`point` = '".$point."', 
			`status` = '".$status."' WHERE id = '".$id."';");

			DisplayMSG('success','Edit Success !!!', 'แก้ไขเรียบร้อย !!!..' ,'true');

		}

		//delele users
		if(isset($_GET['del_users'])){
			if(empty($_GET['id']))  {
				DisplayMSG('error','Warning ❗️❗️', 'ไม่พบ users ✍️.','false');
			}

			$query = $connect->query("DELETE FROM pp_users WHERE id = '".$_GET['id']."';");

			DisplayMSG('success','Delete User Success !!!', 'ลบเรียบร้อย !!!..' ,'true');

		}

		//update shop api byshop
		if(isset($_GET['update_pshop'])) {
			$need_update = $_GET['id'];
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://apikey.byshop.me/api/product.php', 
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			));

			$response = curl_exec($curl);
			curl_close($curl);
			$load_packz = json_decode($response);
			foreach ($load_packz as $data){
				//เช็คสถานะสินค้า
				$check_stock = $data->stock;
				$shop_status = $data->status;
				$shop_point = $data->price;
				$shop_img = $data->img;
				$shop_name = $data->name;
				$shop_id = $data->id;
				// $query = $connect->query("INSERT INTO `pum_product_api` (`id`, `product_id`, `name`, `price`, `img`, `stock`, `status`, `info`, `up`, `timeadd` ) 
				// VALUES (NULL, '".$shop_id."', '".$shop_name."', '".$shop_point."', '".$shop_img."', '".$check_stock."', '".$shop_status."', '', '', '".time()."');");
				if($need_update == 0){
					$query = $connect->query("UPDATE `pp_shop_stock_api` SET `name` = '".$shop_name."', 
					`price` = '".$shop_point."', 
					`img` = '".$shop_img."', 
					`stock` = '".$check_stock."', 
					`status` = '".$shop_status."' WHERE product_id = '".$shop_id."';");
				}else{
					$query = $connect->query("UPDATE `pp_shop_stock_api` SET `price` = '".$shop_point."', 
					`stock` = '".$check_stock."',  
					`status` = '".$shop_status."' WHERE product_id = '".$shop_id."';");
				}
				

			}
			DisplayMSG('success','Update Success!!','ข้อมูลสินต้าของคุณเป็นข้อมูลล่าสุดแล้ว','true');
		}

		//show/hide shop api
		if(isset($_GET['showshop'])) {
			if(empty($_POST['id']))  {
				DisplayMSG('error','Warning ❗️❗️', 'ไม่พบสินค้า ✍️.','false');
			}
			$id = $connect->real_escape_string($_POST['id']);
			$query_get = $connect->query("SELECT * FROM pp_shop_stock_api WHERE id = '".$id."';")->fetch_assoc();
			if($query_get['showitem'] == 0){
				$status = 1;
			}else{
				$status = 0;
			}
			$query = $connect->query("UPDATE `pp_shop_stock_api` SET `showitem` = '".$status."' WHERE id = '".$id."';");

			DisplayMSG('success','Update Success!!','แก้ไขเรียบร้อย!!','true');
		}

		//แก้ไข shop api
		if(isset($_GET['edit_pshop'])) {
			
			if(empty($_POST['id']))  {
				DisplayMSG('error','Warning ❗️❗️', 'ไม่พบสินค้า ✍️.','false');
			}
			if(empty($_POST['img']))  {
				DisplayMSG('error','Warning ❗️❗️', 'กรุณากรอก Url รูปภาพ ✍️.','false');
			}
			if(empty($_POST['name']))  {
				DisplayMSG('error','Warning ❗️❗️', 'กรุณากรอกชื่อสินค้า ✍️.','false');
			}
			if(empty($_POST['mypoint']))  {
				DisplayMSG('error','Warning ❗️❗️', 'กรุณากรอกราคา ✍️.','false');
			}
			$id = $connect->real_escape_string($_POST['id']);
			$img = $connect->real_escape_string($_POST['img']);
			$name = $connect->real_escape_string($_POST['name']);
			$mypoint = $connect->real_escape_string($_POST['mypoint']);
			$info = $connect->real_escape_string($_POST['info']);

			$query = $connect->query("UPDATE `pp_shop_stock_api` SET `name` = '".$name."', 
			`price_web` = '".$mypoint."', 
			`info` = '".$info."', 
			`img` = '".$img."' WHERE id = '".$id."';");

			DisplayMSG('success','Update Success!!','แก้ไขเรียบร้อย!!','true');

		}

		//update api web
		if(isset($_GET['update_web_api'])){

			$id = $connect->real_escape_string($_POST['id']);
			$web_userapi = $connect->real_escape_string($_POST['web_userapi']);
			$web_keyapi = $connect->real_escape_string($_POST['web_keyapi']);

			$query = $connect->query("UPDATE `pp_setting` SET `web_userapi` = '".$web_userapi."', 
			`web_keyapi` = '".$web_keyapi."' WHERE id = '".$id."';");
		
			DisplayMSG('success','Update Api Success !!!', 'แก้ไข APi เรียบร้อย !!!..' ,'true');

		}

	}


}









if(isset($_GET['UpdateStock'])) {

	$api_key = $web_rows['web_keyapi'];

	$url = 'https://byshop.me/api/product';
	// $url = 'https://otp24hr.com/api/v1?action=getpack';
	$headers = array(
		// 'User-Agent: HMPRSLIPAPI',
	);

	$data = array(
		// 'keyapi' => $api_key,
	);

	$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://byshop.me/api/product.php', 
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
	));

	$response = curl_exec($curl);
	curl_close($curl);

	$load_packz = json_decode($response);

	// echo $response;
	foreach ($load_packz as $data) :

		//เช็คสถานะสินค้า
		$check_stock = $data->stock;
		$shop_status = $data->status;
		$shop_point = $data->price;
		$shop_img = $data->img;
		$shop_name = $data->name;
		$shop_id = $data->id;
		$info = $data->product_info;

		// $query = $connect->query("INSERT INTO `tbl_shop_stock_api` (`id`, `product_id`, `name`, `price`, `price_web`, `img`, `stock`, `status`, `up`) 
		// VALUES (NULL, '".$shop_id."', '".$shop_name."', '".$shop_point."', '".$shop_point."', '".$shop_img ."', '".$check_stock."', '".$shop_status."', '');");


		$query = $connect->query("UPDATE `pp_shop_stock_api` SET `price` = '".$shop_point."', 
		`stock` = '".$check_stock."',  
		`status` = '".$shop_status."',
		`info` = '".$info."' WHERE product_id = '".$shop_id."';");

	endforeach;




}

function DisplayMSG($function,$title,$msg,$reload){
	global $url;
	// $uri = $_SERVER['REQUEST_URI'];
	if($reload == 'true') {
		$data = exit("<script>$function('$title', '$msg', 'true');setTimeout(function(){ window.location.reload(); }, 2500);</script>");
		// $data = exit("<script>$function('$title', '$msg', 'true');setTimeout(function(){ location.href = \"$url\"; }, 2500);</script>");
	}else {
	$data = exit("<script>$function('$title', '$msg', 'false');</script>");
	}
	return $data;
}
function iDisplayMSG($function,$title,$msg,$reload,$url){
	if(empty($url)) {
		$url = "..";
	}else {
		$url = $url;
	}
	if($function == 'isuccess' || $function == 'ierror') {
		if($reload == 'true') {
			$data = "<script>$function('$title', '$msg', 'true', '$url');setTimeout(function(){ location.href = \"$url\"; }, 2500);</script>";
		}else {
			$data = "<script>$function('$title', '$msg', 'false','');</script>";
		}
	}else {
		if($reload == 'true') {
			$data = "<script>$function('$title', '$msg', 'true');setTimeout(function(){ location.href = \"$url\"; }, 2500);</script>";
		}else {
			$data = "<script>$function('$title', '$msg', 'false');</script>";
		}
	}
	echo $data;
}

$months =array( 
	"0"=>"", "1"=>"มกราคม", "2"=>"กุมภาพันธ์", "3"=>"มีนาคม","4"=>"เมษายน","5"=>"พฤษภาคม","6"=>"มิถุนายน", "7"=>"กรกฎาคม","8"=>"สิงหาคม","9"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม"
		  );
function th_full($time){
	global $months;
	@$th.= date("H",$time);
	@$th.= ":".date("i",$time);
	@$th.= "  วันที่ ".date("j",$time);
	@$th.= " ".$months[date("n",$time)];
	@$th.= " พ.ศ.".(date("Y",$time)+543);
	return $th;
}
function th($time){
	global $months;
	@$th.= date("H",$time);
	@$th.= ":".date("i",$time);
	@$th.= " ".date("j",$time);
	@$th.= " ".$months[date("n",$time)];
	@$th.= " ".(date("Y",$time)+543);
	return $th;
}

?>