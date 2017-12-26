<?php
/**
 * Created by PhpStorm.
 * User: Othmane
 * Date: 10/10/2017
 * Time: 23:07
 */

namespace Utilisateurs\UtilisateursBundle\DataFixures\ORM;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = new Utilisateurs();
        $user1->setUsername('othmane');
        $user1->setEmail('othmane@gmail.com');
        $user1->setEnabled('1');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user1,'1234');
        $user1->setPassword($password);
        $manager->persist($user1);

        $user2 = new Utilisateurs();
        $user2->setUsername('client');
        $user2->setEmail('client@gmail.com');
        $user2->setEnabled('1');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user2,'client');
        $user2->setPassword($password);
        $manager->persist($user2);


        $user3 = new Utilisateurs();
        $user3->setUsername('pauline');
        $user3->setEmail('pauline@gmail.com');
        $user3->setEnabled(1);
        $user3->setPassword($this->container->get('security.encoder_factory')->getEncoder($user3)->encodePassword('pauline', $user3->getSalt()));
        $manager->persist($user3);

        $user4 = new Utilisateurs();
        $user4->setUsername('tiffany');
        $user4->setEmail('tiffany@gmail.com');
        $user4->setEnabled(1);
        $user4->setPassword($this->container->get('security.encoder_factory')->getEncoder($user4)->encodePassword('tiffany', $user4->getSalt()));
        $manager->persist($user4);

        $user5 = new Utilisateurs();
        $user5->setUsername('dominique');
        $user5->setEmail('dominique@gmail.com');
        $user5->setEnabled(1);
        $user5->setPassword($this->container->get('security.encoder_factory')->getEncoder($user5)->encodePassword('dominique', $user5->getSalt()));
        $manager->persist($user5);



        $manager->flush();

        $this->addReference('user1',$user1);
        $this->addReference('user2',$user2);
        $this->addReference('user3',$user3);
        $this->addReference('user4',$user4);
        $this->addReference('user5',$user5);

    }

    public  function getOrder(){
        return 3;
    }
}
?>