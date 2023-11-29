<?php
require 'admin/connection.php';
// câu lệnh sql lấy danh sách danh mục
$sql = "Select * From products";
// chuẩn bị
$stmt = $conn->prepare($sql);
// thực thi
$stmt->execute();
// lấy dữ liệu(toàn bộ)
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-100">

    <article class="bg-black">
        <section class="header w-[1300px] mx-auto">
            <div class=" bg-black w-[1300px] h-[250px] ">
                <div class=" flex ">
                    <img class="w-[200px] h-[200px]   " src="./img/image(1246).png" alt="">
                    <input class="h-[40px] w-[430px] rounded-full mt-[70px] " type="text" placeholder="Tim kiem..."> <span class="text-3xl text-black ml-[-50px] mt-[70px]  "><i class="fa-solid fa-magnifying-glass"></i></span>
                    <p class="text-3xl text-white mt-[70px]  ml-10 mr-[100px]"><i class="fa-solid fa-phone"></i> <span class="text-[20px] font-bold">Liên hệ : 0862114048</span></p>
                    <a href="https://www.facebook.com/Khuee.strong"><i class="fa-brands fa-facebook text-4xl text-white mt-[70px] mr-[20px] hover:text-blue-400 "></i></a>
                    <a href="https://www.instagram.com/duykhue257/"> <i class="fa-brands fa-instagram text-4xl text-white mt-[70px]  mr-[20px] hover:text-red-400 "></i></a>
                    <a href=""><i class="fa-solid fa-cart-shopping text-3xl text-white  mt-[70px]  mr-[100px] hover:text-yellow-400"></i></a>
                    <button class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full mr-4 "><a href="admin/login.php">Singin</a></button>
                    <button class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full ">Signup</button>
                </div>
                <section class="menu flex">
                    <ul class=" hidden lg:flex no-underline text-[20px] font-bold space-x-20 ml-[30px] text-white">
                        <li class=" hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="./index.php">Trang chủ</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="./sp.php">Sản phẩm</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Liên hệ</a></li>
                        <!-- <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Vans</a></li> -->
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="./tintuc.php">Tin tức</a></li>
                    </ul>
                    <div class="lg:hidden inline-bock ml-8">
                        <button class="text-5xl text-white ">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </section>
            </div>

        </section>
    </article>
    <!-- end header -->
    </section>
    <section class="banner flex justify-center">
        <div class="mt-10 md:flex ">
            <!-- <img  class="" src="./img/s1.jpg" width="840px" alt="">
            <img class="" src="./img/s2.jpg" alt=""> -->
            <a class="" href=""> <img class="md:w-[1440px] w-full" src="./img/s18.webp" alt=""></a>
        </div>
    </section>
    <section class="w-[1440px] mx-auto  mt-4 py-3 ">
        <h1 class="  font-bold text-[30px] ml-[30px]"> SẢN PHẨM NỔI BẬT</h1>
        <div class="border  bg-black border-black w-[190px] border-[2px] ml-[30px]"></div>
    </section>

    <!-- maincontent -->
    <section class="maincontent w-full mx-auto bg-white ">

        <div class=" w-[1390px] mx-auto bg-white py-4">

            <!-- <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php foreach ($result as $value) : ?>
                    <div class="border border-black hover:border-yellow-500">
                        <a href="./chitet-sp.php"><img src="admin/img/<?= $value['image'] ?>" alt=""></a>
                        <p class="font-bold ml-2"><?= $value['product_name'] ?></p>
                        <p class="font-bold text-red-600 ml-2"><?= $value['price'] ?></p>

                    </div>
                <?php endforeach ?>
            </div> -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($result as $value) : ?>
                        <div class="swiper-slide">
                            <div class="border border-black hover:border-yellow-500 h-[230px] ">
                                <a href="./chitet-sp.php?id=<?=$value['id']?>"><img width="300" height="160" src="admin/img/<?= $value['image'] ?>" alt=""></a>
                                <p class="font-bold ml-2"><?= $value['product_name'] ?></p>
                                <p class="font-bold text-red-600 ml-2"> <?= $value['price'] ?><span>đ</span></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <div class="border border-2 border-black w-[400px] mx-auto "></div>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                }
            });
        </script>


    </section>
    <!-- end ss1 -->
    <section class="w-[1440px] mx-auto bg-white mt-4 py-3 flex ">
        <div>
            <h1 class="  font-bold text-[30px] ml-[30px]"> SẢN PHẨM <span class="text-red-500">SALE</span></h1>
            <div class="border  bg-black border-black w-[190px] border-[2px] ml-[30px]"></div>
        </div>
        <a href="">
            <div class="text-[20px] text-blue-400 font-bold ml-[1040px] mt-4">Xem Thêm</div>
        </a>
    </section>

    <section class="maincontent w-[1440px] mx-auto bg-white ">

        <div class=" w-[1390px] mx-auto bg-white py-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="border border-black hover:border-yellow-500">
                    <a href=""><img src="./img/s8.webp" alt=""></a>
                    <p class="font-bold ml-2">Giày Nike Air Max 97 'White Violet' 921826-103</p>
                    <del class="font-bold text-yellow-600 ml-2">7,500,000₫</del>
                    <p class="font-bold text-red-600 ml-2">5,500,000₫</p>

                </div>
                <div class="border border-black hover:border-yellow-500">
                    <a class="mt-4" href=""><img class="mt-4" src="./img/s9.webp" alt=""></a>
                    <p class="font-bold ml-2">Giày Nike Air Force 1 '07 'Triple Black' CW2288-001</p>
                    <del class="font-bold text-yellow-600 ml-2">9,000,000₫</del>
                    <p class="font-bold text-red-600 ml-2">8,500,000₫</p>

                </div>
                <div class="border border-black hover:border-yellow-500">
                    <a href=""><img class="" src="./img/s14.jpg" alt=""></a>
                    <p class="font-bold ml-2 mt--4">Giày Nike Air Force 1 Shadow 'Pastel' CI0919-106</p>
                    <del class="font-bold text-yellow-600 ml-2">17,500,000₫</del>
                    <p class="font-bold text-red-600 ml-2">3,100,000₫</p>

                </div>
                <div class="border border-black hover:border-yellow-500">
                    <a href=""><img class="" src="./img/s11.webp" alt=""></a>
                    <p class="font-bold ml-2">Giày Nike Wmns Air Jordan 1 Low 'White Wolf Grey' DC0774-105</p>
                    <del class="font-bold text-yellow-600 ml-2">7,500,000₫</del>
                    <p class="font-bold text-red-600 ml-2">2,300,000₫</p>

                </div>
            </div>
        </div>

    </section>
    <!-- end ss2 -->

    <!-- tin tuc -->
    <article class=" mx-auto bg-white w-[1440px] py-3  ">
        <h1 class="  font-bold text-[30px] mt-8 ml-4"> TIN TỨC NỔI BẬT</h1>
        <div class="border bg-black border-black w-[190px] border-[2px] ml-4"></div>
    </article>

    </section>
    <section class=" bg-white">
        <!-- <div class="text-xl  my-8  font-normal  ">Featured works</div> -->
        <article class=" w-[1390px] mx-auto bg-white">
            <div class="grid md:grid-cols-[246px,auto] gap-8 border-b py-5 ">
                <a href="./tintuc.html"><img class="w-full" src="./img/s15.jpg" alt=""></a>
                <div>
                    <p class="text-2xl font-bold"><a href="./tintuc.html">Aimé Leon Dore là gì? Tại sao bản collab New Blance 550 x Aimé Leon Dore lại có giá lên đến 20 triệu?</a></p>
                    <p class="mt-4"> <span class=" border bg-[#142850] rounded-full text-white text-xl font-bold border-[#142850] px-2 ">2022</span>
                        <span class=" ml-8 text-[20px] text-[#8695A4] font-bold">Nam shipper</span>
                    </p>
                    <p class=" mt-4 font-medium">Trong thời gian vừa qua, bản collab đình đám giữa thương hiệu thời trang nổi tiếng tại
                        New York Aimé Leon Dore với hãng giày New Blance mang lại cho hai thương hiệu lớn những th...</p>
                </div>
            </div>
            <div class="grid md:grid-cols-[246px,auto] gap-8 border-b py-5">
                <a>
                    <img class="w-full" src="./img/s16.jpg" alt="">
                </a>
                <div>
                    <p class="text-2xl font-bold"><a href="">Những sự thật bí ẩn đằng sau thương hiệu thời trang nổi tiếng của Đức - Adidas</a></p>
                    <p class="mt-4"> <span class=" border bg-[#142850]  rounded-3xl text-white text-xl font-bold border-[#142850] px-2 ">2022</span>
                        <span class=" ml-8 text-[20px] text-[#8695A4] font-bold">Duc mom</span>
                    </p>
                    <p class=" mt-4 font-medium">Adidas - thương hiệu thể thao đã quá nổi của Đức và vẫn hàng ngày tung ra những sản phẩm giày,
                        quần áo và dụng cụ thể thao nâng cấp hơn. Sau hơn bảy thập kỷ tung hoành trong tr...</p>
                </div>
            </div>
            <div class="grid md:grid-cols-[246px,auto] gap-8 border-b py-5">
                <div>
                    <img class="w-full" src="./img/s17.jpg" alt="">
                </div>
                <div>
                    <p class="text-2xl font-bold"><a href="">OFF-WHITE ™ x Church's: có gì phía sau bản hợp tác cuối cùng của Virgil Abloh</a></p>
                    <p class="mt-4"> <span class=" border  bg-[#142850] rounded-3xl text-white text-xl font-bold border-[#142850] px-2 ">2018</span>
                        <span class=" ml-8 text-[20px] text-[#8695A4] font-bold">Toi tai tu</span>
                    </p>
                    <p class=" mt-4 font-medium">Nhắc đến Off-White và Virgil Abloh, chắc hẳn mọi tín đồ thời trang đều liên
                        tưởng ngay đến hình ảnh các đường sọc chéo in trên những bộ trang phục đắt tiền. Những đường chéo que....</p>
                </div>
            </div>
        </article>
    </section>
    <!-- footer -->
    <article class="bg-black ">
        <article class="bg-black w-[1440px] mx-auto grid grid-cols-2">
            <section class="">
                <!-- <p class="text-[20px] text-white  font-bold mb-4">Hotline liên hệ:</p>
                <div class="flex">
                    <a href=""> <i class="fa-solid fa-phone text-3xl text-white"></i></a>
                    <p class="text-[20px]  font-bold text-orange-400 ml-4">0862114048 <br> nguyenduykhue@gmail.com</p>
                </div> -->
                <div>
                    <i class="fa-solid fa-house text-3xl  text-red-500 mr-4 mt-4 text-white"></i><span class="font-bold text-2xl my-4 text-white">Địa chỉ:</span>
                    <p class="font-bold text-xl mt-4 text-white">Shop: Di Trạch, Hoài Đức, Hà Nội</p>
                    <p class="font-bold text-xl my-8 text-white">VP:Khu 2, Hoàng Dương, Thanh Ba, Phú Thọ</p>
                    <p class="font-bold text-xl text-white">kho:Gò chè, Tân Tiến, Chương mỹ, Hà Nội</p>

                </div>
                <div class="my-4 mt-20">
                    <i class="fa-solid fa-location-dot text-white text-3xl mr-4"></i> <span class="text-white font-medium mr-20">Vietnam</span>
                    <span class="text-white font-medium ">© 2022 Nike, Inc. All Rights Reserved</span>
                </div>
            </section>

            <section class="">
                <div class="ml-[390px] mt-8">
                    <a href=""><i class="fa-brands fa-twitter text-5xl text-white mr-8 hover:text-blue-500"></i></a>
                    <a href=""><i class="fa-brands fa-facebook text-5xl text-white mr-8 hover:text-blue-500"></i></a>
                    <a href=""><i class="fa-brands fa-instagram text-5xl mr-8 text-white hover:text-purple-700"></i></a>
                    <a href=""><i class="fa-brands fa-youtube text-5xl  text-white hover:text-red-500"></i></a>
                </div>

                <div class="mt-[200px]">
                    <ul class=" hidden lg:flex no-underline text-[20px] font-bold space-x-20 ml-[30px] text-white">
                        <li class=" hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="./index.html">Trang chủ</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Nike</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Adisdas</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Vans</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Tin tức</a></li>


                    </ul>
                    <div class="lg:hidden inline-bock ml-8">
                        <button class="text-5xl text-white ">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>
            </section>
        </article>
    </article>

</body>

</html>