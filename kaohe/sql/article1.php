<?php
   include 'sql.php';
   $valid  = true;
   $message = '';


    if(isset($_POST['title']) && $_POST['title']!=""){
        $title = $_POST['title'];
    }else{
        $valid  = false;
        $message = '标题不能为空';
    }

    if(isset($_POST['content']) && $_POST['content']!=""){
        $content =($_POST['content']);
    }else{
        $valid  = false;
        $message = '内容不能为空';
    }

    if(isset($_POST['author']) && $_POST['author']!=""){
        $author = $_POST['author'];
        $time = $_POST['time'];
    }else{
        $valid  = false;
        $message = '发布人不能为空';
    }

    if(isset($_POST['tags']) && $_POST['tags']!=""){
          $tags = $_POST['tags'];
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
        $result = mysqli_query($conn,"SELECT * FROM article WHERE title ='$title'");
        if(mysqli_num_rows($result) == 0){

            $sql = "INSERT INTO article(title,content,author,time,tags,status)VALUES('$title','$content','$author','$time','$tags','$status')";

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