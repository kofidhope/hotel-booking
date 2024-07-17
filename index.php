<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL-HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>
    <style>
       
        .availability-form{
            margin-top:-50px;
            z-index: 2;
            position:relative;
        }
       
        @media screen and (max-width:575px) {
         .availability-form{
             margin-top:25px;
             padding: 0 35px;             
           }
        }
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>

  <!-- carousel design-->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="images/carousel/1.png" class ="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
            <img src="images/carousel/2.png" class ="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
            <img src="images/carousel/3.png" class ="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
            <img src="images/carousel/4.png" class ="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
            <img src="images/carousel/5.png" class ="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
            <img src="images/carousel/6.png" class ="w-100 d-block"/>
        </div>
        </div>
    </div>
    </div>
  <!-- carousel design ends-->

  <!-- checking booking availabilty form -->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availabilty</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font weight: 500;">Check-In</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font weight: 500;">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font weight: 500;">Adult</label>
                                <select class="form-select shadow-none">>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-dark shadow-none btn-dark">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  <!-- checking booking availabilty form ends-->

  <!-- Rooms start-->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5>simple rooms</h5>
                            <h5 class="mb-4">$100 per nignt</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Feature</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Kitchen
                                </span>
                            </div>

                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>                              
                            </div>

                            <div class="ratings mb-4">
                                <h6 class="mb-1">Ratings</h6>
                                <span class="rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>        
                           </div>

                           <div class="d-flex justify-content-evenly mb-2">
                           <a href="#" class="btn btn-sm text-white btn-dark shadow-none">Book Now</a>
                           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                           </div>                    
                        </div>                    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5>simple rooms</h5>
                            <h5 class="mb-4">$100 per nignt</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Feature</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Kitchen
                                </span>
                            </div>

                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>                              
                            </div>

                            <div class="ratings mb-4">
                                <h6 class="mb-1">Ratings</h6>
                                <span class="rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>        
                           </div>

                           <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white btn-dark shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                           </div>                    
                        </div>                    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5>simple rooms</h5>
                            <h5 class="mb-4">$100 per nignt</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Feature</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Bathrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Kitchen
                                </span>
                            </div>

                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>                              
                            </div>

                            <div class="ratings mb-4">
                                <h6 class="mb-1">Ratings</h6>
                                <span class="rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>        
                           </div>

                           <div class="d-flex justify-content-evenly mb-2">
                           <a href="#" class="btn btn-sm text-white btn-dark shadow-none">Book Now</a>
                           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                           </div>                    
                        </div>                    
                    </div>
                </div>

                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
                </div>
            </div>
        </div>
  <!-- Rooms ends-->

    <!-- Facilities start -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 bg-white rounded shadow py-4 text-center">
                    <img src="images/facilities/3.svg" alt="img" width="80px">
                    <h5 class="mt-5">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 bg-white rounded shadow py-4 text-center">
                    <img src="images/facilities/3.svg" alt="img" width="80px">
                    <h5 class="mt-5">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 bg-white rounded shadow py-4 text-center">
                    <img src="images/facilities/3.svg" alt="img" width="80px">
                    <h5 class="mt-5">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 bg-white rounded shadow py-4 text-center">
                    <img src="images/facilities/3.svg" alt="img" width="80px">
                    <h5 class="mt-5">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 bg-white rounded shadow py-4 text-center">
                    <img src="images/facilities/3.svg" alt="img" width="80px">
                    <h5 class="mt-5">Wifi</h5>
                </div>
                <div class="col-lg-12 text-center mt-5">
                  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
                </div>

            </div>
        </div>
    <!-- facilities ends-->

    <!-- testimonial start -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

        <div class="container mt-5">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/facilities/3.svg" alt="img" width="30px">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div> 
                        <p>
                            Lorem, ipsum dolor sit amet consectetur. 
                            
                        </p> 
                        <div class="ratings">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>                  
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/facilities/3.svg" alt="img" width="30px">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div> 
                        <p>
                            Lorem, ipsum dolor sit amet consectetur. 
                            
                        </p> 
                        <div class="ratings">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>                  
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/facilities/3.svg" alt="img" width="30px">
                            <h6 class="m-0 ms-2">Random user1</h6>
                        </div> 
                        <p>
                            Lorem, ipsum dolor sit amet consectetur. 
                            
                        </p> 
                        <div class="ratings">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>                  
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
                <div class="col-lg-12 text-center mt-5">
                  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
                 </div>      
        </div>

    <!-- testimonials end -->

    <!-- Reach Us start -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-3 mb-lg-0 bg-white">
                <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63581.16582650895!2d-1.3078143535939963!3d5.132211969774826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfddfc29c7b3faad%3A0xeae5bdfb8639e093!2sCape%20Coast!5e0!3m2!1sen!2sgh!4v1709304281291!5m2!1sen!2sgh" loading="lazy"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 mb-4 rounded">
                    <h5>Call us</h5> 
                    <a href="tel: +233555109980" class=" d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+233555109980
                        </a>
                        <br>
                        <a href="tel: +233555109980" class=" d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+233555109980
                        </a>
                    </div>
                    <div class="bg-white p-4 mb-4 rounded">
                    <h5>Follow us</h5> 
                    <a href="#" class=" d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter-x me-1"></i> Twitter
                        </span>
                        </a>
                        <br>
                        <a href="#" class=" d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                        </a>
                        <br>
                        <a href="#" class=" d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Reach Us ends -->

    <?php require('inc/footer.php');?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay:3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
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