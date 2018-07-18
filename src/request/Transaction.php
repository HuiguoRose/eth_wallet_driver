<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/18
 * Time: 上午9:11
 */

namespace eth\driver\request;


class Transaction extends RequestBase
{
    /**
     * @param $to_address
     * @param $amount
     * @param $from_address
     * @param $token_address
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function transfer_token($to_address, $amount, $from_address, $token_address)
    {
        return $this->request("/eth/token/$token_address/transfer_token", 'POST',
            ['to_address' => $to_address, 'amount' => $amount, 'from_address' => $from_address]);
    }

    /**
     * @param $to_address
     * @param $amount
     * @param $from_address
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function transfer($to_address, $amount, $from_address)
    {
        return $this->request("/eth/transfer", 'POST',
            ['to_address' => $to_address, 'amount' => $amount, 'from_address' => $from_address]);
    }



}