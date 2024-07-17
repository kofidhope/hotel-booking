<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL-ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>
    <style>
        .box{
            border-top-color: var(--teal) !important;           
        }
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>
        <div class="my-5 px-5">
            <h2 class="h-font fw-bold text-center">ABOUT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                Placeat voluptatibus ab hic sint quasi reiciendis asperiores at quas rerum blanditiis.
            </p>
        </div>
      
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Excepturi in aspernatur, magni quae qui nulla ab.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Excepturi in aspernatur, magni quae qui nulla ab.
                    </p>
                </div>
                <div class="col-md-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="" alt="human img" class="w-100">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white roundede shadow p-4 border-top border-4 text-center box">
                        <img src="" alt="hotel img" width="70px">
                        <h4 class="mt-3">100+ ROOMS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white roundede shadow p-4 border-top border-4 text-center box">
                        <img src="" alt="customer img" width="70px">
                        <h4 class="mt-3">200+ customer</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white roundede shadow p-4 border-top border-4 text-center box">
                        <img src="" alt="rating img" width="70px">
                        <h4 class="mt-3">150+ REVIEWS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white roundede shadow p-4 border-top border-4 text-center box">
                        <img src="" alt="staff img" width="70px">
                        <h4 class="mt-3">200+ STAFFS</h4>
                    </div>
                </div>
                
            </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
            <div class="container px-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="" alt="team img" class="w-100">
                        <h5 class="mt-5">Random name</h5>
                    </div>    
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="" alt="team img" class="w-100">
                        <h5 class="mt-5">Random name</h5>
                    </div>  
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="" alt="team img" class="w-100">
                        <h5 class="mt-5">Random name</h5>
                    </div>  
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="" alt="team img" class="w-100">
                        <h5 class="mt-5">Random name</h5>
                    </div>  
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="" alt="team img" class="w-100">
                        <h5 class="mt-5">Random name</h5>
                    </div>  
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="" alt="team img" class="w-100">
                        <h5 class="mt-5">Random name</h5>
                    </div>                 
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="" alt="team img" class="w-100">
                        <h5 class="mt-5">Random name</h5>
                    </div>  
                </div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
    <?php require('inc/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".mySwiper", {        
    var swiper = new Swiper(".mySwiper", {        
        spaceBetween:40,
        pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        },
        breakpoints: {
        320:{
            slidesPerView:1,
        },
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:4,
        },
      }
    });
    </script>

</body>
</html>