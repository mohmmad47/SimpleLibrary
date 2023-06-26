<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index() : View
    {
        if (isset($_COOKIE['email'])) {

            $_SESSION['logged_in'] = true;


            setcookie('email', $_COOKIE['email'], time() + (86400 * 30), '/');

            $displayBooks = new BookController();


            return $displayBooks->displayAllBooks();
        }
        return View::make('index');
    }


}