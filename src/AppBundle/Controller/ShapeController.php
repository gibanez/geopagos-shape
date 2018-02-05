<?php

namespace AppBundle\Controller;

use AppBundle\Shapes\Circle;
use AppBundle\Shapes\ShapeFactory;
use AppBundle\Shapes\Square;
use AppBundle\Shapes\Triangle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ShapeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /**
         * @var Circle $cirle
         */
        $cirle = ShapeFactory::createCircle(200);
        $cirle->setColor("red");

        /**
         * @var Triangle $triangle
         */
        $triangle = ShapeFactory::createTriangle(200, 200);
        $triangle->setColor("blue");

        /**
         * @var Square $square
         */
        $square = ShapeFactory::createSquare(200);
        $square->setColor("blue");

        // replace this example code with whatever you need
        return $this->render('default/shapes.html.twig', [
            'circle' => $cirle,
            'triangle' => $triangle,
            'square' => $square,
        ]);
    }
}
