<?php
namespace Productions\Buy;
CLass Card
{	
	public function addToCard()
	{
		if (!isset($_SESSION['card'])) {
			$_SESSION['card'] = array();
		}
		if (!empty($_GET['product'] && $_GET['price'] && $_GET['delivery'])) {
			if (isset($_SESSION['card']) && array_search($_GET['product'], array_column($_SESSION['card'], 0)) === false) {
				$_SESSION['card'][] = [$_GET['product'], $_GET['price'], $_GET['delivery']];
				header('Location: index.php'); 
			} 
		}
	}
	public  function remove()
	{	if (isset($_SESSION['card'])) {
			foreach ($_SESSION['card'] as $key => $value) {
				if ($value[0] === $_GET['delete']) {
					unset ($_SESSION['card'][$key]);
					sort($_SESSION['card']);
				}
			}
		}
	}		
	
	public function getCount()
	{
		if (isset($_SESSION['card'])) {
			echo (count($_SESSION['card']));
		} else {
			echo '0';
		}
	}	
	public function getSuccess($item) {
		if (empty($_SESSION['card']) or array_search($item, array_column($_SESSION['card'], 0)) === false) {
			return true;
		}
			return false;
	}
}	
 ?>