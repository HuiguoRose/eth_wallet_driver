<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午5:11
 */

namespace eth\driver;


use eth\driver\biz\Account;
use eth\driver\biz\Search;

class Api
{
    public static function getSearch($option)
    {
        return new Search($option);
    }

    public static function getAccount($option)
    {
        return new Account($option);
    }
}