<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var biz\models\Invoice $model
 */

$this->title = $model->id_invoice;
$this->params['breadcrumbs'][] = ['label' => 'Invoice Hdrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-hdr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_invoice], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_invoice], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_invoice',
            'invoice_num',
            'invoice_type',
            'invoice_date',
            'due_date',
            'id_vendor',
            'invoice_value',
            'status',
            'create_at',
            'create_by',
            'update_at',
            'update_by',
        ],
    ]) ?>

</div>
