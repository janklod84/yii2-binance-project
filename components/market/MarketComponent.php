<?php
namespace app\components\market;


// use yii\base\Component;
use \yii\base\Configurable;
use app\components\market\CurrencyServiceInterface;
use yii;




/**

 * Class MarketComponent
 * Бирж = [англ.] Market.
 * от туда следующее название компонент
 *
 * @package app\components\market
 */
class MarketComponent implements Configurable
{

    /**
     * @var array $exchanges
     */
    private $currency_services = [];


    /**
     * MarketComponent constructor.
     *
     * @param array $config
     * @throws \yii\base\InvalidConfigException
     */
     public function __construct(array $config= [])
     {
           $this->set_currency_services($config);
     }


    /**
     * Get currency service from currency services container
     *
     * @param string $name [ Service Name ]
     * @return CurrencyServiceInterface
     */
     public function getService(string $name): CurrencyServiceInterface
     {
         // тут проверяю наличие сервис
         if($this->hasService($name))
         {
             // если он есть вернем его
             return $this->currency_services[$name];
         }
     }


    /**
     * Determine if has currency for given name
     *
     * @param string $name
     * @return bool
     */
     public function hasService(string $name): bool
     {
         return isset($this->currency_services[$name]);
     }


    /**
     * Set currency services
     *
     * @param array $config
     * @throws \yii\base\InvalidConfigException
     */
     private function set_currency_services(array $config)
     {
         foreach($config as $name => $class_name)
         {
              // Lazy loading [Леневая загрузка] что бы не создавался личный объекта
              // если объект не создан
              if(!isset($this->currency_services[$name]))
              {
                   // тогда мы его создадим
                   $this->currency_services[$name] = Yii::createObject($class_name);
              }
         }
     }

}