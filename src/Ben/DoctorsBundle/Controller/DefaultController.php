<?php

namespace Ben\DoctorsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Httpfoundation\Response;
use JMS\SecurityExtraBundle\Annotation\Secure;


class DefaultController extends Controller
{



    /**
     * @Secure(roles="ROLE_USER")
     */
    public function indexAction()
    {       
        return $this->render('BenDoctorsBundle:Default:index.html.twig');
    }
    
}
