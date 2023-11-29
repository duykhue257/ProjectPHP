<?php
// Kết nối đến CSDL
require_once "../connection.php";
$sql = "SELECT * FROM caterories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories =  $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $file = $_FILES['anh'];
    // lấy tên file
    $file_name = $file['name'];
    $img = ['jpeg', 'jpg', 'png', 'gif', 'JPG', 'webp'];
    // lấy thông tin dduoi file
    $success = true;
    // kiểm tra xemcos file ko
    if ($file['size'] > 0) {
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        // kiểm tra xem ext có phải ảnh ko    
        if (!in_array($ext, $img)) {
            $file_err = "file của bạn ko phải ảnh";
            $success = false;
        }
        // kiểm tra dung luojng ko quá 1 MB
        if ($file['size'] > 1000000) {
            $file_err = "file lướn hơn 1 MB";
            $success = false;
        }
        // kiểm tra để upload
        if (!isset($file_err)) {
            //di chuyển file đến thư mục website
            move_uploaded_file($file['tmp_name'], '../img/' . $file_name);
            $msg = "Upload tahfnh công";
            $success = true;
        }
    } else {
        $file_err = 'bạn chưa nhập file';
        $success = false;
    }
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $cate_id = $_POST['cate_id'];
    
    $created_at = $_POST['created_at'];
    // echo "Today is " . $created_at;

    if (empty($product_name)) {
        $error = "Tên sản phẩm không được để trống ";
        $success = false;
    }else if (empty($description)) {
        $error = "Mô tả không được để trống";
        $success = false;
    }else if (empty($price)) {
        $error = "giá không được để trống";
        $success = false;
    }else
    if (empty($quantity)) {
        $error = "Số lượng không được để trống";
        $success = false;
    }else
    if (empty($cate_id)) {
        $error = " mã loại không được để trống";
        $success = false;
    }else
    // if (empty($ngaydang)) {
    //     $error = " ngay dang không được để trống";
    //     $success = false;
    // }else
    if ($success) {
        $sql = "INSERT INTO products(product_name, image, price, quantity, description, cate_id, created_at) 
                    VALUES ('$product_name', '$file_name','$price', '$quantity', '$description', '$cate_id', '$created_at')";


  
    

        $stmt = $conn->prepare($sql);
        //thực thi
        $stmt->execute();
        header("location: products.php");
        exit;
    }
}

// Thực thi truy vấn để thêm dữ liệu vào CSDL

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thémanpham</title>
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
                    <img class="w-[200px] h-[200px]   " src="../img/image(1246).png" alt="">
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

    <?php if (isset($error)) : ?>
    <div class="bg-red-100 border border-red-400 text-green-700 px-4 py-3 rounded relative">
        <?= $error ?>
    </div>
    <?php endif  ?>
   <!-- <form action="" method='post' enctype="multipart/form-data">
        <input type="text" name='product_name' placeholder="tên sp"> <br />
        <?php if (isset($msg)) : ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"><?= $msg ?></div>
        <?php endif  ?>
        <input type="file" name="anh"> <span style="color : red;" ><?= $file_err ?? '' ?></span> <br />
        <input type="number" name='price' placeholder="giá"> <br />
        <input type="number" name='quantity' placeholder="số luọng"> <br />
        <span>Mô tả</span>
        <textarea name="description" id="" cols="100" rows="10"></textarea>
        <label for="">Loại</label>
        <select name="cate_id" id="">
            <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate['id'] ?>">
                    <?= $cate['cate_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
       <input type="date" name="created_at">
        <button type="submit">thêm</button>
    </form> -->
    <h1 class="text-[60px] ml-[700px] font-bold text-teal-600 w-[1440px] mx-auto">ADD</h1>

    <form action="" method='post' enctype="multipart/form-data" class="max-w-lg mx-auto">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
                Tên sản phẩm
            </label>
            <input  type="text" name='product_name' class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">
        </div>
        <?php if (isset($msg)) : ?>
            <div class="notification"><?= $msg ?></div>
        <?php endif  ?>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
                Ảnh
            </label>
            <input type="file" name="anh" type="text" name='cate_name'  class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">  <span style="color : red;" ><?= $file_err ?? '' ?></span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
              Giá
            </label>
            <input  type="number" name='price' class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
                số lượng
            </label>
            <input  type="number" name='quantity' class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
               Tên loại
            </label>
            <select name="cate_id" id="">
            <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate['id'] ?>">
                    <?= $cate['cate_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
                Mô tả
            </label>
            <input type="text"name="description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
                Ngày tạo
            </label>
            <input type="date" name="created_at" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="">
        </div>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Update
        </button>

    </form>

</body>

</html>