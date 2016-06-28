<?php

namespace Akono\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $article = $em->getRepository('AkonoSiteBundle:Article')->find($id);
        
        if(!$article) {
            throw $this->createNotFoundException('Unable found article.');
        }
        
        $comments = $em->getRepository('AkonoSiteBundle:Comment')->getCommentsForArticle($article->getId());
        
        return $this->render('AkonoSiteBundle:Article:detail.html.twig', array(
            'article'  => $article,
            'comments' => $comments
        ));
    }
}
