<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    
    $name = $_REQUEST["name"];
    $sql = "SELECT name FROM project where name='$name' ";
    $query = $db->query($sql);
    $rows = $db->rows($query);
    
    if($rows > 0){
        echo "<script>";
        echo "alert(' มีข้อมูลนี้อยู่ในระบบแล้ว กรุณากรอกข้อมูลใหม่อีกครั้ง');";
        echo "window.location='$baseUrl/back/project/create'";
        echo "</script>";
    }else{
        
        $connect = mysqli_connect("localhost", "root", "", "dss");  
            if(isset($_POST["save"])) {  
                $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
                $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
                    if(mysqli_query($connect, $query)) {  
                        echo '<script>alert("Image Inserted into Database")</script>';  
                    }  
            }  
        
        $value_user = array(
        "name" => trim($_POST['name']),
        "category_id" => trim($_POST['category_id']),
        "detail" => trim($_POST['detail']),
        "video" => trim($_POST['video']),
        "contact" => trim($_POST['contact']),
        "location" => trim($_POST['location']),
        "store" => trim($_POST['store']),
        "hostelry" => trim($_POST['hostelry']),
        "Travel_program" => trim($_POST['Travel_program']),
    );
    $query_user = $db->insert("project", $value_user);
        if ($query_user == TRUE) {
                echo "<script>";
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/project'";
                echo "</script>";
        }   
    } 
}


