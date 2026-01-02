<?php
session_start();

/**
 * Autoload sederhana (MVC)
 */
spl_autoload_register(function ($class) {
    $paths = [
        __DIR__ . '/../core/' . $class . '.php',
        __DIR__ . '/../app/controller/' . $class . '.php',
        __DIR__ . '/../app/model/' . $class . '.php',
    ];

    foreach ($paths as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

/**
 * Default route
 * Portal publik → nanti ada tombol login
 */
$defaultRoute = 'Portal/index';
$urlParam = $_GET['url'] ?? $defaultRoute;


/**
 * Alias route biar URL bersih & manusiawi
 */
$aliasRoutes = [
    'login'      => 'Portal/index',
    'login-post' => 'Auth/authenticate',
    'logout'     => 'Auth/logout',
    'dashboard'  => 'Dashboard/index',
];



/**
 * Ambil parameter URL
 * contoh: ?url=login
 */
$urlParam = $_GET['url'] ?? $defaultRoute;

// Mapping alias
if (isset($aliasRoutes[$urlParam])) {
    $urlParam = $aliasRoutes[$urlParam];
}

// Pecah controller / method
$url = explode('/', $urlParam);

$controllerName = ucfirst($url[0]) . 'Controller';
$methodName     = $url[1] ?? 'index';

/**
 * Eksekusi controller
 */
if (class_exists($controllerName)) {
    $controller = new $controllerName();

    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        // Method tidak ada → balik ke Portal
        header("Location: /");
        exit;
    }
} else {
    // Controller tidak ada → balik ke Portal
    header("Location: /");
    exit;
}
