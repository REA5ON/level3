<?php



//Не работает гет ид



require '../vendor/autoload.php';

use App\QueryBuilder;
use App\controllers\HomeController;
use App\User;


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    //homepage
    $r->addRoute('GET', '/', ['App\controllers\HomeController', 'home']);
    //login
    $r->addRoute('GET', '/login', ['App\controllers\LoginController', 'template']);
    $r->addRoute('POST', '/login', ['App\controllers\LoginController', 'login']);
    //registration
    $r->addRoute('GET', '/registration', ['App\controllers\RegistrationController', 'template']);
    $r->addRoute('POST', '/registration', ['App\controllers\RegistrationController', 'registr']);
    //logout
    $r->addRoute('GET', '/logout', ['App\controllers\LogoutController', 'logout']);
    //create
    $r->addRoute('GET', '/create', ['App\controllers\CreateController', 'template']);
    $r->addRoute('POST', '/create', ['App\controllers\CreateController', 'create']);
    //product_page
    $r->addRoute('GET', '/product/{id:\d+}', ['App\controllers\ProductController', 'getProduct']);
    $r->addRoute('GET', '/category/{category_id:\d+}', ['App\controllers\CategoryController', 'getCategory']);

    $r->addRoute('GET', '/product/edit/{id:\d+}', ['App\controllers\EditController', 'template']);
    $r->addRoute('POST', '/product/edit', ['App\controllers\EditController', 'edit']);
    // The /{title} suffix is optional
    $r->addRoute('GET', '/user/{id:\d+}', ['App\controllers\UserController', 'getUser']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {

    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo '404';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $controller = new $handler[0];
        call_user_func([$controller, $handler[1]], $vars);
        break;
}




