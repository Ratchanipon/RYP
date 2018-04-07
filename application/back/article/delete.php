<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$query = $db->delete("article", "article_id='{$_GET['id']}'");
if($query == TRUE){
    header("location:" . $baseUrl . "/back/article");
}else{
    echo "Error! You are not delete income in this article.";
}