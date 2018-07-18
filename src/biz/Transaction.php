<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/18
 * Time: 上午9:16
 */

namespace eth\driver\biz;


use eth\driver\EthDriverResponse;

class Transaction extends BizBase
{
    public function transfer_token($to_address, $amount, $from_address = '', $token_address = '')
    {
        $from_address = empty($from_address) ? empty($this->option['main_address']) ? '' : $this->option['main_address'] : $from_address;
        $token_address = empty($token_address) ? empty($this->option['token_address']) ? '' : $this->option['token_address'] : $token_address;
        $result = $this->getRequest(__CLASS__, __FUNCTION__, [
            'to_address' => $to_address,
            'amount' => (string)$amount,
            'from_address' => $from_address,
            'token_address' => $token_address
        ]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError() || !isset($resp->getData()['tx_hash'])) {
            return false;
        } else {
            return $resp->getData()['tx_hash'];
        }
    }

    public function transfer($to_address, $amount, $from_address = '')
    {
        $from_address = empty($from_address) ? empty($this->option['main_address']) ? '' : $this->option['main_address'] : $from_address;
        $result = $this->getRequest(__CLASS__, __FUNCTION__, [
            'to_address' => $to_address,
            'amount' => (string)$amount,
            'from_address' => $from_address,
        ]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError() || !isset($resp->getData()['tx_hash'])) {
            return false;
        } else {
            return $resp->getData()['tx_hash'];
        }
    }
}