<?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->meta_description) ? $page->meta_description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->meta_keywords) ? $page->meta_keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>

<div class="main-screen">
    <div class="main-screen-block">
        <div class="main-screen__left">
            <div class="main-screen__left-1"></div>
            <div class="main-screen__left-2"></div>
            <div class="main-screen__left-3"></div>
            <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                'id'=> 21,
                'view' => 'main-left'
            ]); ?>
        </div>
        <div class="main-screen__right">
            <div class="main-screen__right-1"></div>
            <div class="main-screen__right-2"></div>
            <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                'id'=> 22,
                'view' => 'main-right'
            ]); ?>
        </div>
    </div>
    <div class="main-screen-block-mobile">
        <div class="main-screen__left-mobile">
            <div class="content-site">
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id'=> 21,
                    'view' => 'main-left-mobile'
                ]); ?>
            </div>
        </div>
        <div class="main-screen__right-mobile">
            <div class="content-site">
                <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
                    'id'=> 22,
                    'view' => 'main-right-mobile'
                ]); ?> 
            </div>
        </div>
    </div>
    <div class="abs-block">
        <?php if (Yii::app()->hasModule('contentblock')) : ?>
            <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'abs-block']); ?>
        <?php endif; ?>
    </div>
</div>

<div class="description" id="description">
    <div class="screen description-screen-left"></div>
    <div class="screen description-screen-right"></div>
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 2,
            'view' => 'description'
        ]); ?>
    </div>
</div>

<div class="product-slider pt">
    <div class="screen product-screen-left"></div>
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 3,
            'view' => 'product-slider'
        ]); ?>
    </div>
</div>

<div class="material pt">
    <div class="screen material-abs">Брус56</div>
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 9,
            'view' => 'material'
        ]); ?>
    </div>
</div>

<div class="quest pt">
    <div class="screen quest-screen-right"></div>
    <div class="content-site">
        <div class="quest-block">
            <div class="quest-title">Оставьте заявку - мы свяжемся и обговорим детали заказа</div>
            <button class="btn btn-dafault repeat_captha" data-toggle="modal" data-target="#writeUsModal">Заполнить заявку</button>
        </div>
    </div>
</div>

<div class="assortment pt" id="assortment">
    <div class="screen assortment-abs">Колодезные кольца</div>
    <div class="screen assortment-screen-right-one"></div>
    <div class="screen assortment-screen-right-two"></div>
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 10,
            'view' => 'assortment'
        ]); ?>
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 18,
            'view' => 'branch'
        ]); ?>
    </div>
</div>

<!-- 
<div class="branch pt">
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 18,
            'view' => 'branch'
        ]); ?>
    </div>
</div> -->

<div class="gallery pt">
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 19,
            'view' => 'gallery'
        ]); ?>
    </div>
</div>

<div class="contacts pt" id="contacts">
    <div class="screen contacts-screen-left"></div>
    <div class="content-site">
        <?php $this->widget("application.modules.page.widgets.PagesNewWidget", [
            'id'=> 20,
            'view' => 'contacts'
        ]); ?>
    </div>
</div>