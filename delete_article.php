<?php

require_once "init.php";
checkUserLoggedIn();

if (isPostRequest()) {
    $id = $_GET["id"];
    $article = new Article();
}
