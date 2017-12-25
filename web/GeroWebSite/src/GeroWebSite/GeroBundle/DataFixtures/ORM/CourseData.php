<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 13/12/2017
 * Time: 12:55
 */

namespace GeroWebSite\GeroBundle\DataFixtures\ORM;

use GeroWebSite\GeroBundle\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CourseData extends Fixture
{
    public function load(ObjectManager $manager)
    {
     $course1 = new Course();
     $course1->setProduit($this->getReference('produit1'));
     $course1->setUtilisateur($this->getReference('User1'));
     $course1->setDateCourse('01/02/2018');
     $course1->setMontantCourse('100');

     $manager->persist($course1);

     $course2 = new Course();
     $course2->setProduit($this->getReference('produit1'));
     $course2->setUtilisateur();
     $course2->setDateCourse();
     $course2->setMontantCourse();

     $manager->persist($course2);

     $course3 = new Course();
     $course3->setProduit();
     $course3->setUtilisateur();
     $course3->setDateCourse();
     $course3->setMontantCourse();

     $manager->persist($course3);

     $this->addReference('course1',$course1);
     $this->addReference('course2',$course2);
      $this->addReference('course3',$course3);

    }

    public  function getOrder(){
        return 9;
    }
}
?>