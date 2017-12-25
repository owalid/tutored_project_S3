<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 13/12/2017
 * Time: 12:55
 */

namespace GeroWebSite\GeroBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\DataFixtures\ORM\UtilisateursData;
use GeroWebSite\GeroBundle\Entity\AjoutArgent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class AjoutArgentData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $ajoutArgent1 = new AjoutArgent();
        $ajoutArgent1->setUtilisateur($this->getReference('user1'));
        $ajoutArgent1->setDateAjout(new \DateTime());
        $ajoutArgent1->setMontantArgent('30');

        $manager->persist($ajoutArgent1);

        $ajoutArgent2 = new AjoutArgent();
        $ajoutArgent2->setUtilisateur($this->getReference('user2'));
        $ajoutArgent2->setDateAjout(new \DateTime());
        $ajoutArgent2->setMontantArgent('30');

        $manager->persist($ajoutArgent2);

        $ajoutArgent3 = new AjoutArgent();
        $ajoutArgent3->setUtilisateur($this->getReference('user3'));
        $ajoutArgent3->setDateAjout(new \DateTime());
        $ajoutArgent3->setMontantArgent('15');

        $manager->persist($ajoutArgent3);

        $ajoutArgent4 = new AjoutArgent();
        $ajoutArgent4->setUtilisateur($this->getReference('user4'));
        $ajoutArgent4->setDateAjout(new \DateTime());
        $ajoutArgent4->setMontantArgent('16');

        $manager->persist($ajoutArgent4);

        $manager->flush();

    }

    public function getDependencies()
    {
    return array(
        UtilisateursData::class,
    );
    }




    public  function getOrder(){
        return 8;
    }
}
?>