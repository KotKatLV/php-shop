<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'name',
            'email:email',
            'phone',
            'address',
            'sum',
            ['attribute' => 'status', 'value' => static function ($info) {
                  return $info->status === 'Завершен' ? '<div style="color:red">' . $info->status . '</div>' : '<div style="color:green">' . $info->status . '</div>';
            }, 'format' => 'raw'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]) ?>


</div>