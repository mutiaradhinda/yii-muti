<?php

use app\models\Personal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PersonalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Personals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-index">

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-outline">
              <div class="card-header">
                <h2 class="card-title">Personal</h2>
              </div>
              <div class="card-body">
                <p>
                     <?= Html::a('Create Personal', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_lengkap',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat',
            'no_hp',
            'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Personal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_personal' => $model->id_personal]);
                 }
            ],
        ],
    ]); ?>
</div>
    <?php Pjax::end(); ?>

</div>
</div>
</div>
</div>
</section>
</div>
