<?php
namespace Productions\Cars;
use Productions\Superclass\Goods;

Class Car extends Goods 
{
	public $model;
	public $countryIssue;
	public $transmission;
	public function echoCar($model, $countryIssue, $transmission)
	{
		$this->model=$model;
	  	$this->countryIssue=$countryIssue;
		$this->transmission=$transmission;
	}	
	public function getDescription()
	{
	echo "<td><b>Название: </b> {$this->name} <br>
	<b>Марка: </b>{$this->model} <br>
	<b>Страна производитель: </b>{$this->countryIssue} <br>
	<b>Коробка передач: </b>{$this->transmission} <br> ";    
	}
}
