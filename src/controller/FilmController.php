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

    public function homePage(){
        echo $this->twig->render('homePage.html.twig');
    }
    public function list(array $queryParams)
    {
       
        $films = $this->filmRepository->findAll();
        $action = $_POST['action']??null;
        $id=$_POST["id"]??null;
        if(isset($id) && isset($action)){
            $id=(int)$id;
            $film =$this->filmRepository->find($id);
            switch($action){
                case 'delete':
                    $this->delete($film);
                    break;
                case 'read':
                    $this->read($film); 
                    break;
                case 'update':
                    $this->update($id); 
                    header('Location: update');
                    break;
                    
            }
           
        }

        echo $this->twig->render('List.html.twig', ['films' => $films]);
        
       
    }
    public function update(String $id):void {
       echo $this->twig->render('update.html.twig');
            if(isset($_POST["submit"])){
                echo "je suis dans le submit";
                var_dump($_POST);
                
            }
         //   $filmUpdated=$this->entityMapperService->mapToEntity($_GET, Film::class);
           
          //  $this->filmRepository->update($filmUpdated);
            
    }
    public function create():void 
    {
        echo $this->twig->render('create.html.twig');
    

        if (!empty($_POST)) {
           
            $film=$this->entityMapperService->mapToEntity($_POST, Film::class);
            $this->filmRepository->create($film);
            dd($film);
            header('Location: films/list');
            }
	  
    }

    public function read(Film $film)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->read($film);
        
        echo $this->twig->render('read.html.twig', ['film' => $film]);
       
    }

    public function delete(Film $film):void
    {

        $filmRepository = new FilmRepository();
        $filmRepository->delete($film);
        header('Location: list');
        
    }
}