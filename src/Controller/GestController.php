<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestController extends AbstractController
{
    /**
     * @Route("/gestion", name="gestion")
     */
    public function index()
    {
        return $this->render('gestion/index.html.twig');
    }
}
