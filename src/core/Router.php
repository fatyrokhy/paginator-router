<?php

namespace Rokhy\core;


class Router{

     private static string $rootPath;

    public static function setRootPath(string $path): void
    {
        self::$rootPath = rtrim($path, '/');
    }
    
     public static function resolve(): void
    {
        $url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if (str_contains($url, "api")) {
            require_once self::$rootPath . "/routes/route.api.php";
        } else {
            require_once self::$rootPath . "/routes/route.web.php";
        }

        global $routes;

        if (!isset($routes[$url])) {
            http_response_code(404);
            echo "404 - Route non trouvée";
            exit;
        }

        $route = $routes[$url];

        if (!class_exists($route["controller"]) || !method_exists($route["controller"], $route["action"])) {
            echo "Erreur : Controller ou méthode introuvable.";
            exit;
        }

        if (!empty($route['gards'])) {
            require_once self::$rootPath . "/app/config/gards.php";
            $p = new $gards['auth']();
            $p();
        }

        $controller = new $route["controller"]();
        $controller->{$route["action"]}();
    }
}


