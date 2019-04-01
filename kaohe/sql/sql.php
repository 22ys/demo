<?php

       header('Access-Control-Allow-Origin:*');
       header('Access-Control-Allow-Methods:GET');
       header('Access-Control-Allow-Headers:x-requested-with,content-type');
       header('Access-Control-Allow-Credentials:true');
       header('Content-type:text/html;charset=utf-8');
        date_default_timezone_set('Asia/Shanghai');
          ini_set('display_errors','On');
          error_reporting(E_ALL);
         define('DATETIME',date("Y-m-d H:i:s"));

         $conn = new mysqli('localhost','root','','item');
         mysqli_query($conn,"set character set utf8");
         mysqli_query($conn,"set names utf8");
         if($conn->connect_error){
             die('数据库连接失败'.$conn->connect_error);
         }else{
             // echo "成功";
         }


      ?>