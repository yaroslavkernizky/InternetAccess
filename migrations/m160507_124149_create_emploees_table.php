<?php

use yii\db\Migration;

/**
 * Handles the creation for table `emploees_table`.
 */
class m160507_124149_create_emploees_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%emploees}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'patronymic' => $this->string() ,
            'email' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%emploees}}');
    }
}
