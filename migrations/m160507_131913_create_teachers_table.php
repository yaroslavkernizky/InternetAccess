<?php

use yii\db\Migration;

/**
 * Handles the creation for table `teachers_table`.
 */
class m160507_131913_create_teachers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%teachers}}', [
            'id' => $this->primaryKey(),
            'emploeeId' => $this->integer()->unique(),
        ]);

        $this->createIndex('idx-teachers-emploeeId', '{{%teachers}}', 'emploeeId');
        $this->addForeignKey('fk-teachers-emploees', '{{%teachers}}', 'emploeeId', '{{%emploees}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%teachers}}');
    }
}
