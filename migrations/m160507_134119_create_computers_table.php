<?php

use yii\db\Migration;

/**
 * Handles the creation for table `computers_table`.
 */
class m160507_134119_create_computers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%computers}}', [
            'id' => $this->primaryKey(),
            'ip' => $this->string()->notNull(),
            'mac' => $this->string()->notNull(),
            'classRoomId' => $this->integer()->notNull()->defaultValue(0),
        ]);

        $this->createIndex('idx-computers-classRoomId', '{{%computers}}', 'classRoomId');
        $this->addForeignKey('fk-computers-classRooms', '{{%computers}}', 'classRoomId', '{{%classRooms}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('computers_table');
    }
}
