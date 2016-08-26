<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $task_phone_status
 * @property integer $task_lotereya_status
 * @property integer $task_kredit_status
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
            [['user_id', 'task_phone_status', 'task_lotereya_status', 'task_kredit_status', 'task_time_end'], 'integer'],
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
            'task_phone_status' => 'Task Phone Status',
            'task_lotereya_status' => 'Task Lotereya Status',
            'task_kredit_status' => 'Task Kredit Status',
            'task_phone_reply' => 'Task Phone Reply',
            'task_lotereya_reply' => 'Task Lotereya Reply',
            'task_kredit_reply' => 'Task Kredit Reply',
            'task_time_end' => 'Task Time End',
        ];
    }
}
