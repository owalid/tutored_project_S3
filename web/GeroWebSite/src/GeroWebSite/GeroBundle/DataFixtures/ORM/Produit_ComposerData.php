<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 26/12/2017
 * Time: 18:52
 */
namespace GeroWebSite\GeroBundle\DataFixtures\ORM;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use GeroWebSite\GeroBundle\Entity\Produit_Composer;

class Produit_ComposerData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $produit_composer1 = new Produit_Composer();
        $produit_composer1->setProduit($this->getReference('produit1'));
        $produit_composer1->setProduitSimple($this->getReference('produit_simple1'));
        $produit_composer1->setQteComposition('2');

        $manager->persist($produit_composer1);

        $produit_composer2 = new Produit_Composer();
        $produit_composer2->setProduit($this->getReference('produit2'));
        $produit_composer2->setProduitSimple($this->getReference('produit_simple1'));
        $produit_composer2->setQteComposition('2');

        $manager->persist($produit_composer2);

        $produit_composer3 = new Produit_Composer();
        $produit_composer3->setProduit($this->getReference('produit3'));
        $produit_composer3->setProduitSimple($this->getReference('produit_simple3'));
        $produit_composer3->setQteComposition('2');

        $manager->persist($produit_composer3);

        $produit_composer4 = new Produit_Composer();
        $produit_composer4->setProduit($this->getReference('produit6'));
        $produit_composer4->setProduitSimple($this->getReference('produit_simple1'));
        $produit_composer4->setQteComposition('2');

        $manager->persist($produit_composer4);

        $manager->flush();


    }
    public function getDependencies()
    {
        return array(
            ProduitData::class,
            Produit_SimpleData::class,
        );
    }

    public  function getOrder(){
        return 8;
    }
}