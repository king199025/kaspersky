<?php
$this->title = 'Профиль';
?>

<section class="kabinet">
    <div class="kabinet__slider">
        <?php if($social == 'vkontakte'):?>
            <span class="kabinet-icon vk-icon"></span>
        <?php endif; ?>

        <?php if($social == 'facebook'):?>
            <span class="kabinet-icon fb-icon"></span>
        <?php endif; ?>

        <?php if($social == 'twitter'):?>
            <span class="kabinet-icon twitter-icon"></span>
        <?php endif; ?>


        <h2><?= $user->username; ?></h2>
        <p><?= $user->institution; ?></p>
    </div>
    <div class="container">
        <div class="kabinet__zadaniya">
            <div class="kabinet__zadaniya_items">
                <div class="obvertka">
                    <h3>телефон</h3>
                    <div class="kabinet-thumb <?= \common\classes\TasksFunction::showClassTaskY('phone')?>">
                        <img class="kabinet-thumb_pic" src="/theme/kaspersky/img/icon_phoone_kabinet.png" alt="">
                        <img class="task-list__image-overlay" src="/theme/kaspersky/img/icon_overlay_kabinet.png" alt="Icon1" title="Icon1">
                        <img class="task-list__image-accept" src="/theme/kaspersky/img/icon_accept.svg" alt="Icon1" title="Icon1">
                    </div>
                </div>

                <?= \common\classes\TasksFunction::showLinkTasks('phone')?>
            </div>
            <div class="kabinet__zadaniya_items ">
                <div class="obvertka">
                    <h3>Лотерея</h3>
                    <div class="kabinet-thumb <?= \common\classes\TasksFunction::showClassTaskY('lotereya')?>">
                        <img class="kabinet-thumb_pic" src="/theme/kaspersky/img/icon_lottery_kabinet.png" alt="">
                        <img class="task-list__image-overlay" src="/theme/kaspersky/img/icon_overlay_kabinet.png" alt="Icon1" title="Icon1">
                        <img class="task-list__image-accept" src="/theme/kaspersky/img/icon_accept.svg" alt="Icon1" title="Icon1">
                    </div>
                </div>
                <?= \common\classes\TasksFunction::showLinkTasks('lotereya')?>
            </div>
            <div class="kabinet__zadaniya_items <?= \common\classes\TasksFunction::showClassTaskY('kredit')?>">

                <div class="obvertka">
                    <h3>кредитная карта</h3>
                    <div class="kabinet-thumb">
                        <img class="kabinet-thumb_pic" src="/theme/kaspersky/img/icon_card_kabinet.png" alt="">
                        <img class="task-list__image-overlay" src="/theme/kaspersky/img/icon_overlay_kabinet.png" alt="Icon1" title="Icon1">
                        <img class="task-list__image-accept" src="/theme/kaspersky/img/icon_accept.svg" alt="Icon1" title="Icon1">
                    </div>
                </div>

                <?= \common\classes\TasksFunction::showLinkTasks('kredit')?>
            </div>
        </div>
        <div class="kabinet__time">
            <h2>Время завершения</h2>
            <span><?= \common\classes\TasksFunction::getTimeEndTask(); ?></span>
        </div>
    </div>
</section>