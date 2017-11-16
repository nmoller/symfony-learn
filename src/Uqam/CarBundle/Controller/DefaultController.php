<?php

namespace Uqam\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="offer")
     */
    public function indexAction()
    {
        $carRepo = $this->getDoctrine()->getRepository('CarBundle:Car');
        $cars = $carRepo->findAll();

        return $this->render('CarBundle:Default:index.html.twig', ['cars' => $cars]);
    }

    /**
     * @Route("/{id}", name="show_car")
     */
    public function showAction($id) {
        $carRepo = $this->getDoctrine()->getRepository('CarBundle:Car');
        $car = $carRepo->find($id);
        return $this->render('CarBundle:Default:show.html.twig', ['car' => $car]);
    }
}
