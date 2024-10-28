<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://byshop.me/api/history',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  //ดึกประวัติการซื้อทั้งหมด
//   CURLOPT_POSTFIELDS => array('keyapi' => $web_rows['web_keyapi']),  
  //ดึกประวัติการซื้อลูกค้า
  CURLOPT_POSTFIELDS => array('keyapi' => $web_rows['web_keyapi'],'username_customer' => $users_username),
  CURLOPT_HTTPHEADER => array(
    'Cookie: PHPSESSID=u8df3d96ij8re36ld76cl64t3p'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$load_packz = json_decode($response);


?>
<style>
    .bg-glass {
      background: linear-gradient(135deg, rgba(255, 255,255 , 0.1) , rgba(255, 255,255 , 0) );
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
    }
</style>
<div class="col-md-12 col-sm-12 mt-4">
    <div class="card bg-white shadow mb-3">
        <div class="card-header text-dark"><i class='bx bx-table' ></i> History Buy - ประวัติการซื้อ แอพพรีเมี่ยม</div>
        <div class="card-body">

            <div class="table-responsive text-dark">
                <table id="tbl_users1" cellspacing="1" class="table table-striped table-bordered display text-white">
                    <thead>
                        <tr>
                            <th>#Order</th>
                            <th>ชื่อ</th>
                            <th>สถานะ</th>
                            <!-- <th>ราคา</th> -->
                            <th>วันที่</th>
                            <th>ข้อมูล</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    // $result_history_api = $connect->query("SELECT * FROM tbl_history_api WHERE username = '".$users_username."' ORDER BY id DESC;");
                    // $history_apis = $result_history_api->fetch_all(MYSQLI_ASSOC);
                    // $i = 1;


                    foreach($load_packz as $data) :  ?>
                        <tr>
                            <td class="text-dark"><?=$data->id;?></td>
                            <td class="text-dark"><?=$data->name;?></td>
                            <td class="text-dark">Success</td>
                            <!-- <td><?=$data->price;?></td> -->
                            <td class="text-dark"><?=$data->time;?></td>
                            <td class="text-dark"><button class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#apiModal<?=$data->id;?>"> <i class="fa-solid fa-lock-open"></i> ดูข้อมูล</button></td>
                            <td class="text-dark"><button class="btn btn-sm btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#report<?=$data->id;?>"> แจ้งเคลม</button></td>
                            <!-- <td><a href="https://byshop.me/api/report/?OrderID=<?=$history_api['order_id']; ?>" class="btn btn-sm btn-warning mb-2" target="_blank">แจ้งเคลม</a></td> -->
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            

        </div>
    </div>
</div>


<?php  foreach($load_packz as $data) : ?>
  <!-- Modal -->
<div class="modal fade" id="apiModal<?=$data->id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?=$data->name;?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <?=$data->email;?><br><?=$data->password;?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<?php endforeach; ?>

<?php  foreach($load_packz as $data) : ?>
<!-- report แจ้งปัญหา -->
<div class="modal fade " id="report<?=$data->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title " id="exampleModalLabel"><i class="fa fa-wrench"></i> แจ้งปัญหา <?=$data->name;?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="container">
       <iframe frameborder="0" height="450" src=" https://byshop.me/api/report/?OrderID=<?=$data->id;?>" width="100%"></iframe>
	  </div>
	  </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>		
		
<?php endforeach; ?>


<?php echo file_get_contents("https://byshop.me/buy/otp_auto/script_smsotp.php"); ?>

