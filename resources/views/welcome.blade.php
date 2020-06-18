<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Easypick.kz</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Digital Marketing Agency">
    <meta name="author" content="Aslan Aitkulov">
{{--    <meta http-equiv="refresh" content="30">--}}
    <meta name="keywords" content="разработка сайт в Актобе">
    <META NAME="geo.position" CONTENT="50° 16' 60.00; 57° 09' 60.00">
    <META NAME="geo.placename" CONTENT="Kazakhstan, Aktobe">
    <META NAME="geo.region" CONTENT="ISO 3166-2:KZ">
    <meta name="robots" content="noindex" />
    <link rel="icon" href=" assets/images/logo.jpg">

    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="{{ asset('assets/common-css/bootstrap.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/common-css/ionicons.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/common-css/jquery.classycountdown.css') }}" />

    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>
<body>

<div class="main-area">
    <div class="container full-height position-static">

        <section class="left-section full-height">

            <a class="logo" href="{{route('index')}}"><img src="{{ asset('assets/images/name.jpg') }}" alt="Logo" style="width: 210px;height: 30px;"></a>

            <div class="display-table">
                <div class="display-table-cell">
                    <div class="main-content">
                        <h1 class="title"><b>В разработке</b></h1>
                        <p>Наш веб-сайт в настоящее время проходит плановое техническое обслуживание. Мы должны вернуться в ближайшее время. Спасибо за терпеливость.</p>

                        <div class="email-input-area">
                            <form method="post" action="{{route('email')}}">
                                {{ csrf_field() }}
                                <input class="email-input" name="email" type="email" placeholder="Введите адрес электронной почты"/>
                                <button class="submit-btn" name="submit" type="submit"><b>Уведомить нас</b></button>
                            </form>
                        </div><!-- email-input-area -->
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <p class="post-desc">Зарегистрируйтесь сейчас, чтобы получить раннее уведомление о нашей дате запуска!</p>
                    </div><!-- main-content -->
                </div><!-- display-table-cell -->
            </div><!-- display-table -->

            <ul class="footer-icons">
                <li>Оставайтесь на связи:</li>
                <li><a href="https://www.instagram.com/easypick.kz/?hl=ru"><img src="{{ asset('assets/images/instagram.jpg') }}" alt="instagram" style="width:30px;height:20px;padding-right: 10px;"></a></li>
                <li><a href="mailto:easypick.kz@gmail.com"><img src="{{ asset('assets/images/email.jpg') }}" alt="email" style="width: 35px;height: 20px;padding-right: 10px;"></a></li>
                <li><a href="tg://resolve?domain=Aslan050100>" target="_blank"><img src="{{ asset('assets/images/telegram.jpg') }}" alt="telegram" style="width: 30px;height: 20px;padding-right: 10px;"></a></li>
                <li><a href="https://wa.me/77007226769?text=Здравствуйте"><img src="{{ asset('assets/images/whatsapp.jpg') }}" alt="whatsapp" style="width: 22px;height: 20px;"></a></li>
            </ul>

        </section><!-- left-section -->

        <section class="right-section" style="background-image: url(assets/images/logo2.jpg); background-repeat: no-repeat;">


        </section><!-- right-section -->

    </div><!-- container -->
</div><!-- main-area -->

<!-- SCIPTS -->

<script src="{{ asset('assets/common-js/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('assets/common-js/tether.min.js') }}"></script>

<script src="{{ asset('assets/common-js/bootstrap.js') }}"></script>

<script src="{{ asset('assets/common-js/jquery.classycountdown.js') }}"></script>

<script src="{{ asset('assets/common-js/jquery.knob.js') }}"></script>

<script src="{{ asset('assets/common-js/jquery.throttle.js') }}"></script>

<script src="{{ asset('assets/common-js/scripts.js') }}"></script>

</body>
</html>
