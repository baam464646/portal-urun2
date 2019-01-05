<?php

use yii\db\Migration;

/**
 * Class m190105_175822_UrunTipi
 */
class m190105_175822_UrunTipi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('UrunTipi', [
			'ID' => $this->integer(),
            'Urun_Tipi' => $this->string(30),
            'PRIMARY KEY(ID)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190105_175822_UrunTipi cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190105_175822_UrunTipi cannot be reverted.\n";

        return false;
    }
    */
}
