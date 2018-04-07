<?php
$db = new database();
$value_user = array(
  /*  <!-- "user_id" => trim($_POST['user_id']), --> */
    "name" => trim($_POST['name']),
    "email" => trim($_POST['email']),
    "age" => trim($_POST['age']),
    "sex" => trim($_POST['sex']),
    "permission" => trim($_POST['permission']),
    "password" => trim($_POST['password'])
);
$con_user = "user_id='{$_GET['id']}'";
$query_user = $db->update("user", $value_user, $con_user);

if($query_user == TRUE){
    header("location:" . $baseUrl . "/back/user");
}
