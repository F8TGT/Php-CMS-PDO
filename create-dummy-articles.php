<?php

require 'init.php';

if (isPostRequest()) {
    $article = new Article();

    if ($article->generateDummyData()) {
        redirect('admin.php');
    }
}


?>
