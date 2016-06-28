<?php

namespace Akono\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $portfolio = $em->getRepository('AkonoSiteBundle:Slider')->find($id);
        
        if(!$portfolio) {
            throw $this->createNotFoundException('Unable found project page.');
        }
        
        return $this->render('AkonoSiteBundle:Slider:detail.html.twig', array(
            'project' => $portfolio
        ));
    }
}
