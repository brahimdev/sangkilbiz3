<?php

use yii\web\JsExpression;
use yii\jui\AutoComplete;
use yii\helpers\Html;
use biz\purchase\models\PurchaseDtl;
use mdm\relation\EditableList;
use biz\purchase\assets\PurchaseAsset;
use biz\app\assets\BizDataAsset;

/* @var $details PurchaseDtl[] */
/* @var $model biz\purchase\models\PurchaseHdr */
/* @var $this yii\web\View */
?>
<div class="col-lg-9">
    <div class="panel panel-info">
        <div class="panel-heading">
            Product :
            <?php
            echo AutoComplete::widget([
                'name' => 'product',
                'id' => 'product',
                'clientOptions' => [
                    'source' => new JsExpression('yii.global.sourceProduct'),
                    'select' => new JsExpression('yii.purchase.onProductSelect'),
                    'delay' => 100,
                ]
            ]);
            ?>
            <div class="pull-right">
                Item Discount:                
                <?= Html::activeTextInput($model, 'item_discount', ['style' => 'width:60px;']); ?>
            </div>
        </div>
        <div class="panel-body" style="text-align: right;">
            <?= Html::activeHiddenInput($model, 'purchase_value'); ?>
            <h4 id="bfore" style="display: none;">Rp <span id="purchase-val">0</span>-<span id="disc-val">0</span></h4>
            <h2>Rp <span id="total-price"></span></h2>
        </div>
        <table class="table table-striped">
            <?=
            EditableList::widget([
                'id'=>'detail-grid',
                'allModels' => $details,
                'modelClass' => PurchaseDtl::className(),
                'options' => ['tag' => 'tbody'],
                'itemOptions' => ['tag' => 'tr'],
                'itemView'=>'_item_detail',
                'clientOptions'=>[
                    'initRow' => new JsExpression('yii.purchase.initRow')
                ]
            ])
            ?>
        </table>
    </div>
</div>
<?php
PurchaseAsset::register($this);
BizDataAsset::register($this, [
    'master'=>$masters
]);
$js = <<<JS
yii.purchase.onReady();

JS;
$this->registerJs($js);
