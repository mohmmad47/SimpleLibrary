<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\Models\UserModel;
use App\View;

class UserController
{


    public function indexofsignin() : View
    {
        return View::make('user/SignIn');
    }
    public function indexofsignup() : View
    {
        return View::make('user/SignUp');
    }

    public function signup()
    {
        $db = App::db();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new UserModel();

            $SignUpSucess = $userModel->SignUp($full_name, $email, $password, $db);

            if ($SignUpSucess) {
                return View::make('user/SignIn');
            }
        }

    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $db = App::db();

            $user = $userModel->getUserByEmail($email, $db);


            if ($user && $password === $user['password']) {

                $_SESSION['logged_in'] = true;

                // Set a cookie to remember the user
                setcookie('email', $email, time() + (86400 * 30), '/');

                $displayBooks = new BookController();


                return $displayBooks->displayAllBooks();
            } else {

                echo "Invalid email or password";
            }
        }
    }
    public function logout()
    {
        session_start();

        $_SESSION = array();

        session_destroy();


        setcookie('email', '', time() - 3600, '/');

        return View::make('index');
    }
}