<?php

namespace Akono\SiteBundle\Controller;

use Akono\SiteBundle\Form\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blobs = $em->getRepository('AkonoSiteBundle:Blob')
                    ->getBlobs(4);

        $slides = $em->getRepository('AkonoSiteBundle:Slider')->findAll();

        return $this->render('AkonoSiteBundle:Page:index.html.twig', array(
            'blobs'  => $blobs,
            'slides' => $slides
        ));
    }
    
    public function servicesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('AkonoSiteBundle:Service')
                       ->findAll();

        $projects = $em->getRepository('AkonoSiteBundle:Slider')->getProject(2);

        return $this->render('AkonoSiteBundle:Page:services.html.twig', array(
            'services' => $services,
            'projects' => $projects
        ));
    }

    public function portfolioAction()
    {
        $em = $this->getDoctrine()->getManager();

        $slides = $em->getRepository('AkonoSiteBundle:Slider')->findAll();

        return $this->render('AkonoSiteBundle:Page:portfolio.html.twig', array(
            'slides' => $slides
        ));
    }

    public function articlesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AkonoSiteBundle:Article')->findAll();

        $projects = $em->getRepository('AkonoSiteBundle:Slider')->getProject(2);
        
        return $this->render('AkonoSiteBundle:Page:articles.html.twig', array(
            'projects' => $projects,
            'articles' => $articles
        ));
    }

    public function contactAction(Request $request)
    {
        $event = new \Akono\SiteBundle\Entity\Event();

        $form = $this->createForm(Event::class, $event);

        if($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if($form->isValid()) {
                return $this->redirectToRoute('akono_site_contact');
            }
        }

        return $this->render('AkonoSiteBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
