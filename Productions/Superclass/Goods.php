<?php 
namespace Productions\Superclass;

abstract Class Goods {
	public $name;
	public $price;
    public $region;
    public function __construct($name, $price, $region) 
    {
        $this->name = $name;
        $this->price = $price;
        $this->region = $region;
    }
    public function getPrice()
    {
        if ($this->region < 1) {
            $this->discount = 0.05;
            return "С учетом скидки: ".round($this->price - ($this->price) * $this->discount);
        } else {    
            $this->discount >= 1 ;
            return $this->price;
        }    
    }

    public function getDelivery()
    {
        if ($this->region == 1 )
        {
            $this->deliveryprice = 0.05;
        return ($this->price) * $this->deliveryprice;
        }  
        elseif ($this->region == 2 )
        {
            $this->deliveryprice = 0.1;
        return ($this->price) * $this->deliveryprice;
        }
        else
        {
        return "бесплатно";
        }
    }
   	public function getFullDescription()
    {
        echo "<td>{$this->name}</td>";
        $this->getDescription();
        echo "<td>{$this->getPrice()}</td>";
        echo "<td>{$this->getDelivery()}</td>";
    }
    abstract public function getDescription();
}
?>