<?php

use yii\widgets\ActiveForm;

$params = Yii::$app->request->get();
extract($params);

?>
Input Gambar untuk negara <?= $id; ?>
<br /><br />

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

<button>Submit</button>

<?php ActiveForm::end() ?>