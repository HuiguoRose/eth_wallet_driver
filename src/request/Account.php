<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午4:47
 */

namespace eth\driver\request;


use eth\driver\EthDriverResponse;

/**
 * Class Account
 * @package eth\driver\request
 */
class Account extends RequestBase
{

    /**
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function new()
    {
        return $this->request('/eth/account/new', 'POST');
    }

    /**
     * @param $address
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function isLocal($address)
    {
        return $this->request('/eth/account/check_address/' . $address);
    }

    /**
     * @param $address
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function export($address)
    {
        return $this->request('/eth/account/export', 'POST', ['address' => $address]);
    }

    /**
     * @param $private_key
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function import($private_key)
    {
        return $this->request('/eth/account/import', 'POST', ['private_key' => $private_key]);
    }

    /**
     * @param $address
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function balance($address)
    {
        return $this->request('/eth/balances/' . $address);
    }

    /**
     * @param $address
     * @param $token_address
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function balance_token($address,$token_address)
    {
        return $this->request("/eth/token/$token_address/balance/$address");
    }
}