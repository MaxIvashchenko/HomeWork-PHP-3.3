<?php
namespace Productions\TVs;
use Productions\Superclass\Goods;

Class TV extends Goods 
{
	public function putscreenSize($screenSize)
	{
		$this->screenSize = $screenSize;
		return $this;
	}
	public function puttecnology($tecnology)
	{
		$this->tecnology = $tecnology;
		return $this;
	}
	
	public function getDescription()
    {
    echo "<td><b>Модель: </b> {$this->name} <br>
    <b>Разрешение: </b>{$this->screenSize} дюймов <br>
    <b>Технология: </b>{$this->tecnology}<br> ";    
    }
}
?>