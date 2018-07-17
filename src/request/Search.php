<?php

namespace eth\driver\request;

use eth\driver\EthDriverResponse;

class Search extends RequestBase
{

    /**
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function info()
    {
        return $this->request('/eth/last_hash');
    }


    /**
     * @param $txid
     * @return bool
     * @throws \eth\driver\exception\EthWalletDriverException
     */
    public function transactionReceipt($txid)
    {
        return $this->request('/eth/transaction_receipt/' . $txid);

    }


}