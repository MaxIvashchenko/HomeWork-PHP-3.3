<?php
namespace Productions\Buy;
Class Order
{
	public $sum = [];
	public function getList()
	{	
		if (!empty($_SESSION['card']) && !empty($_GET['action'])) {
			foreach ($_SESSION['card'] as $choice) {
					echo "<tr>";
					echo "<td>".$choice[0]."</td>";
					echo "<td>".$choice[1]."</td>";
					echo "<td>".$choice[2]."</td>";
					echo "<td>".($choice[1] + $choice[2])."</td>";
					echo "</tr>";
			}
		}
	}		 
	
	public function totalPrice()
	{
		if (isset($_SESSION['card']) && !empty($_GET['action'])) {
				foreach ($_SESSION['card'] as $choice) {
					$this->sum[] = $choice[1] + $choice[2]; 
				}
			}
		echo (array_sum($this->sum))." руб.";
	}
	public function clearOrder()
	{
		unset($_SESSION['card']);
		session_destroy();
		header('Location:index.php');
	}
}
