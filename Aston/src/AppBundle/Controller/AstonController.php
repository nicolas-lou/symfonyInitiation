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
        return $this->render("default/aston.html.twig", ['prenom'=>'Aston']);
    }

    /**
     * @Route("/blog/{page}/{id}", name="blog", requirements={"page"="\d+", "id"="\d+"})
     */
    public function blogAction($page,$id){
        return $this->render("default/blog.html.twig", ['page'=>$page, 'id'=>$id]);
    }
}