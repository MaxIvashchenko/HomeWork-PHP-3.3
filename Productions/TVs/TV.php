<?php
namespace Productions\TVs;
use Productions\Superclass\Goods;

Class TV extends Goods 
{
	public $screenSize;
	public $tecnology;
	public function echoTv($screenSize, $tecnology)
	{
		$this->screenSize=$screenSize;
	  	$this->tecnology=$tecnology;
	}
	public function getDescription()
    {
    echo "<td><b>Модель: </b> {$this->name} <br>
    <b>Разрешение: </b>{$this->screenSize} дюймов <br>
    <b>Технология: </b>{$this->tecnology}<br> ";    
    }
}
