<?php
namespace Productions\Animals;
use Productions\Superclass\Goods;

Class Duck extends Goods 
{
	
	public function putage($age)
	{
		$this->age = $age;
		return $this;
	}
	public function puthabitat($habitat)
	{
		$this->habitat = $habitat;
		return $this;
	}
	public function getDescription()
    {
    echo "<td><b>Вид утки:</b> {$this->name} <br>
    <b>Возраст: </b>{$this->age} <br>
    <b>Место обитания: </b>{$this->habitat} <br>
     ";    
    }
}
?>