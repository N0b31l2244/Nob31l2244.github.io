
<?php
$result = $connect->query("SELECT * FROM pp_users ");
$users_fetchs = $result->fetch_all(MYSQLI_ASSOC);


?>
<div class="col-md-9 col-sm-12" data-aos="fade-up">
<div class="card card-hover shadow-lg px-4 py-3" style="background-color: #fff;">
    <h5 class="card-title"><i class='bx bx-cog' ></i> จัดการผู้ใช้</h5><hr>

    <div class="text-end">
        <!-- <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#addShopModal"><i class="fa-solid fa-cart-plus"></i> เพิ่มสินค้า</button> -->
        
    </div>

    <div class="table-responsive">
    <div style="overflow-x:auto;">
        <table id="tbl_users1" cellspacing="1" class="table table-striped table-bordered display text-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th><i class="fa-solid fa-computer"></i> ชื่อผู้ใช้</th>
                    <th><i class="fa-solid fa-credit-card"></i> ยอดเงิน</th>
                    <th><i class="fa-solid fa-font-awesome"></i> ไอพี</th>
                    <th><i class="fa-solid fa-font-awesome"></i> สถานะ</th>
                    <th><i class="fa-solid fa-clock"></i> ข้อมูล</th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach($users_fetchs as $users_fetch) :  ?>
                <tr>
                    <td><?= $users_fetch['id']; ?></td>
                    <td><?= $users_fetch['username']; ?></td>
                    <td><?= number_format($users_fetch['point'],2); ?></td>
                    <td><?= $users_fetch['ip']; ?></td>
                    <?php if($users_fetch['status']== 9): ?>
                    <td><span class="badge bg-danger"><i class="fa-solid fa-user-secret"></i> แอดมิน</span></td>
                    <?php elseif($users_fetch['status']== 3): ?>
                    <td><span class="badge bg-info"><i class="fa-solid fa-user"></i> ตัวแทน</span></td>
                    <?php else: ?>
                    <td><span class="badge bg-success"><i class="fa-solid fa-user"></i> สมาชิก</span></td>
                    <?php endif; ?>
                    <td>
                        <button type="button" class="btn btn-sm btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#editShopModal<?= $users_fetch['id']; ?>">
                        <i class="fa-regular fa-pen-to-square"></i> แก้ไข</button>
                        <button type="button" class="btn btn-sm btn-danger mb-1" onclick="del_users(<?= $users_fetch['id']; ?>)"><i class="fa-solid fa-trash"></i> ลบ</button>
                    </td>
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
</div>

</div>


<?php  foreach($users_fetchs as $users_fetch):  ?>
<!-- Modal -->
<div class="modal fade" id="editShopModal<?= $users_fetch['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-regular fa-circle-question"></i> ข้อมูล <?= $users_fetch['username']; ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> Username</label>
                    <input type="text" class="form-control" placeholder="username" disabled id="username<?= $users_fetch['id']; ?>" value="<?= $users_fetch['username']; ?>">
                </div>
                <div class="form-group col-md-8">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> E-mail</label>
                    <input type="text" class="form-control" placeholder="email" id="email<?= $users_fetch['id']; ?>" value="<?= $users_fetch['email']; ?>">
                </div>
                
            </div>
            
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> Point</label>
                    <input type="text" class="form-control" placeholder="point" id="point<?= $users_fetch['id']; ?>" value="<?= $users_fetch['point']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> สถานะ</label>
                    <select name="status" id="status<?= $users_fetch['id']; ?>" class="form-control">
                        <option value="9" <?php if($users_fetch['status'] == 9) echo "selected"; ?>>แอดมิน</option>
                        <!-- <option value="3" <?php if($users_fetch['status'] == 3) echo "selected"; ?>>ตัวแทน</option> -->
                        <option value="1" <?php if($users_fetch['status'] == 1) echo "selected"; ?>>ผู้ใช้</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="inputDefault"><i class="fa-solid fa-chevron-right"></i> IP</label>
                    <input type="text" class="form-control" placeholder="point" disabled id="mac<?= $users_fetch['id']; ?>" value="<?= $users_fetch['ip']; ?>">
                </div>

            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success w-25" onclick="edit_users(<?= $users_fetch['id']; ?>)"><i class="fa-solid fa-pen-to-square"></i> แก้ไข</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> ปิดหน้าต่างนี้</button>
        </div>
        </div>
    </div>
</div>
<?php endforeach; ?>