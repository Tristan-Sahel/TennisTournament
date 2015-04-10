<?php

namespace Federer\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Federer\EventBundle\Entity\Event;

class LoadEvents implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $event1 = new Event();
        $event1->setName('Today, a nice tournament');
        $event1->setLocation('Paris');
        $event1->setTime(new \DateTime('tomorrow noon'));
        $event1->setDetails('Hope Nadal Looses');
        $manager->persist($event1);
        
        $manager->flush();
    }
}