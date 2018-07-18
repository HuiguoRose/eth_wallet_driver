<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午5:13
 */

namespace eth\driver\biz;


use eth\driver\EthDriverResponse;

/**
 * Class Account
 * @package eth\driver\biz
 */
class Account extends BizBase
{

    /**
     * @return bool|string
     */
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

    /**
     * @param $address
     * @return bool
     */
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

    /**
     * @param $address
     * @return mixed
     */
    public function export($address)
    {
        $result = $this->getRequest(__CLASS__, __FUNCTION__, ['address' => $address]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError() || !isset($resp->getData()['private_key'])) {
            return false;
        } else {
            return $resp->getData()['private_key'];
        }
    }

    /**
     * @param $private_key
     * @return bool|string
     */
    public function import($private_key)
    {
        $result = $this->getRequest(__CLASS__, __FUNCTION__, ['private_key' => $private_key]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError() || !isset($resp->getData()['address'])) {
            return false;
        } else {
            return $resp->getData()['address'];
        }
    }

    /**
     * @param $address
     * @return bool|int
     */
    public function balance($address)
    {
        $result = $this->getRequest(__CLASS__, __FUNCTION__, ['address' => $address]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError()) {
            return false;
        } else {
            return empty($resp->getData()) ? 0 : $resp->getData();
        }
    }

    /**
     * @param $address
     * @param $token_address
     * @return bool|int
     */
    public function balance_token($address, $token_address = '')
    {
        $token_address = empty($token_address) ? empty($this->option['token_address']) ? '' : $this->option['token_address'] : $token_address;
        $result = $this->getRequest(__CLASS__, __FUNCTION__,
            ['address' => $address, 'token_address' => $token_address]);
        $resp = EthDriverResponse::buildResponse($result);
        if ($resp->getError()) {
            return false;
        } else {
            return empty($resp->getData()) ? 0 : $resp->getData();
        }
    }
}