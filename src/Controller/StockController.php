<?php

namespace App\Controller;

use App\Repository\StockRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StockController extends AbstractController
{
    
    #[Route(path:"/monprofil", name:"monprofil")]  
    public function getStockNames(StockRepository $stockRepository): Response
    {
        $stocks = $stockRepository->findAll();


        return $this->render('default/monprofil.html.twig', ['stocks' => $stocks]);
    }
}
