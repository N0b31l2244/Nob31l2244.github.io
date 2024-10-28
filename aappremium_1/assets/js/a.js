function success(title, desc, reload) { 
	if(reload == "true") {
		Swal.fire({
		title: '<span style="color:black">'+title+'</span>',
		type: 'success',
		icon: 'success',
		// imageUrl: 'https://media.tenor.com/0MYgrUVeeuoAAAAi/cute-ok.gif',
		// imageWidth: 150,
		// imageHeight: 120,
		// imageAlt: 'Custom image',
		html: '<span style="color:gray">'+desc+'</span>',
		showConfirmButton: true,
		}).then(function(isConfirm) {
			if (isConfirm === true) {
				window.location.reload();
			}else {
				window.location.reload();
			}
		})
	}else {
		Swal.fire({
		title: '<span style="color:black">'+title+'</span>',
		imageUrl: 'https://media.tenor.com/0MYgrUVeeuoAAAAi/cute-ok.gif',
		imageWidth: 150,
		imageHeight: 150,
		imageAlt: 'Custom image',
		html: '<span style="color:gray">'+desc+'</span>',
		showConfirmButton: true,
		})
	}
}
function isuccess(title, desc, reload, url) { 
	if(reload == "true") {
		Swal.fire({
		title: '<span style="color:black">'+title+'</span>',
		type: 'success',
		icon: 'success',
		html: '<span style="color:gray">'+desc+'</span>',
		showConfirmButton: true,
		}).then(function(isConfirm) {
		  if (isConfirm === true) {
			$(location).attr('href',url);
		  }else {
			$(location).attr('href',url);
		  }
		})
	}else {
		Swal.fire({
		title: '<span style="color:black">'+title+'</span>',
		type: 'success',
		icon: 'success',
		html: '<span style="color:gray">'+desc+'</span>',
		showConfirmButton: true,
		})
	}
}

function error(title, desc, reload) {
	if(reload == "true") {
		Swal.fire({
			title: '<span style="color:black">'+title+'</span>',
			type: 'error',
			icon: 'error',
			// imageUrl: 'https://media.tenor.com/LBFqyVANEtkAAAAi/emm-thinking.gif',
			// imageWidth: 150,
			// imageHeight: 130,
			// imageAlt: 'Custom image',
			html: '<span style="color:gray">'+desc+'</span>',
			confirmButtonText: '<span style="color:black;"><i class="fa fa-times"></i> ปิด</span>',
			confirmButtonColor: '#3085d6',
			}).then(function(isConfirm) {
			
				if (isConfirm === true) {
					window.location.reload();
				}else {
					window.location.reload();
				}
			})
	}else {
		Swal.fire({
			title: '<span style="color:black">'+title+'</span>',
			type: 'error',
			icon: 'error',
			// imageUrl: 'https://media.tenor.com/LBFqyVANEtkAAAAi/emm-thinking.gif',
			// imageWidth: 150,
			// imageHeight: 130,
			// imageAlt: 'Custom image',
			html: '<span style="color:gray">'+desc+'</span>',
			confirmButtonText: '<span style="color:#fff;"><i class="fa fa-times"></i> ปิด</span>',
			confirmButtonColor: '#2a9fd6',
		})
	}
}
function ierror(title, desc, reload, url) {
	if(reload == "true") {
		Swal.fire({
		title: '<span style="color:black">'+title+'</span>',
		type: 'error',
		icon: 'error',
		html: '<span style="color:gray">'+desc+'</span>',
		confirmButtonText: '<span style="color:black;"><i class="fa fa-times"></i> ปิด</span>',
		confirmButtonColor: '#3085d6',
		}).then(function(isConfirm) {
		  if (isConfirm === true) {
			$(location).attr('href',url);
		  }else {
			$(location).attr('href',url);
		  }
		})
	}else {
		Swal.fire({
		title: '<span style="color:black">'+title+'</span>',
		type: 'error',
		icon: 'error',
		html: '<span style="color:gray">'+desc+'</span>',
		confirmButtonText: '<span style="color:black;"><i class="fa fa-times"></i> ปิด</span>',
		confirmButtonColor: '#e54d40',
		})
	}
}

function warning(title, desc) {
	Swal.fire({
	title: '<span style="color:black">'+title+'</span>',
	type: 'warning',
	icon: 'warning',
	html: '<span style="color:gray">'+desc+'</span>',
	showConfirmButton: false,
    showCancelButton: false,
    showConfirmButton: false,
    allowOutsideClick: false,
    allowEscapeKey: false,
   })
}

function info(title, desc) {
	Swal.fire({
	title: '<span style="color:black">'+title+'</span>',
	type: 'info',
	icon: 'info',
	html: '<span style="color:gray">'+desc+'</span>',
	confirmButtonText: '<span style="color:black;"><i class="fa fa-times"></i> ปิด</span>',
	confirmButtonColor: '#e54d40',
   })
}



