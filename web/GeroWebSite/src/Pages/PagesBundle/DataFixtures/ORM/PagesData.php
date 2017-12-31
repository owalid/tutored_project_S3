<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 10/10/2017
 * Time: 23:07
 */

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Pages\PagesBundle\Entity\Pages;

class PagesData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('CGV');
        $page1->setContenu("cc");

        $manager->persist($page1);

        $page2 = new Pages();
        $page2->setTitre('Mention Legale');
        $page2->setContenu("cc");
        $manager->persist($page2);

        $manager->flush();

        $this->addReference('page1',$page1);
        $this->addReference('page2',$page2);
    }

    public  function getOrder(){
        return 9;
    }
}
?>