<?php

use yii\db\Migration;

/**
 * Class m190417_095853_ad_network_table
 */
class m190417_095853_ad_network_table extends Migration
{
    public const TABLE = 'ad_networks';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE, [
            'id'   => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'url'  => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE);

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190417_095853_ad_network_table cannot be reverted.\n";

        return false;
    }
    */
}
