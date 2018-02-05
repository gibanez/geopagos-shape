<?php
namespace AppBundle\Shapes;


abstract class Shape implements ShapeInterface
{

    use ShapeColorTrait;

    protected $type;
    protected $base;
    protected $height;
    protected $diameter;
    function __construct($type = '', $base = null, $height = null, $diameter = null)
    {
        $this->type = $type;
        $this->base = $base;
        $this->height = $height;
        $this->diameter = $diameter;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getBase()
    {
        return $this->base;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getDiameter()
    {
        return $this->diameter;
    }

}