<?php
namespace Productions\Animals;
use Productions\Superclass\Goods;

Class Duck extends Goods 
{
	public $age;
	public $habitat;
	public function echoDuck($age, $habitat )
	{
		$this->age=$age;
	  	$this->habitat=$habitat;
	}	
	public function getDescription()
    {
    echo "<td><b>Вид утки:</b> {$this->name} <br>
    <b>Возраст: </b>{$this->age} <br>
    <b>Место обитания: </b>{$this->habitat} <br>
     ";    
    }
}
