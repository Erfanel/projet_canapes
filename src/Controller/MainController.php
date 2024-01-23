<?php

namespace App\Controller;

use App\Entity\Canape;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/canapes', name: 'canapes')]
    public function canapes(EntityManagerInterface $manager): Response
    {
        $canapeRepo = $manager->getRepository(Canape::class);
        $listeCanape = $canapeRepo->findAll();

        return $this->render('main/canapes.html.twig',[
            "listeCanape" => $listeCanape
        ]);
    }

    #[Route('/canape/{id}', name: 'canapeId')]
    public function canapeId($id, EntityManagerInterface $manager): Response
    {
        $canapeRepo = $manager->getRepository(Canape::class);
        $canapeId = $canapeRepo->find($id);

        return $this->render('main/canapeId.html.twig',[
            "canapeId" => $canapeId
        ]);
    }
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('main/about.html.twig');
    }


}
