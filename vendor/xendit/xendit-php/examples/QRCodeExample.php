<?php

/**
 * QRCodeExample.php
 * php version 7.2.0
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> parent of 31cfa1b1 (p)
 * @category Example
 * @package  Xendit/Examples
 * @author   Dave <kevindave@xendit.co>
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
  'external_id' => 'external_123',
  'type' => 'STATIC',
  'callback_url' => 'https://webhook.site',
  'amount' => 10000,
];

$created_qr_code = \Xendit\QRCode::create($params);
<<<<<<< HEAD
var_dump($created_qr_code);
=======
var_dump($createdQRCode);
>>>>>>> parent of 31cfa1b1 (p)

$qr_code = \Xendit\QRCode::get('external_123');
var_dump($qr_code);