function login() {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?login",{
		username: $('#username').val(),
		password: $('#password').val(),
		recaptcha: grecaptcha.getResponse()
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}


function logout() {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณการออกจากระบบใช่หรือไม่?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ออกจากระบบ',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
			$.get( "system/master.php?logout",  function( data ) {
				$("#btn").prop("disabled", true);
				$( "#return" ).html( data );
				$("#btn").prop("disabled", false); 
			}
			);
		}
	})
	
}

function pshop(id) {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณแน่ใจหรือไม่ซื้อสินค้าชื้นสิน?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ซื้อเลย!!',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.get( "system/master.php?buy_pshop&id="+id, function( data ) {
				$( "#return" ).html( data );
			  }
			);
		}
	})
	
}

function dshop(id) {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณแน่ใจหรือไม่ซื้อสินค้าชื้นสิน?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ซื้อเลย!!',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.get( "cmd.php?buy_dshop&id="+id, function( data ) {
				$( "#return" ).html( data );
			  }
			);
		}
	})
	
}

function buy_account(id) {
	Swal.fire({
		title: 'Are you sure?',
		text: "คุณแน่ใจหรือไม่ซื้อสินค้าชื้นสิน?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<i class="fa-solid fa-circle-check"></i> ซื้อเลย!!',
		cancelButtonText: '<i class="fa-solid fa-circle-xmark"></i> ยกเลิก'
	  }).then((result) => {
		if (result.isConfirmed) {
			$.get( "cmd.php?buy_shop&id="+id, function( data ) {
				$( "#return" ).html( data );
			  }
			);
		}
	})
	
}

function register() {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?register",{
		username: $('#username').val(),
		password: $('#password').val(),
		email: $('#email').val(),
		repassword: $('#repassword').val(),
		recaptcha: grecaptcha.getResponse(),
		},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function UpdateStock(){
    // $("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
    $.get( "system/master.php?UpdateStock",  function( data ) {
        $("#btn").prop("disabled", true);
        $( "#return" ).html( data );
        $("#btn").prop("disabled", false); 
    }
    );
	// console.log(200)
}


function withdraw() {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?withdraw",{
		bankSelect: $('#bankSelect').val(),
		bankNum: $('#bankNum').val(),
		bankAmount: $('#bankAmount').val(),
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function cancelwithdraw(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?cancelwithdraw",{
		id:id,
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}



function repasswordNew() {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?repassword",{
		password: $('#password').val(),
		newpassword: $('#newpassword').val(),
		repassword: $('#repassword').val(),
		recaptcha: grecaptcha.getResponse()
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}


function topups() {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?topupwallet",{
		link_topup: $('#link_topup').val(),
		recaptcha: grecaptcha.getResponse(),
		},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function forget_password() {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "cmd.php?forget_password",{
		email: $('#email1').val(),
		password: $('#newpassword').val(),
		repassword: $('#newrepassword').val(),
		recaptcha: grecaptcha.getResponse()
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}


function byshopa(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?buy_pshop2",{
		idshop: $('#idshop'+id).val(),
		// password_new: $('#password_new').val(),
		// repassword_new: $('#repassword_new').val(),
		// captcha: $('#captcha').val(),
		},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function buypremium(id) {
	Swal.fire({
		title: 'Confirm Buy',
		text: "แน่ใจนะว่าจะซื้อสินค้านี้?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Buy Now!'
	  }).then((result) => {
		if (result.isConfirmed) {
			$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
				$.get( "system/master.php?buy_pshop&id="+id,  function( data ) {
				$("#btn").prop("disabled", true);
				$( "#return" ).html( data );
				$("#btn").prop("disabled", false); 
			}
			);
		
		}
	});
}


function buyaccount(id) {
	Swal.fire({
		title: 'Confirm Buy Account',
		text: "แน่ใจนะว่าจะซื้อบัญชีนี้?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Buy Now!'
	  }).then((result) => {
		if (result.isConfirmed) {
			// buyidnow(id)buyshopaccount
			buyaccountnow(id)
		}
	});
}

function buyaccountnow(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.get( "system/master.php?buyshopaccount&id="+id,  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}

function iclaim(id) {
	$("#return").html("<script>warning('<i class=\"fa fa-spinner fa-spin fa-fw\"></i>\', 'กรุณารอสักครู่...');</script>");
	$.post( "system/master.php?claimid",{
		info: $('#info'+id).val(),
		claimid: $('#claimid'+id).val(),
	},  function( data ) {
	$("#btn").prop("disabled", true);
	$( "#return" ).html( data );
	$("#btn").prop("disabled", false); 
  }
 );
}