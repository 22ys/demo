<?php
    include 'sql.php';
    $result = mysqli_query($conn,'SELECT * FROM ob');
    $info = mysqli_fetch_all($result,MYSQLI_ASSOC);
      echo json_encode($info);
?>