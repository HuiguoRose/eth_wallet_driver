<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午5:13
 */

namespace eth\driver\biz;


use eth\driver\EthDriverResponse;

class Account extends BizBase
{

    public function new()
    {
        $result = $this->getRequest(__CLASS__, __FUNCTION__);
        $resp = EthDriverResponse::buildResponse($result);

        if ($resp->getError() || !isset($resp->getData()['address'])) {
            return false;
        } else {
            return $resp->getData()['address'];
        }
    }

    public function isLocal($address)
    {
        $result = $this->getRequest(__CLASS__, __FUNCTION__, ['address' => $address]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError() || !isset($resp->getData()['is_local'])) {
            return false;
        } else {
            return $resp->getData()['is_local'] === true;
        }
    }
}