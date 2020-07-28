<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_category}}`.
 */
class m200505_154543_create_news_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull()->unique()->comment("title of category of news"),
            'nickname' => $this->string(50)->notNull()->unique()->comment("nickname of category of news"),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_category}}');
    }
}
