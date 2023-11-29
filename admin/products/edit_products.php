<?php
require_once "../connection.php";
$sql = "SELECT * FROM caterories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories =  $stmt->fetchAll(PDO::FETCH_ASSOC);
// lấy thông tin id
$id = $_GET['id'];

// lấy thông tin dữ liệu cần sửa
$sql = "SELECT * FROM products WHERE id = $id";
// chuẩn bị
$stmt = $conn->prepare($sql);
//thực thi
$stmt->execute();

// lấy dữ liệu
$cate = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $cate_id = $_POST['cate_id'];
   
    $id = $_POST['id'];
    $file = $_FILES['anh'];
  
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
        $file_name = $cate['image'];
    }

   
    if (empty($product_name)) {
        $error = "Tên Sản phẩm không được để trống ";
        $success = false;
    } else if (empty($price)) {
        $error = "Giá không được để trống";
        $success = false;
    } else if (empty($quantity)) {
        $error = "Sô lượng không được để trống";
        $success = false;
    } else
    if (empty($description)) {
        $error = "Mô tả không được để trống";
        $success = false;
    } else
    if (empty($cate_id)) {
        $error = " Mã loại không được để trống";
        $success = false;
    } 
    else 
    if ($success) {
        $sql = "UPDATE products SET product_name='$product_name', price='$price', image='$file_name', 
        quantity='$quantity', description='$description', cate_id='$cate_id' WHERE id = '$id'";
      
        $stmt = $conn->prepare($sql);
        //thực thi
        $stmt->execute();
        header("location: products.php");
        exit;
    }
}


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <form class="col-6 m-auto" action="" method='post' enctype="multipart/form-data">
        <div class="menu d-flex justify-content-around align-items-center" >
        <h1 class="text-[60px] font-bold text-teal-600">EDIT</h1>
        </div>

        <?php if (isset($error)) : ?>
            <div class="bg-red-100 border border-red-400 text-yellow-700 px-4 py-3 rounded relative">
                <?= $error ?>
            </div>
        <?php endif  ?>
        <input type="hidden" name="id" value="<?= $cate['id'] ?>">
        <div class="form-group font-bold text-teal-600">
            <label for="exampleInputEmail1  ">Tên sản phẩm</label>
            <input type="text" name='product_name' class="form-control" placeholder="tên sản phẩm" value="<?= $cate['product_name'] ?>"> <br />

        </div>
        <div class="form-group font-bold text-teal-600">
            <label for="exampleInputEmail1">Ảnh</label>
            <input type="file" class="form-control" name="anh"> <span style="color: red;" ><?= $file_err ?? '' ?></span> <br />

        </div>
      
        <div class="form-group font-bold text-teal-600">
            <label for="exampleInputEmail1">Giá </label>
            <input type="number" class="form-control" name='price' placeholder="" value="<?= $cate['price'] ?>">
            

        </div>
        <div class="form-group font-bold text-teal-600">
            <label for="exampleInputEmail1">Số lượng</label>
            <input type="number" class="form-control" name='quantity' placeholder="Số lượng" value="<?= $cate['quantity'] ?>">

        </div>
        <div class="form-group font-bold text-teal-600">
            <label for="exampleInputEmail1">Mô tả</label>
            
            <textarea class="border border-2 text-black" name="description" placeholder="Mô tả" cols="90" rows="10" ><?=$cate['description'] ?> </textarea> <br/>

        </div>
        <div class="form-group font-bold text-teal-600">
            <label for="exampleInputEmail1">Mã loại</label>
          
           
        <select class="border border-2 text-black"  name="cate_id" id="">
            <?php foreach ($categories as $cate) : ?>
                <option class="border border-2 text-black"  value="<?= $cate['id'] ?>">
                    <?= $cate['cate_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        </div>
        
        <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>