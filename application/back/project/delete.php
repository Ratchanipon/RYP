<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("project", "project_id='{$_GET['id']}'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/project");
}else{
    echo "Error! You are not delete income in this project.";
}