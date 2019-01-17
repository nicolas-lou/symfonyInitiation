<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends Controller{
    /**
     * @Route("/login", name="login")
     */
    public function astonAction(){
        return $this->render("default/login.html.twig");
    }
}