<?php

namespace eth\driver\request;

use eth\driver\exception\EthWalletDriverException;
use GuzzleHttp\Client;

class RequestBase
{

    protected $config = [];
    protected $params = [];
    protected $request_method = 'GET';
    protected $uri = '';

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @param array $config
     */
    public function setConfig($k, $v)
    {
        $this->config[$k] = $v;
    }

    /**
     * @param $k
     * @return mixed
     */
    public function getParams($k)
    {
        return array_key_exists($k, $this->params) ? $this->params[$k] : false;
    }

    /**
     * @param $k
     * @param $v
     */
    public function setParams($k, $v)
    {
        $this->params[$k] = $v;
    }

    /**
     * @return string
     */
    public function getRequestMethod(): string
    {
        return $this->request_method;
    }

    /**
     * @param string $request_method
     */
    public function setRequestMethod(string $request_method)
    {
        $this->request_method = $request_method;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri(string $uri)
    {
        $this->uri = $uri;
    }


    /**
     * @param string $uri
     * @param string $request_method
     * @param array $data
     * @param array $config
     * @return bool
     * @throws EthWalletDriverException
     */
    public function request($uri = '', $request_method = '', $data = [], $config = [])
    {
        $config = empty($config) ? $this->config : $config;
        $uri = empty($uri) ? $this->uri : $uri;
        $request_method = empty($request_method) ? $this->request_method : $request_method;
        $request_method = strtoupper($request_method) == 'POST' ? 'POST' : 'GET';
        $data = empty($data) ? $this->params : $data;
        $request_data = empty($data) ? ['form_params' => []] : ['form_params' => $data];
        $client = new Client(['base_uri' => $config['api_url']]);
        $response = $client->request($request_method, $uri, $request_data);
        $body = $response->getBody();
        $statusCode = $response->getStatusCode();
        if ($statusCode != 200) {
            throw new EthWalletDriverException("response code ($statusCode) not eq 200 ", $response);
        }
        $content = $body->getContents();
        return json_decode($content, true);
    }
}