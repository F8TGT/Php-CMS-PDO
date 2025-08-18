<?php

require 'init.php';

if (isPostRequest()) {

    if(isset($_POST['reorder_articles'])) {
        $article = new Article();

        try {
            $article->reorderAndResetAutoIncrement();
            redirect('admin.php');
        } catch (Exception $e) {
            redirect("admin.php");
        }
    }
}
