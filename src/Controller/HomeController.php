<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/", name="port")
     */
    public function indexHome()
    {
    	return $this->redirectToRoute('app_login');
    }
    

     /**
     * @Route("/gestion", name="gestion")
     */
    public function accueilHome()
    {
    	return $this->render('gestion/accueil.html.twig');
    }
}
