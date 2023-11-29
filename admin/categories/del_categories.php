<?php
require_once '../connection.php';

//lấy id
$id = $_GET['id'];
// câu lệnh xáo dữ liệu
$sql = "DELETE FROM caterories WHERE id='$id'";

 // chuẩn bị
 $stmt = $conn->prepare($sql);
 //thực thi
  $stmt->execute();
 $msg = "xóa dữ liệu thành công";
 header("location: categories.php?msg=$msg");
 die;
?>