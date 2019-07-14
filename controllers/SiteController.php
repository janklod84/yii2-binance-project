<?php

namespace app\controllers;

use app\components\market\MarketComponent;
use Yii;
use yii\web\Controller;



/**
 * Class SiteController
 *
 * @package app\controllers
 */
class SiteController extends Controller
{

    /**
     * @var MarketComponent
     */
    private $market;


    /**
     * SiteController constructor.
     *
     * @param $id
     * @param $module
     * @param MarketComponent $market
     * @param array $config
     */
    public function __construct($id, $module, MarketComponent $market, $config = [])
    {
          parent::__construct($id, $module, $config);
          $this->market = $market;
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Action index [ Displays homepage. ]
     *
     * @return string
     */
    public function actionIndex()
    {
        $service = $this->market->getService('BINANCE');
        $balances = $service->balances();
        return $this->render('index', compact('balances'));
    }

}
