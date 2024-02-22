<?php

namespace App\Controller;
use App\Controller\Abstract\AbstractController;

class MainController extends AbstractController
{
    public function index(): void
    {
        $this->renderView('Main::index');
    }
}