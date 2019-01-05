<?php

use yii\db\Migration;

/**
 * Class m190105_175839_Stock
 */
class m190105_175839_Stock extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('Stock', [
			'ID' => $this->integer(),
            'Stock_Sayisi' => $this->integer(),
            'PRIMARY KEY(ID)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190105_175839_Stock cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190105_175839_Stock cannot be reverted.\n";

        return false;
    }
    */
}
