<?php
namespace Productions\Cars;
use Productions\Superclass\Goods;

Class Car extends Goods 
{
	public function putmodel($model)
	{
		$this->model = $model;
		return $this;
	}
	public function putcountryIssue($countryIssue)
	{
		$this->countryIssue = $countryIssue;
		return $this;
	}
	public function puttransmission($transmission)
	{
		$this->transmission = $transmission;
		return $this;
	}
	public function getDescription()
    {
    echo "<td><b>Название: </b> {$this->name} <br>
    <b>Марка: </b>{$this->model} <br>
    <b>Страна производитель: </b>{$this->countryIssue} <br>
    <b>Коробка передач: </b>{$this->transmission} <br> ";    
    }
}
?>