<?php

namespace keny\LeboncoinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="keny\LeboncoinBundle\Entity\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="typeannonce", type="text")
     */
    private $typeannonce;

    /**
    * @ORM\ManyToMany(targetEntity="keny\LeboncoinBundle\Entity\Cathegorie",cascade={"persist"})
    */
    private $cathegorie;

    /**
    * @ORM\ManyToOne(targetEntity="keny\LeboncoinBundle\Entity\Departement",cascade={"persist"})
    */
    private $departement;
    /**
    * @ORM\ManyToOne(targetEntity="keny\LeboncoinBundle\Entity\Annonceur",cascade={"persist"})
    */
    private $annonceur;
        /**
    * @ORM\OneToOne(targetEntity="keny\LeboncoinBundle\Entity\Image",cascade={"persist"})
    */
    private $image;




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Annonce
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cathegorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cathegorie
     *
     * @param \keny\LeboncoinBundle\Entity\Cathegorie $cathegorie
     * @return Annonce
     */
    public function addCathegorie(\keny\LeboncoinBundle\Entity\Cathegorie $cathegorie)
    {
        $this->cathegorie[] = $cathegorie;

        return $this;
    }

    /**
     * Remove cathegorie
     *
     * @param \keny\LeboncoinBundle\Entity\Cathegorie $cathegorie
     */
    public function removeCathegorie(\keny\LeboncoinBundle\Entity\Cathegorie $cathegorie)
    {
        $this->cathegorie->removeElement($cathegorie);
    }

    /**
     * Get cathegorie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCathegorie()
    {
        return $this->cathegorie;
    }

    /**
     * Set annonceur
     *
     * @param \keny\LeboncoinBundle\Entity\Annonceur $annonceur
     *
     * @return Annonce
     */
    public function setAnnonceur(\keny\LeboncoinBundle\Entity\Annonceur $annonceur = null)
    {
        $this->annonceur = $annonceur;

        return $this;
    }

    /**
     * Get annonceur
     *
     * @return \keny\LeboncoinBundle\Entity\Annonceur
     */
    public function getAnnonceur()
    {
        return $this->annonceur;
    }

    /**
     * Set typeannonce
     *
     * @param string $typeannonce
     *
     * @return Annonce
     */
    public function setTypeannonce($typeannonce)
    {
        $this->typeannonce = $typeannonce;

        return $this;
    }

    /**
     * Get typeannonce
     *
     * @return string
     */
    public function getTypeannonce()
    {
        return $this->typeannonce;
    }

    /**
     * Set departement
     *
     * @param \keny\LeboncoinBundle\Entity\Departement $departement
     *
     * @return Annonce
     */
    public function setDepartement(\keny\LeboncoinBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \keny\LeboncoinBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set image
     *
     * @param \keny\LeboncoinBundle\Entity\Image $image
     *
     * @return Annonce
     */
    public function setImage(\keny\LeboncoinBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \keny\LeboncoinBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
