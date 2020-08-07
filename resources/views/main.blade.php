<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ asset('assets/css/system.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}" type="text/css" />



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/hamburgers.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mmenu.all.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/personal.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/maskedinput.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}" defer></script>




</head>


<body>
<header id="home">

    <div class="black_back">

    </div>
    <div id="header">
        <nav>
            <div class="logo" id="logo">
                <a href="#"><img src="{{ asset('assets/images/logo123.png') }}" style="width: 80%;height: 90%;"></a>
            </div>
            <div class="links">
                <div>
                    <a href="#home" data-target="anchor">Главная</a>
                </div>
                <div>
                    <a href="#uslugi" data-target="anchor">Услуги</a>
                </div>
                <div>
                    <a href="#price" data-target="anchor">Прайс</a>
                </div>
                <div>
                    <a href="#portfolio" data-target="anchor">Портфолио</a>
                </div>
                <div class="the last">
                    <a href="#contact" data-target="anchor">Контакты</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="section_header">
        <h1>
            Digital<br> Marketing<br>Agency<br>
        </h1>
        <p>
            EasyPick-мы помогаем бизнесу во всем  ️<br>мире находить клиентов быстрее™.
        </p>
        <div>
            <form class="first_form">
                <a href="#contact" data-target="anchor"><button id="ordersite" type="submit" value="Order">Заказать сайт</button></a>

                <div class="obertka">
                    <a href="#contact" data-target="anchor"><button id="contacts" type="submit" value="Contacts">Контакты</button></a>
                </div>
            </form>
        </div>
    </div>
</header>

<div class="section2" id="uslugi">
    <div class="container">
        <div class="zabort">
            <p class="uptoh2">
                Выполняем любые ваши задачи и пожелания
            </p>
            <h2>
                Надежные услуги цифрового маркетинга
            </h2>
            <div class="uslugi">
                <div class="leftside">

                    <div class="inner">
                        <div class="inner_leftside">
                            <img src="{{ asset('assets/images/7.png') }}">
                        </div>
                        <div class="inner_rightside">
                            <br>
                            <h3>Разработка сайтов</h3>
                            <br/>
                            <p>Создание Интернет-магазина</p>
                                <p>Создание сайта Каталог</p>
                            <p>Создание сайта Визитка</p>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="inner_leftside">
                            <img src="{{ asset('assets/images/8.png') }}">
                        </div>
                        <div class="inner_rightside">
                            <br>
                            <h3>Продвижение сайтов</h3>
                            <br/>
                            <p>Контекстная Реклама</p>
                            <p>SEO оптимизация</p>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="inner_leftside">
                            <img src="{{ asset('assets/images/9.png') }}">
                        </div>
                        <div class="inner_rightside">
                            <br>
                            <h3>Графический дизайн</h3>
                            <br/>
                            <p>Создание логотипа</p>
                            <p>Изготовление визиток</p>
                            <p>Изготовление банера</p>
                        </div>
                    </div>
                    <div class="inner" id="innerlast">
                        <div class="inner_leftside">
                            <img src="{{ asset('assets/images/10.png') }}">
                        </div>
                        <div class="inner_rightside">
                            <br>
                            <h3>СММ продвижение</h3>
                            <br/>
                            <p>Введение аккаунта</p>
                            <p>Таргетинг Facebook,Instagram</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>








