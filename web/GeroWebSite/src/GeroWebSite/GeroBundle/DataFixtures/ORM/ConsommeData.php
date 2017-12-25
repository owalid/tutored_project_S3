<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 13/12/2017
 * Time: 12:55
 */

namespace GeroWebSite\GeroBundle\DataFixtures\ORM;

use GeroWebSite\GeroBundle\Entity\Consomme;
use GeroWebSite\GeroBundle\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ConsommeData extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $consomme1 = new Consomme();
      $consomme1->setProduit($this->getReference('produit1'));
      $consomme1->setDateConso('11/01/2018');
      $consomme1->setQteConsommation('2');
      $consomme1->addUtilisateur($this->getReference('user1'));
      $manager->persist($consomme1);

      $consomme2 = new Consomme();
      $consomme2->setProduit($this->getReference('produit1'));
      $consomme2->setDateConso('11/01/2018');
      $consomme2->setQteConsommation('2');
      $consomme2->addUtilisateur($this->getReference('user1'));
      $manager->persist($consomme2);

      $consomme3 = new Consomme();
      $consomme3->setProduit($this->getReference('produit1'));
      $consomme3->setDateConso('11/01/2018');
      $consomme3->setQteConsommation('2');
      $consomme3->addUtilisateur($this->getReference('user1'));
      $manager->persist($consomme3);


    }

    public function getDependencies()
    {
        return array(
          ProduitData::class,
        );
    }
    public  function getOrder(){
        return 6;
    }
}
?>