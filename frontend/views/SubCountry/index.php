<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchSubcountry */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subcountries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subcountry-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showHeader'=> false,
        'columns' => [
            // 'header' => false,
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'country_code',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
