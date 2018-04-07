<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("video", "video_id='{$_GET['id']}'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/video");
}else{
    echo "Error! You are not delete income in this video.";
}