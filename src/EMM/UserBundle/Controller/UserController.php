<?php

namespace EMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use EMM\UserBundle\Entity\User;
use EMM\UserBundle\Form\UserType;

class UserController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $users=$em->getRepository('EMMUserBundle:User')->findAll();
        return $this->render('EMMUserBundle:User:index.html.twig',array('users'=>$users));
        
    }
   public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        
        return $this->render('EMMUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
                'action' => $this->generateUrl('emm_user_create'),
                'method' => 'POST'
            ));
        
        return $form;
    }
    
     public function createAction(Request $request)
    {   
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
             
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $succesMessage=$this->get('translator')->trans('The user has been created.');
            $this->addFlash('mensaje',$succesMessage);
            
           return $this->redirecttoRoute('emm_user_index');
        }
        
        return $this->render('EMMUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }
    
    
}
