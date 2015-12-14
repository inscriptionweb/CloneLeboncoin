<?php

namespace keny\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller
{
    public function listerOffreAction()
    {
        return $this->render('kenyLeboncoinBundle:Offre:offre.html.twig', array(
        	

        	));
    }
}
