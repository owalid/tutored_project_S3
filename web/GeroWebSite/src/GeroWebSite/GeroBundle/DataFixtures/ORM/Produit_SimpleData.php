<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 26/12/2017
 * Time: 18:51
 */

namespace GeroWebSite\GeroBundle\DataFixtures\ORM;

use GeroWebSite\GeroBundle\Entity\Produit_Simple;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Produit_SimpleData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $produit_simple1 = new Produit_Simple();
        $produit_simple1 ->setPrixUnitaire('1.0');
        $produit_simple1 ->setStock('50');
        $produit_simple1 ->setProduit($this->getReference('produit1'));
        $manager->persist($produit_simple1);

        $produit_simple2 = new Produit_Simple();
        $produit_simple2 ->setPrixUnitaire('1.0');
        $produit_simple2 ->setStock('50');
        $produit_simple2 ->setProduit($this->getReference('produit1'));
        $manager->persist($produit_simple2);

        $produit_simple3 = new Produit_Simple();
        $produit_simple3 ->setPrixUnitaire('1.0');
        $produit_simple3 ->setStock('50');
        $produit_simple3 ->setProduit($this->getReference('produit1'));
        $manager->persist($produit_simple3);

        $produit_simple4 = new Produit_Simple();
        $produit_simple4 ->setPrixUnitaire('1.0');
        $produit_simple4 ->setStock('50');
        $produit_simple4 ->setProduit($this->getReference('produit1'));
        $manager->persist($produit_simple4);

        $this->addReference('produit_simple1',$produit_simple1);
        $this->addReference('produit_simple2',$produit_simple2);
        $this->addReference('produit_simple3',$produit_simple3);
        $this->addReference('produit_simple4',$produit_simple4);

        $manager->flush();

    }

    public function getDependencies()
    {
        return array(
            ProduitData::class,
        );
    }

    public  function getOrder(){
        return 7;
    }
}