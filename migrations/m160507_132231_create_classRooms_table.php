<?php

use yii\db\Migration;

/**
 * Handles the creation for table `classrooms_table`.
 */
class m160507_132231_create_classRooms_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%classRooms}}', [
            'id' => $this->primaryKey(),
            'number' => $this->integer()->notNull()->unique(),
        ]);
    }
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%classRooms}}');
    }
}
