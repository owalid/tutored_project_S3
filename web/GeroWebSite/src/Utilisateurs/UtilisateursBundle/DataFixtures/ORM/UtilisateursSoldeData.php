<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 26/12/2017
 * Time: 18:51
 */


namespace Utilisateurs\UtilisateursBundle\DataFixures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use GeroWebSite\GeroBundle\Entity\UtilisateursSolde;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;
use Doctrine\Common\DataFixtures\FixtureInterface;

class UtilisateursSoldeData extends Fixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $solde1 = new UtilisateursSolde();
        $solde1->setSolde(50,3);
        $solde1->setUtilisateur($this->getReference('user1'));
        $manager->persist($solde1);

        $solde2 = new UtilisateursSolde();
        $solde2->setSolde(40);
        $solde2->setUtilisateur($this->getReference('user2'));
        $manager->persist($solde2);

        $solde3 = new UtilisateursSolde();
        $solde3->setSolde(30);
        $solde3->setUtilisateur($this->getReference('user3'));
        $manager->persist($solde3);

        $solde4 = new UtilisateursSolde();
        $solde4->setSolde(25);
        $solde4->setUtilisateur($this->getReference('user4'));
        $manager->persist($solde4);

        $solde5 = new UtilisateursSolde();
        $solde5->setSolde(90);
        $solde5->setUtilisateur($this->getReference('user5'));
        $manager->persist($solde5);


        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UtilisateursData::class,
        );
    }

    public  function getOrder(){
        return 4;
    }
}