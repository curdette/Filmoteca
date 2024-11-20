<?php

namespace App\Controller;
use src\Repository\FilmRepository;
class FilmController
{
    private $filmRepository;

    public function list()
    {
        // Instanciation de FilmRepository
        $filmRepository = new FilmRepository();
        $recupereFilm = $filmRepository->getInfoFilms();
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