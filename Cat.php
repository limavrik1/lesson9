<?php
/**
 * User: Andrius Mikelionis
 * Date: 4/11/2017
 * Time: 4:59 AM
 */

class Cat
{

    private $color;
    private $colorEyes;
    private $length;
    private $lengthTail;
    private $weight;
    private $height;
    private $years = 0;

    public function __construct($color, $colorEyes, $length, $lengthTail, $weight, $height)
    {
        $this->сolor = $color;
        $this->colorEyes = $colorEyes;
        $this->length = $length;
        $this->lengthTail = $lengthTail;
        $this->weight = $weight;
        $this->height = $height;
    }

    //My Method
    public function moveType ($type)
    {

    }

    public function moveDirection ($x, $y, $z, $speed )
    {

    }

    public function tailEndPosition ($x, $y, $z, $speed)
    {

    }

    //getters and setters
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColorEyes()
    {
        return $this->colorEyes;
    }

    /**
     * @param mixed $colorEyes
     */
    public function setColorEyes($colorEyes)
    {
        $this->colorEyes = $colorEyes;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getLengthTail()
    {
        return $this->lengthTail;
    }

    /**
     * @param mixed $lengthTail
     */
    public function setLengthTail($lengthTail)
    {
        $this->lengthTail = $lengthTail;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @param mixed $years
     */
    public function setYears($years)
    {
        $this->years = $years;
    }



}