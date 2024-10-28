<?php
    require('system/master.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= LOCAL_WEB ?>/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$web_rows['web_title']?></title>
    <meta name="keywords" content="<?= $web_rows['web_keywords'] ?>">
    <meta name="description" content="<?= $web_rows['web_description'] ?>">
    <meta name="author" content="APP4K">
    <meta name="robots" content="index, follow" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= LOCAL_WEB ?>" />
    <meta property="og:title" content="AppPremium | เริ่มต้น 10฿" />
    <meta property="og:description" content="สมัครNetflix ราคาถูก 89บาท/เดือน 4k Ultra HD | <?= LOCAL_WEB ?>" />
    <meta property="og:image" content="assets/img/icon.png" />

    <!-- Favicons -->
    <link href="https://img.xdnv.store/upload/image/74r1699025466SxKLq.png" rel="icon">
    <link href="assets/img/icon.png" rel="icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/css/hover.css" rel="stylesheet">
    <link href="assets/css/tung.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:wght@200;300">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl/owl.theme.default.min.css">

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- <script src='https://www.google.com/recaptcha/api.js?hl=th'></script> -->
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?compat=recaptcha" async defer></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: 'Kanit', sans-serif !important;
            min-height: 100%;
            background: #ebebeb;
            background-blend-mode: overlay;
            min-height: 100%;
            /* background-image: url("https://i.pinimg.com/originals/03/e4/0e/03e40e6f01981a4ba76b70f386106677.gif"), linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.0)); */
            /* background-image: url("assets/img/bg3.jpg"), linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.0)); */
            background-blend-mode: overlay;
            /* background-image: url("assets/img/bg.jpg") rgba(255, 0, 150, 0.3); */
            background-position: center center !important;
            background-attachment: fixed !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            /* background: rgb(62,31,83); */
            /* background: linear-gradient(90deg, rgba(62,31,83,1) 0%, rgba(73,14,119,1) 50%, rgba(50,3,49,1) 89%); */

        }

        @media (max-width: 767px) {
            .navbar {
                background-color: #3498db; /* Change to your preferred background color */
            }
        }

        .card-hover-bg:hover {
            background-color: rgb(240, 240, 240);
        }

        .list-group-item {
            padding: 20px 20px;
        }

        canvas {
            width: 100%;
            height: 100%;
        }

        .table-responsive {
            overflow-x: visible !important;
        }

        .fb-detail {
            background-color: #fafafa;
        }

        .pointer {
            cursor: pointer;
        }

        button.acc-btn {
            /* create a grid */
            display: grid;
            /* create colums. 1fr means use available space */
            grid-template-columns: 1fr max-content max-content;
            align-items: center;
            grid-gap: 10px;
        }

        .background {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
        }

        .owl-carousel .owl-stage{display: flex;}
        .aticle-box {height:360px;}

        body::-webkit-scrollbar {
            width: 5px;               /* width of the entire scrollbar */
        }

        body::-webkit-scrollbar-track {
            background: #696969;        /* color of the tracking area */
        }

        body::-webkit-scrollbar-thumb {
            background-color: #9655F9;    /* color of the scroll thumb */
            border-radius: 2px;       /* roundness of the scroll thumb */
        }

        .nav.navbar-nav.navbar-right li a {
            color: white;
        }

        /* Custom CSS */
            @media (max-width: 767px) {
            .navbar-nav .nav-link {
                color: #000000; /* Change to your preferred font color */
            }
            }


    </style>



    
</head>
<body>
<?php include('include/navbar.php'); ?>


