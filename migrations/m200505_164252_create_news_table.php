<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200505_164252_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title'=> $this->string(255)->notNull()->comment("Title of news"),
            'preview_text'=> $this->string(255)->notNull()->comment("Preview text"),
            'detail_text'=> $this->text()->notNull()->comment("Text of news"),
            'category_id'=>$this->integer(11)->notNull()->comment("Category of news"),
            'data_create'=>$this->dateTime()->comment("Data create"),
            "author" => $this->integer(11)->comment("id of user who crated news"),
        ]);

        // creates index for column `post_id`
        $this->createIndex(
            'idx-news-category_id',
            'news',
            'category_id'
        );

        // add foreign key for table `news_category`
        $this->addForeignKey(
            'fk-news-category_id',
            'news',
            'category_id',
            'news_category',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-news-author',
            'news',
            'author'
        );

        // add foreign key for table `news_category`
        $this->addForeignKey(
            'fk-news-author',
            'news',
            'author',
            'user',
            'id',
            'CASCADE'
        );

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-news-category_id',
            'news'
        );

        $this->dropIndex(
            'idx-news-category_id',
            'news'
        );

        $this->dropForeignKey(
            'fk-news-author',
            'news'
        );

        $this->dropIndex(
            'idx-news-author',
            'news'
        );

        $this->dropTable('{{%news}}');
    }
}
