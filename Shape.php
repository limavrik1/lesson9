<?php
/**
 * Created by PhpStorm.
 * User: Andrius Mikelionis
 * Date: 4/11/2017
 * Time: 6:26 AM
 */
class Shape
{

    private $baseDiametr;
    private $baseSideSizeX;
    private $baseSideSizeY;
    private $baseHeight;
    private $baseColor;
    private $basePositionX = 0;
    private $basePositionY = 0;
    private $basePositionZ = 0;

    public function __construct($baseDiameter, $baseSideSizeX, $baseSideSizeY, $baseHeight, $baseColor)
    {
        $this->baseDiametr = $baseDiameter;
        $this->baseSideSizeX = $baseSideSizeX;
        $this->baseSideSizeY = $baseSideSizeY;
        $this->baseHeight = $baseHeight;
        $this->baseColor = $baseColor;
    }

    public function shapeMove($basePositionX, $basePositionY, $basePositionZ)
    {

    }

    /**
     * @return mixed
     */
    public function getBaseDiametr()
    {
        return $this->baseDiametr;
    }

    /**
     * @param mixed $baseDiametr
     */
    public function setBaseDiametr($baseDiametr)
    {
        $this->baseDiametr = $baseDiametr;
    }

    /**
     * @return mixed
     */
    public function getBaseSideSizeX()
    {
        return $this->baseSideSizeX;
    }

    /**
     * @param mixed $baseSideSizeX
     */
    public function setBaseSideSizeX($baseSideSizeX)
    {
        $this->baseSideSizeX = $baseSideSizeX;
    }

    /**
     * @return mixed
     */
    public function getBaseSideSizeY()
    {
        return $this->baseSideSizeY;
    }

    /**
     * @param mixed $baseSideSizeY
     */
    public function setBaseSideSizeY($baseSideSizeY)
    {
        $this->baseSideSizeY = $baseSideSizeY;
    }

    /**
     * @return mixed
     */
    public function getBaseHeight()
    {
        return $this->baseHeight;
    }

    /**
     * @param mixed $baseHeight
     */
    public function setBaseHeight($baseHeight)
    {
        $this->baseHeight = $baseHeight;
    }

    /**
     * @return mixed
     */
    public function getBaseColor()
    {
        return $this->baseColor;
    }

    /**
     * @param mixed $baseColor
     */
    public function setBaseColor($baseColor)
    {
        $this->baseColor = $baseColor;
    }

    /**
     * @return int
     */
    public function getBasePositionX()
    {
        return $this->basePositionX;
    }

    /**
     * @param int $basePositionX
     */
    public function setBasePositionX($basePositionX)
    {
        $this->basePositionX = $basePositionX;
    }

    /**
     * @return int
     */
    public function getBasePositionY()
    {
        return $this->basePositionY;
    }

    /**
     * @param int $basePositionY
     */
    public function setBasePositionY($basePositionY)
    {
        $this->basePositionY = $basePositionY;
    }

    /**
     * @return int
     */
    public function getBasePositionZ()
    {
        return $this->basePositionZ;
    }

    /**
     * @param int $basePositionZ
     */
    public function setBasePositionZ($basePositionZ)
    {
        $this->basePositionZ = $basePositionZ;
    }



}