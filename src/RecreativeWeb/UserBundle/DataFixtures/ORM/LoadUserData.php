<?php 

namespace RecreativeWeb\UserBundle\DataFixtures\ORM;

use RecreativeWeb\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{

  private $container;
  public function setContainer(ContainerInterface $container=null){
    $this->container = $container;
  }

    public function load(ObjectManager $manager)
    {
       $users = array(array(
        'Audrey',
        'Apo',
        array('ROLE_ADMIN')
       ));

       $factory = $this->container->get('security.encoder_factory');
       
       foreach($users as $user){
            $newuser = new User();
            $newuser->setUsername($user[0]);
            $newuser->setPassword($user[1]);
            $newuser->setRoles($user[2]);
            $encodeur = $factory->getEncoder($newuser);
            $password = $encodeur->encodePassword($user[1],$newuser->getSalt());
            $newuser->setPassword($password);
            $manager->persist($newuser);

            //$newuser->setPassword(md5($user[1]));
           
       }

       $manager->flush();

      // php bin/console doctrine:fixtures:load --fixtures scr/RecreativeWeb/UserBundle/DataFixtures/ORM/LoadUserData.php -- append
    }
}