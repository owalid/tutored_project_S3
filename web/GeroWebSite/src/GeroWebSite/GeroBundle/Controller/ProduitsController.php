<?php

namespace GeroWebSite\GeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function homeAction()
    {
        return $this->render('GeroBundle:Default:produits/layout/home.html.twig');
    }

    public function produitAction(){

    }

    public function presentationAction(){

        return $this->render('GeroBundle:Default:produits/layout/presentation.html.twig');
    }
}
