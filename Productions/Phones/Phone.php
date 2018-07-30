<?php 
namespace Productions\Phones;
use Productions\Superclass\Goods as Goods;
Class Phone extends Goods
{	
	public function putwasMade($wasMade)
	{
		$this->wasMade = $wasMade;
		return $this;
	}
	public function putquality($quality)
	{
		$this->quality = $quality;
		return $this;
	}
	public function getDescription()
    {
    echo "<td><b>Наименование: </b> {$this->name} <br>
    <b>Производство: </b>{$this->wasMade} <br>
    <b>Качество: </b>{$this->quality} <br>
     ";    
    }
}
 ?>