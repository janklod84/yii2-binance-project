<?php
namespace app\components\market;


/**
 * Class Balance [ This class represente a balance ]
 *
 * Ex: [USD , 62.08] => [symbol, value]
 *
 * Так как у Баланса есть симбол и значение
 * значит можно моделировать Баланс в следущем образом
 *
 * @package app\components\market
 */
class Balance implements BalanceInterface
{

    /**
     * @var string $symbol [ симбол баланса ]
     * @var float  $value  [ значение баланса ]
     */
    private $symbol;
    private $value;

    // private $properties = [];


    /**
     * Balance constructor.
     *
     * @param string $symbol
     * @param float $value
     */
    public function __construct(string $symbol, float $value)
    {
         $this->symbol = $symbol;
         $this->value  = $value;

         // $this->>properties = compact('symbol', 'value');
    }


    /**
     * Get Symbol
     *
     * @return string
     */
    public function symbol(): string
    {
        return $this->symbol;
    }

    /**
     * Get Value
     *
     * @return float
     */
    public function value(): float
    {
        return $this->value;
    }
}