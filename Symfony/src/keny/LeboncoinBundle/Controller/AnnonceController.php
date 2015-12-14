<?php

namespace keny\LeboncoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use keny\LeboncoinBundle\Entity\Annonce;
use keny\LeboncoinBundle\Form\AnnonceType;

use keny\LeboncoinBundle\Entity\Departement;
use keny\LeboncoinBundle\Form\DepartementType;
use keny\LeboncoinBundle\Entity\Region;
use keny\LeboncoinBundle\Form\RegionType;
use keny\LeboncoinBundle\Entity\Cathegorie;
use keny\LeboncoinBundle\Form\CathegorieType;
use keny\LeboncoinBundle\Entity\Image;
use keny\LeboncoinBundle\Form\ImageType;
use keny\LeboncoinBundle\Entity\Annonceur;
use keny\LeboncoinBundle\Form\AnnonceurType;


class AnnonceController extends Controller
{
    public function createAnnonceAction()
    {

     //creation d'un Doosier et du Patient proprietaire
      $annonce = new Annonce;
      $cathegorie = new Cathegorie;
      $depart = new Departement;
      $region = new Region;
      $image = new Image;
      $annonceur = new Annonceur;




      $formannonce = $this->createForm(new AnnonceType, $annonce);
      //ensuite on peut recupperer la requete ki sera envoyée par le new formulaire
         $request = $this->getRequest();

          #on teste si c'est une requete de type post
        if ($request->getMethod() == 'POST') {
                 //on bind la requete 
                 $formannonce->bind($request);
                 //et on teste si le formulaire est valide
                if($formannonce->isValid()){
                     
                     //on recupere les données liees à l'annonce
                     $annonce -> setDate( $formannonce->getData()->getDate() );
                     $annonce -> setDescription( $formannonce->getData()->getDescription() );
                     $annonce ->  setPrix( $formannonce->getData()->getPrix() );
                     $annonce ->  setTypeannonce( $formannonce->getData()->getTypeannonce() ) ;
                     $annonce -> setTitre( $formannonce->getData()->getTitre() );

                     //on recupere les données liees à l'annonceur
                     $annonceur -> setPseudo( $formannonce->getData()->getPseudo() );
                     $annonceur -> setEmail( $formannonce->getData()->getEmail() );
                     $annonceur -> setTelephone( $formannonce->getData()->getTelephone() );
                    


                     $cathegorie -> setNomCathegorie( $formannonce->getData()->getNomCathegorie() );


                     //on recupere les données liees au departement
                     $depart -> setNomDep( $formannonce->getData()->getNomDep() );
                     //on recupere les données liees a la region
                     $region ->  setNomRegion( $formannonce->getData()->getNomRegion() );
                      //on recupere les données liees a l' image
                     $image ->  setImage(null);

                     //on lie le departement a la region
                     $depart -> setRegion( $region );

                     //on lie l'annonce au autres 
                     $annonce -> setDepartement($depart);
                     $annonce -> setCathegorie($cathegorie);
                     $annonce -> setImage($image);
                     $annonce -> setAnnonceur($annonceur);


                     //on recupere l'entity manager
                      $em = $this->getDoctrine() ->getManager();
                      $em->persist($annonce);
                      var_dump(annonce);
                     //on inserre
                      $em->flush();
                      //on reste dans la page annonce
                     return $this->render('kenyLeboncoinBundle:Annonce:annonce.html.twig', array(
                          'form'=>$formannonce->createView(),
                          
                       ));
                }
        }    


           return $this->render('kenyLeboncoinBundle:Annonce:annonce.html.twig', array(
        	 'form'=>$formannonce->createView(), //on lui envoi le form créé par createView
            ));
        
    }
}
