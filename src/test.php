<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午1:36
 */

namespace eth\driver;

ini_set('display_errors', 'On');

error_reporting(E_ALL);

require '../vendor/autoload.php';

//use eth\driver\Account;
//use eth\driver\Api;

$config['api_url'] = 'http://47.92.113.111:8080';

//$search = Api::getSearch($config);
//var_dump($search->info());
//var_dump($search->transactionReceipt('0xdb707b6a909b97f579ab50f79946fa6dab6d82980a5d305e8b39c5332886d6a1'));
//$account=Api::getAccount($config);
//var_dump($account->new());
//var_dump($account->isLocal('0xf9612ad7a17921fcf99cfa9391a6e957b0b884fa'));