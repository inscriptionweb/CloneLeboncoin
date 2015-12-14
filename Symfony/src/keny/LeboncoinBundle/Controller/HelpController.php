<?php

namespace keny\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelpController extends Controller
{
    public function helpAction()
    {
        return $this->render('kenyLeboncoinBundle:Help:help.html.twig', array(
        	

        	));
    }
}
