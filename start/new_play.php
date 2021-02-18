<?php
require_once "library/Ship.php";
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
/**
 * @param Ship $someShip
 */
 function printShipSummary($someShip){
    echo 'Ship name: ' .$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    var_dump($someShip->getWeaponPower());
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->setName('Jedi Starship') ;
$myShip->setWeaponPower(10);
//$myShip->strength = 100;

$otherShip = new Ship();
$otherShip->setName('Imperial Shuttle');
$otherShip->setWeaponPower(5);
$otherShip->setStrength(50);


printShipSummary($myShip);
echo '<hr/>';
echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';
if ($myShip->doesGivenShipHasMoreStrength($otherShip))
{
    echo $otherShip->getName(). ' has more strength';
}
else {
    echo $myShip->getName(). ' has more strength';
}
echo '<hr/>';

