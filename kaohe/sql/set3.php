<?php

include 'sql.php';

  $valid = true;
  $message = '';

  $websiteName = $_POST['websiteName'];
  $websiteDomain =$_POST['websiteDomain'];
  $bufferTime = $_POST['bufferTime'];
  $maxFileUpload = $_POST['maxFileUpload'];
  $fileType = $_POST['fileType'];
  $IndexTitle = $_POST['IndexTitle'];
  $MetaKeyWord = $_POST['MetaKeyWord'];
  $MetaCharactor = $_POST['MetaCharactor'];
  $CopyrightInfo = $_POST['CopyrightInfo'];

  $sql = "UPDATE systemset SET websiteName='$websiteName',websiteDomain='$websiteDomain',maxFileUpload='$maxFileUpload',fileType='$fileType',IndexTitle='$IndexTitle',MetaKeyWord='$MetaKeyWord',MetaCharactor='$MetaCharactor',CopyrightInfo='$CopyrightInfo' WHERE bufferTime=".$bufferTime;


if(mysqli_query($conn,$sql)){
   $message = '修改成功';
}else{
   $valid = false;
   $message = '修改失败'.$sql;
}

echo json_encode(array('valid' => $valid,'message' =>$message),JSON_UNESCAPED_UNICODE);

mysqli_close($conn);

?>