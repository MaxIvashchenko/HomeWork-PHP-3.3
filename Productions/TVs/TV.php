<?php
namespace Productions\TVs;
use Productions\Superclass\Goods;

Class TV extends Goods 
{
	public function __construct($name,  $price, $region, $screenSize, $tecnology)
    {
    	$this->name = $name;
    	$this->price = $price;
    	$this->region = $region;
        $this->screenSize= $screenSize;
        $this->tecnology= $tecnology;
    }
	public function getDescription()
    {
    echo "<td><b>Модель: </b> {$this->name} <br>
    <b>Разрешение: </b>{$this->screenSize} дюймов <br>
    <b>Технология: </b>{$this->tecnology}<br> ";    
    }
}
