<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午4:47
 */

namespace eth\driver\request;


use eth\driver\EthDriverResponse;

class Account extends RequestBase
{

    /**
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function new()
    {
        return $this->request('/eth/account/new','POST');
    }

    /**
     * @param $address
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function isLocal($address)
    {
        return $this->request('/eth/account/check_address/'.$address);
    }
}