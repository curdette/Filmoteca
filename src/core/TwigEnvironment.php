<?php
namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigEnvironment
{
    public static function create(): Environment
    {
        $loader = new FilesystemLoader('/var/www/filmoteca/src/view');
        return new Environment($loader);
    }
}
?>