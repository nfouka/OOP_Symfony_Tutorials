<?php

namespace uga\oopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->container->get('ugaoop.service_oop')->getUploadUserUgaInterfce() ; 
        return $this->render('ugaoopBundle:Default:index.html.twig');
    }
}
