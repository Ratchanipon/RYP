<?php
$db = new database();

$name = $_REQUEST["province"];
    $sql = "SELECT province FROM category where province='$name' ";
    $query = $db->query($sql);
    $rows = $db->rows($query);

if($rows > 0){
        echo "<script>";
        echo "alert(' มีข้อมูลนี้อยู่ในระบบแล้ว กรุณากรอกข้อมูลใหม่อีกครั้ง');";
        echo "window.location='$baseUrl/back/category/update'";
        echo "</script>";
    }else{
        $value_user = array(
            "province" => trim($_POST['province'])
        );
        $con_user = "Category_id='{$_GET['id']}'";
        $query_category = $db->update("category", $value_user, $con_user);

        if ($query_category == TRUE) {
                echo "<script>";
                echo "alert('แก้ไขข้อมูลสำเร็จ');";
                echo "window.location='$baseUrl/back/category'";
                echo "</script>";
        }
    }






