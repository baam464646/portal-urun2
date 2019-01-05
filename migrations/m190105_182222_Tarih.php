<?php

use yii\db\Migration;

/**
 * Class m190105_182222_Tarih
 */
class m190105_182222_Tarih extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('Tarih', [
			'ID' => $this->integer(),
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
        echo "m190105_182222_Tarih cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190105_182222_Tarih cannot be reverted.\n";

        return false;
    }
    */
}
