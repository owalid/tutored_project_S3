<?php

namespace GeroWebSite\GeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends Controller
{
    public function menuAction(){
        $request = $this->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if (!$session->has('Panier'))
            $article = 0;
        else
            $article = count($session->get('Panier'));

        return $this->render('GeroBundle:Default:panier/layout/panier.html.twig', array('article' => $article));

    }
    public function validationAction()
    {
        return $this->render('GeroBundle:Default:panier/layout/validation.html.twig');
    }

    public function supprimerAction($id){
        $request = $this->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $panier = $session->get('Panier');

        if(array_key_exists($id,$panier)){
            unset($panier[$id]);
            $session->set('Panier', $panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }

        return  $this->redirect($this->generateUrl('Panier'));

    }

    public function  ajouterAction($id){

        $request = $this->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if (!$session->has('Panier')) $session->set('Panier',array());
        $panier = $session->get('Panier');

        if (array_key_exists($id, $panier)) {

            if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');

            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {

            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = '1';

            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $session->set('Panier',$panier);


        return  $this->redirect($this->generateUrl('Panier'));
    }

    public function panierAction()
    {
        $request = $this->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if(!$session -> has('Panier')) $session->set('Panier', array());

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('GeroBundle:Produit')->findArray(array_keys($session->get('Panier')));


        return $this->render('GeroBundle:Default:panier/layout/panier.html.twig', array('produits' => $produits ,
                                                                                            'Panier' => $session->get('Panier')));
    }

}
