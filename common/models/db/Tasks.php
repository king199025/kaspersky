<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $task_status_phone
 * @property integer $task_status_lotereya
 * @property integer $task_status_kredit
 * @property string $task_phone_reply
 * @property string $task_lotereya_reply
 * @property string $task_kredit_reply
 * @property integer $task_time_end
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'task_status_phone', 'task_status_lotereya', 'task_status_kredit', 'task_time_end'], 'integer'],
            [['task_phone_reply', 'task_lotereya_reply', 'task_kredit_reply'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'task_status_phone' => 'Task Status Phone',
            'task_status_lotereya' => 'Task Status Lotereya',
            'task_status_kredit' => 'Task Status Kredit',
            'task_phone_reply' => 'Task Phone Reply',
            'task_lotereya_reply' => 'Task Lotereya Reply',
            'task_kredit_reply' => 'Task Kredit Reply',
            'task_time_end' => 'Task Time End',
        ];
    }
}
