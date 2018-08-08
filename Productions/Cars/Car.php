<?php
namespace Productions\Cars;
use Productions\Superclass\Goods;

Class Car extends Goods 
{
	public function __construct($name,  $price, $region,$model, $countryIssue, $transmission)
    {
    	$this->name = $name;
    	$this->price = $price;
    	$this->region = $region;
        $this->model = $model;
        $this->countryIssue = $countryIssue;
        $this->transmission = $transmission;
    }
	public function getDescription()
    {
    echo "<td><b>Название: </b> {$this->name} <br>
    <b>Марка: </b>{$this->model} <br>
    <b>Страна производитель: </b>{$this->countryIssue} <br>
    <b>Коробка передач: </b>{$this->transmission} <br> ";    
    }
}
