<?php 
require_once 'autoloader.php';
session_start();
use \Productions\Buy\Card;
use \Productions\Cars\Car;
use \Productions\Animals\Duck;
use \Productions\Phones\Phone;
use \Productions\Pens\Pen;
use \Productions\TVs\TV;
$basket = new Card();
if (!empty($_GET['product'])) {
    $basket->addToCard();
}
if (isset($_GET['delete'])) {
    $basket->remove();
}
$car1 = new Car('Волга', 12000, 0);
$car1-> echoCar('ГАЗ-3110', 'Россия', 'механика');
$duck1 = new Duck('Утка', 100, 1);
$duck1->echoDuck(6, 'юг');
$phone = new Phone('Aplle Iphone 8plus', 1410, 2);
$phone->echoPhone('Америка', 'выше среднего');
$pen1 = new Pen('Ручка Паркер', 10, 1);
$pen1->echoPen('синий', 40);
$tv = new TV('Samsung es06542', 900, 0);
$tv->echoTv(55, '4K');

$products = [$car1, $duck1, $phone, $pen1, $tv ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Домашнее задание к лекции 3.3</title>
</head>
<body>
<style>
    table { 
        border-spacing: 0;
        border-collapse: collapse;
    }
    table td, table th {
        border: 1px solid lightgrey;
        padding: 5px;
        text-align: center;
    }
    
    table th {
        background: lightgrey;
    }
    div {
        margin-left: 720px;
        border: 1px solid #ccc;
        padding: 20px 30px;
        position: absolute;
        background: lightgrey;
    }
</style>
    <h3>Пространство имен</h3>
    <p>Пространство имен решает проблему конфликта имен, позволяя создавать одинаковые названия, а так же позволяет сокращать эти названия для сокращения кода.</p>
    <h3>Иcключения</h3>
    <p>Исключения в PHP — это гибкий, расширяемый метод обработки ошибок.</p>
    <h3>Сейчас в наличии (цены указана в рублях)</h3>
    
    <table>
        <tr>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Стоимость доставки</th>
            <th>Корзина</th>
        </tr>
            <?php foreach ($products as $key => $product) :?>
                <tr>
                    <?php $product->getFullDescription(); ?>
                    <td>
                        <?php if ($basket->getSuccess($product->name)) { ?>
                            <a href="index.php?product=<?php echo ($product->name); ?>&price=<?php echo (substr(($product->getPrice()),-3,3)); ?>&delivery=<?php echo ($product->getDelivery()); ?>">Добавить в корзину</a>
                        <?php } else { ?>
                            <a href="index.php?delete=<?php echo ($product->name); ?>">Убрать из корзины</a>
                        <?php } ?>
                    </td>
                </tr>
             <?php endforeach; ?>
    </table>
    <div><a href="list.php?action=getorder">В корзине: <?php $basket->getCount() ?></a></div>
</body>
</html>

