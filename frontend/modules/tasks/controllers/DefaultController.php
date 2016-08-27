<?php

namespace frontend\modules\tasks\controllers;

use common\models\db\Tasks;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `tasks` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        //status
        // 0 Не начато задание
        // 1 начато
        // 2 выполнено
        // 3 провалено

        if(!Yii::$app->user->isGuest){
            $tasksUser = Tasks::find()->where(['user_id' => Yii::$app->user->id])->one();
            if(empty($tasksUser)){
                $tasks = new \common\models\db\Tasks();
                $tasks->user_id = Yii::$app->user->id;
                $tasks->save();
            }
        }
        return $this->render('index');
    }
}
