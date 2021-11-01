<div class="panel-header">
    <div class="content-site">
        <div class="panel-flex">
            <div class="logo">
                <?php if (Yii::app()->hasModule('contentblock')) : ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'logo']); ?>
                <?php endif; ?>
            </div>
            
            <div class="menu">
                <?php if (Yii::app()->hasModule('menu')) : ?>
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                <?php endif; ?>
            </div><!-- menu -->
            
            <div class="contacts">
                <?php if (Yii::app()->hasModule('contentblock')) : ?>
                    <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'phone']); ?>
                <?php endif; ?>
                <button class="btn btn-call repeat_captha" data-toggle="modal" data-target="#callbackModal">Обратный звонок</button>
            </div>

            <div class="mobile-panel">
                <div class="m-menu-button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <div class="mobile-menu">
                    <div class="m-menu-buttons">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    <div class="mobile-content">
                        <?php if (Yii::app()->hasModule('menu')) : ?>
                            <?php $this->widget('application.modules.menu.widgets.MenuWidget', ['name' => 'top-menu', 'view' => 'menu']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div><!-- mobile-panel -->
        </div>
    </div>
</div><!-- top-panel -->