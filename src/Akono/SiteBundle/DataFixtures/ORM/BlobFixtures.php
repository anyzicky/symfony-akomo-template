<?php

namespace Akono\SiteBundle\DataFixtures\ORM;

use Akono\SiteBundle\Entity\Blob;
use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\Persistence\ObjectManager;


class BlobFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blob1 = new Blob();
        $blob1->setTitle('Desing');
        $blob1->setText('text');
        $blob1->setImage('circle-red.png');
        $manager->persist($blob1);

        $blob2 = new Blob();
        $blob2->setTitle('Creative');
        $blob2->setText('text');
        $blob2->setImage('circle-pink.png');
        $manager->persist($blob2);

        $blob3 = new Blob();
        $blob3->setTitle('Usable');
        $blob3->setText('text');
        $blob3->setImage('circle-orange.png');
        $manager->persist($blob3);

        $blob4 = new Blob();
        $blob4->setTitle('Original');
        $blob4->setText('text');
        $blob4->setImage('circle-yellow.png');
        $manager->persist($blob4);

        $manager->flush();
    }
}