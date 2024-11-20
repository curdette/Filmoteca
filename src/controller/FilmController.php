<?php

namespace App\Controller;
use src\Repository\FilmRepository;
class FilmController
{
    private $filmRepository;

    public function __construct()
    {
        // Instanciation de FilmRepository
        $this->filmRepository = new FilmRepository();
    }
    public function create()
    {
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }


}

?>