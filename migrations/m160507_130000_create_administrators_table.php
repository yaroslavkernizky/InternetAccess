<?php

use yii\db\Migration;

/**
 * Handles the creation for table `administrators_table`.
 */
class m160507_130000_create_administrators_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%administrators}}', [
            'id' => $this->primaryKey(),
            'emploeeId' => $this->integer()->unique(),
        ]);

        $this->createIndex('idx-administrators-emploeeId', '{{%administrators}}', 'emploeeId');
        $this->addForeignKey('fk-administrators-emploees', '{{%administrators}}', 'emploeeId', '{{%emploees}}', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%administrators}}');
    }
}
