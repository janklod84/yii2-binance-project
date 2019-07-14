<?php
use app\components\market\BalanceInterface;

/* @var $this yii\web\View */

?>
<div class="site-content">
   <h3>Листинг :</h3>
    <?php
       // debug($balances);
    ?>
    <div class="row">
        <div class="col-lg-12">
            <?= \yii\grid\GridView::widget([
                'dataProvider' => new \yii\data\ArrayDataProvider([
                    'allModels' => $balances,
                    'pagination' => [
                        'pageSize' => 25,
                    ],
                ]),
                'columns' => [
                    [
                        'label' => 'Валюта [Symbol]',
                        /*
                        'value' =>  function (BalanceInterface $balance) {
                            return $balance->symbol();
                        }
                        */
                        'value' => get_currency_symbol($balance)
                    ],
                    [
                        'label' => 'Остаток [Value]',
                        /*
                        'value' => function (BalanceInterface $balance) {
                            return $balance->value();
                        }*/
                        'value' => get_currency_value($balance)

                    ],
                ]
            ]) ?>
        </div>
</div>
