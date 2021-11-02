<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subcountry */

$this->title = 'Update Subcountry: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subcountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subcountry-update">

    <?php $form = ActiveForm::begin(); ?>
    
    <h2>Ubah SubCountry untuk negara <?= $model->country_code; ?> </h2>
    <?= $form->field($model, 'country_code')->hiddenInput(['value' => $model->country_code])->label(false) ?>
    <?= $form->field($model, 'name') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
