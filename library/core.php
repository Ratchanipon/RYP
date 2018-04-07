<?php

function base_url() {
    return "http://localhost/RYP";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/RYP";
}

function salt_pass($pass) {
    //return md5("itoffside.com" . $pass);
    return $pass;
}
