<?php

namespace Ben\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Ben\UserBundle\Entity\User;
use Ben\UserBundle\Form\userType;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Ben\DoctorsBundle\Pagination\Paginator;

class AdminController extends Controller
{
    
	/**
     * Displays a form to edit an existing profil entity.
     * @Secure(roles="IS_AUTHENTICATED_REMEMBERED")
     */
    public function editMeAction() {
			var_dump('test');

            die();

       /* $entity = $this->container->get('security.context')->getToken()->getUser();
        $isAdmin = $this->get('security.context')->isGranted('ROLE_ADMIN');
        $form = $this->createForm(new UserType(false, $isAdmin), $entity);
        return $this->render('BenUserBundle:myProfile:edit.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));*/
    }
    

}