<?php

namespace App\Http\Controllers;

use App\Service\GetBitCoinPrice;
use App\Service\GetHistoryPrice;
use Illuminate\Http\Request;

class BitCoinController extends Controller
{
    //
    public function __construct(private GetBitCoinPrice $getBitCointPrice, private GetHistoryPrice $getHistoryPrice)
    {
    }

    public function index()
    {
        $result = $this->getBitCointPrice->handle();
        return response()->json($result,200);
    }

    public function getHistory(Request $request){
        $request->validate([
            'date'=>'required|date_format:m-d-Y'
        ]);
        $result = $this->getHistoryPrice->handle($request->date);
        return response()->json($result,200);
    }
}
