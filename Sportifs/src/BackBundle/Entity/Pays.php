<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\PaysRepository")
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255, nullable=true)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="continent", type="string", length=255, nullable=true)
     */
    private $continent;

//    /**
//     * @ORM\OneToMany(targetEntity="BackBundle\Entity\Voyage" , mappedBy="destination", cascade={"persist"})
//     * @ORM\JoinColumn(nullable=false)
//     */
//    private $voyages;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Pays
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set langue
     *
     * @param string $langue
     *
     * @return Pays
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set continent
     *
     * @param string $continent
     *
     * @return Pays
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * Get continent
     *
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->voyages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add voyage
     *
     * @param \BackBundle\Entity\Voyage $voyage
     *
     * @return Pays
     */
    public function addVoyage(\BackBundle\Entity\Voyage $voyage)
    {
        $this->voyages[] = $voyage;

        return $this;
    }

    /**
     * Remove voyage
     *
     * @param \BackBundle\Entity\Voyage $voyage
     */
    public function removeVoyage(\BackBundle\Entity\Voyage $voyage)
    {
        $this->voyages->removeElement($voyage);
    }

    /**
     * Get voyages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVoyages()
    {
        return $this->voyages;
    }

    function __toString()
    {
        return $this->nom;
    }


}
