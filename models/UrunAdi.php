<?php

namespace vendor\kouosl\urun2\models;

use Yii;

/**
 * This is the model class for table "UrunAdi".
 *
 * @property int $ID
 * @property int $Urun_Adi
 * @property int $Urun_Tipi_ID
 * @property string $Tarih_ID
 */
class UrunAdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'UrunAdi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Tarih_ID'], 'required'],
            [['ID', 'Urun_Adi', 'Urun_Tipi_ID'], 'integer'],
            [['Tarih_ID'], 'safe'],
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
            'Urun_Adi' => 'Urun  Adi',
            'Urun_Tipi_ID' => 'Urun  Tipi  ID',
            'Tarih_ID' => 'Tarih  ID',
        ];
    }
}
