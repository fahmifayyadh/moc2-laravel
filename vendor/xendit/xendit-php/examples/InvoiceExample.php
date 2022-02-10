<?php

/**
 * InvoiceExample.php
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

$params = ['external_id' => 'demo_147580196270',
    'payer_email' => 'sample_email@xendit.co',
    'description' => 'Trip to Bali',
    'amount' => 32000
];

$createInvoice = \Xendit\Invoice::create($params);
var_dump($createInvoice);

$id = $createInvoice['id'];

$getInvoice = \Xendit\Invoice::retrieve($id);
var_dump($getInvoice);

<<<<<<< HEAD
$params = [
    'for-user-id' => '<enter user id>'
];
$expireInvoice = \Xendit\Invoice::expireInvoice($id, $params);
var_dump($expireInvoice);

$retrieveAll = [
    'for-user-id' => '<enter user id>'
];
$getAllInvoice = \Xendit\Invoice::retrieveAll($retrieveAll);
=======
$expireInvoice = \Xendit\Invoice::expireInvoice($id);
var_dump($expireInvoice);

$getAllInvoice = \Xendit\Invoice::retrieveAll();
>>>>>>> parent of 31cfa1b1 (p)
var_dump(($getAllInvoice));
