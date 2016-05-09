<?php

use yii\db\Migration;

/**
 * Handles the creation for table `negativesites`.
 */
class m160509_051534_create_negativeSites extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('negativesites', [
            'id' => $this->primaryKey(),
            'ip' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('negativesites');
    }
}