<div class="container">
    <div id="return"></div>
    <div class="row">

        <?php
            if (@$_GET['page'] == "login") {
                if (!isset($_SESSION['username'])) {
                    include 'page/page_login.php';
                } else {
                    include 'page/page_home.php';
                }
            } else if (@$_GET['page'] == "register") {
                if (!isset($_SESSION['username'])) {
                    include 'page/page_register.php';
                } else {
                    include 'page/page_home.php';
                }
            } else if (@$_GET['page'] == "shop") { //shop
                include 'page/page_shop.php';
            } else if (@$_GET['page'] == "topup") {
                if (!isset($_SESSION['username'])) {
                    include 'page/page_login.php';
                } else {
                    include 'page/page_topup.php';
                }
            } else if (@$_GET['page'] == "history") {
                if (!isset($_SESSION['username'])) {
                    include 'page/page_login.php';
                } else {
                    include 'page/page_history.php';
                }
            } else if (@$_GET['page'] == "profile") {
                if (!isset($_SESSION['username'])) {
                    include 'page/page_login.php';
                } else {
                    include 'page/page_profile.php';
                }
            } else if (@$_GET['page'] == "manage") { //admin page
                if (!isset($_SESSION['username'])) {
                    include 'page/page_login.php';
                } else {
                    if ($users_status == $admin_status) {
                        include 'page/backend/page_home.php';
                    } else {
                        include 'page/page_home.php';
                    }
                }
            } else if (!preg_match('/^[a-zA-Z0-9\_]*$/', @$_GET['page'])) {
                include 'page/page_home.php';
            } else {
                include 'page/page_home.php';
            }

            ?>

        <div class="col-md-12 col-sm-12 mt-4 text-center text-dark">
            <h5 class="text-dark">
                <spen class="hvr-icon-up pointer" onclick="CradURL('<?=$web_rows['web_discord']?>')" target="_blank"><i class="fa-brands fa-discord hvr-icon"></i> Discord</spen>
                    &nbsp; &nbsp;
                <spen class="hvr-icon-up pointer" onclick="CradURL('<?=$web_rows['web_facebook']?>')" target="_blank"><i class="fa-brands fa-facebook hvr-icon"></i> Facebook</spen>
                    &nbsp; &nbsp;
                <spen class="hvr-icon-up pointer" onclick="CradURL('<?=$web_rows['web_line']?>')" target="_blank"><i class="fa-brands fa-youtube hvr-icon"></i> Youtube</spen>
            </h5>
                
            <p>&copy; <?php echo date('Y'); ?> - <?=$web_rows['web_name']?> Dev By x9pokkao | 
            <a style="text-decoration: none;color:#000;" href="page/home"><?=$web_rows['web_name'] ?></a></p>
            
        </div>



    </div>
