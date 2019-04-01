<?php
   include 'sql.php';
   $valid  = true;
   $message = '';


    if(isset($_POST['tags']) && $_POST['tags']!=""){
        $tags = $_POST['tags'];
    }else{
        $valid  = false;
        $message = '类型不能为空';
    }


    if($valid){
        $result = mysqli_query($conn,"SELECT * FROM tags WHERE  tags='$tags'");
        if(mysqli_num_rows($result) == 0){
            $sql = "INSERT INTO tags(tags)VALUES('$tags')";
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