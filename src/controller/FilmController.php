<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\FilmEntity;
use App\Repository\FilmRepository;

class FilmController
{
    public function list()
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        header('Content-Type: application/json');
        echo json_encode($films);
       /* foreach( $films as $film ){
            $filmEntity = new FilmEntity();
            $filmEntity->setTitle(film['titre']);
            $filmEntity->setSynopsis($film->getSynopsis());
            $filmEntity->setDirector($film->getDirector());
        }*/
    }

    public function create()
    {
        echo "Création d'un film";
    }

    public function read()
    {
        echo "Lecture d'un film";
    }

    public function update()
    {
        echo "Mise à jour d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
}