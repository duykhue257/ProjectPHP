<?php
//  file conection để kết nối đến php
   $host = "localhost";
   $dbname = "web2014.02";
   $username = "root";
   $password ="";

   try{
    //tạo chuỗi kết nối CSDL
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password ); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // kiểm tra thành công (nhớ xóa sau khi kiểm tra song)
        // echo"kết nối thành công";
   } catch(PDOException $e){
    echo"lỗi kết nối<br/>". $e->getMessage();
   }
   
   ?>
   