<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap\Carousel;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<!--<body class="inner-page">-->
<body style="background: url(images/bg-content.jpg) no-repeat 50% 0; background-size: cover;">
<div id="wrapper">
<!--Меню-->
    <header class="header">
        <div class="container">
                 <div class="top-block">
        <!--Из примера-->
                    <div id="toppanel">
                        <div id="panel">

                                <div class="col-xs-12 col-md-6">
                                    <div class="welcome-message">
                                        Hello, Vasilij! Your balance: $63,230.00
                                    </div>
                                    <ul class="balance-tools">
                                        <li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-save"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-open"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-transfer"></span></a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-md-6 office-choose">
                                    <form action="#" class="choose-form">
                                        <fieldset>
                                            <select class="form-control">
                                                <option>Parent office</option>
                                                <option>Children office</option>
                                                <option>Etc</option>
                                            </select>
                                            <button type="submit" class="btn"><span aria-hidden="true" class="glyphicon glyphicon-play"></span></button>
                                        </fieldset>
                                    </form>
                                    <a href="#" class="link-exit">Exit <span class="glyphicon glyphicon-share"></span></a>
                                </div>

                        </div> 

                        <!-- Закладка наверху -->   
                                <div id="toggle">
                                    <a id="open" href="#">
                                         <div class="opener user-block">
                                            <span class="message"><span aria-hidden="true" class="glyphicon glyphicon-send"></span> 13</span>
                                            <span class="summ"><?php
                 Yii::$app->user->isGuest ?
                    ['label' => 'Login', 'url' => ['/user/login']] :
                    ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
                        'url' => ['/user/logout'],
                        'linkOptions' => ['data-method' => 'post']]
?></span>
                                            <img src="images/img01.jpg" class="ava" alt=""/>
                                        </div>
                                    </a>
                                    <a id="close" style="display: none;" href="#">
                                         <div class="opener user-block">
                                            <span class="message"><span aria-hidden="true" class="glyphicon glyphicon-send"></span> 13</span>
                                            <span class="summ">$63,230.00</span>
                                            <img src="images/img01.jpg" class="ava" alt=""/>
                                        </div>
                                    </a>            
                                </div>
                      </div>  
        <!--END Из примера-->
                    </div>

                <?php $this->beginBody() ?>
                    <div class="row">
                        <?php
            NavBar::begin([
                'brandLabel' => '<img src="images/logo.png" alt=""/>',
                'brandUrl' => Yii::$app->homeUrl,
                'innerContainerOptions' => ['class' => 'container'],                
                 'options' => [
                  //'class' => 'navbar-inverse navbar-fixed-top',
                     'class' => 'navbar',
                     'id' => 'main-menu',
                  ],
            ]);
            $menuItems = [
                 ['label' => 'HOME', 'url' => ['/site/home']],
                 [
                   'label' => 'INFORMATION',
                   'items' => [
                        ['label' => 'Create', 'url' => ['/site/information']],
                    ],
                 ], 
                 [
                   'label' => 'MEMBERSHIP',
                   'items' => [
                        ['label' => 'Create', 'url' => ['/site/membership']],
                    ],
                 ], 
                 ['label' => 'EVENTS', 'url' => ['/site/events']],
                 ['label' => 'HELP', 'url' => ['/site/help']],
                 ['label' => '!!User!!', 'url' => ['/user']],
                 Yii::$app->user->isGuest ?
                    ['label' => 'Login', 'url' => ['/user/login']] :
                    ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
                        'url' => ['/user/logout'],
                        'linkOptions' => ['data-method' => 'post']],
            ];
            /*
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            */
            echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-left'],
                'items' => $menuItems,
            ]);

            
                $this->params['breadcrumbs'][] = $this->title;              
                NavBar::end();
            ?>
            </div>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </header>
</div>
<!--end Меню-->
<!--Контент-->
        <div class="container">
            <?= $content ?>
        </div>

<!--end Контент-->
<div class="support">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-9">
                            <h3>NEED HELP?</h3>
                            <p>Please, watch the demo videos and you will find answers to your questions. </p>
                        </div>
                        <div class="col-xs-12 col-md-3 text-right">
                            <a href="" class="btn-play"><span class="glyphicon glyphicon-play"></span>Go to demo</a>
                        </div>
                    </div>
                </div>
            </div>
<!--Подвал сайта-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <section class="col-xs-12 col-sm-6 col-md-3">
                        <h3>About Tesla Grand</h3>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Tesla Grand Start</a></li>
                            <li><a href="">TeslaGrand Store</a></li>
                            <li><a href="">Legal</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-6 col-md-3">
                        <h3>Tesla Grand Directions</h3>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Tesla Grand Start</a></li>
                            <li><a href="">TeslaGrand Store</a></li>
                            <li><a href="">Legal</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-6 col-md-3">
                        <h3>Offices</h3>
                        <ul>
                            <li><a href="">Parent</a></li>
                            <li><a href="">Tutor</a></li>
                            <li><a href="">Manager</a></li>
                            <li><a href="">Partner</a></li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-6 col-md-3">
                        <h3>Social Networks</h3>
                        <ul>
                            <li><a href=""><i aria-hidden="true" class="icon-youtube"></i> YouTube</a></li>
                            <li><a href=""><i aria-hidden="true" class="icon-facebook"></i> Facebook</a></li>
                            <li><a href=""><i aria-hidden="true" class="icon-twitter"></i> Twitter</a></li>
                            <li><a href=""><i aria-hidden="true" class="icon-google"></i> Google+</a></li>
                        </ul>
                        <form class="form-inline subscribe-form" action="#">
                            <input type="email" class="form-control" placeholder="E-mail" />
                            <button type="submit" class="btn btn-submit"><span class="glyphicon glyphicon-play"></span></button>
                        </form>
                    </section>
                </div>
                <div class="copyrights text-center">
                    <p>TeslaGrand company. ©<?= date('Y') ?> All Rights Reserved.</p>
                </div>
            </div>
        </footer>
</div>

<!--end Подвал сайта-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>