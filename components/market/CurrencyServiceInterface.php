<?php
namespace app\components\market;


/**
 * Interface CurencyServiceInterface
 *
 *
 * @package app\components\market
 */
interface CurrencyServiceInterface
{
    /**
     * Get balances
     *
     * @return array
     */
    public function balances(): array;
}