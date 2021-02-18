<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once __DIR__ . '/library/Model/BattleResult.php';
require __DIR__ . '/library/Model/Ship.php';
require __DIR__ . '/library/Service/Container.php';
require __DIR__ . '/library/Service/ShipLoader.php';
require __DIR__ . '/library/Service/BattleManager.php';


$configuration = array(
    'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'nata123'
);


