<?php

namespace vendor\kouosl\urun2\models;

use Yii;

/**
 * This is the model class for table "Stock".
 *
 * @property int $ID
 * @property int $Stock_Sayisi
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'Stock_Sayisi'], 'integer'],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Stock_Sayisi' => 'Stock  Sayisi',
        ];
    }
}
