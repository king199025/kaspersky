<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 26.08.2016
 * Time: 14:51
 */

namespace common\classes;


use common\models\db\Tasks;
use Yii;

class TasksFunction
{
    public static function showLinkTasks($task = ''){
        //status
        // 0 Не начато задание
        // 1 начато
        // 2 выполнено
        // 3 провалено
//Debug::prn('task_status_' . $task);
        $k = 'task_status_' . $task;

        $tasks = Tasks::find()->where(['user_id' => \Yii::$app->user->id])->one();
        $result = '';
        switch ($tasks->{$k}){
            case 0: $result = '<a class="btn btn_white">начать</a>';
                break;
            case 2: $result = '<a class="btn btn_green-light" >выполнено!</a>';
                break;
            case 3: $result = '<a class="btn btn_red" >некорректный ответ</a>';
        }

        return $result;

    }

    public static function showClassTaskY($task = ''){
        //status
        // 0 Не начато задание
        // 1 начато
        // 2 выполнено
        // 3 провалено
//Debug::prn('task_status_' . $task);
        $k = 'task_status_' . $task;
        if(Yii::$app->user->isGuest){
            return false;
        }
        else{
            $tasks = Tasks::find()->where(['user_id' => \Yii::$app->user->id])->one();
            $result = '';

            if($tasks->{$k} == 2){
                $result = '-accept';
            }
            return $result;
        }
    }


    public static function getTimeEndTask(){
        $tasks = Tasks::find()->where(['user_id' => \Yii::$app->user->id])->one();
        if(!empty($tasks->task_time_end)){
            return date('d.m.y h:m', $tasks->task_time_end );
        }
        else{
            return false;
        }

    }
}