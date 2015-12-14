<?php

namespace keny\LeboncoinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="keny\LeboncoinBundle\Entity\DepartementRepository")
 */
class Departement
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
     * @var string
     *
     * @ORM\Column(name="nom_dep", type="string", length=255)
     */
    private $nomDep;

    /**
    * @ORM\ManyToOne(targetEntity="keny\LeboncoinBundle\Entity\Region",cascade={"persist"})
    */
    private $region;


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
     * Set nomDep
     *
     * @param string $nomDep
     * @return Departement
     */
    public function setNomDep($nomDep)
    {
        $this->nomDep = $nomDep;

        return $this;
    }

    /**
     * Get nomDep
     *
     * @return string 
     */
    public function getNomDep()
    {
        return $this->nomDep;
    }

    

    /**
     * Set region
     *
     * @param \keny\LeboncoinBundle\Entity\Region $region
     *
     * @return Departement
     */
    public function setRegion(\keny\LeboncoinBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \keny\LeboncoinBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }
}
