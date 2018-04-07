<?php
$db = new database();
    
$value_user = array(
        "name" => trim($_POST['name']),
        "category_id" => trim($_POST['category_id']),
//        "images" => trim($_POST['images']),
        "contact" => trim($_POST['contact']),
        "video" => trim($_POST['video']),
        "detail" => trim($_POST['detail']),
        "Travel_program" => trim($_POST['Travel_program']),
        "location" => trim($_POST['location']),
        "hostelry" => trim($_POST['hostelry']),
        "store" => trim($_POST['store']),
);
$con_user = "project_id='{$_GET['id']}'";
$query_user = $db->update("project", $value_user, $con_user);

if($query_user == TRUE){
    header("location:" . $baseUrl . "/back/project");
     if ($query_user == TRUE) {
                echo "<script>";
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/project'";
                echo "</script>";
}
}