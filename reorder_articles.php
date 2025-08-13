<?php

require 'init.php';

if (isPostRequest()) {

    if(isset($_POST['reorder_articles'])) {
        $article = new Article();

        var_dump($_POST);

        $article->reorderAndResetAutoIncrement();
        redirect('admin.php');

//        if ($article->generateDummyData($_POST["article_count"])) {
//            redirect('admin.php');
//        } else {
//            echo "SOMETHING HAPPENED IT FAILED";
//        }
    }
}
