<?php

use Dotenv\Dotenv;
use App\Core\Application;
use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Models\User;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../core/functions.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS'],
    ]
    ];
$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/home', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->router->get('/logout', [AuthController::class, 'logout']);
// $app->router->post('/logout', [AuthController::class, 'logout']);

$app->router->get('/profile', [AuthController::class, 'profile']);

// $app->router->get('/users', function() {
//     return 'users';
// });

$app->run();

