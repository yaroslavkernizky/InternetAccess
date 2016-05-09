<?php

use yii\db\Migration;

/**
 * Handles the creation for table `emplclassr_table`.
 */
class m160507_132634_create_emplClassR_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%empl_ClassR}}', [
            'emploeeId' => $this->integer()->notNull(),
            'classRoomId' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-empl_ClassR','{{%empl_ClassR}}',['emploeeId','classRoomId']);

        $this->createIndex('idx-empl_ClassR-emploeeId','{{%empl_ClassR}}','emploeeId');
        $this->createIndex('idx-empl_ClassR-classRoomId','{{%empl_ClassR}}','classRoomId');

        $this->addForeignKey('fk-empl_ClassR-emploees','{{%empl_ClassR}}','emploeeId','{{%emploees}}','id','CASCADE','CASCADE');
        $this->addForeignKey('fk-empl_ClassR-classRooms','{{%empl_ClassR}}','classRoomId','{{%classRooms}}','id','CASCADE','CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%empl_ClassR}}');
    }
}
