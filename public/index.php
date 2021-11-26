<?php

// Classes & Objets

declare(strict_types=1);

require '../src/PaymentGateway/Paypal/Transaction.php';
require '../src/Maison.php';

$transaction1 = new \PaymentGateway\Paypal\Transaction(100, 'Transaction 1');
$transaction1->addTax(8)
                ->applyDiscount(10)
                ->getAmount();
// $transaction2 = new Transaction(16, 'Transaction 2');
// $transaction3 = new Transaction(17, 'Transaction 3');
// $transaction4 = new Transaction(18, 'Transaction 4');

echo '<pre>';
var_dump($transaction1);
echo '</pre>';

//* Le nullsafe operator permet de vérifier si un élément est null ou pas. S'il il est null alors il ne tentera pas de réaliser l'opération qui retournera une erreur de type "can't call xxx of null";
$transaction1->getAmount()?->customer->id;

//? On peut générer un objet grâce à la classe stdClass de PHP qui sert à créer des objets génériques. Ils fonctionnent comme un objet d'une classe dont toutes les propriétés sont publiques.
// $str = '{"a":1, "b":2,"c":3}';

// $arr = json_decode($str, true);

// $obj = new stdClass();
// $obj->name = 'Un orphelin';

//? On peut aussi créer un objet à partir du type casting (object).
// echo '<pre>';
// var_dump((object) $arr);
// echo '</pre>';

$maison = new Maison("maison", 500, 5, "Bleu");
$maison->majType("maison");

// $maison->type = "Maison";
// $maison->superficie = 500;
// $maison->nbPieces = 5;
// $maison->couleur = "Bleu";

$maison2 = new Maison("appart", 80, 3, "Blanc");
$maison2->majType("appart");

// $maison2->type = "Appart";
// $maison2->superficie = 80;
// $maison2->nbPieces = 3;
// $maison2->couleur = "Noir";

echo '<pre>';
var_dump($maison, $maison2);
echo '</pre>';