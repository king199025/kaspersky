<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `tasks`.
 */
class m160826_102147_create_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('tasks', [
            'id'                => Schema::TYPE_PK,
            'user_id'           => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'task_status_phone'      => Schema::TYPE_INTEGER . '(5) DEFAULT 0',
            'task_status_lotereya'      => Schema::TYPE_INTEGER . '(5) DEFAULT 0',
            'task_status_kredit'      => Schema::TYPE_INTEGER . '(5) DEFAULT 0',
            'task_phone_reply'       => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'task_lotereya_reply'       => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'task_kredit_reply'       => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'task_time_end'    => Schema::TYPE_INTEGER . '(11) DEFAULT NULL'
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tasks');
    }
}
