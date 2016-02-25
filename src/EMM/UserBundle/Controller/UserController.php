<?php

namespace EMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $users=$em->getRepository('EMMUserBundle:User')->findAll();
        return $this->render('EMMUserBundle:User:index.html.twig',array('users'=>$users));
        
    }
    
}
