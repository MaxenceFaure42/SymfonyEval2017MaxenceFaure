<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Module;
use AppBundle\Entity\formations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CoursesControllerController extends Controller
{

    /**
     * @Route("/bookstore", name = "courses")
     */

    public function indexAction()
    {
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(formations::class);
        $results = $repository->findAll();

        return $this->render('contact/index.html.twig', [
            'results'=>$results
        ]);
    }

    /**
     * @Route("/bookstore/category/{id}", name = "postes", requirements={"id":"\d+"})
     */

    public function postesAction($id)
    {

        $doctrine = $this->getDoctrine();
        $formation = $doctrine->getRepository(formations::class)->find($id);

        return $this->render('contact/postes.html.twig', [
            'results'=>$formation->getModules(),
            'value2'=>$formation
        ]);

    }

    /**
     *@Route("/bookstore/book/{id}", name = "book", requirements={"id":"\d+"})
     */

    public function bookAction($id)
    {

        $doctrine = $this->getDoctrine();
        $formation = $doctrine->getRepository(Module::class)->find($id);
        return $this->render('contact/book.html.twig', [
            'value'=>$formation
        ]);

    }



}
