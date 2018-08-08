<?php
namespace Productions\Animals;
use Productions\Superclass\Goods;

Class Duck extends Goods 
{
	public function __construct($name,  $price, $region, $age, $habitat)
    {
    	$this->name = $name;
    	$this->price = $price;
    	$this->region = $region;
        $this->age = $age;
        $this->habitat = $habitat;
    }
	public function getDescription()
    {
    echo "<td><b>Вид утки:</b> {$this->name} <br>
    <b>Возраст: </b>{$this->age} <br>
    <b>Место обитания: </b>{$this->habitat} <br>
     ";    
    }
}
