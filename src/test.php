<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午1:36
 */

namespace eth\driver;

use eth\driver\biz\Transaction;

ini_set('display_errors', 'On');

error_reporting(E_ALL);

require '../vendor/autoload.php';

//define('ETH_WALLET_DRIVER_REQUEST_DEBUG',true);

$config['api_url'] = 'http://47.92.113.111:8080';
$config['main_address'] = '0x9778ca61fc2806fad59bcd177de71b0071c0481b';
$config['token_address'] = '0xb3779f0a451b1558c52e11d187643440eda83b7e';
$search = Api::getSearch($config);
//$info=$search->info();
//var_dump($info);
//$txid="0x80d2698813df6be1808258e266cd4a3e813d44d6b278c38db639fbe445f9dc10";
//var_dump($search->transactionReceipt($txid));
//$account = Api::getAccount($config);
//$address = $account->new();
//var_dump($address);
//$address="0x78ed5daa2d9782f2ab05201e9c7dd22ea73903c2";
//var_dump($account->isLocal($address));
//$private_key=$account->export($address);
//var_dump($private_key);
//$private_key="282b23ee04752c49ebad4dc6dafc113b177f8f40d60b3c9899c5a3d83433128d"; //0x686BDa3C1F3Ae481577685A4F6F6CF17990A8d1d
//var_dump($account->import($private_key));
//var_dump($account->balance($address));
//var_dump($account->balance_token($address));// 结构没改
//$transaction=new Transaction($config);
//$txid=$transaction->transfer_token($address,100);
//var_dump($txid);
//$txid=$transaction->transfer($address,0.001); // 到账数量问题
//var_dump($txid);

