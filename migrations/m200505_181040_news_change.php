<?php

use yii\db\Migration;

/**
 * Class m200505_181040_news_change
 */
class m200505_181040_news_change extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        \Yii::$app->db->createCommand('ALTER TABLE news add active int(1) DEFAULT 1')->execute();
        \Yii::$app->db->createCommand('ALTER TABLE news_category add active int(1)  DEFAULT 1')->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        \Yii::$app->db->createCommand('ALTER TABLE news drop column active')->execute();
        \Yii::$app->db->createCommand('ALTER TABLE news_category drop column active')->execute();

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200505_181040_news_change cannot be reverted.\n";

        return false;
    }
    */
}
