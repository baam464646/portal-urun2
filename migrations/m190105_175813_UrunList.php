<?php

use yii\db\Migration;

/**
 * Class m190105_175813_UrunList
 */
class m190105_175813_UrunList extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('UrunList', [
			'ID' => $this->integer(),
            'Urun_ID' => $this->integer(),
            'Stock_ID' => $this->integer(),
			'Stock_Sayisi' => $this->integer(),
            'Urun_Tipi' => $this->string(30),
			'Uretim_Tarihi' => $this->DATETIME()->notNull(),
			'Son_Kullanma_Tarihi' => $this->DATETIME()->notNull(),
            'PRIMARY KEY(ID)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190105_175813_UrunList cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190105_175813_UrunList cannot be reverted.\n";

        return false;
    }
    */
}
