<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AstonController extends Controller{
    /**
     * @Route("/aston", name="aston")
     */
    public function astonAction(){
        return $this->render("default/aston.html.twig");
    }
}