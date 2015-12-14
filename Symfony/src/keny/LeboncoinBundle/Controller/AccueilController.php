<?php

namespace keny\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        return $this->render('kenyLeboncoinBundle:Accueil:accueil.html.twig', array(
        	

        	));
    }
}