<div class="section3" >
    <div class="container">
        <h2 class="white" id="price">Цены на наши услуги</h2>
        <div class="containers">
            <div class="prices">
                <div class="uptoh3">
                    <img src="{{ asset('assets/images/1.png') }}">
                </div>
                <h3>
                    Landing Page
                </h3>
                <p>
                    Одностраничный сайт вашего продукта с вашими контактами и функцией заполнения формы заявок.
                </p>
                <div class="price_oberka">
                    <span class="price">от 60000 ₸</span>
                </div>
            </div>
            <div class="prices">
                <div class="uptoh3">
                    <img src="{{ asset('assets/images/2.png') }}">
                </div>
                <h3 >
                    Сайт-визитка
                </h3>
                <p>
                    Фирменная  либо персональная визитка в интернете с вашими контактами и ссылками.
                </p>
                <div class="price_oberka">
                    <span class="price">от 70000 ₸</span>
                </div>
            </div><div class="prices">
                <div class="uptoh3">
                    <img src="{{ asset('assets/images/5.png') }}">
                </div>
                <h3 >
                    Сайт-каталог
                </h3>
                <p>
                    Сайт со списком вашей продукции и/или услуг с подробностями.
                </p>
                <div class="price_oberka">
                    <span class="price">от 80000 ₸</span>
                </div>
            </div><div class="prices">
                <div class="uptoh3">
                    <img src="{{ asset('assets/images/3.png') }}">
                </div>
                <h3 >
                    Интернет
                    магазин
                </h3>
                <p>
                    Торговая площадка вашего бизнеса в интернете.
                </p>
                <div class="price_oberka">
                    <span class="price">от 100000 ₸</span>
                </div>
            </div><div class="prices">
                <div class="uptoh3">
                    <img src="{{ asset('assets/images/4.png') }}">
                </div>
                <h3 >
                    Корпоративный
                    сайт
                </h3>
                <p>
                    Интернет портал для вашего бизнеса с подробностями о компании.


                </p>
                <div class="price_oberka">
                    <span class="price">от 100000 ₸</span>
                </div>
            </div>
            <div class="prices last">
                <div class="uptoh3">
                    <img src="{{ asset('assets/images/6.png') }}">
                </div>
                <h3 >
                    Продвижение
                    сайта
                </h3>
                <p>
                    SEO продвижение вашего сайта в поисковых сетях, таких как Google, Yandex, Mail.ru.
                </p>
                <div class="price_oberka">
                    <span class="price">от 25000 ₸</span>
                </div>
            </div>

        </div>

    </div>

</div>







<div class="section4">
    <div class="container">
        <h2>
            Почему выбирать нас?
        </h2>
        <div class="big_obertka">
            <div class="graphic_left">
                <div class="graph_leftside">
                    <img src="{{ asset('assets/images/14.png') }}" alt="circle">
                </div>
                <div class="graph_rightside">
                    <h4>Внимание к деталям</h4>
                    <p>
                        Именно наше внимание к мелочам, составлению графиков и острому управлению
                        проектами выделяет нас на фоне остальных. Мы внимательно следим за календарем и вашим бюджетом.
                    </p>
                </div>
            </div>
            <div class="graphic_right">
                <div class="graph_leftside">
                    <h4>Доступность 24/7</h4>
                    <p>
                        Мы стремимся постоянно поддерживать наших клиентов довольными, и мы готовы круглосуточно предоставить
                        вам полную поддержку, независимо от того, когда вам это нужно.
                    </p>
                </div>
                <div class="graph_rightside">
                    <img src="{{ asset('assets/images/13.png') }}" alt="circle">
                </div>
            </div>
            <div class="graphic_left">
                <div class="graph_leftside">
                    <img src="{{ asset('assets/images/12.png') }}" alt="circle">
                </div>
                <div class="graph_rightside">
                    <h4>Доступные цены</h4>
                    <p>
                        Наши цены конкурентоспособны и справедливы. Там нет никаких неожиданных счетов.
                        Любые непредвиденные или дополнительные расходы должны быть предварительно одобрены вами.
                    </p>
                </div>
            </div>
            <div class="graphic_right last">
                <div class="graph_leftside">
                    <h4>100% гарантия соответствия</h4>
                    <p>
                        Мы стремимся к установлению долгосрочных партнерских отношений с нашими клиентами, и единственный
                        способ сделать это - убедиться, что они на 100% удовлетворены нашими услугами.
                    </p>
                </div>
                <div class="graph_rightside">
                    <img src="{{ asset('assets/images/11.png') }}" alt="circle">
                </div>
            </div>
        </div>

    </div>

</div>






