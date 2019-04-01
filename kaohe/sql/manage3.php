<?php

include 'sql.php';

  $valid = true;
  $message = '';

  $petName = $_POST['petName'];
  $phone =($_POST['phone']);
  $email = $_POST['email'];
  $time = $_POST['time'];
  $status = $_POST['status'];
  $role = $_POST['role'];
  $roleId = $_POST['roleId'];
  $id = $_POST['ID'];


  $sql = "UPDATE user SET petName='$petName',phone='$phone',email='$email',time='$time',status='$status',role='$role',roleId='$roleId' WHERE id=".$id;


if(mysqli_query($conn,$sql)){
   $message = '修改成功';
}else{
   $valid = false;
   $message = '修改失败'.$sql;
}

echo json_encode(array('valid' => $valid,'message' =>$message),JSON_UNESCAPED_UNICODE);

mysqli_close($conn);

?>