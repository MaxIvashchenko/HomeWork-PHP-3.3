<?php
namespace Productions\Pens;
use Productions\Superclass\Goods;

Class Pen extends Goods 
{
	public $color;
	public $packAmount;
	public function echoPen($color, $packAmount)
	{
		$this->color=$color;
	  	$this->packAmount=$packAmount;
	}
	public function getDescription()
    {
    echo "<td><b>Название: </b> {$this->name} <br>
    <b>Цвет чернил: </b>{$this->color} <br>
    <b>Кол-во в упаковке: </b>{$this->packAmount} шт. <br>
     ";    
    }
}
