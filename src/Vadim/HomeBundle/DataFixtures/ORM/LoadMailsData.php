<?php

namespace Vadim\HomeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Vadim\HomeBundle\Entity\Mails;

class LoadUserData implements FixtureInterface
{
/**
* {@inheritDoc}
*/
    protected $mailText = array(0 => "This is thirst message",
        1 => "This is thirst message");

    protected $Mame = array(0 => "hello",
        1 => "vadim");
public function load(ObjectManager $manager)
{

    for ($i = 0; $i < 2; $i++) {
        $mail[$i] = new Mails();
        $mail[$i]->setMane($this->Mame[$i]);
        $mail[$i]->setMailText($this->mailText[$i]);
        $manager->persist($mail[$i]);
        $manager->flush();

    }

}


}