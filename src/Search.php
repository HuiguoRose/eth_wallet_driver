<?php

namespace eth\driver;

class Search extends Base
{

    /**
     * @return EthDriverResponse;
     * @throws exception\EthWalletDriverException
     */
    public function info()
    {
        $result = $this->request('/eth/last_hash');
        return EthDriverResponse::buildResponse($result);
    }


    /**
     * @param $txid
     * @return EthDriverResponse
     * @throws exception\EthWalletDriverException
     */
    public function transactionReceipt($txid)
    {
        $result = $this->request('/eth/transaction_receipt/'.$txid);
        return EthDriverResponse::buildResponse($result);

    }


}