function update_sop_api(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
    $.get( "system/master.php?update_pshop&id="+id,  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}

function edit_shop_api(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?edit_pshop",{
		id: id,
		img: $('#img'+id).val(),
		name: $('#name'+id).val(),
		mypoint: $('#mypoint'+id).val(),
		info: $('#info'+id).val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}

function showshop(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?showshop",{
		id: id,
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}
function showshop_web(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?showshop_web",{
		id: id,
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}

function add_stock_web(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?add_stock_web",{
		id: id,
        infostock: $('#infostock').val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}

function edit_users(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?edit_users",{
		id: id,
        email: $('#email'+id).val(),
        point: $('#point'+id).val(),
        status: $('#status'+id).val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}


function del_stock_all(id) {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณแน่ใจหรือไม่ลบสค็อกทั้งหมด?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ลบเลย!!',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.get( "system/master.php?del_stock_all&id="+id, function( data ) {
				$( "#return" ).html( data );
			  }
			);
		}
	})
	
}

function del_stock(id) {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณแน่ใจหรือไม่ลบสต็อกนี้?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ลบเลย!!',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.get( "system/master.php?del_stock&id="+id, function( data ) {
				$( "#return" ).html( data );
			  }
			);
		}
	})
	
}


function del_users(id) {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณแน่ใจหรือไม่ลบผู้ใช้นี้?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ลบเลย!!',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.get( "system/master.php?del_users&id="+id, function( data ) {
				$( "#return" ).html( data );
			  }
			);
		}
	})
	
}


function update_web_info(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?update_web_info",{
		id: id,
        web_name: $('#web_name').val(),
        web_title: $('#web_title').val(),
        web_phone: $('#web_phone').val(),
        web_description: $('#web_description').val(),
        web_keywords: $('#web_keywords').val(),
        web_status: $('#web_status').val(),
        web_view: $('#web_view').val(),
		web_line: $('#web_line').val(),
		web_facebook: $('#web_facebook').val(),
		web_img: $('#web_img01').val(),
		// web_promotion: $('#web_promotion').val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}


function update_web_pay(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?update_web_pay",{
		id: id,
        web_slip_name: $('#web_slip_name').val(),
        web_slip_account: $('#web_slip_account').val(),
        web_slip_bank: $('#web_slip_bank').val(),
        web_phone: $('#web_phone').val(),
        web_slip_key: $('#web_slip_key').val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}
function update_promotion(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?update_web_promotion",{
		id: id,
        web_promotion: $('#web_promotion').val(),

	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}

function update_web_api(id){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?update_web_api",{
		id: id,
        web_userapi: $('#web_userapi').val(),
        web_keyapi: $('#web_keyapi').val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}


function del_shop_web(id) {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณแน่ใจหรือไม่ลบสินค้านี้?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ลบเลย!!',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.get( "system/master.php?del_shop_web&id="+id, function( data ) {
				$( "#return" ).html( data );
			  }
			);
		}
	})
	
}

function confirmwithdraw(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?confirmwithdraw",{
		id:id,
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}


function add_stock_reward(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?add_stock_reward",{
		id:id,
		infostock:$('#infostock').val(),
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}


function del_stock_reward(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?del_stock_reward",{
		id:id,
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}


function del_stock_reward_all(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?del_stock_reward_all",{
		id:id,
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}
function del_item_reward(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?del_item_reward",{
		id:id,
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function update_claim(){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?update_claim",{
        infostock: $('#infostock').val(),
        claimid: $('#claimid').val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}

function delete_category(id) {
	Swal.fire({
		title: 'Confirm Delete Category',
		text: "ยืนยันการลบ category",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Delete Now!'
	  }).then((result) => {
		if (result.isConfirmed) {
			del_category(id)
		}
	});
}

function del_category(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.get( "system/master.php?delete_category&id="+id,  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function on_show(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.get( "system/master.php?shop_show&id="+id,  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function update_stock(){
    $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?update_stock",{
        infoeditstock: $('#infoeditstock').val(),
        stockeditid: $('#stockeditid').val(),
	},  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
}
