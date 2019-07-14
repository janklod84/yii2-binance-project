<?php

use app\components\market\BalanceInterface;



if(!function_exists('debug'))
{
    /**
     * Pretty printer array data
     *
     * @param $arr
     * @param bool $die
     */
    function debug($arr, $die = false)
    {
        $s = 'color:#84a;';
        echo sprintf('<pre style="%s">', $s);
        print_r($arr);
        echo '</pre>';
        if($die) die;
    }
}



if(!function_exists('get_currency_symbol'))
{
    /**
     * Get Currency Symbol
     *
     * @param BalanceInterface $balance
     * @return mixed
     */
    function get_currency_symbol(BalanceInterface $balance)
    {
        return $balance->symbol();
    }
}



if(!function_exists('get_currency_value'))
{
    /**
     * Get Currency value
     *
     * @param BalanceInterface $balance
     * @return mixed
     */
    function get_currency_value(BalanceInterface $balance)
    {
        return $balance->value();
    }
}