</div>

 <!-- Back to top button -->
 <p id="button"></p>


  <canvas class="background"></canvas>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <?php
    if (@$_GET['page'] != "spin") {
        echo '<script src="assets/js/jquery-3.4.1.min.js"></script>';
    }
    ?>
    <!-- <script src="assets/js/jquery-3.4.1.min.js"></script> -->
    <script src="assets/js/a.js?<?= time() ?>"></script>
    <?php if (@$users_status == $admin_status) : ?>
        <script src="assets/js/app.js"></script>
    <?php endif; ?>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> -->
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="assets/css/owl/owl.carousel.min.js"></script>   

    <script>
        var btn = $('#button');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
        });
    </script>


    <script>
    
    $('#tbl_users1').dataTable({
        "order": [[0, 'desc']],
        "columnDefs": [
                {"className": "dt-center", "targets": "_all"}
            ],
        "oLanguage": {
            "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
            "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
            "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
            "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
            "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
            "sSearch": "ค้นหา :",
            "aaSorting": [
                [0, 'asc']
                // [0, 'desc']
            ],
            "oPaginate": {
                "sFirst": "หน้าแรก",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "หน้าสุดท้าย"
            },
            
            
        }
    });

    </script>

    <script>
        //------
        function get_page(url) {
            window.location.href = url;
        }
        AOS.init();
    </script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>

        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                // 'height': '1000%',
                'width': '100%',
            });

        });

        var particles = Particles.init({
            selector: '.background',
            color: '#6a6880'
        });

        <?php if ($_GET['page'] == "home" || $_GET['page'] == "pshop" || $_GET['page'] == "shop") : ?>
                UpdateStock();
            <?php endif; ?>

        var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                // nav:true
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[2000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })


        function CradURL(url){
            location.href = url;
        }

        function pls_login() {
            Swal.fire({
                // position: 'top-end',
                icon: 'warning',
                title: 'Oops...',
                text: 'กรุณาเข้าสู่ระบบก่อนสั่งซื้อ.',
                showConfirmButton: false,
                timer: 2100
            })
        }
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            // $('.paginate_button.active').css("background-color","#f00");
            $('#tbl_topuphistory').dataTable({
                "order": [
                    [0, 'desc']
                ],
                "columnDefs": [{
                    "className": "dt-center",
                    "targets": "_all"
                }],
                "oLanguage": {
                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหา :",
                    "aaSorting": [
                        [0, 'asc']
                        // [0, 'desc']
                    ],
                    "oPaginate": {
                        "sFirst": "หน้าแรก",
                        "sPrevious": "ก่อนหน้า",
                        "sNext": "ถัดไป",
                        "sLast": "หน้าสุดท้าย"
                    },


                }
            });

            $('#tbl_topuphistory2').dataTable({
                "order": [
                    [0, 'desc']
                ],
                "columnDefs": [{
                    "className": "dt-center",
                    "targets": "_all"
                }],
                "oLanguage": {
                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหา :",
                    "aaSorting": [
                        [0, 'asc']
                        // [0, 'desc']
                    ],
                    "oPaginate": {
                        "sFirst": "หน้าแรก",
                        "sPrevious": "ก่อนหน้า",
                        "sNext": "ถัดไป",
                        "sLast": "หน้าสุดท้าย"
                    },


                }
            });

            

            <?php if (@$users_status == $admin_status) : ?>
                $('#tbl_shopapi').dataTable({
                    "order": [
                        [0, 'desc']
                    ],
                    "columnDefs": [{
                        "className": "dt-center",
                        "targets": "_all"
                    }],
                    "oLanguage": {
                        "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                        "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                        "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                        "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                        "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                        "sSearch": "ค้นหา :",
                        "aaSorting": [
                            [0, 'asc']
                            // [0, 'desc']
                        ],
                        "oPaginate": {
                            "sFirst": "หน้าแรก",
                            "sPrevious": "ก่อนหน้า",
                            "sNext": "ถัดไป",
                            "sLast": "หน้าสุดท้าย"
                        },


                    }
                });
                $('#tbl_stock').dataTable({
                    "order": [
                        [0, 'asc']
                    ],
                    "columnDefs": [{
                        "className": "dt-center",
                        "targets": "_all"
                    }],
                    "oLanguage": {
                        "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                        "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                        "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                        "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                        "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                        "sSearch": "ค้นหา :",
                        "aaSorting": [
                            [0, 'asc']
                            // [0, 'desc']
                        ],
                        "oPaginate": {
                            "sFirst": "หน้าแรก",
                            "sPrevious": "ก่อนหน้า",
                            "sNext": "ถัดไป",
                            "sLast": "หน้าสุดท้าย"
                        },


                    }
                });


                //-------
                var xValues = [
                    <?php
                    function randomHex()
                    {
                        $chars = 'ABCDEF0123456789';
                        $color = '#';
                        for ($i = 0; $i < 6; $i++) {
                            $color .= $chars[rand(0, strlen($chars) - 1)];
                        }
                        return $color;
                    }
                    $result_chart = $connect->query("SELECT * FROM pum_product ");
                    $shop_fetch_charts = $result_chart->fetch_all(MYSQLI_ASSOC);
                    foreach ($shop_fetch_charts as $shop_fetch_chart) :
                        echo '"' . $shop_fetch_chart['name'] . '",';
                    endforeach; ?>
                ];
                var yValues = [
                    <?php foreach ($shop_fetch_charts as $shop_fetch_chart) :
                        $stock_count_charts = $connect->query('SELECT * FROM `pum_product_stock` WHERE `product_id` = "' . $shop_fetch_chart['id'] . '" ')->num_rows;
                        echo $stock_count_charts . ',';
                    endforeach; ?>
                ];
                var barColors = [
                    <?php foreach ($shop_fetch_charts as $shop_fetch_chart) :
                        $color = substr(md5(rand()), 0, 6);
                        echo '"' . randomHex() . '",';
                    endforeach; ?>
                ];

                new Chart("myChart", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "กราฟแสดง stock สินต้า หน้าเว็บ"
                        }
                    }
                });
                //-------
            <?php endif; ?>

        });
       
    </script>


    
</body>
</html>