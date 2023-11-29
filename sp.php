<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <article class="bg-black">
        <section class="header w-[1440px] mx-auto">
            <div class=" bg-black w-[1440px] h-[250px] ">
                <div class=" flex ">
                    <img class="w-[200px] h-[200px]   " src="./img/image(1246).png" alt="">
                    <input class="h-[40px] w-[430px] rounded-full mt-[70px] " type="text" placeholder="Tim kiem...">
                    <span class="text-3xl text-black ml-[-50px] mt-[70px]  "><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <p class="text-3xl text-white mt-[70px]  ml-10 mr-[100px]"><i class="fa-solid fa-phone"></i> <span
                            class="text-[20px] font-bold">Liên hệ : 0862114048</span></p>
                    <a href="https://www.facebook.com/Khuee.strong"><i
                            class="fa-brands fa-facebook text-4xl text-white mt-[70px] mr-[20px] hover:text-blue-400 "></i></a>
                    <a href="https://www.instagram.com/duykhue257/"> <i
                            class="fa-brands fa-instagram text-4xl text-white mt-[70px]  mr-[20px] hover:text-red-400 "></i></a>
                    <a href=""><i
                            class="fa-solid fa-cart-shopping text-3xl text-white  mt-[70px]  mr-[100px] hover:text-yellow-400"></i></a>
                    <button
                        class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full mr-4 ">Singin</button>
                    <button
                        class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full ">Signup</button>
                </div>
                <section class="menu flex">
                    <ul class=" hidden lg:flex no-underline text-[20px] font-bold space-x-20 ml-[30px] text-white">
                        <li
                            class=" hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="./index.php">Trang chủ</a></li>
                        <li
                            class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="./sp.php">Sản phẩm</a></li>
                        <li
                            class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="">Liên hệ</a></li>
                        <!-- <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Vans</a></li> -->
                        <li
                            class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="./tintuc.html">Tin tức</a></li>


                    </ul>
                    <div class="lg:hidden inline-bock ml-8">
                        <button class="text-5xl text-white ">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>

            </div>

        </section>
    </article>
    <!-- end header -->

    <article class=" w-[1440px]  mx-auto ">
        <section class="grid grid-cols-5 w-[1440px]  mx-auto ">
            <div class="border  border-black border-1 col-span-1 mt-4 h-[30%]  ">
                <div class="border  border-black border-2 bg-black h-[53px]  font-bold text-[30px]  text-white ">
                    THƯƠNG HIỆU
                    <span class="ml-4"><i class="fa-solid fa-plus"></i></span>
                </div>
                <ul class="font-bold text-[20px] pl-4">
                    <li> <input type="checkbox"> Nike</li>
                    <li> <input type="checkbox"> Adidas</li>
                    <li> <input type="checkbox"> Vans</li>
                    <li> <input type="checkbox"> Puma</li>
                </ul>
            </div>
            <div class="col-span-4 ">

                <div class="grid justify-items ">
                    <span class="font-bold text-[30px] ml-6 ">Tất cả sản phẩm</span>

                    <div class="justify-self-end border border-1 ">
                        <form action="">
                            <select name="" id="">
                                <option value="Sản phẩm bán chạy">Tùy chọn</option>
                                <option value="Sản phẩm bán chạy">Sản phẩm bán chạy</option>
                                <option value="Sản phẩm bán chạy">Mới nhất</option>
                                <option value="Sản phẩm bán chạy">Cũ nhất</option>
                                <option value="Sản phẩm bán chạy">Sản phẩm Từ A-Z</option>
                            </select>
                        </form>

                    </div>
                </div>
                <div class=" w-[1090px] mx-auto bg-white py-4  ">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 ">
                        <div class="border border-black hover:border-yellow-500 w-[260px] ">
                            <a href="./chitet-sp.html"><img src="./img/s3.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Air Jordan 1 Mid "Banned" 2020 554724-074</p>
                            <p class="font-bold text-red-600 ml-2">5,500,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a class="mt-4" href=""><img class="mt-4" src="./img/s7.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Nike Air Jordan 1 Low SE 'Nothing But Net' CZ8659-100</p>
                            <p class="font-bold text-red-600 ml-2">8,500,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a href=""><img class="mt-8" src="./img/s5.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Nike Air Force 1 07 Triple White CW2288-111</p>
                            <p class="font-bold text-red-600 ml-2">3,100,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a href=""><img class="mt-8" src="./img/s6.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Adidas Superstar OG 'Vintage White' C77124</p>
                            <p class="font-bold text-red-600 ml-2">2,300,000₫</p>

                        </div>
                    </div>
                </div>
                <div class=" w-[1090px] mx-auto bg-white py-4  ">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 ">
                        <div class="border border-black hover:border-yellow-500 w-[260px] ">
                            <a href="./chitet-sp.html"><img src="./img/s3.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Air Jordan 1 Mid "Banned" 2020 554724-074</p>
                            <p class="font-bold text-red-600 ml-2">5,500,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a class="mt-4" href=""><img class="mt-4" src="./img/s7.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Nike Air Jordan 1 Low SE 'Nothing But Net' CZ8659-100</p>
                            <p class="font-bold text-red-600 ml-2">8,500,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a href=""><img class="mt-8" src="./img/s5.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Nike Air Force 1 07 Triple White CW2288-111</p>
                            <p class="font-bold text-red-600 ml-2">3,100,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a href=""><img class="mt-8" src="./img/s6.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Adidas Superstar OG 'Vintage White' C77124</p>
                            <p class="font-bold text-red-600 ml-2">2,300,000₫</p>

                        </div>
                    </div>
                </div>
                <div class=" w-[1090px] mx-auto bg-white py-4  ">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 ">
                        <div class="border border-black hover:border-yellow-500 w-[260px] ">
                            <a href="./chitet-sp.html"><img src="./img/s3.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Air Jordan 1 Mid "Banned" 2020 554724-074</p>
                            <p class="font-bold text-red-600 ml-2">5,500,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a class="mt-4" href=""><img class="mt-4" src="./img/s7.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Nike Air Jordan 1 Low SE 'Nothing But Net' CZ8659-100</p>
                            <p class="font-bold text-red-600 ml-2">8,500,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a href=""><img class="mt-8" src="./img/s5.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Nike Air Force 1 07 Triple White CW2288-111</p>
                            <p class="font-bold text-red-600 ml-2">3,100,000₫</p>

                        </div>
                        <div class="border border-black hover:border-yellow-500 w-[260px]">
                            <a href=""><img class="mt-8" src="./img/s6.webp" alt=""></a>
                            <p class="font-bold ml-2">Giày Adidas Superstar OG 'Vintage White' C77124</p>
                            <p class="font-bold text-red-600 ml-2">2,300,000₫</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="inline-flex ml-[790px] mb-3">
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
              Prev
            </button>
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
              Next
            </button>
          </div>
          
    </article>
   

    <article class="bg-black ">
        <article class="bg-black w-[1440px] mx-auto grid grid-cols-2">
            <section class="">
                <!-- <p class="text-[20px] text-white  font-bold mb-4">Hotline liên hệ:</p>
                    <div class="flex">
                        <a href=""> <i class="fa-solid fa-phone text-3xl text-white"></i></a>
                        <p class="text-[20px]  font-bold text-orange-400 ml-4">0862114048 <br> nguyenduykhue@gmail.com</p>
                    </div> -->
                <div>
                    <i class="fa-solid fa-house text-3xl  text-red-500 mr-4 mt-4 text-white"></i><span
                        class="font-bold text-2xl my-4 text-white">Địa chỉ:</span>
                    <p class="font-bold text-xl mt-4 text-white">Shop: Di Trạch, Hoài Đức, Hà Nội</p>
                    <p class="font-bold text-xl my-8 text-white">VP:Khu 2, Hoàng Dương, Thanh Ba, Phú Thọ</p>
                    <p class="font-bold text-xl text-white">kho:Gò chè, Tân Tiến, Chương mỹ, Hà Nội</p>

                </div>
                <div class="my-4 mt-20">
                    <i class="fa-solid fa-location-dot text-white text-3xl mr-4"></i> <span
                        class="text-white font-medium mr-20">Vietnam</span>
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
                        <li
                            class=" hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="./index.html">Trang chủ</a></li>
                        <li
                            class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="">Nike</a></li>
                        <li
                            class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="">Adisdas</a></li>
                        <li
                            class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="">Vans</a></li>
                        <li
                            class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1">
                            <a href="">Tin tức</a></li>


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