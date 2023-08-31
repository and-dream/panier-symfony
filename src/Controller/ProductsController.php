<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductsController extends AbstractController
{
    #[Route('/', name: 'product_index')]
    public function index(ProductsRepository $repo): Response
    {
        
        $products = $repo->findAll();
        return $this->render('products/index.html.twig', [
            'products' => $products,
        ]);
    }
}


