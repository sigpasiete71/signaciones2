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
    public function indexAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        
        $dql="SELECT u FROM EMMUserBundle:User u ORDER BY u.id DESC";
        $users=$em->createQuery($dql);    
        $paginator=$this->get('knp_paginator');
        $pagination=$paginator->paginate(
            $users, $request->query->getInt('page',1),
            5   
        );
        
        //return $this->render('EMMUserBundle:User:index.html.twig',array('users'=>$users));
        return $this->render('EMMUserBundle:User:index.html.twig',array('pagination' => $pagination));
        
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
            
           return $this->redirectToRoute('emm_user_index');
        }
        
        return $this->render('EMMUserBundle:User:add.html.twig', array('form' => $form->createView()));
    }
    public function editAction($id){
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('EMMUserBundle:User')->find($id);
        if(!$user){
            $messageExeption=$this->get('translator')->trans('User not found.');
            throw $this->createNotFoundExeption($messageExeption);
        }
        $form=$this->createEditForm($user);
        return $this->render('EMMUserBundle:User:edit.html.twig',array('user' => $user, 'form' => $form->createView()));
        
    }
    private function createEditForm(User $entity){
        $form= $this->createForm(new UserType(),$entity,array('action' => $this->generateUrl
        ('emm_user_update',array('id' => $entity->getId())),'method'=> 'PUT' ));
        return $form;
        
    }
    
    public function updateAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('EMMUserBundle:User')->find($id);
        if(!$user){
            $messageExeption=$this->get('translator')->trans('User not found.');
            throw $this->createNotFoundExeption($messageExeption);
        }
        $form =$this->createEditForm($user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
             
            
            $em->flush();
            $succesMessage=$this->get('translator')->trans('The user has been modified.');
            $this->addFlash('mensaje',$succesMessage);
            
            return $this->redirectToRoute('emm_user_edit',array('id' => $user->getId()));
            
        }
        return $this->render('EMMUserBundle:User:edit.html.twig',array('user' => $user, 'form' => $form->createView()));
    }
 
   public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('EMMUserBundle:User');
        $user = $repository->find($id);
        if(!$user)
        {
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }
        
        //$deleteForm = $this->createCustomForm($user->getId(), 'DELETE', 'emm_user_delete');
        
        return $this->render('EMMUserBundle:User:view.html.twig', array('user' => $user));
    }
    
}
