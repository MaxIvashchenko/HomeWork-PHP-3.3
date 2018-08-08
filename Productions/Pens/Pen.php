<?php
namespace Productions\Pens;
use Productions\Superclass\Goods;

Class Pen extends Goods 
{
	public function __construct($name,  $price, $region, $color, $packAmount)
    {
    	$this->name = $name;
    	$this->price = $price;
    	$this->region = $region;
        $this->color = $color;
        $this->packAmount= $packAmount;
    }
	public function getDescription()
    {
    echo "<td><b>Название: </b> {$this->name} <br>
    <b>Цвет чернил: </b>{$this->color} <br>
    <b>Кол-во в упаковке: </b>{$this->packAmount} шт. <br>
     ";    
    }
}
