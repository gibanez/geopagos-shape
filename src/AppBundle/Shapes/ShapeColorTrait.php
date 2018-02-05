<?php
/**
 * Created by PhpStorm.
 * User: Fran
 * Date: 31/1/2018
 * Time: 09:36
 */

namespace AppBundle\Shapes;


trait ShapeColorTrait
{
    protected $color = null;

    /**
     * @return null
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param null $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


}