<div class="section5" id="portfolio">
    <div class="container">
        <h2 class="white">Портфолио</h2>
        <div class="portfolio">
            <div class="containers_three">

                <div class="swiper-container swiper-container2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="contain first">
                                <div class="works">
                                    <img src="{{ asset('assets/images/easypick.jpg') }}">
                                </div>
                                <div class="nevidno">
                                    <h3>
                                        EASY PICK
                                    </h3>

                                    <p>
                                        Срок разработки: 3 недели
                                    </p>
                                    <div class="work_link" >
                                        <a href="">Посмотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="contain first">
                                <div class="works">
                                    <img src="{{ asset('assets/images/easypick.jpg') }}">
                                </div>
                                <div class="nevidno">
                                    <h3>
                                        EASY PICK
                                    </h3>

                                    <p>
                                        Срок разработки: 3 недели
                                    </p>
                                    <div class="work_link" >
                                        <a href="">Посмотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="contain first">
                                <div class="works">
                                    <img src="{{ asset('assets/images/easypick.jpg') }}">
                                </div>
                                <div class="nevidno">
                                    <h3>
                                        EASY PICK
                                    </h3>

                                    <p>
                                        Срок разработки: 3 недели
                                    </p>
                                    <div class="work_link" >
                                        <a href="">Посмотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="contain first">
                                <div class="works">
                                    <img src="{{ asset('assets/images/easypick.jpg') }}">
                                </div>
                                <div class="nevidno">
                                    <h3>
                                        EASY PICK
                                    </h3>

                                    <p>
                                        Срок разработки: 3 недели
                                    </p>
                                    <div class="work_link" >
                                        <a href="">Посмотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="contain first">
                                <div class="works">
                                    <img src="{{ asset('assets/images/easypick.jpg') }}">
                                </div>
                                <div class="nevidno">
                                    <h3>
                                        EASY PICK
                                    </h3>

                                    <p>
                                        Срок разработки: 3 недели
                                    </p>
                                    <div class="work_link" >
                                        <a href="">Посмотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="contain first">
                                <div class="works">
                                    <img src="{{ asset('assets/images/easypick.jpg') }}">
                                </div>
                                <div class="nevidno">
                                    <h3>
                                        EASY PICK
                                    </h3>

                                    <p>
                                        Срок разработки: 3 недели
                                    </p>
                                    <div class="work_link" >
                                        <a href="">Посмотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="contain first">
                                <div class="works">
                                    <img src="{{ asset('assets/images/easypick.jpg') }}">
                                </div>
                                <div class="nevidno">
                                    <h3>
                                        EASY PICK
                                    </h3>

                                    <p>
                                        Срок разработки: 3 недели
                                    </p>
                                    <div class="work_link" >
                                        <a href="">Посмотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->

                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>


</div>




{{--<div class="section6">--}}
{{--    <div class="container">--}}
{{--        <h2>--}}
{{--            Наша Команда--}}
{{--        </h2>--}}

