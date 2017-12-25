<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 13/12/2017
 * Time: 12:55
 */

namespace GeroWebSite\GeroBundle\DataFixtures\ORM;

use GeroWebSite\GeroBundle\Entity\Categorie;
use GeroWebSite\GeroBundle\Entity\Media;
use GeroWebSite\GeroBundle\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProduitData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produit();
        $produit1 ->setNom('pain au chocolat');
        $produit1 ->setDescription('pain avec du chocolat');
        $produit1 ->setDisponible('1');
        $produit1 ->setCategorie($this->getReference('categorie1'));
        $produit1 ->setCourse($this->getReference('course1'));
        $produit1 ->setImage($this->getReference('media1'));

        $manager->persist($produit1);


        $produit2 = new Produit();
        $produit2 ->setNom('pain au lait');
        $produit2 ->setDescription('pain avec du lait');
        $produit2 ->setDisponible('1');
        $produit2 ->setCategorie($this->getReference('categorie1'));
        $produit2 ->setCourse($this->getReference('course2'));
        $produit2 ->setImage($this->getReference('media2'));

        $manager->persist($produit2);


        $produit3 = new Produit();
        $produit3 ->setNom('Jus d\'orange');
        $produit3 ->setDescription('Hummm le jus d\'orange');
        $produit3 ->setDisponible('1');
        $produit3 ->setCategorie($this->getReference('categorie2'));
        $produit3 ->setCourse($this->getReference('course3'));
        $produit3 ->setImage($this->getReference('media3'));

        $manager->persist($produit3);


        $produit4 = new Produit();
        $produit4 ->setNom('Jus d\'orange');
        $produit4 ->setDescription('Hummm le jus d\'orange');
        $produit4 ->setDisponible('1');
        $produit4 ->setCategorie($this->getReference('categorie2'));
        $produit4 ->setCourse($this->getReference('course3'));
        $produit4 ->setImage($this->getReference('media3'));

        $manager->persist($produit4);


        $produit5 = new Produit();
        $produit5 ->setNom('Jus d\'orange');
        $produit5 ->setDescription('Hummm le jus d\'orange');
        $produit5 ->setDisponible('1');
        $produit5 ->setCategorie($this->getReference('categorie2'));
        $produit5 ->setCourse($this->getReference('course3'));
        $produit5 ->setImage($this->getReference('media3'));

        $manager->persist($produit5);


        $produit6 = new Produit();
        $produit6 ->setNom('Jus d\'orange');
        $produit6 ->setDescription('Hummm le jus d\'orange');
        $produit6 ->setDisponible('1');
        $produit6 ->setCategorie($this->getReference('categorie2'));
        $produit6 ->setCourse($this->getReference('course3'));
        $produit6 ->setImage($this->getReference('media3'));

        $manager->persist($produit6);


        $produit3 = new Produit();
        $produit3 ->setNom('Jus d\'orange');
        $produit3 ->setDescription('Hummm le jus d\'orange');
        $produit3 ->setDisponible('1');
        $produit3 ->setCategorie($this->getReference('categorie2'));
        $produit3 ->setCourse($this->getReference('course3'));
        $produit3 ->setImage($this->getReference('media3'));

        $manager->persist($produit3);


        $produit3 = new Produit();
        $produit3 ->setNom('Jus d\'orange');
        $produit3 ->setDescription('Hummm le jus d\'orange');
        $produit3 ->setDisponible('1');
        $produit3 ->setCategorie($this->getReference('categorie2'));
        $produit3 ->setCourse($this->getReference('course3'));
        $produit3 ->setImage($this->getReference('media3'));

        $manager->persist($produit3);

        $this->addReference('produit1',$produit1);
        $this->addReference('produit2',$produit2);
        $this->addReference('produit3',$produit3);

        $manager->flush();


    }

    public function getDependencies()
    {
        return array(
            CategorieData::class,
            CourseData::class,
            MediaData::class,
        );
    }

    public  function getOrder(){
        return 3;
    }
}
?>