<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 13/12/2017
 * Time: 12:55
 */

namespace GeroWebSite\GeroBundle\DataFixtures\ORM;

use GeroWebSite\GeroBundle\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MediaData extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $media1 = new Media();
      $media1->setPath('./web/images/pain_chocolat.jpg');
      $media1->setAlt('Pain au chocolat');
      $manager->persist($media1);

      $media2 = new Media();
      $media2->setPath('./web/images/chocolat.jpg');
      $media2->setAlt('tablette de chocolat');
      $manager->persist($media2);

      $media3 = new Media();
      $media3->setPath('./web/images/baguette.jpg');
      $media3->setAlt('baguette');
      $manager->persist($media3);

      $media4 = new Media();
      $media4->setPath('./web/images/chocolat_chaud.jpg');
      $media4->setAlt('Chocolat Chaud');
      $manager->persist($media4);


      $media5 = new Media();
      $media5->setPath('./web/images/cookies.jpg');
      $media5->setAlt('Cookies');
      $manager->persist($media5);


      $media6 = new Media();
      $media6->setPath('./web/images/jus_orange.jpg');
      $media6->setAlt('Jus d\'orange');
      $manager->persist($media6);


      $media7 = new Media();
      $media7->setPath('./web/images/muffin.jpg');
      $media7->setAlt('Muffin');
      $manager->persist($media7);


      $media8 = new Media();
      $media8->setPath('./web/images/pain_lait.jpg');
      $media8->setAlt('Pain au lait');
      $manager->persist($media8);

      $media9 = new Media();
      $media9->setPath('./web/images/brownie.jpg');
      $media9->setAlt('Brownie');
      $manager->persist($media9);

      $media10 = new Media();
      $media10->setPath('./web/images/tarte_daims.jpg');
      $media10->setAlt('Tarte au Daims');
      $manager->persist($media10);

      $media11 = new Media();
      $media11->setPath('./web/images/tarte_framboise.jpg');
      $media11->setAlt('Tarte au framboise');
      $manager->persist($media11);


      $manager->flush();

      $this->addReference('media1',$media1);
      $this->addReference('media2',$media2);
      $this->addReference('media3',$media3);
      $this->addReference('media4',$media4);
      $this->addReference('media5',$media5);
      $this->addReference('media6',$media6);
      $this->addReference('media7',$media7);
      $this->addReference('media8',$media8);
      $this->addReference('media9',$media9);
      $this->addReference('media10',$media10);
      $this->addReference('media11',$media11);

    }

    public  function getOrder(){
        return 1;
    }
}
?>