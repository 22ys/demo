<?php

include 'sql.php';

  $valid = true;
  $message = '';
  $tags = $_POST['tags'];
  $id = $_POST['ID'];

$sql = "UPDATE tags SET tags='$tags' WHERE id=".$id;


if(mysqli_query($conn,$sql)){
   $message = '修改成功';
}else{
   $valid = false;
   $message = '修改失败'.$sql;
}

echo json_encode(array('valid' => $valid,'message' =>$message),JSON_UNESCAPED_UNICODE);

mysqli_close($conn);

?>