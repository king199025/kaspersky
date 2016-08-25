<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `add_column_institut_to_user`.
 */
class m160824_121445_create_add_column_institut_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('{{%user}}', 'institution', Schema::TYPE_STRING);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('{{%user}}', 'institution');
    }
}
