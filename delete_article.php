<?php

require_once "init.php";
checkUserLoggedIn();

if (isPostRequest()) {
    $id = $_POST["id"];
    $article = new Article();
    if ($article->deleteWithImage($id)) {
        redirect("admin.php");
    } else {
        echo "Error while deleting the article.";
    }
}
