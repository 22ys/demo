<?php
    include 'sql.php';

      $valid = true;
      $message = '';
     $ID = $_POST['ID'];
    $sql = "delete from article where id=".$_POST['ID'];
    if(mysqli_query($conn,$sql)){
       $message = '删除成功';
    }else{
       $valid = false;
       $message = '删除失败'.$sql;
    }

    echo json_encode(array('valid' => $valid,'message' =>$message),JSON_UNESCAPED_UNICODE);
    mysqli_close($conn);


?>