<?php
$db = new database();

    $name = 1;
    

        $value_user = array(
             "status" => $name
        );
        $con_user = "article_id='{$_GET['id']}'";
        $query_category = $db->update("article", $value_user, $con_user);

        if ($query_category == TRUE) {
                echo "<script>";
                echo "alert('อนุมัติบทความสำเร็จ');";
                echo "window.location='$baseUrl/back/article'";
                echo "</script>";
        }
    






