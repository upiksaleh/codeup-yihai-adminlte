<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

/** @var $this \yii\web\View */

use codeup\theming\Html;
use yii\helpers\Url;

\codeup\assets\ThemeAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | <?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-green-light fixed sidebar-mini">
<?php $this->beginBody(); ?>
<div class="wrapper">
    <header class="main-header">
        <?=Html::a(
            '<span class="logo-mini"><i class="fa fa-home"></i></span><span class="logo-lg"><b>'.Yii::$app->name.'</b></span>',
            Url::home(),
            ['class'=>'logo']
        )?>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> <span
                                    class="hidden-xs"><?= Cii::getUserIdentity()->getFullname(); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Menu Footer-->
                            <li class="user-header">
                                <p>a</p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <?= Html::a('Profil',['/default/profil'], ['class' => 'btn btn-default logout']);?>
                                </div>
                                <div class="pull-right">
                                    <?php echo Html::beginForm(['/logout'], 'post')
                                        . Html::submitButton(
                                            'Logout',
                                            ['class' => 'btn btn-default logout']
                                        )
                                        . Html::endForm()
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <?php
            echo \codeup\theming\SideBar::widget([
                'items' => Yii::$app->menu->getAllMenu()
            ]);
            ?>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?= $this->title ?>
                <small><?= isset($this->params['titleDesc']) ? $this->params['titleDesc'] : '' ?></small>
            </h1>
            <?= \codeup\theming\Breadcrumbs::widget([
                'tag' => 'ol',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>
        <section class="content">
            <?php if (isset($this->params['headTips'])): ?>
                <div class="callout callout-info">
                    <button type="button" class="close" data-dismiss="callout" aria-hidden="true">×</button>
                    <h4>Tip!</h4>

                    <p><?= $this->params['headTips'] ?></p>
                </div>
            <?php endif; ?>
            <?=\codeup\widgets\Alert::widget();?>
            <?= $content ?>
        </section>
    </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>


<?php $this->endPage(); ?>
