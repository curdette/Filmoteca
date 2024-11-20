<?php 

namespace Src\Entity;

class FilmEntity
{
    private int $id;
    private string $title;
    private string $type;
    private int $year;
    private string	$synopses;
    private $director;
private \DateTime $creat;
private \DateTime $updated;
private \DateTime $deleted;
    // Getters et setters

    public function getId(): int
    {
        return $this->id;
    }


    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getReleaseDate(): string
    {
        return $this->year;
    }

    public function setReleaseDate(int $releaseDate): void
    {
        $this->year = $releaseDate;
    }

    public function getGenre(): string
    {
        return $this->type;
    }

    public function setGenre(string $genre): void
    {
        $this->type = $genre;
    }
    public function getSynopses(): string
    {
        return $this->synopses;
    }

    public function setSynopses(string $synopses): void
    {
        $this->synopses = $synopses;
    }

    // Getter et Setter pour $director
    public function getDirector(): string
    {
        return $this->director;
    }

    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

    // Getter et Setter pour $creat
    public function getCreat(): \DateTime
    {
        return $this->creat;
    }

    public function setCreat(\DateTime $creat): void
    {
        $this->creat = $creat;
    }

    // Getter et Setter pour $updated
    public function getUpdated(): \DateTime
    {
        return $this->updated;
    }

    public function setUpdated(\DateTime $updated): void
    {
        $this->updated = $updated;
    }

    // Getter et Setter pour $deleted
    public function getDeleted(): \DateTime
    {
        return $this->deleted;
    }

    public function setDeleted(\DateTime $deleted): void
    {
        $this->deleted = $deleted;
    }
}


?>