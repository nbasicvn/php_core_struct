<?php

namespace App\Helpers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TemplateEngine
{
    public static function render($path, $params = [])
    {
        $loader = new FilesystemLoader(base_path('resources/views'));
        $twig = new Environment($loader, [
            'debug' => config('app.debug'),
            'cache' => BASE_PATH . '/cache/twigs',
        ]);

        return $twig->render($path, $params);
    }
}