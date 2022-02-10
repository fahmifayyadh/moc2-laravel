<?php

/**
 * RetailExample.php
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
=======
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
Xendit::setApiKey(getenv('SECRET_API_KEY'));
>>>>>>> parent of 31cfa1b1 (p)

$params = [
    'external_id' => 'TEST-123456789',
    'retail_outlet_name' => 'ALFAMART',
    'name' => 'JOHN DOE',
    'expected_amount' => 25000
];

$createFPC = \Xendit\Retail::create($params);
var_dump($createFPC);

$id = $createFPC['id'];

$getFPC = \Xendit\Retail::retrieve($id);
var_dump($getFPC);

$updateParams = ['expected_amount' => 20000];

$updateFPC = \Xendit\Retail::update($id, $updateParams);
var_dump($updateFPC);
