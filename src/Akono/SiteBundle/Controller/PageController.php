<?php

namespace Akono\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blobs = $em->getRepository('AkonoSiteBundle:Blob')
                    ->getBlobs(4);

        return $this->render('AkonoSiteBundle:Page:index.html.twig', array(
            'blobs' => $blobs
        ));
    }
    
    public function servicesAction()
    {
        return $this->render('AkonoSiteBundle:Page:services.html.twig');
    }

    public function portfolioAction()
    {
        return $this->render('AkonoSiteBundle:Page:portfolio.html.twig');
    }

    public function articlesAction()
    {
        return $this->render('AkonoSiteBundle:Page:articles.html.twig');
    }

    public function contactAction()
    {
        return $this->render('AkonoSiteBundle:Page:contact.html.twig');
    }
}
