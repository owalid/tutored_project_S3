<?php

namespace GeroWebSite\GeroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AjoutArgent
 *
 * @ORM\Table(name="ajout_argent")
 * @ORM\Entity(repositoryClass="GeroWebSite\GeroBundle\Repository\AjoutArgentRepository")
 */
class AjoutArgent
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
     * @ORM\Column(name="MontantArgent", type="float")
     */
    private $montantArgent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     */
    private $dateAjout;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateursBundle\Entity\Utilisateurs", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;


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
     * Set montantArgent
     *
     * @param float $montantArgent
     *
     * @return AjoutArgent
     */
    public function setMontantArgent($montantArgent)
    {
        $this->montantArgent = $montantArgent;

        return $this;
    }

    /**
     * Get montantArgent
     *
     * @return float
     */
    public function getMontantArgent()
    {
        return $this->montantArgent;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return AjoutArgent
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur
     *
     * @return AjoutArgent
     */
    public function setUtilisateur(\Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
