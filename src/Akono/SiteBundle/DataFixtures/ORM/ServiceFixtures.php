<?php

namespace Akono\SiteBundle\DataFixtures\ORM;

use Akono\SiteBundle\Entity\Service;
use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\Persistence\ObjectManager;


class ServiceFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $service1 = new Service();
        $service1->setTitle('Web Design & Development');
        $service1->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem feugiat augue, id tristique lacus est ac purus. ');
        $manager->persist($service1);

        $service2 = new Service();
        $service2->setTitle('Search Engine Optimization');
        $service2->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem feugiat augue, id tristique lacus est ac purus. ');
        $manager->persist($service2);

        $service3 = new Service();
        $service3->setTitle('Online Marketing Campaigns');
        $service3->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem feugiat augue, id tristique lacus est ac purus. ');
        $manager->persist($service3);

        $service4 = new Service();
        $service4->setTitle('Logo Design & Brand Development');
        $service4->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem feugiat augue, id tristique lacus est ac purus. ');
        $manager->persist($service4);

        $manager->flush();
    }
}