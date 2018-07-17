<?php
/**
 * Created by PhpStorm.
 * User: tears
 * Date: 2018/7/17
 * Time: 下午5:16
 */

namespace eth\driver\biz;


class BizBase
{
    protected $option;
    protected $class;

    public function __construct($option)
    {
        if (!array_key_exists('api_url', $option)) {
            throw new \InvalidArgumentException('api_url not exists');
        }
        $this->option = $option;
    }

    public function getRequest($c, $f, $p = [])
    {
        $c = str_replace('biz', 'request', $c);
        $req = new $c($this->option);
        return call_user_func_array([$req, $f], $p);
    }


}