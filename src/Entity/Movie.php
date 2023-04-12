<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $genre_id = null;

    #[ORM\Column]
    private ?int $top_actor_id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $budget = null;

    #[ORM\ManyToOne(inversedBy: 'movies')]
    private ?genre $genre = null;

    #[ORM\ManyToOne(inversedBy: 'movies')]
    private ?TopActor $top_actor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenreId(): ?int
    {
        return $this->genre_id;
    }

    public function setGenreId(int $genre_id): self
    {
        $this->genre_id = $genre_id;

        return $this;
    }

    public function getTopActorId(): ?int
    {
        return $this->top_actor_id;
    }

    public function setTopActorId(int $top_actor_id): self
    {
        $this->top_actor_id = $top_actor_id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(string $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getGenre(): ?genre
    {
        return $this->genre;
    }

    public function setGenre(?genre $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getTopActor(): ?TopActor
    {
        return $this->top_actor;
    }

    public function setTopActor(?TopActor $top_actor): self
    {
        $this->top_actor = $top_actor;

        return $this;
    }
}
