<?php

namespace keny\LeboncoinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="keny\LeboncoinBundle\Entity\RegionRepository")
 */
class Region
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
     * @ORM\Column(name="nom_region", type="string", length=255)
     */
    private $nomRegion;


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
     * Set nomRegion
     *
     * @param string $nomRegion
     * @return Region
     */
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;

        return $this;
    }

    /**
     * Get nomRegion
     *
     * @return string 
     */
    public function getNomRegion()
    {
        return $this->nomRegion;
    }
}
