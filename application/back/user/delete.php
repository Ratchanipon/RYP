<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("user", "user_id='{$_GET['id']}' AND user_id != '1'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/user");
}else{
    echo "error";
}
