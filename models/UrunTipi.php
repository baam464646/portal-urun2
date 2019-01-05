<?php

namespace vendor\kouosl\urun2\models;

use Yii;

/**
 * This is the model class for table "UrunTipi".
 *
 * @property int $ID
 * @property string $Urun_Tipi
 */
class UrunTipi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'UrunTipi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID'], 'integer'],
            [['Urun_Tipi'], 'string', 'max' => 30],
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
            'Urun_Tipi' => 'Urun  Tipi',
        ];
    }
}
