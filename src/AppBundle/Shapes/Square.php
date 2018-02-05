<?php
/**
 * Created by PhpStorm.
 * User: Fran
 * Date: 31/1/2018
 * Time: 09:31
 */

namespace AppBundle\Shapes;


class Square extends Shape
{
    /**
     * Square constructor.
     * @param $base
     * @param $height
     */
    function __construct($base, $height)
    {
        parent::__construct('Square', $base, $height, null);
    }

    /**
     * @return float|int
     */
    public function getArea(){
        return pow($this->getBase(), 2);
    }
}