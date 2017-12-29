<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 08/12/2017
 * Time: 15:38
 */

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @ORM\OneToOne(targetEntity="GeroWebSite\GeroBundle\Entity\UtilisateursSolde", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $solde;

    /**
     * Set solde
     *
     * @param \GeroWebSite\GeroBundle\Entity\UtilisateursSolde $solde
     *
     * @return Utilisateurs
     */
    public function setSolde(\GeroWebSite\GeroBundle\Entity\UtilisateursSolde $solde = null)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return \GeroWebSite\GeroBundle\Entity\UtilisateursSolde
     */
    public function getSolde()
    {
        return $this->solde;
    }
}
