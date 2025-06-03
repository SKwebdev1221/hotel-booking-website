<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - ABOUT</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>
    
<body class="bg-light">
<!-- Header -->
    <?php require('inc/header.php') ?>
<!-- About Hotel -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Tenetur obcaecati culpa dolores mollitia delectus architecto, nobis quibusdam quidem labore perferendis.</p>
    </div>
<!-- Image of Owner of Hotel -->
    <div class="container">
        <div class="row justify-content-between align-item-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores vero nisi explicabo harum et voluptatem labore.
                </p>
            </div>
        
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
            <img src="images/about/about.jpg" class="w-100">
        </div>
        </div>
    </div>
<!-- Specialities of our Hotel -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 text-center border-top border-4 box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 text-center border-top border-4 box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">200+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 text-center border-top border-4 box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">600+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 text-center border-top border-4 box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">250+ Rooms</h4>
                </div>
            </div>
        </div>
    </div>
<!-- Staff team of our Hotel -->
    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded ">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Randomn Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Randomn Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Randomn Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Randomn Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Randomn Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/IMG_17352.jpg" class="w-100">
                    <h5>Randomn Name</h5>
                </div>
            </div>
        </div>
    </div>
<!-- Footer -->
    <?php require('inc/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 40,
        loop: true,
        autoplay: {
            delay: 2500,
        },
        pagination: {
        el: ".swiper-pagination",
        },
        breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>