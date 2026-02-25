<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return "Ласкаво просимо на сайт ювелірної майстерні!";
    }

    public function about()
    {
        return "Цей проєкт призначений для управління замовленнями, клієнтами та ювелірними виробами.";
    }
}