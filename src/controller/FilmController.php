<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;
use App\Service\EntityMapper;

class FilmController
{
    private \Twig\Environment $twig;

    public function __construct(){
        $this->twig = \App\Core\TwigEnvironment::create();
        
    }
    public function list(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();
        echo $this->twig->render('List.html.twig', ['films' => $films]);

       
    }

    public function create():void 
    {
        echo "ajouter un film";
        echo $this->twig->render('create.html.twig');
        $filmRepository = new FilmRepository();
        $filmEntity= new Film();
        $entityMapper = new EntityMapper();
        if (isset($_POST["create"])) {
            $filmEntity=$entityMapper->mapToEntity($_POST,Film::class);
            $filmRepository->create($filmEntity);
            echo $this->twig->render('List.html.twig');
            }
	    
       
        
       
        
      
    }

    public function read(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);

        dd($film);
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