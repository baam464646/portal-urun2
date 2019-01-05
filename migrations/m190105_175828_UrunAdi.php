<?php

use yii\db\Migration;

/**
 * Class m190105_175828_UrunAdi
 */
class m190105_175828_UrunAdi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('UrunAdi', [
			'ID' => $this->integer(),
            'Urun_Adi' => $this->integer(),
            'Urun_Tipi_ID' => $this->integer(),
			'Tarih_ID' => $this->DATETIME()->notNull(),
            'PRIMARY KEY(ID)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190105_175828_UrunAdi cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190105_175828_UrunAdi cannot be reverted.\n";

        return false;
    }
    */
}
