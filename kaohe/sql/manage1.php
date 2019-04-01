<?php
   include 'sql.php';
   $valid  = true;
   $message = '';


    if(isset($_POST['petName']) && $_POST['petName']!=""){
        $petName = $_POST['petName'];
    }else{
        $valid  = false;
        $message = '登录名不能为空';
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
        $roleId = $_POST['roleId'];
    }else{
        $valid  = false;
        $message = '发布人不能为空';
    }

    if(isset($_POST['role']) && $_POST['role']!=""){
          $role = $_POST['role'];
         }else{
                $message = '请选择标签';
                $valid  = false;
        }

    if(isset($_POST['status']) && $_POST['status']!=""){
          $status = $_POST['status'];
         }else{
                $message = '请选择发布状态';
                $valid  = false;
        }



    if($valid){
        $result = mysqli_query($conn,"SELECT * FROM user WHERE petName ='$petName'");
        if(mysqli_num_rows($result) == 0){

            $sql = "INSERT INTO user(petName,phone,email,time,role,status,roleId)VALUES('$petName','$phone','$email','$time','$role','$status','$roleId')";

            if(mysqli_query($conn,$sql)){
                $message = '发布成功';
            }else{
                $valid  = false;
                $message = '发布失败'.$sql;
            }

        }else{
            $valid  = false;
            $message = '用户名存在,请重新选择';
        }

    }

   echo json_encode(array('valid'=>$valid,'message'=>$message),JSON_UNESCAPED_UNICODE);

?>