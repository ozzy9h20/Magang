<?php

// use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subcountry */

$this->title = 'Create Subcountry';

$cc = Yii::$app->request->get()['code'];
?>
<div class="subcountry-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    
    <?php $form = ActiveForm::begin(); ?>
    
    <h2>Tambah SubCountry untuk negara <?= $cc ?> </h2>
    <?= $form->field($model, 'country_code')->hiddenInput(['value' => $cc])->label(false) ?>
    <?= $form->field($model, 'name') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>