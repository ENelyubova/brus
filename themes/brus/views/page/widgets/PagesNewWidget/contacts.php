<?php if($pages) : ?>
    <div class="contacts-block">
        <div class="contacts-block__info">
            <div class="heading-before"><?= $pages->title_short; ?></div>
            <h2 class="heading heading-black" data-text="<?= str_replace('<br />', '&#10;', $pages->name_h1); ?>"><?= $pages->title; ?></h2>
            <div class="contacts-block-flex">
                <div class="item">
                    <div class="item__title">Телефон</div>
                    <div class="item__body">
                        <?php if (Yii::app()->hasModule('contentblock')) : ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone-full']); ?>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-call repeat_captha" data-toggle="modal" data-target="#callbackModal">Обратный звонок</button>
                </div>
                <div class="item">
                    <div class="item__title">Адрес</div>
                    <div class="item__body">
                        <?php if (Yii::app()->hasModule('contentblock')) : ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'address']); ?>
                        <?php endif; ?>
                    </div>
                    <a class="btn btn-call" data-fancybox data-type="iframe" data-src="https://yandex.ru/map-widget/v1/?um=constructor%3A571df41da577976df89416bc9764fb6ac3c80f863fc83fa836f5b674df498980&amp;source=constructor href="javascript:;">Показать на карте</a>
                </div>
                <div class="item">
                    <div class="item__title">Почта</div>
                    <div class="item__body">
                        <?php if (Yii::app()->hasModule('contentblock')) : ?>
                            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'email']); ?>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-call repeat_captha" data-toggle="modal" data-target="#writeUsModal">Написать письмо</button>
                </div>
            </div>
        </div>
        <div class="contacts-block__form">
            <div class="title-form">Заполните форму, чтобы мы могли с вами связаться и обговорить детали</div>
            <?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
                'id' => 'contactModal',
                'view' => 'contact-form',
                'formClassName' => 'StandartForm',
                'buttonModal' => false,
                'titleModal' => 'Оставьте <span>заявку</span>',
                'subTitleModal' => 'и мы Вам перезвоним!',
                'showCloseButton' => false,
                'isRefresh' => true,
                'eventCode' => 'napisat-nam',
                'successKey' => 'napisat-nam',
                'showAttributeBody' => true,
                'showAttributeEmail' => true,
                'showAttributeCheck' => true,
                'modalHtmlOptions' => [
                    'class' => 'modal-my modal-my-xs',
                ],
                'formOptions' => [
                    'htmlOptions' => [
                        'class' => 'form-my',
                    ]
                ],
                'modelAttributes' => [
                    'theme' => 'Обратный звонок',
                ],
            ]) ?>
        </div>
    </div>
<?php endif; ?>




