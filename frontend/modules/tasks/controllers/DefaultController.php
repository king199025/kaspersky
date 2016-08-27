<?php

namespace frontend\modules\tasks\controllers;

use common\models\db\Tasks;
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

        $tasks = Tasks::find()->where(['user_id' => \Yii::$app->user->id])->one();
        return $this->render('index', ['tasks' => $tasks ]);
    }
}
