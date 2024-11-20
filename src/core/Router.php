<?php

namespace App\Core;

class Router
{
    public function route()
    {
        /**
         * echo '<pre>';
         * var_dump($_SERVER);
         * echo '</pre>';die;
         */

        // Récupère l'URL demandée (sans le domaine et la racine)
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        
        // Récupère les paramètres de la query string (comme ?id=12&name=Inception)
        $queryParams = $_GET; //pour avoir toute les action / info supllementaire

        // Définit les routes et leurs contrôleurs associés
        $routes = [
            'films' => 'FilmController',
            'contact' => 'ContactController',
        ];

        if (array_key_exists($uri, $routes)) {
            $controllerName = 'App\\Controller\\' . $routes[$uri];
            $controller = new $controllerName();

            // Appelle une méthode spécifique avec les paramètres de la requête (par exemple, index())
            $controller->index($queryParams); // On passe les paramètres à la méthode index() . //en gros par exemple si on a un ID on va le donner au controller
        } else {
            // Page non trouvée
            echo "404 Not Found";
        }
    }
}