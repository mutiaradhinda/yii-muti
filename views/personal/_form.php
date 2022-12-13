<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Personal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="personal-form">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Personal</h3>
              </div>
              <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

                <?= $form->field($model, 'status_perkawinan')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
</section>
</div>
