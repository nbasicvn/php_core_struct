<?php

function config($key)
{
    $config = include BASE_PATH . '/configs/app.php';
    $keys = explode('.', $key);

    $value = [];
    foreach ($keys as $k) {
        if (empty($value)) {
            $value = $config[$k];
        } else {
            if (isset($value[$k])) {
                $value = $value[$k];
            }
        }
    }
    return $value;
}

function base_path($path = '')
{
    return BASE_PATH . '/' . $path;
}

function app_path($path = '')
{
    return APP_PATH . '/' . $path;
}