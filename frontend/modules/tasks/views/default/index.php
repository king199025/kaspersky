<?php
$this->title = 'Задания';
?>


<div class="slider__section-task">
    <div class="slider__wrapp">
        <h1 class="slider__text-title">KASPERSKY STUDENT’S CHALLENGE</h1>
        <div class="slider__flag-cnt">
            <div class="flag__text">задания</div>
        </div>
        <div class="slider__text-info">
            <p>Разгадайте задания, подобрав серийный номер для своего email, под которым вы логинитесь</p>
        </div>
    </div>
</div>
<div class="task__section">
    <div class="task__wrapp">
        <div class="task-list_table">
            <div class="task-list_row">
                <div class="task-list__item <?= \common\classes\TasksFunction::showClassTaskY('phone')?>">
                    <img class="task-list__image" src="/theme/img/icon_phoone.png" alt="Icon1" title="Icon1">
                    <img class="task-list__image-overlay" src="/theme/img/icon_overlay.png" alt="Icon1" title="Icon1">
                    <img class="task-list__image-accept" src="/theme/img/icon_accept.svg" alt="Icon1" title="Icon1">
                    <div class="task-list__image-text-cnt">
                        <div class="task-list__image-text">телефон</div>
                    </div>
                    <div class="task-list__text">
                        <p>Злоумышленник похитил твой телефон и собирается слить с него все данные.Восстанови код, чтобы заблокировать свой телефон.</p>
                    </div>
                </div>
                <div class="task-list__item <?= \common\classes\TasksFunction::showClassTaskY('lotereya')?>">
                    <img class="task-list__image" src="/theme/img/icon_lottery.png" alt="Icon2" title="Icon2">
                    <img class="task-list__image-overlay" src="/theme/img/icon_overlay.png" alt="Icon2" title="Icon2">
                    <img class="task-list__image-accept" src="/theme/img/icon_accept.svg" alt="Icon2" title="Icon2">
                    <div class="task-list__image-text-cnt">
                        <div class="task-list__image-text">лотерея</div>
                    </div>
                    <div class="task-list__text">
                        <p>Ты выиграл в лотерею миллион, но письмо с призовым кодом было утеряно. Восстанови код с призом!</p>
                    </div>
                </div>
                <div class="task-list__item <?= \common\classes\TasksFunction::showClassTaskY('kredit')?>">
                    <img class="task-list__image" src="/theme/img/icon_card.png" alt="Icon3" title="Icon3">
                    <img class="task-list__image-overlay" src="/theme/img/icon_overlay.png" alt="Icon3" title="Icon3">
                    <img class="task-list__image-accept" src="/theme/img/icon_accept.svg" alt="Icon3" title="Icon3">
                    <div class="task-list__image-text-cnt">
                        <div class="task-list__image-text">кредитная карта</div>
                    </div>
                    <div class="task-list__text">
                        <p>Невероятно! Злоумышленник пытается списать себе все средства с твоей кредитной карточки. Не дай ему распорядиться твоим бюджетом.</p>
                    </div>
                </div>
            </div>

            <?php
                if(Yii::$app->user->isGuest):
            ?>
            </div>
            <div class="task__text-info">
                <p>Для выполнения заданий вам необходимо <a href="#auth" class="open_modal" >авторизоваться</a></p>
            </div>
            <?php else:?>
                    <div class="task-list_row">
                        <div class="task-list__item">
                                <?= \common\classes\TasksFunction::showLinkTasks('phone')?>
                        </div>
                        <div class="task-list__item">
                            <?= \common\classes\TasksFunction::showLinkTasks('lotereya')?>
                        </div>
                        <div class="task-list__item">
                            <?= \common\classes\TasksFunction::showLinkTasks('kredit')?>
                        </div>
                    </div>
        </div>
            <?php endif;?>




    </div>
</div>