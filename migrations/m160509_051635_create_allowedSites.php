<?php

use yii\db\Migration;

/**
 * Handles the creation for table `allowedsites`.
 */
class m160509_051635_create_allowedSites extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('allowedsites', [
            'id' => $this->primaryKey(),
            'ip' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('allowedsites');
    }
}
