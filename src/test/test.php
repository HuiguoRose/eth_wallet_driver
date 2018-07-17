<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午1:36
 */

namespace eth\driver\test;

ini_set('display_errors', 'On');

//error_reporting(E_ALL);

require '../../vendor/autoload.php';

use eth\driver\Address;
use eth\driver\Search;

$config['api_url'] = 'http://47.92.113.111:8080';

//$search = new Search($config);
//var_dump($search->info());
//var_dump($search->transactionReceipt('0xdb707b6a909b97f579ab50f79946fa6dab6d82980a5d305e8b39c5332886d6a1'));

$address=new Address($config);
var_dump($address->new());