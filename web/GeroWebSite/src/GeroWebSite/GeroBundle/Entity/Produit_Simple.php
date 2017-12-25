<?php

namespace GeroWebSite\GeroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit_Simple
 *
 * @ORM\Table(name="produit__simple")
 * @ORM\Entity(repositoryClass="GeroWebSite\GeroBundle\Repository\Produit_SimpleRepository")
 */
class Produit_Simple
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
     * @var float
     *
     * @ORM\Column(name="prixUnitaire", type="float")
     */
    private $prixUnitaire;

    /**
     * @var float
     *
     * @ORM\Column(name="stock", type="float")
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity="GeroWebSite\GeroBundle\Entity\Produit", cascade={"persist","remove"})
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
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     *
     * @return Produit_Simple
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set stock
     *
     * @param float $stock
     *
     * @return Produit_Simple
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return float
     */
    public function getStock()
    {
        return $this->stock;
    }


    /**
     * Set produit
     *
     * @param \GeroWebSite\GeroBundle\Entity\Produit $produit
     *
     * @return Produit_Simple
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