{{--        <div class="komanda">--}}
{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/aslan.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        АСЛАН АЙТКУЛОВ--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        РАЗРАБОТЧИК--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        Люди научились использовать технологии, но разучились говорить с людьми…--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/aziz.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        АЗИЗ НАГМЕТУЛЛИН--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        Дизайнер--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        Есть три ответа на результат дизайна – да, нет и НИЧЕГО СЕБЕ! «Ничего себе» – это то, к чему надо стремиться--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/aibol.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        АЙБОЛ СИСЕНОВ--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        Менеджер--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        Менеджер: человек, принимающий быстрые решения — и иногда верные.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/aslan2.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        КУАНЫШ ЖАЙШЫЛЫК--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        Дизайнер--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        Именно через ошибки мы можем расти. Вы должны бать плохими для того, чтобы стать хорошими.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/dias.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        ДИАС КУЖАКУЛОВ--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        СММ Менеджер--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        Это своего рода забава – делать невозможное.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/aslan3.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        АЛИХАН МУРАТУЛЫ--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        Разработчик--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        Если отладка — процесс удаления ошибок, то программирование должно быть процессом их внесения.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/alibi.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        АЛИБИ МУХИТУЛЫ--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        Разработчик--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        НЕ БОЙСЯ МЕДЛИТЬ, БОЙСЯ ОСТАНОВИТЬСЯ--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="persona">--}}
{{--                <img src="{{ asset('assets/images/marzhan.jpg') }}">--}}
{{--                <div class="hokage">--}}
{{--                    <div class="name_surname">--}}
{{--                        МАРЖАН КАБИДОЛЛАЕВА--}}
{{--                    </div>--}}
{{--                    <div class="profession">--}}
{{--                        Дизайнер--}}
{{--                    </div>--}}
{{--                    <div class="quote">--}}
{{--                        ЧТО БЫ ТЫ НЕ ДЕЛАЛ — ТЫ ДЕЛАЕШЬ СЕБЯ.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}




{{--        </div>--}}
{{--    </div>--}}



{{--</div>--}}



{{--<div class="section7">--}}

{{--    <h2>--}}
{{--        Что говорят о нас?--}}
{{--    </h2>--}}
{{--    <p class="desc">--}}
{{--        Для полной чистоты отзывов про нас, вы можете поискать наших клиентов, связываться с ними и спросить всю информацию.--}}
{{--    </p>--}}
{{--    <div class="container">--}}
{{--        <div class="carousel">--}}
{{--            <div class="swiper-container">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="feedback_image">--}}
{{--                            <img src="{{ asset('assets/images/Ellipse2.png') }}">--}}
{{--                        </div>--}}
{{--                        <p class="name_of_comp">Название компании</p>--}}
{{--                        <p class="feedack_itself">Какой то отзыв отзыв отзыв отзыв отзыв  отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв...</p>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="feedback_image">--}}
{{--                            <img src="{{ asset('assets/images/Ellipse2.png') }}">--}}
{{--                        </div>--}}
{{--                        <p class="name_of_comp">Название компании</p>--}}
{{--                        <p class="feedack_itself">Какой то отзыв отзыв отзыв отзыв отзыв  отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв...</p>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="feedback_image">--}}
{{--                            <img src="{{ asset('assets/images/Ellipse2.png') }}">--}}
{{--                        </div>--}}
{{--                        <p class="name_of_comp">Название компании</p>--}}
{{--                        <p class="feedack_itself">Какой то отзыв отзыв отзыв отзыв отзыв  отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв...</p>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="feedback_image">--}}
{{--                            <img src="{{ asset('assets/images/Ellipse2.png') }}">--}}
{{--                        </div>--}}
{{--                        <p class="name_of_comp">Название компании</p>--}}
{{--                        <p class="feedack_itself">Какой то отзыв отзыв отзыв отзыв отзыв  отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв...</p>--}}
{{--                    </div>--}}

{{--                </div>--}}



{{--            </div>--}}
{{--            <div class="swiper-button-next"></div>--}}
{{--            <div class="swiper-button-prev"></div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}



<div class="section8">
    <div class="container">
        <div class="obratnaya_svyaz"  id="contact">



            <div class="svyaz_leftside">
                <h3>
                    Будьте на связи
                </h3>
                <p class="desc_add">
                    Есть вопросы, пожелания или предложения для сотрудничества? Свяжитесь с нами!
                </p>

                <div class="address_icons first">
                    <img src="{{ asset('assets/images/17.png') }}" alt="mail">
                    <p>
                        <a href="mailto:easypick.kz@gmail.com">easypick.kz@gmail.com</a>
                    </p>
                </div>

                <div class="address_icons">
                    <img src="{{ asset('assets/images/16.png') }}" alt="mail">
                    <p>
                        <a href="tel:+77007226769">+7 (700) 722-67-69</a>
                    </p>
                </div>

                <div class="address_icons">
                    <img src="{{ asset('assets/images/15.png') }}" alt="mail">
                    <p>
                        Казахстан, г. Актобе
                    </p>
                </div>
            </div>

            <form class="second_form" method="post" action="{{route('req')}}">
                {{ csrf_field() }}
                <h3>
                    Для обратной связи
                </h3>
                <div class="name_surname">
                    Имя
                </div>
                <input type="text" name="name" placeholder="Ваше Имя">
                <div class="name_surname">
                    Фамилия
                </div>
                <input type="tel" id="phone" name="phone" placeholder="Ваш Номер">
                <div class="name_surname">
                    Номер телефона
                </div>
                <input type="text" name="message" placeholder="Ваше Сообщение">
                <div class="obertka_button">
                    <div class="second_obertka">
                        <button type="submit" name="submit">Отправить</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

</div>

<footer>
    <div class="container">


        <div class="footer_logo">
            <div class="logo">
{{--                <a href="#"><img src="{{ asset('assets/images/easypick.jpg') }}" alt="logo"></a>--}}
            </div>
            <div class="social_links">
                <div class="instagram">
                    <a href="https://www.instagram.com/easypick.kz/?hl=ru" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M8.60005 0.799805C4.29692 0.799805 0.800049 4.29668 0.800049 8.5998V19.3998C0.800049 23.7029 4.29692 27.1998 8.60005 27.1998H19.4C23.7032 27.1998 27.2001 23.7029 27.2001 19.3998V8.5998C27.2001 4.29668 23.7032 0.799805 19.4 0.799805H8.60005ZM21.2001 5.5998C21.861 5.5998 22.4 6.13887 22.4 6.7998C22.4 7.46074 21.861 7.9998 21.2001 7.9998C20.5391 7.9998 20 7.46074 20 6.7998C20 6.13887 20.5391 5.5998 21.2001 5.5998ZM14 7.39981C17.6422 7.39981 20.6 10.3576 20.6 13.9998C20.6 17.642 17.6422 20.5998 14 20.5998C10.3579 20.5998 7.40005 17.642 7.40005 13.9998C7.40005 10.3576 10.3579 7.39981 14 7.39981ZM14 8.5998C11.0235 8.5998 8.60005 11.0232 8.60005 13.9998C8.60005 16.9764 11.0235 19.3998 14 19.3998C16.9766 19.3998 19.4 16.9764 19.4 13.9998C19.4 11.0232 16.9766 8.5998 14 8.5998Z" fill="white"/>
                    </svg></a>
                </div>
                <div class="twitter">
                    <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26 2.93555C25.043 3.36133 24.0156 3.64649 22.9375 3.77539C24.0391 3.11524 24.8828 2.06836 25.2812 0.822266C24.25 1.43555 23.1094 1.88086 21.8945 2.11914C20.9219 1.08399 19.5352 0.435547 18 0.435547C15.0547 0.435547 12.6641 2.82227 12.6641 5.76758C12.6641 6.18555 12.7148 6.5957 12.8047 6.98242C8.37109 6.75977 4.44141 4.63867 1.80859 1.4082C1.35156 2.19727 1.08984 3.11133 1.08984 4.0918C1.08984 5.94336 2.02734 7.57617 3.46094 8.5293C2.58594 8.50195 1.76172 8.26367 1.04297 7.86524C1.04297 7.88867 1.04297 7.9082 1.04297 7.93164C1.04297 10.5176 2.88281 12.6738 5.32422 13.1621C4.875 13.2832 4.40234 13.3496 3.91797 13.3496C3.57422 13.3496 3.23828 13.3145 2.91406 13.252C3.59375 15.373 5.5625 16.916 7.89844 16.959C6.07031 18.3887 3.77344 19.2402 1.27344 19.2402C0.84375 19.2402 0.417969 19.2168 0 19.166C2.35938 20.6816 5.16406 21.5645 8.17578 21.5645C17.9883 21.5645 23.3516 13.4355 23.3516 6.38477C23.3516 6.1543 23.3477 5.92383 23.3359 5.69727C24.3789 4.94336 25.2852 4.00586 26 2.93555Z" fill="white"/>
                    </svg>


                </div>
                <div class="facebook">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.8008 0H2.19922C1 0 0 1 0 2.19922V21.8008C0 23 1 24 2.19922 24H12V14H9V11H12V8C12 5.5 13 4 16 4H19V7H17.6992C16.8008 7 16 7.80078 16 8.69922V11H20L19.5 14H16V24H21.8008C23 24 24 23 24 21.8008V2.19922C24 1 23 0 21.8008 0Z" fill="white"/>
                    </svg>

                </div>
            </div>
        </div>
        <div class="footer_links">
            <div>
                <a href="#home" data-target="anchor">Главная</a>
            </div>
            <div>
                <a href="#uslugi" data-target="anchor">Услуги</a>
            </div>
            <div>
                <a href="#price" data-target="anchor">Прайс</a>
            </div>
            <div>
                <a href="#portfolio" data-target="anchor">Портфолио</a>
            </div>
            <div>
                <a href="#contact" data-target="anchor">Контакты</a>
            </div>
        </div>
        <div class="copyright">
            © 2020. All rigths reserved.
        </div>
    </div>
</footer>

</body>

</html>
