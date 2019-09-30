<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr(session_id(), mt_rand(0, 10), mt_rand(3, 10)) . time());

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'APEC';
$desc = 'Выдача карт АТЭС';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">
    <meta name="Keywords" content="Выдача карт АТЭС">

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">


    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55513930, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55513930" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148958176-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-148958176-1');
    </script>
</head>


<body id="main">
<div id="global-wrapper">

    <!--===================================================== Header -->
    <header class="layout-header">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-1-4 col-xs-1-2">
                    <a href="#" class="logo si-jump">
                        Выдача карт АТЭС<br>
                        для граждан России
                    </a>
                </div>

                <!-- Phone block -->
                <div class="col-3-4 col-xs-1-2">

                    <ul class="nav">
                        <li>
                            <a class="si-jump" href="#what">
                                Что такое карты АТЭС?
                            </a>
                        </li>
                        <li>
                            <a class="si-jump" href="#world">
                                Где можно использовать?
                            </a>
                        </li>
                        <li>
                            <a class="si-jump" href="#get">
                                Получить карту АТЭС
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="nav-block">
            <div class="show-menu second-screen-block">
                <span class="icon-sandwich"></span>
            </div>
            <div class="nav-item"></div>
        </div>

        <div class="si-phone">
            <div class="circle-yellow">
                <div class="phone-icon">
                    <img src="svg/phone-icon.svg" alt=" ">
                </div>
            </div>
            <a href="tel:+79450000000" class="phone-link dark">8 945 000-00-00</a>
            <a href="#" class="open-consult-modal consult" onclick="yaCounter55513930.reachGoal('target1');" data-extra="1">Заказать консультацию</a>
        </div>

    </header>


    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">

        <div class="abs-block cre-animate" data-animation="slide-in-from-right"
             data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
            <div class="title">
                21
                <span>страна</span>
            </div>
            <div class="text">
                <a href="#" class="btn open-option-modal yellow-link">
                    <div class="circle">!</div>
                    Условия въезда</a>
            </div>
        </div>

        <div class="container">
            <h1>
                Откройте мир
                путешествий
                в Америку
                и Азию без виз
            </h1>

            <div class="sub_h1">
                Воспользуйтесь эксклюзивной возможностью
                оформить карту АТЭС
            </div>

            <a href="#" class="btn open-consult-modal button-yellow" onclick="yaCounter55513930.reachGoal('target2');
