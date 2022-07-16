<?php

namespace App\Service;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class GetHistoryPrice{

    public function handle(string $date){
        $client = new CoinGeckoClient();

        $data = $client->coins()->getHistory('bitcoin', $date);

        return $data;
    }
}