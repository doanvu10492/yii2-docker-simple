<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\widgets\Menu;
?>
<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container f-top" >
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col1">
                    <?= Html::a(
                        '<img src="https://www.thetatoken.org/static/media/theta.3a0f93ba58b53b7e7e08e6db2548cd6f.svg">',
                        ['/'],
                        ['class' => 'footer-logo active', 'aria-current' => 'page']
                    ) ?>

                    <div class="social-icon">
                        <?= Html::a(
                            '<i class="fa fa-medium"></i>',
                            ['#'], 
                            ['class' => '', 'title' => 'medium'])
                        ?>
                        <?= Html::a(
                            '<i class="fa fa-twitter"></i>',
                            ['#'], 
                            ['class' => '', 'title' => 'twitter'])
                        ?>

                        <?= Html::a(
                            '<i class="fa fa-facebook"></i>',
                            ['#'], 
                            ['class' => '', 'title' => 'Facebook'])
                        ?>

                        <?= Html::a(
                            '<i class="fa fa-github"></i>',
                            ['#'], 
                            ['class' => '', 'title' => 'Github'])
                        ?>

                        <?= Html::a(
                            '<i class="fa fa-discord"></i>',
                            ['#'], 
                            ['class' => '', 'title' => 'Discord'])
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?=
                    Menu::widget([
                        'options' => ['class' => 'display-block footer-link footer-col2'],
                        'items' => [
                            [
                                'label' => 'Enterprises',
                                'url' => '/enterprises'
                            ],
                            [
                                'label' => 'Devs',
                                'url' => '/devs'
                            ],
                            [
                                'label' => 'Community',
                                'url' => '/community'
                            ],
                            [
                                'label' => 'Explorer',
                                'url' => '/explorer'
                            ],
                            [
                                'label' => 'Wallet',
                                'url' => '/wallet'
                            ],
                            [
                                'label' => 'About',
                                'url' => '/about'
                            ],
                            [
                                'label' => 'Product Roadmap',
                                'url' => '/product-roadmap'
                            ],
                            [
                                'label' => 'Docs',
                                'url' => '/docs'
                            ]
                        ]
                    ]); 
                 ?>
            </div>
            <div class="col-md-4">
                <?=
                    Menu::widget([
                        'options' => ['class' => 'display-block footer-link footer-col3'],
                        'items' => [
                            [
                                'label' => 'ThetaDrop',
                                'url' => '/theta-drop'
                            ],
                            [
                                'label' => 'Theta video API',
                                'url' => '/theta-video-api'
                            ]
                        ]
                    ]); 
                 ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-12 text-center text-md-start">©2023 Theta Labs, Inc. All rights reserved. Support [at] thetatoken [dot] org
 <?= date('Y') ?></div>
        </div>
    </div>
</footer>