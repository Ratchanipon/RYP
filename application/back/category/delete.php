<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("category", "category_id='{$_GET['id']}'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/category");
}else{
    echo "error";
}
