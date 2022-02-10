<?php

/**
 * BalanceExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

<<<<<<< HEAD
=======
use Dotenv\Dotenv;
>>>>>>> parent of 31cfa1b1 (p)
use Xendit\Xendit;

require 'vendor/autoload.php';

<<<<<<< HEAD
Xendit::setApiKey('SECRET_API_KEY');

$params = array(
    'for-user-id' => '<sub account user id>' //The sub-account user-id that you want to make this transaction for (Optional).
);
$getBalance = \Xendit\Balance::getBalance('CASH', $params);
=======
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
Xendit::setApiKey(getenv('SECRET_API_KEY'));

$getBalance = \Xendit\Balance::getBalance('CASH');
>>>>>>> parent of 31cfa1b1 (p)
var_dump($getBalance);
