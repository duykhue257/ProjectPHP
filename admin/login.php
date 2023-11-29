<?php
session_start();
require_once 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //sql kiểm tra username
    $sql ="SELECT * from users WHERE username= '$username'";
    $stmt = $conn->prepare($sql);
    //thực thi
    $stmt->execute();
    // lấy dữ liệu
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // kiểm tra xem username có trong database ko
    if($user){
        if($password == $user['password']){
            $_SESSION['user']= $user;
            $msg = "dang nhap thanh cong";
            header("location: ./categories/categories.php?msg=$msg");
        }// truong hop sai MK
        else{
            $error['password'] = "mat khau khong chinh xac";
        }
    }// truong hop sai user
    else{
        $error['username'] = "username khong dung";
    }


}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form {
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px #ddd;
  max-width: 400px;
  margin: 0 auto;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
.login-btn {
  display: inline-block;
  padding: 12px 24px;
  border-radius: 4px;
  background-color: #4CAF50;
  color: #fff;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease;
}

.login-btn:hover {
  background-color: #3e8e41;
}
    </style>
</head>
<body>

    <form action="" method="post">
        <label for="">Username</label>
        <input type="text" name="username">
        <span style="color: red;">
        <?=$error['username'] ?? '' ?>
    </span>
        <br/>
        <label for="">Password</label>
        <input type="password" name="password">
        <span style="color: red;">
        <?=$error['password'] ?? '' ?>
    </span>
    <br/>
        <button class="login-btn" type="submit">Login</button>
    </form>
</body>
</html>