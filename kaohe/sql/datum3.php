<?php

include 'sql.php';

  $valid = true;
  $message = '';
  if(isset($_POST['headimg']) && $_POST["headimg"]!=""){
             $headimg = $_POST['headimg'];
             if(preg_match('/^(data:\s*image\/(\w+);base64,)/',$headimg,$res)){
                 $type = $res[2];
                $new_Avatar = 'upload/'.date('Ymd',time()).'/';
                // 判断文件是否存在
                if(!file_exists($new_Avatar)){
                    mkdir($new_Avatar,0777,true);
                }

                $new_Avatar = $new_Avatar.time().'.'.$type;

                if(!file_put_contents($new_Avatar,base64_decode(str_replace($res[1],'',$headimg)))){
                    $valid = false;
                    $message = '头像移入失败';
                }

             }
        }else{
            $valid = false;
            $message = '头像不能为空，必须输入';
        }
  $petName =($_POST['petName']);
  $username = $_POST['username'];
  $sex = $_POST['sex'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

$sql = "UPDATE user SET petName='$petName',username='$username',sex='$sex',phone='$phone',email='$email',headimg='$new_Avatar' WHERE roleId=".'1';



if(mysqli_query($conn,$sql)){
   $message = '修改成功';
}else{
   $valid = false;
   $message = '修改失败'.$sql;
}

echo json_encode(array('valid' => $valid,'message' =>$message),JSON_UNESCAPED_UNICODE);

mysqli_close($conn);

?>