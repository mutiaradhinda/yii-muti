<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Url;	
?>
<div class="row">
	<div class="col-sm-6">
		<?php 
			$form = ActiveForm::begin([
				'method' => 'post',
				'action' => Url::to(['site/pelajar']), 
			]);
		?>
			<?= $form->field($model, 'nama')->textInput() ?>
			<?= $form->field($model, 'kelas')->dropDownList($model->dataKelas(),[ 
				'class' => 'form-control', 'prompt' => '- Pilih Kelas -'
			]) ?>
			<?= $form->field($model, 'email')->textInput() ?>
			<?= $form->field($model, 'keterangan')->textInput() ?>

		<?php 
			ActiveForm::end();
		?>
	</div>
</div>