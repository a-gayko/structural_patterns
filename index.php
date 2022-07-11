<?php

declare(strict_types=1);

use Patterns\DependensyIn\ConnectDB;
use Patterns\DependensyIn\QueryClass;
use Patterns\Composite\Ingredient;
use Patterns\Composite\Pizza;
use Patterns\Composite\Order;
use Patterns\Decorator\Computer;
use Patterns\Decorator\LaptopPropertiesDecorator;
use Patterns\Decorator\DesctopPropertiesDecorator;
use Patterns\Adapter\JsonReport;
use Patterns\Adapter\PHPArrayReport;
use Patterns\Adapter\SerializedReport;
use Patterns\Adapter\Report;

require_once __DIR__ . '/vendor/autoload.php';

// // DependensyIn pattern
// echo PHP_EOL .'DependensyIn pattern:' . PHP_EOL;

// $db = 'SomeName';
// $db = new ConnectDB('localhost', 'admin', 'difficultPassword', $db);
// $testDB = new QueryClass($db);

// // Composite pattern
// echo PHP_EOL .'Composite pattern:' . PHP_EOL;

// $margarita = new Pizza('Margarita');
// $margarita->add(new Ingredient('tomato', 5.8));
// $margarita->add(new Ingredient('potato',4.2));

// $fiveCheeses = new Pizza('Five Cheeses');
// $fiveCheeses->add(new Ingredient('oneCheese', 10));
// $fiveCheeses->add(new Ingredient('twoCheese', 12));
// $fiveCheeses->add(new Ingredient('threeCheese', 11));
// $fiveCheeses->add(new Ingredient('fourCheese', 13));
// $fiveCheeses->add(new Ingredient('fiveCheese', 11.3));

// $order = new Order('First Order');
// $order->add($margarita);
// $order->add($fiveCheeses);
// echo $order->getPrice();

// //Decorator pattern
// echo PHP_EOL . PHP_EOL . 'Decorator pattern:' . PHP_EOL;

// $lap = new LaptopPropertiesDecorator(new Computer);
// $lap->getProduct();

// $desc = new DesctopPropertiesDecorator(new Computer);
// $desc->getProduct();


//Adapter pattern
echo PHP_EOL . PHP_EOL . 'Adapter pattern:' . PHP_EOL;

$reports = [
    new JsonReport(),
    new PHPArrayReport(),
    new SerializedReport(),
];

$data =  new Report($reports);
$data->getReports();