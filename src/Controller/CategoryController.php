<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    // display category by slug take one slug parms 
    #[Route('/category/{slug}', name: 'category_show')]
    public function show(): Response
    {
        return $this->render('category/show.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