" data-extra="1">
                Узнайте больше
            </a>

            <div class="copy-text">
                На основании <a class="link-yellow" target="_blank" href="postanovlenie.pdf">Постановления
                    Правительства РФ от 2
                    октября 2009 г.</a>
                N 773
                " Об участии Российской Федерации в системе использования карт для
                деловых и служебных поездок в станы участницы Организации
                «Азиатско-Тихоокеанского Экономического Сотрудничества»
            </div>

            <div class="line-grey"></div>

            <div class="row">
                <div class="col-1-3 col-xs-1">
                    <div class="list-block cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                        <div class="circle-yellow">
                            <div class="money-icon">
                                <img src="svg/money-icon.svg" alt=" ">
                            </div>
                        </div>
                        <div class="text hidden-xs">
                            Гарантия возврата денег<br> при отказе
                        </div>
                        <div class="text mobile">
                            Гарантия возврата денег при отказе
                        </div>
                    </div>
                </div>
                <div class="col-1-3 col-xs-1">
                    <div class="list-block cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                        <div class="circle-yellow">
                            <div class="list-icon">
                                <img src="svg/list-icon.svg" alt=" ">
                            </div>
                        </div>
                        <div class="text hidden-xs">
                            Официальное<br> оформление по договору
                        </div>
                        <div class="text mobile">
                            Официальное оформление по договору
                        </div>
                    </div>
                </div>
                <div class="col-1-3 col-xs-1">
                    <div class="list-block cre-animate" data-animation="slide-up-from-bottom"
                         data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
                        <div class="circle-yellow">
                            <div class="card-icon">
                                <img src="svg/card-icon.svg" alt=" ">
                            </div>
                        </div>
                        <div class="text hidden-xs">
                            Оформление карты<br>
                            под ключ без сложностей
                        </div>

                        <div class="text mobile">
                            Оформление карты<br>
                            под ключ без сложностей
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section world -->
    <section class="section-world" id="world">

        <div class="world-img"></div>

        <div class="container">
            <h3>
                21 страна Азии, Австралия, новая Зеландия, Южная Америка
            </h3>
            <h2>
                теперь доступны
                без визы
            </h2>

            <div class="airplan cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                 data-offset="90%" data-easing="easeOutQuint">
                <img src="images/boing-img.png" alt=" ">
            </div>

            <div class="row hidden-xs">
                <div class="col-1-4">
                    <ul class="list">
                        <li>
                            <div class="circle-yellow">
                                1
                            </div>
                            <span>
                                Россия
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Россия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Паспортный контроль без очереди по дипломатическому коридору.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                2
                            </div>
                            <span>
                                Китай
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Китай
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                3
                            </div>
                            <span>
                                Южная Корея
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Южная Корея
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                4
                            </div>
                            <span>
                                Япония
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Япония
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                5
                            </div>
                            <span>
                                Гонконг, Китай
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Гонконг, Китай
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-1-4">
                    <ul class="list">
                        <li>
                            <div class="circle-yellow">
                                6
                            </div>
                            <span>
                                Тайвань
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Тайвань
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                7
                            </div>
                            <span>
                                Тайланд
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Тайланд
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                8
                            </div>
                            <span>
                                Вьетнам
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Вьетнам
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                9
                            </div>
                            <span>
                                Филиппины
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Филиппины
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 59 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                10
                            </div>
                            <span>
                                Малайзия
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Малайзия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-1-4">
                    <ul class="list">
                        <li>
                            <div class="circle-yellow">
                                11
                            </div>
                            <span>
                                Сингапур
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Сингапур
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                12
                            </div>
                            <span>
                                Бруней
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Бруней
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                13
                            </div>
                            <span>
                                Индонезия
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Индонезия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                14
                            </div>
                            <span>
                                Папуа-Новая Гвинея
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Папуа-Новая Гвинея
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                15
                            </div>
                            <span>
                                Австралия
                            </span>
                            <div class="hover-block center">
                                <div class="title">
                                    Австралия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-1-4">
                    <ul class="list">
                        <li>
                            <div class="circle-yellow">
                                16
                            </div>
                            <span>
                                Новая Зеландия
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Новая Зеландия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow under">
                                17
                            </div>
                            <span>
                                Канада
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Канада
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Требуется виза. Паспортный контроль без очереди по дипломатическому коридору с
                                    пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow under">
                                18
                            </div>
                            <span>
                                США
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    США
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Требуется виза. Для владельцев карт возможна ускоренная запись на визовое
                                    собеседование. Паспортный контроль без очереди по дипломатическому коридору с
                                    пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                19
                            </div>
                            <span>
                                Мексика
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Мексика
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li class="border-bottom">
                            <div class="circle-yellow">
                                20
                            </div>
                            <span>
                                Перу
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Перу
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li class="border-none">
                            <div class="circle-yellow">
                                21
                            </div>
                            <span>
                                Чили
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Чили
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row visible-xs">
                <div class="col-xs-1-2">
                    <ul class="list">
                        <li>
                            <div class="circle-yellow">
                                1
                            </div>
                            <span>
                                Россия
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Россия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Паспортный контроль без очереди по дипломатическому коридору.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                2
                            </div>
                            <span>
                                Китай
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Китай
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                3
                            </div>
                            <span>
                                Южная Корея
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Южная Корея
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                4
                            </div>
                            <span>
                                Япония
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Япония
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                5
                            </div>
                            <span>
                                Гонконг, Китай
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Гонконг, Китай
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                6
                            </div>
                            <span>
                                Тайвань
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Тайвань
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                7
                            </div>
                            <span>
                                Тайланд
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Тайланд
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                8
                            </div>
                            <span>
                                Вьетнам
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Вьетнам
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                9
                            </div>
                            <span>
                                Филиппины
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Филиппины
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 59 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                10
                            </div>
                            <span>
                                Малайзия
                            </span>
                            <div class="hover-block left">
                                <div class="title">
                                    Малайзия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-1-2">
                    <ul class="list">
                        <li>
                            <div class="circle-yellow">
                                11
                            </div>
                            <span>
                                Сингапур
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Сингапур
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                12
                            </div>
                            <span>
                                Бруней
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Бруней
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                13
                            </div>
                            <span>
                                Индонезия
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Индонезия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                14
                            </div>
                            <span>
                                Папуа-Новая Гвинея
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Папуа-Новая Гвинея
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                15
                            </div>
                            <span>
                                Австралия
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Австралия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                16
                            </div>
                            <span>
                                Новая Зеландия
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Новая Зеландия
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow under">
                                17
                            </div>
                            <span>
                                Канада
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Канада
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Требуется виза. Паспортный контроль без очереди по дипломатическому коридору с
                                    пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow under">
                                18
                            </div>
                            <span>
                                США
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    США
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Требуется виза. Для владельцев карт возможна ускоренная запись на визовое
                                    собеседование. Паспортный контроль без очереди по дипломатическому коридору с
                                    пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-yellow">
                                19
                            </div>
                            <span>
                                Мексика
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Мексика
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li class="border-bottom">
                            <div class="circle-yellow">
                                20
                            </div>
                            <span>
                                Перу
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Перу
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                        <li class="border-none">
                            <div class="circle-yellow">
                                21
                            </div>
                            <span>
                                Чили
                            </span>
                            <div class="hover-block right">
                                <div class="title">
                                    Чили
                                </div>
                                <div class="sub_title">
                                    Коридор въезда по карте APEC
                                </div>
                                <div class="line-grey"></div>
                                <div class="text">
                                    Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по
                                    дипломатическому коридору с пометкой APEC Card.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="#" class="btn button-yellow open-option-modal">
                Условия въезда
            </a>

            <div id="what" class="what-wrapper">

                <div class="visa">
                    <img class="first cre-animate"
                         data-animation="slide-up-from-bottom" data-speed="1500" data-delay="1300"
                         data-offset="90%" data-easing="easeOutQuint" src="images/card2.png" alt=" ">
                    <img class="second cre-animate"
                         data-animation="slide-up-from-bottom" data-speed="1500" data-delay="300"
                         data-offset="90%" data-easing="easeOutQuint" src="images/card1.png" alt=" ">
                </div>

                <h3>
                    Что такое
                    карта АТЭС?
                </h3>

                <div class="sub_title">
                    Владельцы карт АТЭС получают <span>право многократного безвизового посещения
                    стран-участниц организации «Азиатско-тихоокеанское экономическое
                    сотрудничество».</span>
                </div>

                <p class="text">
                    Карта АТЭС является аналогом дипломатического паспорта для предпринимателей
                    и топ-менеджеров компаний. Она идеально подходит для регулярных деловых поездок,
                    а также продолжительного проживания без поездок в Россию и оформления виз.
                </p>

                <p class="border-box">
                    Организация стран-участниц «Азиатско-тихоокеанского сотрудничества» существует
                    и действует, как международный консультативный орган, созданный для развития
                    экономик стран, входящих в него и поддержки международного бизнеса между ними.
                </p>

                <div class="warning-block">
                    <div class="circle-yellow">
                        <span>!</span>
                    </div>
                    <a href="postanovlenie.pdf" target="_blank" class="link">Постановления Правительства РФ о картах
                        АТЭС</a>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section business -->
    <section class="section-business" id="business">
        <div class="container">
            <h3>
                Не нужно быть крупным бизнесменом,
                чтобы получить привилегии карты АТЭС
            </h3>

            <div class="sub_title">
                Карту может получить владелец или топ-менеджер любой российской компании, сотрудничающей с зарубежными
                странами.
            </div>
            <a href="#" class="btn open-consult-modal under-button" onclick="yaCounter55513930.reachGoal('target3');
