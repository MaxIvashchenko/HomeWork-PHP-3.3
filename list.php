<?php 
require_once 'autoloader.php';
session_start();
use Productions\Buy\Order;
$order = new Order;
if($_GET['action'] == 'clear') {
	$order->clearOrder();
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ваш заказ</title>
 	<meta charset="utf-8">
 </head>
 <body>
 	<style>
    table { 
        border-spacing: 0;
        border-collapse: collapse;
        width: 80%;
        margin-bottom: 20px;
    }
    table td, table th {
        border: 1px solid lightgrey;
        text-align: center;
    }
    table th {
        background: lightgrey;
    }
    div {
        margin-bottom: 5px;
        border: 1px solid;
        padding: 20px 30px;
      	width: 15%;
    }
</style>
 	<table>
 		<tr>
	 		<th>Наименование товара</th>
	 		<th>Цена</th>
	 		<th>Доставка</th>
	 		<th>Итого</th>
	 	</tr>
	 		<?php $order->getList(); ?>
 		<tr>
 			<th>Cумма закакза: <?php $order->totalPrice(); ?></th>
 		</tr>
 	</table>
     <div><a href="list.php?action=clear">Очистить корзину</a></div>
    <div><a href="index.php">На главную</a></div>
 </body>
 </html>