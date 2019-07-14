<?php
namespace app\components\market;


/**
 * Interface BalanceInterface
 */
interface BalanceInterface
{
    /**
     * Get Symbol
     *
     * @return string
     */
    public function symbol(): string;


    /**
     * Get Value
     *
     * @return float
     */
    public function value(): float;
}