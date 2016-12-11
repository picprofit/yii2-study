<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Drugs */

$this->title = 'Create Drugs';
$this->params['breadcrumbs'][] = ['label' => 'Drugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drugs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
