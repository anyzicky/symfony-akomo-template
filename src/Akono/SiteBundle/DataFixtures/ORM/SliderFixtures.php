<?php

namespace Akono\SiteBundle\DataFixtures\ORM;

use Akono\SiteBundle\Entity\Slider;
use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\Persistence\ObjectManager;


class SliderFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $slide1 = new Slider();
        $slide1->setTitle('Desing');
        $slide1->setImage('280x190.gif');
        $manager->persist($slide1);

        $slide2 = new Slider();
        $slide2->setTitle('Creative');
        $slide2->setImage('280x190.gif');
        $manager->persist($slide2);

        $slide3 = new Slider();
        $slide3->setTitle('Usable');
        $slide3->setImage('280x190.gif');
        $manager->persist($slide3);

        $slide4 = new Slider();
        $slide4->setTitle('Original');
        $slide4->setImage('280x190.gif');
        $manager->persist($slide4);

        $manager->flush();
    }
}