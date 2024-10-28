<div class="col-md-9 col-sm-12" data-aos="fade-up">
<div class="card card-hover shadow-lg px-4 py-3" style="background-color: #fff;">
    <h5 class="card-title"><i class='bx bx-cog' ></i> Topup History - ประวัติการเติมเงิน</h5><hr>
        <div class="card-body">
        <?php
            $result = $connect->query("SELECT * FROM pp_topup WHERE status = '1' ORDER BY id desc; ");
            $rewardshistorys = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <?php if($result->num_rows == 0) : ?>
                            
        <?php else: ?>                           
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center mt-2">
                    <div class="table-responsive">
                    <div style="overflow-x:auto;">
                        <table id="tbl_users1" cellspacing="1" class="table table-striped table-bordered display text-dark">
                            <thead>
                                <tr>
                                    <th>#Order</th>
                                    <th><i class="fa-solid fa-computer"></i> Pay</th>
                                    <th><i class="fa-solid fa-credit-card"></i> Point</th>
                                    <th><i class="fa-solid fa-user"></i> Username</th>
                                    <th><i class="fa-solid fa-font-awesome"></i> Status</th>
                                    <th><i class="fa-solid fa-clock"></i> Time</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach($rewardshistorys as $rewardshistory) :  ?>
                                <tr>
                                    <td><?= $rewardshistory['id']; ?></td>
                                    <td><?= $rewardshistory['topupby']; ?></td>
                                    <td><?= $rewardshistory['username']; ?></td>
                                    <td><?= number_format($rewardshistory['point'],2); ?></td>
                                    <td><span style="color:#6EFF33;"><i class="fa-solid fa-check"></i> ตรวจสอบแล้ว</span></td>
                                    <td><?= th($rewardshistory['topuptime']); ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    
                </div>
            </div>

        <?php endif; ?>  
        </div>
    </div>
</div>