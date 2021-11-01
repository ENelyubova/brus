<div class="footer-block">
    <div class="content-site">
        <div class="footer-panel">
            <div class="logo item">
                <div class="logo-icon">
                    <?php if (Yii::app()->hasModule('contentblock')): ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo']); ?>
                    <?php endif; ?>
                    <div class="policy">
                        © <?= date('Y'); ?> "Брус56"<br> Все права защищены
                    </div>
                </div>
                <div class="dc56">
                    <a href="https://dcmedia.ru/"><span class="icon-DCMedia---"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></span></a>
                    <?= CHtml::link('Создание и продвижение сайтов', 'https://dcmedia.ru/'); ?>
                </div>
            </div>

            <div class="info item">
                Представленная на сайте информация не является публичной офертой. Цены и наличие товара уточняйте у менеджера.
            </div>

            <div class="menu item">
                <?php if (Yii::app()->hasModule('menu')) : ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                <?php endif; ?>
            </div>
                

            <div class="contact item">  
                <?php if (Yii::app()->hasModule('contentblock')) : ?>
                <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                <?php endif; ?>
                <button class="btn btn-call repeat_captha" data-toggle="modal" data-target="#callbackModal">Обратный звонок</button>
            </div>
        </div>
    </div>
</div>



