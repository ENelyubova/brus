<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START);?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?= $this->title;?></title>
    <meta name="description" content="<?= $this->description;?>" />
    <meta name="keywords" content="<?= $this->keywords;?>" />
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    

    <?php if ($this->canonical) : ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>

    <?php
        Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
        /*Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/slick.min.css');*/
        Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/main.min.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile('https://www.google.com/recaptcha/api.js');
    ?>

    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END);?>
</head>

<body class="page_fix">

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_START);?>

<!-- container -->
<div class="container-site">
    <?php $this->renderPartial('//layouts/_header'); ?>
    
    <?= $content; ?>

    <?php $this->renderPartial('//layouts/_footer'); ?>

</div>

<script src="/js/main.js"></script>


 <!-- Обратный звонок -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
    'id' => 'callbackModal',
    'formClassName' => 'StandartForm',
    'buttonModal' => false,
    'titleModal' => 'Закажите <span>звонок</span>',
    'subTitleModal' => 'и мы Вам перезвоним!',
    'showCloseButton' => false,
    'isRefresh' => true,
    'eventCode' => 'obratnyy-zvonok',
    'successKey' => 'obratnyy-zvonok',
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

<!-- Сделать заказ общий -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
   'id' => 'makeOrderModal',
   'formClassName' => 'StandartForm',
   'buttonModal' => false,
   'titleModal' => 'Сделайте <span>заказ</span>',
   'subTitleModal' => 'и мы Вам перезвоним!',
   'showCloseButton' => false,
   'isRefresh' => true,
   'showAttributeBody' => true,
   'eventCode' => 'sdelat-zakaz',
   'successKey' => 'sdelat-zakaz',
   'modalHtmlOptions' => [
       'class' => 'modal-my modal-my-xs',
   ],
   'formOptions' => [
       'htmlOptions' => [
           'class' => 'form-my',
       ]
   ],
   'modelAttributes' => [
       'theme' => 'Сделать заказ',
   ],
]) ?>

<!-- Сделать заказ товара -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
    'id' => 'orderProduct',
    'formClassName' => 'LightForm',
    'buttonModal' => false,
    'titleModal' => 'Оставьте <span>заявку</span>',
    'subTitleModal' => 'и мы Вам перезвоним!',
    'showCloseButton' => false,
    'isRefresh' => true,
    'eventCode' => 'sdelat-zakaz-tovara',
    'successKey' => 'sdelat-zakaz-tovara',
    'modalHtmlOptions' => [
        'class' => 'modal-my modal-my-xs',
    ],
    'formOptions' => [
        'htmlOptions' => [
            'class' => 'form-my',
        ]
    ],
    'modelAttributes' => [
        'theme' => '',
    ],
    'view' => 'light-feedback-widget'
]) ?> 

<!-- Написать нам -->
<?php $this->widget('application.modules.mail.widgets.GeneralFeedbackWidget', [
   'id' => 'writeUsModal',
   'formClassName' => 'StandartForm',
   'buttonModal' => false,
   'titleModal' => 'Напишите <span>нам</span>',
   'subTitleModal' => 'и мы Вам перезвоним!',
   'showCloseButton' => false,
   'isRefresh' => true,
   'showAttributeBody' => true,
   'eventCode' => 'napisat-nam',
   'successKey' => 'napisat-nam',
   'modalHtmlOptions' => [
       'class' => 'modal-my modal-my-xs',
   ],
   'formOptions' => [
       'htmlOptions' => [
           'class' => 'form-my',
       ]
   ],
   'modelAttributes' => [
       'theme' => 'Написать нам',
   ],
]) ?>

 <div id="messageModal" class="modal modal-my modal-my-xs fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal-header box-style">
                        <!-- <div data-dismiss="modal" class="modal-close"><i class="fa fa-times" aria-hidden="true"></i><div></div></div> -->
                        <div class="modal-my-heading">
                            <h3>Уведомление</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        Ваша заявка успешно отправлена.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $fancybox = $this->widget(
    'gallery.extensions.fancybox3.AlFancybox', [
        'target' => '[data-fancybox]',
        'lang'   => 'ru',
        'config' => [
            'animationEffect' => "fade",
            'buttons' => [
                "zoom",
                "close",
            ]
        ],
    ]
); ?>

<div class='notifications top-right' id="notifications"></div>
<!-- container end -->

<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>

</body>
</html>