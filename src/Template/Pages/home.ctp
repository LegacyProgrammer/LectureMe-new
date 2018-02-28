<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('materialize.css')?>
    <?= $this->Html->css('materialize.min.css')?>
    <?= $this->Html->css('style.css')?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">


    <title>LectureMe | Leeuwenborgh</title>
    <meta name="description" content="#">
    <link rel="canonical" href="#">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="#">
    <meta property="og:description" content="#">
    <meta property="og:url" content="#">
    <meta property="og:site_name" content="LectureMe">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="#">
    <meta name="twitter:title" content="#">


    <link rel="dns-prefetch" href="https://code.jquery.com/">
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>

<body>

<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
                <div id="logo-container">
                    <img class="logo" src="./img/assets/logo.png" alt="logo">
                    <img class="logo-background" src="./img/assets/lb-logo-container@2x.png" alt="background logo">

                </div>
                <div id="logo-container2" class="right">
                    <a href="#" style="padding-left: 70%" class="brand-logo">Lectureme</a>
                </div>
            </div>
        </div>
</div>

<div class="container">



    <div class="section">

        <div class="row">

            <div class="col s12">


                <div class="section">

                    <div class="col s12">
                        <span class="title">Categorieën waar recent een video is toegevoegd:</span>
                    </div>


                    <div class="col s12 m6 l4">


                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/juridisch.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Juridisch" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Juridisch</span>
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/ict.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="ICT-Lyceum" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">ICT-Lyceum</span>
                                </a>

                            </div>

                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/verzorging.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Verzorging</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/laboratorium.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Lab-Techniek</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/techniek.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Techniek</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/logistiek.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Logistiek</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/Manager-Retail.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Economie</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/Nederlands.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Nederlands</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/engels.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Engels</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/projectbegeleiding.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span style="font-size= small;" class="card-title small home">Project-Begeleiding</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/rekenen.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Rekenen</span>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <a href="#">
                                    <img width="305" height="229" src="./webroot/img/assets/wiskunde.jpg" class="responsive-img wp-post-image" alt="Categorie Leeuwenborgh LectureMe" title="Categorie Leeuwenborgh LectureMe" sizes="(max-width: 305px) 100vw, 305px">
                                    <span class="card-title home">Wiskunde</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <iframe src="/map/v2" height="600px" width="100%" frameborder="0"></iframe> -->

    <footer class="page-footer abrown-footer">
        <div class="container">
            <div class="row">
                <div class="col l3 s12 m6"><article id="text-6" class="panel widget widget_text"><h5 class="abrown-text">OVER LectureME</h5>
                        <div class="textwidget"><p>LectureME is een webpagina waar jij als student korte filmpjes kunt vinden over de lesstof.</p>
                        </div>
                    </article>
                </div>
                <div class="col l3 s12 m6">
                    <article id="nav_menu-3" class="panel widget widget_nav_menu">
                        <h5 class="abrown-text">PAGINAS</h5>
                        <div class="menu-footer_menu-container"><ul id="menu-footer_menu" class="menu">
                                <li id="menu-item-5651" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5651">
                                    <a href="#">Over</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col l3 s12 m6">
                    <article id="categories-2" class="panel widget widget_categories">
                        <h5 class="abrown-text">Categories</h5>
                        <ul>
                            <li class="cat-item cat-item-79"><a href="#">Juridisch</a>
                            </li>
                            <li class="cat-item cat-item-287"><a href="#">ICT-Lyceum</a>
                            </li>
                            <li class="cat-item cat-item-81"><a href="#">Verzorging</a>
                            </li>
                            <li class="cat-item cat-item-310"><a href="#">Laboratorium-techniek</a>
                            </li>
                            <li class="cat-item cat-item-7"><a href="#">Techniek</a>
                            </li>
                            <li class="cat-item cat-item-11"><a href="#">Logistiek</a>
                            </li>
                            <li class="cat-item cat-item-15"><a href="#">Economie</a>
                            </li>
                            <li class="cat-item cat-item-20"><a href="#">Nederlands</a>
                            </li>
                            <li class="cat-item cat-item-289"><a href="#">Engels</a>
                            </li>
                            <li class="cat-item cat-item-19"><a href="#">Project-Begeleiding</a>
                            </li>
                            <li class="cat-item cat-item-1"><a href="#">Rekenen</a>
                            </li>
                            <li class="cat-item cat-item-254"><a href="#">Wiskunde</a>
                            </li>
                            <li class="cat-item cat-item-80"><a href="#">Duits</a>
                            </li>
                            <li class="cat-item cat-item-261"><a href="#">Spaans</a>
                            </li>
                            <li class="cat-item cat-item-71"><a href="#">Keuze-Vak</a>
                            </li>
                        </ul>
                    </article></div><div class="col l3 s12 m6"><article id="text-7" class="panel widget widget_text"><h5 class="abrown-text">SOCIAAL</h5>			<div class="textwidget"><div class="social-icons">
                            </div>
                            <a href="#"><img src="ios.png" alt="" width="225"></a>
                            <a href="#"><img src="get-it-on-google-play-vector.png" alt="" width="225"></a>
                        </div>
                    </article></div>      </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Gemaakt door <a class="white-text text-lighten-4" href="#">Applicatie- en Mediaontwikkeling A24A</a>
            </div>
        </div>
    </footer>
    
