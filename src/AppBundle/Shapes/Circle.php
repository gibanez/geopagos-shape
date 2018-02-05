<?php
/**
 * Created by PhpStorm.
 * User: Fran
 * Date: 31/1/2018
 * Time: 09:31
 */

namespace AppBundle\Shapes;


class Circle extends Shape
{
    /**
     * Circle constructor.
     * @param $diameter
     */
    public function __construct($diameter)
    {
        parent::__construct('Circle', null, null, $diameter);
    }

    /**
     * @return float
     */
    public function getArea(){
        $ratio = $this->getDiameter() / 2;
        return 3.14 * pow($ratio, 2);
    }
}