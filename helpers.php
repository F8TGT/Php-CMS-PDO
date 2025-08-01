<?php

use JetBrains\PhpStorm\NoReturn;

function base_url($path = ""): string
{
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $base_url = $protocol.$host.'/'.PROJECT_DIR;
    return $base_url.'/'.ltrim($path, '/');
}

function base_path($path = ""): string
{
    $rootPath = dirname(__DIR__).DIRECTORY_SEPARATOR.PROJECT_DIR;
    return $rootPath.DIRECTORY_SEPARATOR.ltrim($path, DIRECTORY_SEPARATOR);
}

function uploads_path($filename = ''): string
{
    return base_path('uploads'.DIRECTORY_SEPARATOR.$filename);
}

function uploads_url($filename = ''): string
{
    return base_path('uploads/'.ltrim($filename, '/'));
}

function asset_url($path = ""): string
{
    return base_url('assets/').ltrim($path, '/');
}

#[NoReturn]
function redirect($url): void
{
    header('Location: '.base_url($url));
    exit;
}

function isPostRequest(): bool
{
    return $_SERVER['REQUEST_METHOD'] == "POST";
}

function getPostData($field, $default = null)
{
    return isset($_POST[$field]) ? trim($_POST[$field]) : $default;
}

function formatDate($date): string
{
    return date('F j, Y', strtotime($date));
}

function isLoggedIn(): bool
{
    if (isset($_SESSION['user_id'])) {
        return true;
    }
    return false;
}

function checkUserLoggedIn(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user_id'])) {
        redirect("login.php");
    }
}
