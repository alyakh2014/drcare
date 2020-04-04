<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200404_191931_subscribe_table
 */
class m200404_191931_subscribe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('subscribe', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull(),
            'active' => $this->boolean()->defaultValue(true),
        ]);
    }

    public function down()
    {
        $this->dropTable('subscribe');
    }

}
