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
        $user3->setUsername('root');
        $user3->setEmail('root@gmail.com');
        $user3->setEnabled('1');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user3,'root');
        $user3->setPassword($password);
        $manager->persist($user3);


        $user4 = new Utilisateurs();
        $user4->setUsername('root');
        $user4->setEmail('root@gmail.com');
        $user4->setEnabled('1');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user4,'root');
        $user4->setPassword($password);
        $manager->persist($user4);


        $user5 = new Utilisateurs();
        $user5->setUsername('root');
        $user5->setEmail('root@gmail.com');
        $user5->setEnabled('1');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user5,'root');
        $user5->setPassword($password);
        $manager->persist($user5);


        $user6 = new Utilisateurs();
        $user6->setUsername('root');
        $user6->setEmail('root@gmail.com');
        $user6->setEnabled('1');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user6,'root');
        $user6->setPassword($password);
        $manager->persist($user6);


        $user7 = new Utilisateurs();
        $user7->setUsername('root');
        $user7->setEmail('root@gmail.com');
        $user7->setEnabled('1');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user7,'root');
        $user7->setPassword($password);
        $manager->persist($user7);



        $manager->flush();

        $this->addReference('utilisateur1',$user1);
        $this->addReference('utilisateur2',$user2);
        $this->addReference('utilisateur3',$user3);
        $this->addReference('utilisateur1',$user4);
        $this->addReference('utilisateur2',$user5);
        $this->addReference('utilisateur3',$user6);
        $this->addReference('utilisateur3',$user7);

    }

    public  function getOrder(){
        return 7;
    }
}
?>