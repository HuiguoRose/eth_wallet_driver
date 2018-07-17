<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午5:57
 */

namespace eth\driver\biz;


use eth\driver\EthDriverResponse;

class Search extends BizBase
{
    public function info()
    {
        $result = $this->getRequest(__CLASS__, __FUNCTION__);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError() || empty($resp->getData())) {
            return false;
        } else {
            return $resp->getData();
        }
    }

    public function transactionReceipt($txid)
    {
        $result = $this->getRequest(__CLASS__, __FUNCTION__, ['txid' => $txid]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError() || empty($resp->getData())) {
            return false;
        } else {
            return $resp->getData();
        }

    }
}