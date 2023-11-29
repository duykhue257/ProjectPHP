<?php
session_start();
  require_once "../connection.php";
 
    
  // câu lệnh sql lấy danh sách danh mục
  $sql= "Select * From products";
  // chuẩn bị
  $stmt= $conn->prepare($sql);
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
    <title>ADMIN</title>
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
                    <a href="http://localhost/web"><img class="w-[200px] h-[200px]   " src="../img/image(1246).png" alt=""></a>
                    
                    <input class="h-[40px] w-[430px] rounded-full mt-[70px] " type="text" placeholder="Tim kiem..."> <span class="text-3xl text-black ml-[-50px] mt-[70px]  "><i class="fa-solid fa-magnifying-glass"></i></span>
                    <p class="text-3xl text-white mt-[70px]  ml-10 mr-[100px]"><i class="fa-solid fa-phone"></i> <span class="text-[20px] font-bold">Liên hệ : 0862114048</span></p>
                    <a href="https://www.facebook.com/Khuee.strong"><i class="fa-brands fa-facebook text-4xl text-white mt-[70px] mr-[20px] hover:text-blue-400 "></i></a>
                    <a href="https://www.instagram.com/duykhue257/"> <i class="fa-brands fa-instagram text-4xl text-white mt-[70px]  mr-[20px] hover:text-red-400 "></i></a>
                    <a href=""><i class="fa-solid fa-cart-shopping text-3xl text-white  mt-[70px]  mr-[100px] hover:text-yellow-400"></i></a>
                    <button class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full mr-4 "><a href="">Singin</a></button>
                    <button class=" hover:bg-white hover:text-black font-bold mt-[70px] border border-white  h-[50px] w-[90px] text-white rounded-full ">Signup</button>
                </div>
                <section class="menu flex">
                    <ul class=" hidden lg:flex no-underline text-[20px] font-bold space-x-20 ml-[30px] text-white">
                        <li class=" hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="../categories/categories.php">Danh Mục</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="../products/products.php">Sản phẩm</a></li>
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="#">Đơn Hàng</a></li>
                        <!-- <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="">Vans</a></li> -->
                        <li class="hover:text-yellow-500 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:bg-white after:h-0.5 after:w-0 hover:after:w-full after:transittion-all after:ease-in-out after:duration-300 py-1"><a href="#">Thong ke</a></li>
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

<!--main content-->
       <section class=" w-[1440px] mx-auto bg-white mt-2">
      
    <?php if (isset($_GET['msg'])) :  ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            <?= $_GET['msg'] ?>
        </div>
    <?php endif ?>



    <table class="divide-y mx-auto divide-gray-200 w-[1440px]" >
        <tr class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tên sản phẩm</th>
           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ảnh</th>
           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Giá</th>
           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Số lượng</th>
           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mổ tả</th>
           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mã loại</th>
           <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ngày tạo</th>
          
           
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Tác vụ</th>
        </tr>

       
        
        <div class="mx-auto  bg-blue-500 text-white font-bold py-2 px-4 rounded w-[190px] "><a class="ml-9" href="./add_products.php">thêm mới</a></div>
        <?php foreach ($result as $cate) : ?>
            <tr class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?= $cate['id'] ?></td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?= $cate['product_name'] ?></td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> <img width="700px" src="../img/<?= $cate['image']?>" alt=""> </td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?= $cate['price'] ?></td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?= $cate['quantity'] ?></td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?= $cate['description']?></td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?= $cate['cate_id'] ?></td>
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?= $cate['created_at'] ?></td>
               
              
                <td class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <a href="edit_products.php?id=<?= $cate['id'] ?>">sua</a>
                    <a href="del_products.php?id=<?= $cate['id'] ?>" 
                    onclick=" return confirm('Are you sure you want to delete?');">xoa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <div class="mx-auto  bg-blue-500 text-white font-bold py-2 px-4 rounded w-[190px] "><a class="ml-9" href="../logout.php">Đăng xuất
            
            </a></div>
    
       </section>

</body>

</html>