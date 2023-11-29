<?php
require 'admin/connection.php';
// câu lệnh sql lấy danh sách danh mục

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$stmt = $conn->prepare($sql);
// thực thi
$stmt->execute();
// lấy dữ liệu(toàn bộ)
$result = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    <article class="bg-black">
        <section class="header w-[1440px] mx-auto">
            <div class=" bg-black w-[1440px] h-[250px] ">
                <div class=" flex ">
                    <img class="w-[200px] h-[200px]   " src="./img/image(1246).png" alt="">
                    <input class="h-[40px] w-[430px] rounded-full mt-[70px] " type="text" placeholder="Tim kiem..."> <span
                        class="text-3xl text-black ml-[-50px] mt-[70px]  "><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <p class="text-3xl text-white mt-[70px]  ml-10 mr-[100px]"><i class="fa-solid fa-phone"></i> <span
                            class="text-[20px] font-bold">Liên hệ : 0862114048</span></p>
                    <a href="https://www.facebook.com/Khuee.strong"><i
                            class="fa-brands fa-facebook text-4xl text-white mt-[70px] mr-[20px] hover:text-blue-400 "></i></a>
                    <a href="https://www.instagram.com/duykhue257/"> <i
                            class="fa-brands fa-instagram text-4xl text-white mt-[70px]  mr-[20px] hover:text-red-400 "></i></a>
                    <a href=""><i class="fa-solid fa-cart-shopping text-3xl text-white  mt-[70px]  mr-[100px] hover:text-yellow-400"></i></a>
                    <button
                        class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full mr-4 ">Singin</button>
                    <button
                        class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full ">Signup</button>
                </div>
                <section class="menu flex">
                    <ul class=" hidden lg:flex no-underline text-[20px] font-bold space-x-20 ml-[30px] text-white">
                        <li class=" hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="index.php">Trang chủ</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="sp.php">Sản phẩm</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Liên hệ</a></li>
                        <!-- <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Vans</a></li> -->
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="./tintuc.html">Tin tức</a></li>
    
    
                    </ul>
                    <div class="lg:hidden inline-bock ml-8">
                        <button class="text-5xl text-white ">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
    
            </div>
    
        </section>
        </article>

    <article class="w-[1440px] bg-white mx-auto mt-4">
        <section class="bg-white flex ">
            <section>
                <h1 class="font-bold text-3xl text-center mb-10"><?=$result['product_name']?></h1>
                <img src="admin/img/<?=$result['image']?>" alt="">

            </section>
            <section class="">
                <p class="text-red-500 font-bold text-4xl mt-4 mb-6"><?=$result['price']?> <span>đ</span> </p>
                <div>
                    <i class="fa-solid fa-star text-orange-500 text-xl"></i>
                    <i class="fa-solid fa-star text-orange-500 text-xl"></i>
                    <i class="fa-solid fa-star text-orange-500 text-xl"></i>
                    <i class="fa-solid fa-star text-orange-500 text-xl"></i>
                    <i class="fa-solid fa-star-half-stroke text-orange-500 text-xl"></i>
                </div>
                <p class="font-bold text-xl py-8"> <i class="fa-solid fa-angles-right text-black"></i> Tình trạng sản
                    phẩm: còn hàng</p>
                <p class="font-bold text-xl mb-4"> <i class="fa-solid fa-angles-right text-black"></i> Kích thước:</p>
                <div class="flex">
                    <div class="border border-gray-400 border-2 rounded-xl py-3 px-3 hover:border-4 mr-8 ">39</div>
                    <div class="border border-gray-400 border-2 rounded-xl py-3 px-3 hover:border-4 mr-8 ">40</div>
                    <div class="border border-gray-400 border-2 rounded-xl py-3 px-3 hover:border-4 mr-8 ">41</div>
                    <div class="border border-gray-400 border-2 rounded-xl py-3 px-3 hover:border-4 mr-8 ">42</div>


                </div>


                <div class="mt-8">
                    <div>

                        <i class="fa-solid fa-truck-moving text-yellow-500 text-2xl"></i>
                        <span class="text-[20px] font-bold text-yellow-500 ">Giao hàng nhanh chóng chỉ trong vòng 24
                            giờ</span><br>

                        <i class="fa-solid fa-shield text-blue-500 text-2xl py-3"></i>
                        <span class="text-[20px] font-bold text-blue-500 py-3">Sản phẩm chính hãng sản phẩm nhập khẩu
                            100%
                        </span><br>
                        <i class="fa-solid fa-phone text-2xl"></i> <span class="text-[20px] font-bold text-2xl">Liên hệ
                            : 0862114048 (10h-22h từ T2-CN)</span>
                    </div class="">
                    <button
                        class=" mt-16 mr-8 ml-8 border border-blue-300 bg-blue-500 hover:shadow-xl rounded-xl text-white  font-bold text-[17px] w-[200px] h-[70px]">THÊM
                        VÀO GIỎ HÀNG</button>
                    <button
                        class="border border-yellow-300 bg-yellow-500 hover:shadow-xl rounded-xl text-white  font-bold text-[17px] w-[200px] h-[70px]">MUA
                        NGAY</button>
                </div>
                </div>

            </section>
        </section>

        <section class="grid md:grid-cols-3 gap-8 mt-8">
            <section class="col-span-1">
                <h1 class="text-3xl font-bold my-4">Thông tin phát hành sản phẩm</h1>
                <ul class="text-xl">
                    <li>>Mã giày: 554724-074 / 554725-074</li>
                    <li>>Phối màu: Black/University Red-Black-White</li>
                    <li>>Giá Retail: $115</li>
                    <li>>Phát hành: 12/11/2020</li>
                    <li>>Nhà thiết kế: Peter Moore</li>
                    <li>>Danh mục: Air Jordan 1</li>
                </ul>
            </section>
            <section class="col-span-2">
                <h1 class="text-3xl font-bold my-4"><?=$result['description']?></p>
                
            </section>
        </section>




    </article>
    <section class="w-[1440px] mx-auto bg-white mt-4 py-3 flex ">
        <div>
            <h1 class="  font-bold text-[30px] ml-[30px]"> SẢN PHẨM LIÊN QUAN</h1>
            <div class="border bg-black border-black w-[190px] border-[2px] ml-[30px]"></div>
        </div>
        <a href="">
            <div class="text-[20px] text-blue-400 font-bold ml-[1000px] mt-4">Xem Thêm</div>
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
    <!-- end maincontet -->

    <!-- footer -->
    <!-- <article class="bg-white mb-8">
    <article class="bg-white w-[1440px] mx-auto grid grid-cols-2">
        <section class="mt-16">
          <p class="text-[40px]  font-bold mb-4">Hotline liên hệ:</p>
          <div class="flex">
              <img src="./img/icon-telephone.png" alt="">
              <p class="text-[20px]  font-bold text-orange-400 ml-4">0862114048 <br> nguyenduykhue@gmail.com</p>
          </div>
          <div>
            <p class="font-bold text-3xl my-4 text-blue-500" >Kết nối với chúng tôi</p>
            <a href=""><i class="fa-brands fa-facebook text-5xl"></i></a>
            <a href=""><i class="fa-brands fa-instagram text-5xl mx-4"></i></a>
            <a href=""><i class="fa-brands fa-youtube text-5xl mr-4"></i></a>
           <a href=""> <i class="fa-solid fa-phone text-5xl"></i></a>
          </div>

          <div>
            <i class="fa-solid fa-house text-3xl  text-red-500 mr-4 mt-4"></i><span class="font-bold text-3xl my-4">Địa chỉ:</span>
            <p class="font-bold text-3xl mt-4">Shop: Di Trạch, Hoài Đức, Hà Nội</p>
            <p class="font-bold text-3xl my-8 ">VP:Khu 2, Hoàng Dương, Thanh Ba, Phú Thọ</p>
            <p class="font-bold text-3xl">kho:Gò chè, Tân Tiến, Chương mỹ, Hà Nội</p>

          </div>
        </section>
        <section class="ml-[200px] mt-10">
            <img src="./img/image(1246).png"  alt="">
        </section>
      
     </article> -->
     <article class="bg-black ">
        <article  class="bg-black w-[1440px] mx-auto grid grid-cols-2">
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
                
    </article>



</body>

</html>