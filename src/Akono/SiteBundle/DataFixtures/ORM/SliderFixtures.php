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
        $slide1->setBody('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $slide1->setStartDate(new \DateTime());
        $future = new \DateTime();
        $future->modify('+3 day');
        $slide1->setEndDate(new \DateTime($future->format('d.m.Y')));
        $manager->persist($slide1);

        $slide2 = new Slider();
        $slide2->setTitle('Creative');
        $slide2->setImage('280x190.gif');
        $slide2->setBody('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $slide2->setStartDate(new \DateTime());
        $future2 = new \DateTime();
        $future2->modify('+6 day');
        $slide2->setEndDate(new \DateTime($future2->format('d.m.Y')));
        $manager->persist($slide2);

        $slide3 = new Slider();
        $slide3->setTitle('Usable');
        $slide3->setImage('280x190.gif');
        $slide3->setBody('Detail text 3');
        $slide3->setStartDate(new \DateTime());
        $future3 = new \DateTime();
        $future3->modify('+7 day');
        $slide3->setEndDate(new \DateTime($future3->format('d.m.Y')));
        $manager->persist($slide3);

        $slide4 = new Slider();
        $slide4->setTitle('Original');
        $slide4->setImage('280x190.gif');
        $slide4->setBody('Detaul text 4');
        $slide4->setStartDate(new \DateTime());
        $future4 = new \DateTime();
        $future4->modify('+12 day');
        $slide4->setEndDate(new \DateTime($future4->format('d.m.Y')));
        $manager->persist($slide4);

        $manager->flush();
    }
}