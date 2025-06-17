<?php

function base_url($path = "")
{
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $base_url = $protocol.$host;
    return $base_url.'/'.ltrim($path, '/');
}


