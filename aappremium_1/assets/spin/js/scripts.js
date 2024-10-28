jQuery(document).ready(function () {
	tick = new Audio('Content/assets/spingame/tick.mp3');
	$('.spinner').easyWheel({
		items: [
				 {
						 name: "<img src='https://imgur.com/3IM7gSc.png' class='show-spin'></img>",
						 color: "#c56fad",
						 message: "คุณได้รับบัตร Truemoney 1,000 บาท",
						 id: "4"
				 },
				 {
						 name: "<img src='https://imgur.com/JLhpfA8.png' class='show-spin'></img>",
						 color: "#8160a8",
						 message: "คุณได้รับบัตร Garena 750 Shell",
						 id: "2"
				 },
				 {
						 name: "<img src='https://imgur.com/GMnoDbA.png' class='show-spin'></img>",
						 color: "#c56fad",
						 message: "คุณได้รับ 25 เครดิต",
						 id: "25"
				 },
				 {
						 name: "<img src='https://imgur.com/p5LJat9.png' class='show-spin'></img>",
						 color: "#8160a8",
						 message: "คุณไม่ได้รับรางวัล",
						 id: "5"
				 },
				 {
						 name: "<img src='https://imgur.com/7e9qFdh.png' class='show-spin'></img>",
						 color: "#c56fad",
						 message: "คุณได้รับบัตร True money 50 บาท",
						 id: "3"
				 },
				 {
						 name: "<img src='https://imgur.com/NGM0ril.png' class='show-spin'></img>",
						 color: "#8160a8",
						 message: "คุณได้รับบัตร Garena 75 Shell",
						 id: "1"
				 },
				 {
						 name: "<img src='https://imgur.com/se97F9i.png' class='show-spin'></img>",
						 color: "#c56fad",
						 message: "คุณได้รับ 10 เครดิต",
						 id: "10"
				 },
				 {
						 name: "<img src='https://imgur.com/tzXpxIa.png' class='show-spin'></img>",
						 color: "#e74c3c",
						 message: "คุณได้รับ Iphone 11 Pro max",
						 id: "7"
				 },
				 {
						 name: "<img src='https://imgur.com/p5LJat9.png' class='show-spin'></img>",
						 color: "#8160a8",
						 message: "คุณไม่ได้รับรางวัล",
						 id: "6"
				 }
		 ],
		duration: 8000,
		rotates: 8,
		frame: 1,
		easing: "easyWheel",
		rotateCenter: true,
		type: "spin",
		markerAnimation: true,
		centerClass: 0,
		width: 600,
		fontSize: 13,
		textOffset: 10,
		letterSpacing: 0,
		textLine: "v",
		textArc: false,
		shadowOpacity: 0,
		sliceLineWidth: 2,
		outerLineWidth: 5,
		centerWidth: 40,
		centerLineWidth: 3,
		centerImageWidth: 25,
		textColor: "#fff",
		markerColor: "rgb(231, 76, 60)",
		centerLineColor: "#6f4c99",
		// centerBackground: "rgb(52, 73, 94)",
		centerBackground: "transparent",
		centerImage : 'https://www.suksan-shop.in.th/assets/spingame/logo.png?v=3',
		centerWidth : 40,
		centerImageWidth : 40,
		sliceLineColor: "#6f4c99",
		outerLineColor: "#6f4c99",
		shadow: "#000",
		selectedSliceColor: "rgb(66, 66, 66)",
    button: '.spin-button',
    frame: 1,
		ajax: {
			url   : 'https://www.suksan-shop.in.th/api/wheel',
			type  : 'POST',
			nonce : true,
			success: function(msg) {
				var n = msg.point;
				var parts = parseFloat(n).toFixed(0).split(".");
				var num = parts[0].replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + (parts[1] ? "." + parts[1] : "");
				$("#credit_user").text(num+" บาท");
      },
		  error: function(msg){
				res = msg.responseJSON;
				swal("เกิดข้อผิดพลาด", res.message, "error");
		  }
		},
		onStart : function(results, spinCount, now){
	  },
		onStep : function(results,slicePercent, circlePercent){
					if(typeof tick.currentTime !== 'undefined')
						tick.currentTime = 0;
						tick.play();
		},
		onProgress  : function(results, spinCount, now){
			$(".spin-button").attr("disabled",true);
			$(".spin-button").html("รอสักครู่...");
	  },
		onComplete : function(results,count,now){
			$(".spin-button").attr("disabled",false);
			$(".spin-button").html("เริ่มการสุ่ม");

			swal("รางวัล", results.message, "success");
		},
		onFail : function(results, spinCount, now){
			console.log(results);
		},

	});
});
