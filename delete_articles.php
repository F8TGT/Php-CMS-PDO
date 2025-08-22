<?php

require 'init.php';

header('Content-Type: application/json');
$response = ['success' => false, 'message' => ''];

echo json_encode($response);
