<?php

namespace vendor\kouosl\urun2\models;

use Yii;

/**
 * This is the model class for table "Tarih".
 *
 * @property int $ID
 * @property string $Uretim_Tarihi
 * @property string $Son_Kullanma_Tarihi
 */
class Tarih extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tarih';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Uretim_Tarihi', 'Son_Kullanma_Tarihi'], 'required'],
            [['ID'], 'integer'],
            [['Uretim_Tarihi', 'Son_Kullanma_Tarihi'], 'safe'],
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
            'Uretim_Tarihi' => 'Uretim  Tarihi',
            'Son_Kullanma_Tarihi' => 'Son  Kullanma  Tarihi',
        ];
    }
}
