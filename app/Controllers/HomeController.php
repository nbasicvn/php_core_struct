<?php

namespace App\Controllers;

use App\Helpers\TemplateEngine;

class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $items = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        echo TemplateEngine::render('home.twig', compact('items'));
    }
}