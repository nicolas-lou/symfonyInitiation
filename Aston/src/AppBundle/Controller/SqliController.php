<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SqliController extends Controller{
    /**
     * @Route("/sqli", name="sqli")
     */
    public function sqliAction(){
        return $this->render("default/sqli.html.twig");
    }

}