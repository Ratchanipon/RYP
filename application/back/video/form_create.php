<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    
    
            $value_user = array(
                "name_video" => trim($_POST['name_video']),
                "link" => trim($_POST['link']),
                "detail_video" => trim($_POST['detail_video']),
            );
            $query_user = $db->insert("video", $value_user);
            
            if ($query_user == TRUE) {
                echo "<script>";
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/video'";
                echo "</script>";
            }   
    
}





