<?php

namespace App\Service;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class GetBitCoinPrice{

    public function handle(){
        $client = new CoinGeckoClient();

        $data = $client->simple()->getPrice('bitcoin', 'usd,brl');

        return $data;
    }
}
