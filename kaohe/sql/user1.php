<?php
   include 'sql.php';
   $valid  = true;
   $message = '';


    if(isset($_POST['username']) && $_POST['username']!=""){
        $username = $_POST['username'];
    }else{
        $valid  = false;
        $message = '用户名不能为空';
    }

    if(isset($_POST['phone']) && $_POST['phone']!=""){
        $phone =($_POST['phone']);
    }else{
        $valid  = false;
        $message = '手机号不能为空';
    }

    if(isset($_POST['email']) && $_POST['email']!=""){
        $email = $_POST['email'];
        $time = $_POST['time'];
    }else{
        $valid  = false;
        $message = '邮箱不能为空';
    }

    if(isset($_POST['sex']) && $_POST['sex']!=""){
          $sex = $_POST['sex'];
         }else{
                $message = '请选择性别';
                $valid  = false;
        }
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
    if($valid){
        $result = mysqli_query($conn,"SELECT * FROM user WHERE  username='$username'");
        if(mysqli_num_rows($result) == 0){
            $sql = "INSERT INTO user(username,phone,email,time,sex,headimg)VALUES('$username','$phone','$email','$time','$sex','$new_Avatar')";
            if(mysqli_query($conn,$sql)){
                $message = '发布成功';
            }else{
                $valid  = false;
                $message = '发布失败'.$sql;
            }

        }else{
            $valid  = false;
            $message = '标题已存在,请重新选择';
        }

    }


   
   echo json_encode(array('valid'=>$valid,'message'=>$message),JSON_UNESCAPED_UNICODE);

?>