" data-extra="2">
                <span>Узнайте о порядке оформления</span>
            </a>

            <div class="hidden-xs">
                <div class="yellow i-1 i-1-1">
                    <div class="business-block">
                        <div class="number">
                            5
                            <div class="years visible-xs">
                                лет
                            </div>
                        </div>
                        <div class="years hidden-xs">
                            лет
                        </div>
                        <div class="text">
                            срок действия карты
                        </div>
                    </div>
                </div>

                <div class="yellow">
                    <div class="business-block">
                        <div class="number">
                            2-3
                            <div class="years visible-xs">
                                месяца
                            </div>
                        </div>
                        <div class="years hidden-xs">
                            месяца
                        </div>
                        <div class="text">
                            срок непрерывного<br>
                            пребывания в стране
                        </div>
                    </div>
                </div>

                <div class="yellow i-1">
                    <div class="business-block">
                        <div class="number">
                            3
                            <div class="years visible-xs">
                                месяца
                            </div>
                        </div>
                        <div class="years hidden-xs">
                            месяца
                        </div>
                        <div class="text last">
                            для оформления<br>
                            карты АТЭС
                        </div>
                    </div>
                </div>
            </div>

            <div class="last-wrapper hidden-xs">
                <div class="left-block">
                    Приятное
                    дополнение
                </div>
                <div class="right-block">
                    <div class="block_sub cre-animate" data-animation="slide-in-from-right"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                        <div class="title">
                            Паспортно-визовый контроль без очереди
                        </div>
                        <div class="text">
                            Проходите паспортно-визовый контроль в 21 стране Азии, Австралии,
                            Новой Зеландии, Южной Америке, а также Канаде и США без очереди через дипломатический
                            коридор.
                        </div>
                    </div>

                    <div class="block_sub cre-animate" data-animation="slide-in-from-right"
                         data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                        <div class="title">
                            Собеседование для получения визы в США без очереди
                        </div>
                        <div class="text">
                            Владельцы карты могут записаться на собеседование для получения визы США
                            в привилегированном порядке и без очереди.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="visible-xs">
            <div class="yellow i-1">
                <div class="business-block">
                    <div class="number">
                        5
                        <div class="years visible-xs">
                            лет
                        </div>
                    </div>
                    <div class="years hidden-xs">
                        лет
                    </div>
                    <div class="text">
                        срок действия карты
                    </div>
                </div>
            </div>

            <div class="yellow">
                <div class="business-block">
                    <div class="number">
                        2-3
                        <div class="years visible-xs">
                            месяца
                        </div>
                    </div>
                    <div class="years hidden-xs">
                        месяца
                    </div>
                    <div class="text">
                        срок непрерывного<br>
                        пребывания в стране
                    </div>
                </div>
            </div>

            <div class="yellow i-1">
                <div class="business-block">
                    <div class="number">
                        3
                        <div class="years visible-xs">
                            месяца
                        </div>
                    </div>
                    <div class="years hidden-xs">
                        месяца
                    </div>
                    <div class="text last">
                        для оформления<br>
                        карты АТЭС
                    </div>
                </div>
            </div>
        </div>

        <div class="container visible-xs">
            <div class="last-wrapper">
                <div class="left-block">
                    Приятное
                    дополнение
                </div>
                <div class="right-block">
                    <div class="block_sub cre-animate" data-animation="slide-in-from-right"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                        <div class="title">
                            Паспортно-визовый контроль без очереди
                        </div>
                        <div class="text">
                            Проходите паспортно-визовый контроль в 21 стране Азии, Австралии,
                            Новой Зеландии, Южной Америке, а также Канаде и США без очереди через дипломатический
                            коридор.
                        </div>
                    </div>

                    <div class="block_sub cre-animate" data-animation="slide-in-from-right"
                         data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                        <div class="title">
                            Собеседование для получения визы в США без очереди
                        </div>
                        <div class="text">
                            Владельцы карты могут записаться на собеседование для получения визы США
                            в привелигированном порядке и без очереди.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section diploma -->
    <section class="section-diploma" id="diploma">
        <div class="container">
            <h1>
                Сравните
                карту АТЭС
            </h1>
            <h2>
                и дипломатический
                паспорт
            </h2>

            <div class="diploma-wrapper">
                <div class="option-block">
                    <span class="cre-animate" data-animation="slide-in-from-left"
                          data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                        Путешествия без виз в страны АТЭС
                    </span>
                    <span class="cre-animate" data-animation="slide-in-from-left"
                          data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                        Проход границы без очереди по дипломатическому коридору
                    </span>
                    <span class="cre-animate" data-animation="slide-in-from-left"
                          data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
                        Можно оформить бизнесменам и топ-менеджерам
                    </span>
                </div>
                <div class="plus-block cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                    <div class="title">
                        Дипломатический
                        паспорт
                    </div>
                    <ul class="list">
                        <li>
                            +
                        </li>
                        <li>
                            +
                        </li>
                        <li>
                            -
                        </li>
                    </ul>
                </div>
                <div class="plus-block yellow cre-animate" data-animation="slide-up-from-bottom"
                     data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                    <div class="title">
                        Карта АТЭС
                    </div>
                    <ul class="list">
                        <li>
                            +
                        </li>
                        <li>
                            +
                        </li>
                        <li>
                            +
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section client -->
    <section class="section-client" id="client">
        <div class="container">
            <div class="sub_title">
                истории путешествий
            </div>
            <h2>
                рекомендации
                наших клиентов
            </h2>

            <div class="wrapper-client-slider">

                <!-- Swiper -->
                <div class="swiper-container client-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="client-wrapper">
                                        <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                            <div class="block-desc">
                                                <img src="images/ava-img.png" alt=" " class="avatar">
                                                <div class="text">
                                                    Пупкин Василий
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination client-pagination"></div>

                <!-- Add Arrows -->
                <div class="button-block">
                    <div class="swiper-button-next client-next">
                        <div class="left_arrow">
                            <?php include("svg/left_arrow.svg"); ?>
                        </div>
                    </div>
                    <div class="swiper-button-prev client-prev">
                        <div class="left_arrow">
                            <?php include("svg/left_arrow.svg"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-client-mobile-slider">

                <!-- Swiper -->
                <div class="swiper-container client-mobile-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="client-wrapper">
                                <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                    <div class="block-desc">
                                        <img src="images/ava-img.png" alt=" " class="avatar">
                                        <div class="text">
                                            Пупкин Василий
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="client-wrapper">
                                <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                    <div class="block-desc">
                                        <img src="images/ava-img.png" alt=" " class="avatar">
                                        <div class="text">
                                            Пупкин Василий
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="client-wrapper">
                                <div class="client-block">
                                            <span>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu.
                                            </span>
                                    <div class="block-desc">
                                        <img src="images/ava-img.png" alt=" " class="avatar">
                                        <div class="text">
                                            Пупкин Василий
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination client-mobile-pagination"></div>
                <!-- Add Arrows -->
                <div class="button-block">
                    <div class="swiper-button-next client-next">
                        <div class="left_arrow">
                            <?php include("svg/left_arrow.svg"); ?>
                        </div>
                    </div>
                    <div class="swiper-button-prev client-prev">
                        <div class="left_arrow">
                            <?php include("svg/left_arrow.svg"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section travel -->
    <section class="section-travel" id="travel">
        <div class="container">
            <div class="row">
                <div class="col-1-6 col-xs-1">
                    <div class="empty-block"></div>
                </div>
                <div class="col-5-6 col-xs-1">
                    <div class="warning-block pulse">
                        <span>!</span>
                    </div>

                    <div class="white-text cre-animate" data-animation="slide-in-from-left"
                         data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                        Каждый год визовые требования ужесточаются. Зачастую многократную визу в Китай получить почти
                        невозможно.
                    </div>

                    <h2 class="cre-animate" data-animation="slide-in-from-right"
                        data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                       <span>
                           Станьте владельцем карты АТЭС.
                       </span>
                        Путешествуйте,<br> работайте и живите<br>
                        зарубежом свободно.
                    </h2>

                    <a href="#" class="btn open-consult-modal button-yellow" onclick="yaCounter55513930.reachGoal
                    ('target4');" data-extra="3">
                        Узнайте больше
                    </a>
                </div>
            </div>
        </div>
        <div id="get"></div>
    </section>

    <!--===================================================== section gets -->
    <section class="section-get" id="gets">
        <div class="container">
            <h2>
                Как получить
                карту АТЭС
            </h2>
            <div class="sub-text">
                Получить карту может <span>любой гражданин России старше 20 лет</span>.<Br>
                От вас потребуется только паспорт и справка с места работы.
            </div>

            <div class="triangle">
                <img src="images/triangle-img.png" alt=" ">
            </div>
            <div class="row hidden-xs">
                <div class="line"></div>
                <div class="col-1-3 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="300" data-offset="90%" data-easing="easeOut">
                    <div class="number">
                        1<span>.</span>
                    </div>
                    <div class="title">
                        Заявка
                    </div>
                    <div class="text">
                        Оставьте заявку или позвоните нам<br>
                        по номеру: 8 495 000-00-00
                    </div>

                    <a href="#" class="btn open-consult-modal button-yellow" onclick="yaCounter55513930.reachGoal
                    ('target5');" data-extra="4">
                        Оставить заявку
                    </a>
                </div>
                <div class="col-1-3 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">
                    <div class="number">
                        2<span>.</span>
                    </div>
                    <div class="title">
                        Договор
                    </div>
                    <div class="text">
                        Мы с вами заключаем договор. <br>
                        Если необходимо - дистанционно.
                    </div>
                </div>
                <div class="col-1-3 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="1200" data-offset="90%" data-easing="easeOut">
                    <div class="number">
                        3<span>.</span>
                    </div>
                    <div class="title">
                        Ваши документы<br> для выпуска карты
                    </div>
                    <div class="text">
                        Мы готовим ваш пакет документов<br>
                        и подаём их в МИД страны-участницы АТЭС.
                    </div>

                    <a href="documents.zip" class="link-yellow" download>
                        Полный перечень документов
                    </a>
                </div>
            </div>
            <div class="row hidden-xs margin-top">
                <div class="line"></div>
                <div class="col-1-3 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="900" data-offset="90%" data-easing="easeOut">
                    <div class="number">
                        4<span>.</span>
                    </div>
                    <div class="title">
                        Взаимодействие с МИД 21 страны
                    </div>
                    <div class="text i-1">
                        Мы отправляем документы в МИД каждой страны АТЭС без вашего участия и держим вас в курсе о
                        статусе.
                    </div>
                </div>
                <div class="col-1-3 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="1500" data-offset="90%" data-easing="easeOut">
                    <div class="number">
                        5<span>.</span>
                    </div>
                    <div class="title">
                        Выпуск карты
                    </div>
                    <div class="text">
                        В течение 3 месяцев МИД<br> страны-участницы АТЭС выпускает<br> карту.
                    </div>
                </div>
                <div class="col-1-3 cre-animate" data-animation="slide-in-from-left"
                     data-speed="1000" data-delay="1800" data-offset="90%" data-easing="easeOut">
                    <div class="number">
                        6<span>.</span>
                    </div>
                    <div class="title">
                        Вы получаете карту
                    </div>
                    <div class="text">
                        Наш курьер привозит вам карту домой<br> или в офис.
                    </div>
                </div>
            </div>

            <div class="row visible-xs">
                <div class="line"></div>
                <div class="col-xs-1-2">
                    <div class="number">
                        1<span>.</span>
                    </div>
                    <div class="title">
                        Заявка
                    </div>
                    <div class="text">
                        Оставьте заявку или позвоните нам<br>
                        по номеру: 8 495 000-00-00
                    </div>

                    <a href="#" class="btn open-consult-modal button-yellow" data-extra="4">
                        Оставить заявку
                    </a>
                </div>
                <div class="col-xs-1-2">
                    <div class="number">
                        2<span>.</span>
                    </div>
                    <div class="title">
                        Договор
                    </div>
                    <div class="text">
                        Мы с вами заключаем договор. <br>
                        Если необходимо - дистанционно.
                    </div>
                </div>

            </div>
            <div class="row visible-xs margin-top">
                <div class="line"></div>
                <div class="col-xs-1-2">
                    <div class="number">
                        3<span>.</span>
                    </div>
                    <div class="title">
                        Ваши документы<br> для выпуска карты
                    </div>
                    <div class="text">
                        Мы готовим ваш пакет документов<br>
                        и подаём их в МИД страны-участницы АТЭС.
                    </div>

                    <a href="documents.zip" class="link-yellow" download>
                        Полный перечень документов
                    </a>
                </div>
                <div class="col-xs-1-2">
                    <div class="number">
                        4<span>.</span>
                    </div>
                    <div class="title">
                        Взаимодействие
                        с МИД 21 страны-
                        участницы АТЭС без вашего участия
                    </div>
                    <div class="text">
                        Мы отправляем документы в МИД каждой страны-участницы АТЭС
                        и держим вас в курсе о статусе.
                    </div>
                </div>
            </div>
            <div class="row visible-xs margin-top-last">
                <div class="line"></div>
                <div class="col-xs-1-2">
                    <div class="number">
                        5<span>.</span>
                    </div>
                    <div class="title">
                        Выпуск карты
                    </div>
                    <div class="text">
                        В течение 3 месяцев МИД<br> страны-участницы АТЭС выпускает<br> карту.
                    </div>
                </div>
                <div class="col-xs-1-2">
                    <div class="number">
                        6<span>.</span>
                    </div>
                    <div class="title">
                        Вы получаете карту
                    </div>
                    <div class="text">
                        Наш курьер привозит вам карту домой<br> или в офис.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section question -->
    <section class="section-question" id="question">
        <div class="container">
            <h2>
                Частые вопросы
            </h2>

            <div class="questions-block hidden-xs">

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>

                        <div class="question-text">
                            КАК ОФОРМЛЯЕТСЯ КАРТА?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Карта оформляется через МИД России и остальных стран, входящих в соглашение. Документы на
                            каждого кандидата направляются во все страны АТЭС, указанные в заявке, рассматриваются в
                            индивидуальном порядке, и после того, как поступают положительные решения от всех стран, МИД
                            России выпускает готовую карту. Весь процесс занимает в среднем 3-6 месяцев.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            КАКОВЫ ГАРАНТИИ, ЧТО МНЕ ВЫДАДУТ КАРТУ ИЛИ ВЕРНУТ ДЕНЬГИ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Как правило, отказа в выдаче карт не бывает. МИД некоторых стран может запросить
                            дополнительные документы и, очень редко, отказать в распространении действия вашей карты
                            только на свою страну. В любом случае, карты АТЭС оформляются по договору и при
                            невозможности оформления карты мы возвращаем вам оплату.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            СКОЛЬКО ВРЕМЕНИ ЗАНИМАЕТ ОФОРМЛЕНИЕ КАРТЫ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Обычно оформление карты занимает 3-6 месяцев, поскольку каждый заявитель проходит
                            согласование в МИД 21 страны участницы соглашения, каждая из которых одобряет кандидатуру
                            заявителя.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            МОЖНО ЛИ УСКОРИТЬ ВЫДАЧУ КАРТЫ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Выдачу карты нельзя ускорить. Долгий срок обусловлен тем, что заявку каждого кандидата в
                            индивидуальном порядке рассматривает МИД каждой из 21 страны, участницы соглашения.
                        </p>
                    </div>
                </div>

            </div>

            <p class="btn more-button hidden-xs">
                Еще вопросы
            </p>

            <div class="more-block hidden-xs">
                <div class="questions-block">

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                ВЫПУСКАЮТ ЛИ КАРТЫ АТЭС В ДРУГИХ СТРАНАХ-УЧАСТНИЦАХ ОРГАНИЗАЦИИ «АЗИАТСКО-ТИХООКЕАНСКОЕ
                                СОТРУДНИЧЕСТВО»?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Да, выпуск карт АТЭС - очень востребованная и распространённая практика. В России на
                                текущий момент использование карт АТЭС гораздо менее распространено, чем в других
                                странах.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                ВОЗМОЖНО ЛИ ПОЛУЧИТЬ КАРТУ, ЕСЛИ Я ЖИВУ НЕ В РОССИИ ИЛИ НЕ В МОСКВЕ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Да, это возможно. Вам не нужно приезжать в Россию или в Москву для выпуска карты. Мы
                                заключаем договор дистанционно без вашего личного присутствия и пересылаем документы
                                курьерской почтой.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                НУЖНО ЛИ ПЕРЕДАВАТЬ ПАСПОРТ ДЛЯ ОФОРМЛЕНИЯ КАРТЫ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Нет, нужна только копия загранпаспорта, заполненная анкета, справка с работы и ваше
                                фото. Никакие другие документы почтой не пересылаются.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                КАКИМ ОБРАЗОМ ОТПРАВИТЬ ДОКУМЕНТЫ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Документы необходимо отправлять надёжной курьерской почтой – DHL, UPS, Pony Express.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                КАКИЕ ДОКУМЕНТЫ НЕОБХОДИМЫ ДЛЯ ОФОРМЛЕНИЯ КАРТЫ АТЭС?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                От вас потребуется только скан заграничного паспорт, справка о деятельность компании, в
                                которой говорится, что ваша работа предполагает поездки в страны Азии, а также заявление
                                с просьбой выдачи карты АТЭС и цветной фотографией 40*60. Главное требование –
                                загранпаспорт должен быть действителен не менее 7 лет от момента подачи заявления на
                                карту. Карта АТЭС прикрепляется к конкретному паспорту, на который она оформляется, и не
                                действует с другим паспортом. По правилам оформления карт АТЭС, карта может оформляться
                                до 12 месяцев, действует карта 5 лет и паспорт должен быть действителен не менее 1 года
                                после окончания действия карты. <br>
                                Кроме обязательных документов в процессе оформления карты некоторые страны изредка
                                запрашивают дополнительные документы по своему усмотрению – подтверждение финансовой
                                стабильности, справки с работы на английском языке, отдельные анкеты и тому подобные
                                документы.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                МОГУ ЛИ Я ПОЛУЧИТЬ КАРТУ, ЕСЛИ Я РАБОТАЮ В ЗАРУБЕЖНОЙ КОМПАНИИ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Вы можете получить карту, если вы работаете в зарубежной компании и можете подтвердить
                                справкой от компании, что ваша работа предполагает деловые поездки в странах АТЭС.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                МОГУ ЛИ Я ПОЛУЧИТЬ КАРТУ, ЕСЛИ Я ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Да, Индивидуальные Предприниматели могут получить карту, если вы можете подтвердить
                                справкой от компании, что ваша работа предполагает деловые поездки в страны АТЭС.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                КАК ИСПОЛЬЗОВАТЬ КАРТУ АТЭС?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Если у вас есть карта АТЭС, то вам не нужно иметь визу во все страны АТЭС, кроме США и
                                Канады. Фактически, карта АТЭС действует как многократная бизнес-виза на 5 лет. При
                                прохождении таможенного контроля необходимо проходить в коридор Diplomats / APEC Card и
                                предъявлять карту вместе с паспортом, на который она оформлялась. Хотя карта изначально
                                была создана исключительно для деловых поездок в странах АТЭС, все владельцы карт
                                практикуют их использование и в туристических поездках. По этой причине, если на таможне
                                задают вопросы о цели вашей поездки, по избежание недоразумений, лучше отвечать, что
                                цель поездки – деловая.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                ПОДХОДИТ ЛИ КАРТА ДЛЯ ПОСТОЯННОГО ПРОЖИВАНИЯ В СТРАНАХ АТЭС?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Во многих странах АТЭС по карте разрешается находиться не более 90 дней в каждый период
                                из 180 дней, поэтому карта не подходит для постоянного проживание. Требования каждой
                                конкретной страны необходимо уточнять отдельно.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                В КАКИХ СТРАНАХ ДЕЙСТВУЕТ МОЯ КАРТА?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Карта действует только для стран, указанных на обороте вашей карты сокращением из трёх
                                букв. Перечень необходимых стран указывается при подаче заявления на получения карты.
                                Рекомендуется при подаче заявления указывать все страны АТЭС. Однако, среди всех стран,
                                наиболее часто запрашивает дополнительные документы и затягивает процедуру оформление
                                Австралия. Если вы не планируете поездки в Австралию, рекомендуем не указывать её в
                                списке стран.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                КАКИЕ СТРАНЫ УКАЗАНЫ У МЕНЯ В КАРТЕ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Посмотрите обозначения на задней стороне карты. AUS – Австралия, BRN – Бруней, CHL –
                                Чили, CHN – Китай, HKG – Гонконг, IDN – Индонезия, JPN – Япония, KOR – Южная Корея, MEX
                                – Мексика, MYS – Малайзия, NZL – Новая Зеландия, PER – Перу, PHL – Филиппины, PNG –
                                Папуа-Новая Гвинея, RUS – Россия, SGP – Сингапур, THA – Тайланд, TWN – Тайвань, VNM –
                                Вьетнам.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                МОГУ ЛИ Я ОФОРМИТЬ КАРТУ НА ЖЕНУ, ДРУЗЕЙ, ДЕТЕЙ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Карта оформляется на любых совершеннолетних граждан РФ, трудовая деятельность которых
                                предполагает поездки в страны АТЭС. Если вы можете подтвердить письмом от компании, что
                                ваши близкие, для которых вы хотите оформить карту, регулярно по работе ездят в страны
                                АТЭС, то они также могут оформить карту.
                            </p>
                        </div>
                    </div>

                    <!-- ========================= single partners -->
                    <div class="question-item">
                        <div class="question border-top">
                            <div class="question-arrow-holder">
                                <div class="plus">+</div>
                            </div>
                            <div class="question-text">
                                КАК ОПЛАТИТЬ ВЫПУСК КАРТЫ?
                            </div>

                        </div>

                        <div class="answer">
                            <p>
                                Вы можете оплатить выпуск карты по договору через наш расчётный счёт, а также наличными
                                и через платёжные системы PayPal и WeChat Pay.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="questions-block visible-xs">

            <!-- ========================= single partners -->
            <div class="question-item">
                <div class="question">
                    <div class="question-arrow-holder">
                        <div class="plus">+</div>
                    </div>

                    <div class="question-text">
                        КАК ОФОРМЛЯЕТСЯ КАРТА?
                    </div>

                </div>

                <div class="answer">
                    <p>
                        Карта оформляется через МИД России и остальных стран, входящих в соглашение. Документы на
                        каждого кандидата направляются во все страны АТЭС, указанные в заявке, рассматриваются в
                        индивидуальном порядке, и после того, как поступают положительные решения от всех стран, МИД
                        России выпускает готовую карту. Весь процесс занимает в среднем 3-6 месяцев.
                    </p>
                </div>
            </div>

            <!-- ========================= single partners -->
            <div class="question-item">
                <div class="question border-top">
                    <div class="question-arrow-holder">
                        <div class="plus">+</div>
                    </div>
                    <div class="question-text">
                        КАКОВЫ ГАРАНТИИ, ЧТО МНЕ ВЫДАДУТ КАРТУ ИЛИ ВЕРНУТ ДЕНЬГИ?
                    </div>

                </div>

                <div class="answer">
                    <p>
                        Как правило, отказа в выдаче карт не бывает. МИД некоторых стран может запросить дополнительные
                        документы и, очень редко, отказать в распространении действия вашей карты только на свою страну.
                        В любом случае, карты АТЭС оформляются по договору и при невозможности оформления карты мы
                        возвращаем вам оплату.
                    </p>
                </div>
            </div>

            <!-- ========================= single partners -->
            <div class="question-item">
                <div class="question border-top">
                    <div class="question-arrow-holder">
                        <div class="plus">+</div>
                    </div>
                    <div class="question-text">
                        СКОЛЬКО ВРЕМЕНИ ЗАНИМАЕТ ОФОРМЛЕНИЕ КАРТЫ?
                    </div>

                </div>

                <div class="answer">
                    <p>
                        Обычно оформление карты занимает 3-6 месяцев, поскольку каждый заявитель проходит согласование в
                        МИД 21 страны участницы соглашения, каждая из которых одобряет кандидатуру заявителя.
                    </p>
                </div>
            </div>

            <!-- ========================= single partners -->
            <div class="question-item">
                <div class="question border-top">
                    <div class="question-arrow-holder">
                        <div class="plus">+</div>
                    </div>
                    <div class="question-text">
                        МОЖНО ЛИ УСКОРИТЬ ВЫДАЧУ КАРТЫ?
                    </div>

                </div>

                <div class="answer">
                    <p>
                        Выдачу карты нельзя ускорить. Долгий срок обусловлен тем, что заявку каждого кандидата в
                        индивидуальном порядке рассматривает МИД каждой из 21 страны, участницы соглашения.
                    </p>
                </div>
            </div>

        </div>

        <p class="btn more-button visible-xs">
            Еще вопросы
        </p>

        <div class="more-block">
            <div class="questions-block visible-xs">

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            ВЫПУСКАЮТ ЛИ КАРТЫ АТЭС В ДРУГИХ СТРАНАХ-УЧАСТНИЦАХ ОРГАНИЗАЦИИ «АЗИАТСКО-ТИХООКЕАНСКОЕ
                            СОТРУДНИЧЕСТВО»?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Да, выпуск карт АТЭС - очень востребованная и распространённая практика. В России на текущий
                            момент использование карт АТЭС гораздо менее распространено, чем в других странах.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            ВОЗМОЖНО ЛИ ПОЛУЧИТЬ КАРТУ, ЕСЛИ Я ЖИВУ НЕ В РОССИИ ИЛИ НЕ В МОСКВЕ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Да, это возможно. Вам не нужно приезжать в Россию или в Москву для выпуска карты. Мы
                            заключаем договор дистанционно без вашего личного присутствия и пересылаем документы
                            курьерской почтой.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            НУЖНО ЛИ ПЕРЕДАВАТЬ ПАСПОРТ ДЛЯ ОФОРМЛЕНИЯ КАРТЫ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Нет, нужна только копия загранпаспорта, заполненная анкета, справка с работы и ваше фото.
                            Никакие другие документы почтой не пересылаются.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            КАКИМ ОБРАЗОМ ОТПРАВИТЬ ДОКУМЕНТЫ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Документы необходимо отправлять надёжной курьерской почтой – DHL, UPS, Pony Express.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            КАКИЕ ДОКУМЕНТЫ НЕОБХОДИМЫ ДЛЯ ОФОРМЛЕНИЯ КАРТЫ АТЭС?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            От вас потребуется только скан заграничного паспорт, справка о деятельность компании, в
                            которой говорится, что ваша работа предполагает поездки в страны Азии, а также заявление
                            с просьбой выдачи карты АТЭС и цветной фотографией 40*60. Главное требование –
                            загранпаспорт должен быть действителен не менее 7 лет от момента подачи заявления на
                            карту. Карта АТЭС прикрепляется к конкретному паспорту, на который она оформляется, и не
                            действует с другим паспортом. По правилам оформления карт АТЭС, карта может оформляться
                            до 12 месяцев, действует карта 5 лет и паспорт должен быть действителен не менее 1 года
                            после окончания действия карты. <br>
                            Кроме обязательных документов в процессе оформления карты некоторые страны изредка
                            запрашивают дополнительные документы по своему усмотрению – подтверждение финансовой
                            стабильности, справки с работы на английском языке, отдельные анкеты и тому подобные
                            документы.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            МОГУ ЛИ Я ПОЛУЧИТЬ КАРТУ, ЕСЛИ Я РАБОТАЮ В ЗАРУБЕЖНОЙ КОМПАНИИ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Вы можете получить карту, если вы работаете в зарубежной компании и можете подтвердить
                            справкой от компании, что ваша работа предполагает деловые поездки в странах АТЭС.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            МОГУ ЛИ Я ПОЛУЧИТЬ КАРТУ, ЕСЛИ Я ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Да, Индивидуальные Предприниматели могут получить карту, если вы можете подтвердить справкой
                            от компании, что ваша работа предполагает деловые поездки в страны АТЭС.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            КАК ИСПОЛЬЗОВАТЬ КАРТУ АТЭС?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Если у вас есть карта АТЭС, то вам не нужно иметь визу во все страны АТЭС, кроме США и
                            Канады. Фактически, карта АТЭС действует как многократная бизнес-виза на 5 лет. При
                            прохождении таможенного контроля необходимо проходить в коридор Diplomats / APEC Card и
                            предъявлять карту вместе с паспортом, на который она оформлялась. Хотя карта изначально была
                            создана исключительно для деловых поездок в странах АТЭС, все владельцы карт практикуют их
                            использование и в туристических поездках. По этой причине, если на таможне задают вопросы о
                            цели вашей поездки, по избежание недоразумений, лучше отвечать, что цель поездки – деловая.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            ПОДХОДИТ ЛИ КАРТА ДЛЯ ПОСТОЯННОГО ПРОЖИВАНИЯ В СТРАНАХ АТЭС?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Во многих странах АТЭС по карте разрешается находиться не более 90 дней в каждый период из
                            180 дней, поэтому карта не подходит для постоянного проживание. Требования каждой конкретной
                            страны необходимо уточнять отдельно.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            В КАКИХ СТРАНАХ ДЕЙСТВУЕТ МОЯ КАРТА?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Карта действует только для стран, указанных на обороте вашей карты сокращением из трёх букв.
                            Перечень необходимых стран указывается при подаче заявления на получения карты.
                            Рекомендуется при подаче заявления указывать все страны АТЭС. Однако, среди всех стран,
                            наиболее часто запрашивает дополнительные документы и затягивает процедуру оформление
                            Австралия. Если вы не планируете поездки в Австралию, рекомендуем не указывать её в списке
                            стран.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            КАКИЕ СТРАНЫ УКАЗАНЫ У МЕНЯ В КАРТЕ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Посмотрите обозначения на задней стороне карты. AUS – Австралия, BRN – Бруней, CHL – Чили,
                            CHN – Китай, HKG – Гонконг, IDN – Индонезия, JPN – Япония, KOR – Южная Корея, MEX – Мексика,
                            MYS – Малайзия, NZL – Новая Зеландия, PER – Перу, PHL – Филиппины, PNG – Папуа-Новая Гвинея,
                            RUS – Россия, SGP – Сингапур, THA – Тайланд, TWN – Тайвань, VNM – Вьетнам.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            МОГУ ЛИ Я ОФОРМИТЬ КАРТУ НА ЖЕНУ, ДРУЗЕЙ, ДЕТЕЙ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Карта оформляется на любых совершеннолетних граждан РФ, трудовая деятельность которых
                            предполагает поездки в страны АТЭС. Если вы можете подтвердить письмом от компании, что ваши
                            близкие, для которых вы хотите оформить карту, регулярно по работе ездят в страны АТЭС, то
                            они также могут оформить карту.
                        </p>
                    </div>
                </div>

                <!-- ========================= single partners -->
                <div class="question-item">
                    <div class="question border-top">
                        <div class="question-arrow-holder">
                            <div class="plus">+</div>
                        </div>
                        <div class="question-text">
                            КАК ОПЛАТИТЬ ВЫПУСК КАРТЫ?
                        </div>

                    </div>

                    <div class="answer">
                        <p>
                            Вы можете оплатить выпуск карты по договору через наш расчётный счёт, а также наличными и
                            через платёжные системы PayPal и WeChat Pay.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--===================================================== section form-begin -->
    <section class="section-form form-begin" id="form-begin">
        <div class="container">

            <img src="images/form-bg.png" alt=" " class="man cre-animate" data-animation="slide-in-from-right"
                 data-speed="1000" data-delay="600" data-offset="90%" data-easing="easeOut">

            <h2>
                Начните оформлять карту АТЭС прямо сейчас
            </h2>

            <p class="sub_title">
                Наш специалист свяжется с Вами в течение 15 минут.
            </p>

            <form method="post" class="send-form" autocomplete="off">

                <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">

                <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">

                <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">

                <input type="hidden" name="send_type" class="send-type" value="2">
                <input type="hidden" name="send_extra" class="send-extra" value="5">
                <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                <?php //Поле выше для защиты формы от спам-ботов ?>

                <div class="btn-holder">
                    <button type="submit" class="btn button-yellow" onclick="yaCounter55513930.reachGoal('target6');" data-extra="5">Заказать консультацию <span>Я согласен на
                            обработку персональных данных</span>
                    </button>
                    <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                </div>

            </form>

        </div>
    </section>

    <!--===================================================== Footer -->
    <footer class="layout-footer">
        <div class="container">
            <div class="row">

                <!-- company info block -->
                <div class="col-1-2">
                    <a href="#" class="logo si-jump">
                        Выдача карт АТЭС<br>
                        для граждан России
                    </a>
                </div>

                <!-- Phone block -->
                <div class="si-phone">
                    <div class="circle-yellow">
                        <div class="phone-icon">
                            <img src="svg/phone-icon.svg" alt=" ">
                        </div>
                    </div>
                    <a href="tel:+79450000000" class="phone-link dark">8 945 000-00-00</a>
                    <a href="#" class="open-consult-modal consult" data-extra="1" onclick="yaCounter55513930
                    .reachGoal('target7');
">Заказать консультацию</a>
                </div>
            </div>

            <div class="line"></div>

            <div class="row">
                <div class="col-1-2 col-xs-1">
                    <span>
                        ООО «Фэнси Армор Рус» <br>
                        Адрес офиса: 107031, Москва, Столешников переулок 7, стр. 3, 3 этаж<br>
                        ОГРН: 1132543001909
                    </span>
                    <span class="visible-xs">
                        Разработано в <a href="http://hello-brand.ru/" class="yellow" target="_blank"
                                         rel="nofollow noopener">"Hello, brand!"</a>
                    </span>
                </div>

                <!-- copyright block -->
                <div class="col-1-2 hidden-xs align-right">
                   <span>
                        Разработано в <a href="http://hello-brand.ru/" class="yellow" target="_blank"
                                         rel="nofollow noopener">"Hello, brand!"</a>
                    </span>
                </div>
            </div>
        </div>
    </footer>


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>

    <div class="global-nav">
        <div class="pseudo-table">
            <div class="pseudo-table-cell nav-overlay">
                <ul class="nav" id="global-menu">
                    <li><a class="si-jump global-nav-link" href="#what">Что такое карты АТЭС?</a></li>
                    <li><a class="si-jump global-nav-link" href="#world"> Где можно использовать?</a></li>
                    <li><a class="si-jump global-nav-link" href="#get"> Получить карту АТЭС</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

        <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="si-success-modal-title">
                    Спасибо!
                </div>

                <div class="success-time">
                    Наш менеджер свяжется с вами в течение 15 минут
                </div>

                <div class="line-grey"></div>

                <p>
                    <strong>Время работы отдела продаж:</strong> <br>
                    пн-пт с 10.00 до 20.00 (по Москве)
                </p>

            </div>
        </div>

        <!--============================================== option modal -->
        <div class="si-modal option-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title">
                    Варианты выезда по карте АТЭС
                </div>

                <div class="line"></div>

                <div class="tabs-block price-block" data-tab-block="t-price">

                    <div class="left-block">
                        <div class="title">
                            Выберите страну
                        </div>

                        <ul class="nav nav-tabs scrollbar-inner">
                            <li class="tab-link active" data-tab="t-price-1" data-tab-block="t-price">
                                <span>1</span> Россия
                            </li>

                            <li class="tab-link" data-tab="t-price-2" data-tab-block="t-price">
                                <span>2</span> Китай
                            </li>

                            <li class="tab-link" data-tab="t-price-3" data-tab-block="t-price">
                                <span>3</span> Южная Корея
                            </li>

                            <li class="tab-link" data-tab="t-price-4" data-tab-block="t-price">
                                <span>4</span> Япония
                            </li>

                            <li class="tab-link" data-tab="t-price-5" data-tab-block="t-price">
                                <span>5</span> Гонконг, Китай
                            </li>

                            <li class="tab-link" data-tab="t-price-6" data-tab-block="t-price">
                                <span>6</span> Тайвань
                            </li>

                            <li class="tab-link" data-tab="t-price-7" data-tab-block="t-price">
                                <span>7</span> Тайланд
                            </li>

                            <li class="tab-link" data-tab="t-price-8" data-tab-block="t-price">
                                <span>8</span> Вьетнам
                            </li>

                            <li class="tab-link" data-tab="t-price-9" data-tab-block="t-price">
                                <span>9</span> Филиппины
                            </li>

                            <li class="tab-link" data-tab="t-price-10" data-tab-block="t-price">
                                <span>10</span> Малайзия
                            </li>

                            <li class="tab-link" data-tab="t-price-11" data-tab-block="t-price">
                                <span>11</span> Сингапур
                            </li>

                            <li class="tab-link" data-tab="t-price-12" data-tab-block="t-price">
                                <span>12</span> Бруней
                            </li>

                            <li class="tab-link" data-tab="t-price-13" data-tab-block="t-price">
                                <span>13</span> Индонезия
                            </li>

                            <li class="tab-link" data-tab="t-price-14" data-tab-block="t-price">
                                <span>14</span> Папуа-Новая Гвинея
                            </li>

                            <li class="tab-link" data-tab="t-price-15" data-tab-block="t-price">
                                <span>15</span> Австралия
                            </li>
                            <li class="tab-link" data-tab="t-price-16" data-tab-block="t-price">
                                <span>16</span> Новая Зеландия
                            </li>
                            <li class="tab-link" data-tab="t-price-17" data-tab-block="t-price">
                                <span>17</span> Канада
                            </li>

                            <li class="tab-link" data-tab="t-price-18" data-tab-block="t-price">
                                <span>18</span> США
                            </li>

                            <li class="tab-link" data-tab="t-price-19" data-tab-block="t-price">
                                <span>19</span> Мексика
                            </li>

                            <li class="tab-link" data-tab="t-price-20" data-tab-block="t-price">
                                <span>20</span> Перу
                            </li>

                            <li class="tab-link" data-tab="t-price-21" data-tab-block="t-price">
                                <span>21</span> Чили
                            </li>

                        </ul>
                    </div>

                    <div class="right-block">
                        <div class="tabs-content-container">
                            <div class="title">
                                Условия проезда
                            </div>

                            <!-- ================================================ price tab 1-->
                            <div class="tab-content active" data-tab="t-price-1" data-tab-block="t-price">
                                Паспортный контроль без очереди по дипломатическому коридору.
                            </div>

                            <!-- ================================================ price tab 2-->
                            <div class="tab-content" data-tab="t-price-2" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 3-->
                            <div class="tab-content" data-tab="t-price-3" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 4-->
                            <div class="tab-content" data-tab="t-price-4" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 5-->
                            <div class="tab-content" data-tab="t-price-5" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 6-->
                            <div class="tab-content" data-tab="t-price-6" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 7-->
                            <div class="tab-content" data-tab="t-price-7" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 8-->
                            <div class="tab-content" data-tab="t-price-8" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 9-->
                            <div class="tab-content" data-tab="t-price-9" data-tab-block="t-price">
                                Без визы. Коридор въезда 59 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 10-->
                            <div class="tab-content" data-tab="t-price-10" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 11-->
                            <div class="tab-content" data-tab="t-price-11" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 12-->
                            <div class="tab-content" data-tab="t-price-12" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 13-->
                            <div class="tab-content" data-tab="t-price-13" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 14-->
                            <div class="tab-content" data-tab="t-price-14" data-tab-block="t-price">
                                Без визы. Коридор въезда 60 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 15-->
                            <div class="tab-content" data-tab="t-price-15" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 16-->
                            <div class="tab-content" data-tab="t-price-16" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 17-->
                            <div class="tab-content" data-tab="t-price-17" data-tab-block="t-price">
                                Требуется виза. Паспортный контроль без очереди по дипломатическому коридору с пометкой
                                APEC Card.
                            </div>

                            <!-- ================================================ price tab 18-->
                            <div class="tab-content" data-tab="t-price-18" data-tab-block="t-price">
                                Требуется виза. Для владельцев карт возможна ускоренная запись на визовое собеседование.
                                Паспортный контроль без очереди по дипломатическому коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 19-->
                            <div class="tab-content" data-tab="t-price-19" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 20-->
                            <div class="tab-content" data-tab="t-price-20" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                            <!-- ================================================ price tab 21-->
                            <div class="tab-content" data-tab="t-price-21" data-tab-block="t-price">
                                Без визы. Коридор въезда 90 дней. Паспортный контроль без очереди по дипломатическому
                                коридору с пометкой APEC Card.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--============================================== consult modal -->
        <div class="si-modal consult-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="modal-form-title">
                    Закажите консультацию
                </div>

                <div class="modal-time">
                    Ответ в течение 15 минут
                </div>

                <form method="post" class="send-form" autocomplete="off">
                    <div class="row">
                        <div class="col-1-2 col-xs-1">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                        </div>

                        <div class="col-1-2 col-xs-1">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                        </div>
                    </div>

                    <textarea name="client_message" class="client-message" placeholder="Ваш вопрос"></textarea>

                    <input type="hidden" name="send_type" class="send-type" value="2">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn button-yellow">Заказать консультацию <span>Я согласен на
                                обработку персональных данных</span></button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>
                </form>

            </div>
        </div>

        <!--============================================== text modal 1 -->
        <div class="si-modal text-modal text-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title align-center">
                    Согласие на обработку персональных данных
                </div>

                <div class="modal-text-block">
                    <p>
                        Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём
                        интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных
                        НАЗВАНИЕ КОМПАНИИ,
                        зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:
                        АДРЕС КОМПАНИИ
                        (далее по&nbsp;тексту&nbsp;- Оператор).
                    </p>

                    <p>
                        Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому
                        или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.
                    </p>

                    <p>
                        Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:
                    </p>

                    <ul class="marked">
                        <li>
                            Имя;
                        </li>
                        <li>
                            Телефон;
                        </li>
                        <li>
                            E-mail;
                        </li>
                        <li>
                            Комментарий.
                        </li>
                    </ul>

                    <p>
                        Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными
                        данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких
                        средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),
                        использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,
                        а&nbsp;также осуществление любых иных действий, предусмотренных действующим
                        законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными
                        способами.
                    </p>

                    <p>
                        Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)
                        ТРЕТЬИ ЛИЦА
                        для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:
                    </p>

                    <ul class="marked">
                        <li>
                            предоставление мне услуг/работ;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;
                        </li>
                        <li>
                            подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,
                            о&nbsp;мероприятиях/товарах/услугах/работах Оператора.
                        </li>
                    </ul>

                    <p>
                        Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего
                        уведомления на&nbsp;электронный адрес
                        <a href="mailto:">ЕМЕЙЛ</a>.
                        В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе
                        продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,
                        указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10
                        и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<script>
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>

<!-- Google Recaptcha -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
<!--<script type="text/javascript">-->
<!--    var recaptcha1,-->
<!--        recaptcha2,-->
<!--        recaptcha3;-->
<!--    var onloadCallback = function () {-->
<!--        recaptcha = grecaptcha.render('g-recaptcha', {-->
<!--            'sitekey': ''-->
<!--        });-->
<!--    };-->
<!--</script>-->

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/scrollbar.js"></script>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->
</body>
</html>