<?php
namespace app\components\market\services;


use app\components\market\Balance;
use app\components\market\CurrencyServiceInterface;
use Binance\API;




/**
 * Class BinanceService
 *
 * @package app\components\market\services
 */
class BinanceService implements CurrencyServiceInterface
{

    /**
     * @var \Binance\API $api
     * @var array $balances
     */
    private $api;
    // private $balances = [];



    /**
     * BinanceService constructor.
     *
     * @param \Binance\API $api
     */
    public function __construct(API $api)
    {
        $this->api = $api;
    }


    /**
     * Get balances
     *
     * @return array
     * @throws \Exception
     */
    public function balances(): array
    {
        $balances = [];

        foreach($this->get_balance_data() as $symbol => $data)
        {
             array_push($balances, new Balance($symbol, $data['available']));
        }

        return $balances;
    }


    /**
     * Get balance data
     *
     * @param $prices
     * @return array
     * @throws \Exception
     */
    private function get_balance_data()
    {
        return $this->api->balances($this->api->prices());
    }

    /**
    private function map_balances()
    {
        return array_map(function ($symbol, $data) {
            array_push($this->balances, new Balance($symbol, $data['available']));
        }, $this->get_balance_data($prices));
    }
    */
}