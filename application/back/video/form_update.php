<?php
$db = new database();
        $value_user = array(
            "name_video" => trim($_POST['name_video']),
            "detail_video" => trim($_POST['detail_video']),
            "link" => trim($_POST['link'])
        );
        $con_user = "video_id='{$_GET['id']}'";
        $query_user = $db->update("video", $value_user, $con_user);

//        if($query_user == TRUE){
//        header("location:" . $baseUrl . "/back/video/");
         if ($query_user == TRUE) {
             
                    echo "<script>";
                    echo "alert('บันทึกข้อมูลสำเร็จ');";
                    echo "window.location='$baseUrl/back/video'";
                    echo "</script>";
            }
        