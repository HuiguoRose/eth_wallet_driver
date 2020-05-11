<?php

namespace eth\driver\request;


use eth\driver\exception\EthWalletDriverException;

/**
 * 查询接口请求类
 * Class Search
 * @package eth\driver\request
 */
class Search extends RequestBase
{

    /**
     * 获取系统运行状态
     * @return bool
     * @throws EthWalletDriverException
     */
    public function info()
    {
        return $this->request('/eth/last_hash');
    }


    /**
     * 查询指定txid的交易情况
     * @param $txid
     * @return bool
     * @throws EthWalletDriverException
     */
    public function transactionReceipt($txid)
    {
        return $this->request('/eth/transaction_receipt/' . $txid);

    }

    /**
     * 查询指定txid的交易详情
     * @param $txid
     * @return bool
     * @throws EthWalletDriverException
     */
    public function transaction($txid)
    {
        return $this->request('/eth/transaction_receipt/' . $txid . '/info');

    }


    /**
     * 查询指定token的TotalSupply
     * @param $token_address
     * @return bool
     * @throws EthWalletDriverException
     */
    public function tokenTotalSupply($token_address)
    {
        return $this->request("/eth/token/$token_address/total_supply", 'POST',
            []);
    }


}