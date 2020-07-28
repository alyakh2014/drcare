<?php

use yii\db\Migration;

/**
 * Class m200505_190240_preview_text
 */
class m200505_190240_preview_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        \Yii::$app->db->createCommand('ALTER TABLE news MODIFY COLUMN preview_text TEXT')->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        \Yii::$app->db->createCommand('ALTER TABLE news MODIFY COLUMN preview_text VARCHAR')->execute();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200505_190240_preview_text cannot be reverted.\n";

        return false;
    }
    */
}
