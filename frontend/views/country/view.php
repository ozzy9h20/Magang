<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\icons\Icon;
Icon::map($this);

/* @var $this yii\web\View */
/* @var $model frontend\models\Country */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <p>
        <?= 
            $model->imageURL 
                ? Html::img('../uploads/' . $model->imageURL, [
                    'class' => 'img-fluid img-thumbnail', 
                    'alt' => $model->name,
                    'style' => 'width: 500px',
                ]) 
                : Html::img('../uploads/placeholder', [
                    'class' => 'img-fluid img-thumbnail',
                    'style' => 'width: 500px',
                ]);
        ?>
        <hr />
        <?= Html::a('<i class="fa fa-pencil-alt"></i> Update', ['update', 'id' => $model->code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-trash"></i> Delete', ['delete', 'id' => $model->code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('<i class="fa fa-image"></i> Upload Image', ['upload', 'id' => $model->code], ['class' => 'btn btn-info']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            'name',
            'population',
            [
                'label' => 'ImageURL',
                'value' => $model->imageURL ? 'uploads/'.$model->imageURL : 'Belum Ada',
            ]
        ],
    ]) ?>

</div>
