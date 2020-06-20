<!DOCTYPE HTML>
<html lang="en">
<head>
    {!! SEO::generate() !!}
    <meta name="google-site-verification" content="9kN7AswAXoHhlhop3awUwxxBYHZvMCyVBJpQ0ffyuxc" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="https://easypick.kz/assets/images/logo.jpg" />

</head>
<body>

<div class="main-area">
    <div class="container full-height position-static">

        <section class="left-section full-height">
            <form method="post" action="{{route('req')}}">
                {{ csrf_field() }}
                <input class="email-input" name="name" type="text" placeholder="Введите имя"/>
                <input class="email-input" name="phone" type="text" placeholder="Введите телефон"/>
                <button class="submit-btn" name="submit" type="submit"><b>Уведомить нас</b></button>
            </form>


        </section><!-- left-section -->

    </div><!-- container -->
</div><!-- main-area -->


</body>
</html>
