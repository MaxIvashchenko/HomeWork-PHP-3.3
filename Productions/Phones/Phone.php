<?php 
namespace Productions\Phones;
use Productions\Superclass\Goods as Goods;
Class Phone extends Goods
{	
	public function __construct($name,  $price, $region, $wasMade, $quality)
    {
    	$this->name = $name;
    	$this->price = $price;
    	$this->region = $region;
        $this->wasMade = $wasMade;
        $this->quality = $quality;
    }
	public function getDescription()
    {
    echo "<td><b>Наименование: </b> {$this->name} <br>
    <b>Производство: </b>{$this->wasMade} <br>
    <b>Качество: </b>{$this->quality} <br>
     ";    
    }
}
