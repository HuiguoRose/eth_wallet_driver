<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午1:12
 */

namespace eth\driver\exception;


class EthWalletDriverException extends \Exception
{
    protected $data;

    public function __construct($msg, $data)
    {
        $this->data = $data;
        parent::__construct($msg);
    }

}