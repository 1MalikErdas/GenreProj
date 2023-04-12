<?php

namespace App\Controller;

use App\Entity\Genre;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    #[Route('/', name: 'genres')]
    public function getGenres(ManagerRegistry $doctrine): Response
    {
        $genres = $doctrine->getRepository(Genre::class)->findAll();

        return $this->render('genre/index.html.twig', [
            'genres' => $genres
        ]);
    }
    #[Route('genre/{id}', name: 'movies')]
    public function getMovies(ManagerRegistry $doctrine, int $id): Response
    {
        $genre = $doctrine->getRepository(Genre::class)->find($id);

        return $this->render('movie.html.twig', [
            'genre' => $genre
        ]);
    }
}
