<?php
namespace Productions\Pens;
use Productions\Superclass\Goods;

Class Pen extends Goods 
{
	public function putcolor($color)
	{
		$this->color = $color;
		return $this;
	}
	public function putpackAmount($packAmount)
	{
		$this->packAmount = $packAmount;
		return $this;
	}
	public function getDescription()
    {
    echo "<td><b>Название: </b> {$this->name} <br>
    <b>Цвет чернил: </b>{$this->color} <br>
    <b>Кол-во в упаковке: </b>{$this->packAmount} шт. <br>
     ";    
    }
}
?>