<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db = new database();
    
    $name = $_REQUEST["province"];
    $sql = "SELECT province FROM category where province='$name' ";
    $query = $db->query($sql);
    $rows = $db->rows($query);
    
    if($rows > 0){
        echo "<script>";
        echo "alert(' มีข้อมูลนี้อยู่ในระบบแล้ว กรุณากรอกข้อมูลใหม่อีกครั้ง');";
        echo "window.location='$baseUrl/back/category/create'";
        echo "</script>";
    }else{
        $value_user = array(
            "Category_id" => trim($_POST['Category_id']),
            "province" => trim($_POST['province'])
        );
        $query_user = $db->insert("category", $value_user);

        if ($query_user == TRUE) {
                echo "<script>";
                echo "alert('บันทึกข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/category'";
                echo "</script>";
        }
    }
}



