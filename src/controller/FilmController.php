<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Film;
use App\Repository\FilmRepository;
use App\Service\EntityMapper;

class FilmController
{
    private \Twig\Environment $twig;
    private EntityMapper $entityMapperService;
    private FilmRepository $filmRepository;

    public function __construct(){
        $this->twig = \App\Core\TwigEnvironment::create();
        $this->entityMapperService = new EntityMapper();
        $this->filmRepository = new FilmRepository();
        
    }
    public function list(array $queryParams)
    {
       
        $films = $this->filmRepository->findAll();

        if(isset($_POST["delete"])){
            $id = (int)$_POST["id"];
            $film =$this->filmRepository->find($id);
            $this->delete($film);
        }

        if(isset($_POST["read"])){
            $id = (int)$_POST["id"];
            $film =$this->filmRepository->find($id);
            $this->read($film); 
      }

        if(isset($_POST["update"])){
            $id = (int)$_POST["id"];
            $film =$this->filmRepository->find($id);
            $this->update($film);
  }

        echo $this->twig->render('List.html.twig', ['films' => $films]);
        
       
    }
    public function update($film):void {
        echo $this->twig->render('films/update', ['film' => $film]);
        if (isset($_POST["update"])) {
           
            $film=$this->entityMapperService->mapToEntity($_POST, Film::class);
            $this->filmRepository->update($film);
            dd($film);
            header('Location: films/list');
            }

    }
    public function create():void 
    {
        echo $this->twig->render('create.html.twig');
        $filmRepository = new FilmRepository();

        if (!empty($_POST)) {
           
            $film=$this->entityMapperService->mapToEntity($_POST, Film::class);
            $filmRepository->create($film);
            dd($film);
            header('Location: films/list');
            }
	  
    }

    public function read(Film $film)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->read($film);
        
        echo $this->twig->render('films/read.html.twig', ['film' => $film]);
       
    }

    public function delete(Film $film):void
    {

        echo "Suppression d'un film";
        $filmRepository = new FilmRepository();
        $filmRepository->delete($film);
        
    }
}