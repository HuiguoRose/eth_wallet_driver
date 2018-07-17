<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午4:47
 */

namespace eth\driver;


class Address extends Base
{

    /**
     * @return EthDriverResponse
     * @throws exception\EthWalletDriverException
     */
    public function new()
    {
        $result = $this->request('/eth/account/new');
        return EthDriverResponse::buildResponse($result);
    }
}