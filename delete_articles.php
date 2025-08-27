<?php

require 'init.php';

header('Content-Type: application/json');
$response = ['success' => false, 'message' => ''];

if (isPostRequest()) {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['article_ids']) && is_array($data['article_ids'])) {
        $articleIds = $data['article_ids'];

        try {
            $article = new Article();
            $article->deleteMultiple($articleIds);
            $response['success'] = true;
        } catch (Exception $e) {
            $response['message'] = 'ERROR'.$e->getMessage();
        }
    } else {
        $response['message'] = 'No article selected for deletion';
    }
} else {
    $response['message'] = 'Invalid request method';
}

echo json_encode($response);
