<?php

include 'sql.php';

  $valid = true;
  $message = '';

  $title = $_POST['title'];
  $content =($_POST['content']);
  $author = $_POST['author'];
  $time = $_POST['time'];
  $tags = $_POST['tags'];
  $status = $_POST['status'];
  $id = $_POST['ID'];

$sql = "UPDATE article SET title='$title',content='$content',author='$author',time='$time',tags='$tags',status='$status' WHERE id=".$id;



if(mysqli_query($conn,$sql)){
   $message = '修改成功';
}else{
   $valid = false;
   $message = '修改失败'.$sql;
}

echo json_encode(array('valid' => $valid,'message' =>$message),JSON_UNESCAPED_UNICODE);

mysqli_close($conn);

?>