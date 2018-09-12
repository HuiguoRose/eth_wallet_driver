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

//define('ETH_WALLET_DRIVER_REQUEST_DEBUG',true); // 网络请求调试模式

$config['api_url'] = 'http://47.92.113.111:8080';  // 接口URL
$config['main_address'] = '0x9778ca61fc2806fad59bcd177de71b0071c0481b';  // 主钱包地址
$config['token_address'] = '0xb3779f0a451b1558c52e11d187643440eda83b7e'; // 操作的token地址

// 查询类
//$search = Api::getSearch($config);

/*
 * 获取系统运行状态
 * array(4) {
  ["number"]=>
  string(7) "4016470"  当前区块高度
  ["run_time"]=>
  string(16) "23m40.730868173s" 运行时间
  ["time"]=>
  string(25) "2018-09-11T15:09:24+08:00" 服务器时间
  ["tx_hash"]=>
  string(66) "0x6ab93337b3b281ca75bfbca71cc0fa19506b7db89644e31172566ae6bf23d2b6" 系统同步最后区块
}

 */
//$info=$search->info();
//var_dump($info);


/*
 *指定txid的交易情况
 * array(2) {
  ["is_existed"]=>
  bool(true) 是否存在
  ["success"]=>
  bool(false) 是否交易成功
}
 */
//$txid="0x80d2698813df6be1808258e266cd4a3e813d44d6b278c38db639fbe445f9dc10";
//var_dump($search->transactionReceipt($txid));


//账户类
//$account = Api::getAccount($config);

// 生成新钱包地址
// 0x028d392d0b3a59338aa79fc0400ae63d5f84b37e
//$address = $account->new();
//var_dump($address);

// 是否是本地地址
//bool(false)
//$address = "0x78ed5daa2d9782f2ab05201e9c7dd22ea73903c2";
//$address = "0x686bda3c1f3ae481577685a4f6f6cf17990a8d1d";
//$address = "0xe39a0f652d1d5815cd238d726230a4df51de2db1";
//var_dump($account->isLocal($address));

//导出私钥 (本地地址 非本地地址返回false)
//string(64) "282b23ee04752c49ebad4dc6dafc113b177f8f40d60b3c9899c5a3d83433128d"
//$private_key=$account->export($address);
//var_dump($private_key);

// 导入私钥 (已存在返回false)
// bool(false)
//$private_key="282b23ee04752c49ebad4dc6dafc113b177f8f40d60b3c9899c5a3d83433128d"; //0x686BDa3C1F3Ae481577685A4F6F6CF17990A8d1d
//var_dump($account->import($private_key));

// 查询ETH余额 (所有地址)
//string(1) "1"
//var_dump($account->balance($address));

//查询代币余额
//string(1) "1"
//var_dump($account->balance_token($address));

// 交易类
//$transaction = Api::getTransaction($config);

//转出代币到指定地址
//string(66) "0xa335920fb1d1e3745b471966ebbbe8a32d1d11a508745c8f0a11faa8fa87441c"
//$txid = $transaction->transfer_token($address, 0.00001);
//var_dump($txid);

//转出ETH到指定地址
//string(66) "0x17c915a65953eb656b1d68b2269889523f6892eb62e1de0cf461d1d082510e21"
//$txid=$transaction->transfer($address,0.001); // 到账数量问题
//var_dump($txid);

