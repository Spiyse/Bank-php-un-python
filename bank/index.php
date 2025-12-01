<?php

echo "gucci <br>\n";

require_once "BankAccount.php";

$lomo = new BankAccount('Krigerts', 1522222);
$niks = new BankAccount('Niks', 1);

$lomo->deposit(50);
$lomo->withdraw(30);
$lomo->withdraw(6);
$niks->deposit(1);


$lomo->printInfo();
$niks->printInfo();