<?php

namespace GeroWebSite\GeroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit_Composer
 *
 * @ORM\Table(name="produit__composer")
 * @ORM\Entity(repositoryClass="GeroWebSite\GeroBundle\Repository\Produit_ComposerRepository")
 */
class Produit_Composer
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
     * @var int
     *
     * @ORM\Column(name="id_Produit", type="integer")
     */
    private $idProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="qteComposition", type="integer")
     */
    private $qteComposition;

    /**
     * @ORM\ManyToOne(targetEntity="GeroWebSite\GeroBundle\Entity\Produit_Simple", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $produitSimple;

    /**
     * @ORM\OneToOne(targetEntity="GeroWebSite\GeroBundle\Entity\Produit", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;


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
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return Produit_Composer
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set qteComposition
     *
     * @param integer $qteComposition
     *
     * @return Produit_Composer
     */
    public function setQteComposition($qteComposition)
    {
        $this->qteComposition = $qteComposition;

        return $this;
    }

    /**
     * Get qteComposition
     *
     * @return int
     */
    public function getQteComposition()
    {
        return $this->qteComposition;
    }

    /**
     * Set produitSimple
     *
     * @param \GeroWebSite\GeroBundle\Entity\Produit_Simple $produitSimple
     *
     * @return Produit_Composer
     */
    public function setProduitSimple(\GeroWebSite\GeroBundle\Entity\Produit_Simple $produitSimple)
    {
        $this->produitSimple = $produitSimple;

        return $this;
    }

    /**
     * Get produitSimple
     *
     * @return \GeroWebSite\GeroBundle\Entity\Produit_Simple
     */
    public function getProduitSimple()
    {
        return $this->produitSimple;
    }

    /**
     * Set produit
     *
     * @param \GeroWebSite\GeroBundle\Entity\Produit $produit
     *
     * @return Produit_Composer
     */
    public function setProduit(\GeroWebSite\GeroBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \GeroWebSite\GeroBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
