<?php

namespace Akono\SiteBundle\DataFixtures\ORM;

use Akono\SiteBundle\Entity\Article;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class ArticleFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('Top Tips For Hiring A Design Agency');
        $article1->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ');
        $article1->setAuthor('Den');
        $article1->setTags('symfony2, php, code');
        $article1->setPostdate(new \DateTime());
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setTitle('The Future of HTML5');
        $article2->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ');
        $article2->setAuthor('Den');
        $article2->setTags('symfony2,html');
        $article2->setPostdate(new \DateTime());
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle('Are You Using CSS3 Yet?');
        $article3->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ');
        $article3->setAuthor('Den');
        $article3->setTags('symfony2, css');
        $article3->setPostdate(new \DateTime());
        $manager->persist($article3);

        $article4 = new Article();
        $article4->setTitle('A Guide To Creating Mobile Apps');
        $article4->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ');
        $article4->setAuthor('Den');
        $article4->setTags('symfony2, php, mobile');
        $article4->setPostdate(new \DateTime());
        $manager->persist($article4);

        $article5 = new Article();
        $article5->setTitle('Should Designers Know How To Code?');
        $article5->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nibh mauris. Mauris interdum, dolor in vulputate tincidunt, mauris lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ');
        $article5->setAuthor('Den');
        $article5->setTags('symfony2, php, code');
        $article5->setPostdate(new \DateTime());
        $manager->persist($article5);


        $manager->flush();

        $this->addReference('article-1', $article1);
        $this->addReference('article-2', $article2);
        $this->addReference('article-3', $article3);
        $this->addReference('article-4', $article4);
        $this->addReference('article-5', $article5);
    }

    public function getOrder()
    {
        return 1;
    }
}