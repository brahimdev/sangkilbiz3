<?php

namespace biz\master\models;

use Yii;

/**
 * This is the model class for table "price_category".
 *
 * @property integer $id_price_category
 * @property string $nm_price_category
 * @property string $formula
 * @property integer $create_by
 * @property string $update_at
 * @property integer $update_by
 * @property string $create_at
 *
 * @property Price[] $prices
 * @property Product[] $idProducts
 */
class PriceCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%price_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nm_price_category'], 'required'],
            [['nm_price_category', 'formula'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_price_category' => 'Id Price Category',
            'nm_price_category' => 'Nm Price Category',
            'formula' => 'Formula',
            'create_by' => 'Create By',
            'update_at' => 'Update At',
            'update_by' => 'Update By',
            'create_at' => 'Create At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['id_price_category' => 'id_price_category']);
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'BizTimestampBehavior',
            'BizBlameableBehavior',
        ];
    }
}
