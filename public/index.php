<?php

declare(strict_types=1);

use App\App;
use App\Config;
use App\Controllers\BookController;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

session_start();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

$router = new Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/signin', [UserController::class, 'indexofsignin'])
    ->get('/signup', [UserController::class, 'indexofsignup'])
    ->post('/signupF', [UserController::class, 'signup'])
    ->post('/home', [UserController::class, 'login'])
    ->get('/logout', [UserController::class, 'logout'])
    ->get('/addnewbook', [BookController::class, 'ViewOfAddBookPage'])
    ->post('/NewBookFunction', [BookController::class, 'AddNewBook'])
    ->get('/Editbook', [BookController::class, 'ViewOfEditBookPage'])
    ->post('/EditBookFunction', [BookController::class, 'EditBoook'])
    ->get('/Deletebook', [BookController::class, 'DeleteBook'])
;

(
    new App(
    $router,
        ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
        new Config($_ENV)
    )
)->run();