<?php

namespace Akono\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller
{
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $service = $em->getRepository('AkonoSiteBundle:Service')->find($id);
        
        if(!$service) {
            throw $this->createNotFoundException('Unable to find Service detail page.');
        }
        
        return $this->render('AkonoSiteBundle:Service:detail.html.twig', array(
            'service' => $service
        ));
    }
}
