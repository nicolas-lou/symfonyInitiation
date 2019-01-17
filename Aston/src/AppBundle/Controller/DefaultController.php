<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }



    /**
     * @Route("/sqli", name="sqli")
     */
    public function sqliAction(){
        return $this->render("default/sqli.html.twig");
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(){
        return $this->render("default/contact.html.twig");
    }
}
