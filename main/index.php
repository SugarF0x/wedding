<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Maria's wedding landing page">
    <meta name="author" content="Sugar_F0x">
    <!-- <link rel="icon" href="img/sgfx.png"> -->
    <title>Wedding Main</title>

    <link rel="stylesheet" href="styles/style.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-reboot.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant+Infant&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i&display=swap&subset=cyrillic-ext">
</head>
<body>
    <section class="container" id="head">
        <div class="row text-center h-100 align-items-center justify-content-center">
            <div class="col-12">
                <p id="head__greet">
                    <?php
                    if ($_GET['name'] != null) {

                        $text = '';

                        if ($_GET['type'] == 'he') {
                            $text = $text . 'Дорогой ';
                        } elseif ($_GET['type'] == 'she') {
                            $text = $text . 'Дорогая ';
                        } elseif ($_GET['type'] == 'many') {
                            $text = $text . 'Дорогие ';
                        }
                        $text = $text . '<span id="head__greet-name">' . $_GET['name'] . '</span>' . ', приглашаем ';

                        if ($_GET['resp'] == 'true') {
                            $text = $text . 'Вас ';
                        } elseif ($_GET['type'] == 'he' || $_GET['type'] == 'she') {
                            $text = $text . 'тебя ';
                        } elseif ($_GET['type'] == 'many') {
                            $text = $text . 'вас ';
                        }
                        $text = $text . 'на свадьбу';

                        echo $text;
                    } else {
                        echo 'Приглашаем <b>Вас</b> на свадьбу';
                    }
                    ?>
                </p>
            </div>

            <div class="col-12" id="head__names">
                <h4 class="name">
                    Ярослава
                </h4>

                <h3 id="name__breaker">
                    &
                </h3>

                <h4 class="name">
                    Марии
                </h4>
            </div>

            <div class="col-12" id="head__date">
                <div>пт</div>
                <div id="head__date-mid">
                    <p><i>июль</i></p>
                    <p style="font-size: 2.5rem;">26</p>
                    <p><i>2019</i></p>
                </div>
                <div id="head__date-time">
                    <span>15</span>
                    <span><u>00</u></span>
                </div>
            </div>

            <div class="col-12" id="head__place">
                Отель Art Village
            </div>

            <div class="col-12" id="head__footer">
                <p>
                    Пожалуйста, не опаздывайте, у нас есть для вас небольшой сюрприз в начале праздника :)
                </p>
            </div>
        </div>
    </section>
    <div class="bumper"></div>

    <section class="container" id="get-to">
        <div class="row text-center h-100 align-items-baseline justify-content-center">
            <div class="col-12">
                <h2>Как добраться?</h2>

                <h4>Рябиновая ул., 1А, д. Голиково</h4>
            </div>

            <div class="col-sm-4 mt-3 mb-3">
                <div class="col-12">
                    <i class="fas fa-car"></i>
                </div>
                <div class="col-12">
                    <p class="mt-3 border-bottom border-top border-dark get-to__text">
                        Не забудьте вовремя съехать с Ленинградского шоссе на Новосходненское у МЕГА Химки, а подъезжая к Сходне - налево перед магазином “Лента”. Не пугайтесь не очень симпатичной дороги поначалу - вы уже совсем близко к цели. Продолжайте движение по ул.Усково и скоро вы на месте!
                    </p>
                </div>
                <div class="col-12">
                    <small>
                        Время в пути ~1,5 часа
                    </small>
                </div>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
                <div class="col-12">
                    <i class="fas fa-train"></i>
                </div>
                <div class="col-12">
                    <p class="mt-3 border-bottom border-top border-dark get-to__text">
                        Добраться можно и общественным транспортом. Оптимальный вариант - электричкой с Ленинградского вокзала до станции Сходня, а далее - на такси (150 рублей на Убере или Яндексе).
                    </p>
                </div>
                <div class="col-12">
                    <small>
                        Время в пути ~40 мин на поезде, 15 мин на такси
                    </small>
                </div>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
                <div class="col-12">
                    <i class="fas fa-taxi"></i>
                </div>
                <div class="col-12">
                    <p class="mt-3 border-bottom border-top border-dark get-to__text">
                        Поездка на такси из центра Москвы или Королёва обойдётся примерно в 800 рублей на машине эконом-класса или 1100 рублей на авто класса “комфорт”. Выезжайте компанией - это выгоднее и веселее!
                    </p>
                </div>
                <div class="col-12">
                    <small>
                        Время в пути ~1,5 часа
                    </small>
                </div>
            </div>

            <div class="col-12">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6807d9cf881c553217d24db50383313597fe4e82bd11079d30f2e0c54aa8ef18&amp;source=constructor" width="100%" height="350" frameborder="0" style="background-color: lightgray"></iframe>
            </div>

            <div class="col-12">
                <h4>
                    Обращаем ваше внимание на беспощадный пятничный поток дачников!
                </h4>
                <p>
                    В зависимости от вашего района, дорога может занять от часа до двух, и чем позже вы выезжаете, тем дольше.
                </p>
                <p>
                    Не бойтесь прибыть раньше запланированного, скучно не будет ;)
                </p>
                <p>
                    Для комфортного возвращения домой на 23:30 запланирован трансфер в Москву.
                </p>
                <p>
                    Если же вы желаете остаться на ночь в Art Village, предупредите нас заранее - номер нужно забронировать.
                </p>
            </div>
        </div>
    </section>
    <div class="bumper"></div>

    <section class="container" id="plan">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h2 class="text-center mb-5">План дня</h2>

                <div class="plan__bumper"></div>

                <ul>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/cheers.svg" width="80%" height="80%"></object>
                            <p>Cбор гостей</p>
                        </div>
                        <time>15:00</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/surprise.svg" width="100%" height="100%"></object>
                            <p>Сюрприз</p>
                        </div>
                        <time>15:30</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/ring.svg" width="100%" height="100%"></object>
                            <p>Церемония</p>
                        </div>
                        <time>16:00</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/dinner.svg" width="100%" height="100%"></object>
                            <p>Начало банкета</p>
                        </div>
                        <time>17:00</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/cake.svg" width="100%" height="100%"></object>
                            <p>Сладкий стол</p>
                        </div>
                        <time>21:00</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/disco-ball.svg" width="100%" height="100%"></object>
                            <p>Танцы</p>
                        </div>
                        <time>21:30</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/car.svg" width="100%" height="100%"></object>
                            <p>Трансфер</p>
                        </div>
                        <time>23:30</time>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="bumper"></div>

    <section class="container" id="wear">
        <div class="row text-center align-items-center justify-content-center">
            <div class="col-12">
                <h2>
                    Что надеть
                </h2>
                <small>
                    SMART CASUAL
                </small>
            </div>

            <div class="col-12">
                <p>
                    Концепция: наш праздник пройдет в стиле <b>Eco</b>. Это про природу, очаровательную, элегантную простоту, гармонию и комфорт.
                </p>
                <p>
                    Мы старались сделать праздник красивым и будем рады, если вы поддержите нас своими образами:)
                </p>
            </div>

            <div class="col-sm-6 d-sm-inline-flex">
                <div class="col-12 col-sm-4">
                    <object class="wear__suit" type="image/svg+xml" data="src/svg/suit.svg" width="100%" height="100%"></object>
                </div>
                <div class="col-12 col-sm-8">
                    <ul>
                        <li>
                            Однотонная рубашка и брюки
                        </li>
                        <li>
                            Можно без галстука и пиджака
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 d-sm-inline-flex">
                <div class="col-12 position-relative col-sm-4">
                    <object class="wear__dress" type="image/svg+xml" data="src/svg/dress.svg" width="100%" height="100%"></object>
                </div>
                <div class="col-12 col-sm-8">
                    <ul>
                        <li>
                            Платье или сарафан не выше колена в пастельных тонах
                        </li>
                        <li>
                            Каблук не обязателен
                        </li>
                        <li>
                            Захватите с собой балетки. У нас будет свой отдельный гардероб, где их очень удобно оставить на всякий случай
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="bumper"></div>

    <section class="container" id="gift">
        <div class="row text-center align-items-center justify-content-center">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-5">
                        Что подарить
                    </h2>
                </div>

                <div class="col-6 col-sm-4 text-right gift__1">
                    <object type="image/svg+xml" data="src/svg/money.svg" width="100%" height="100%"></object>
                </div>
                <div class="col-6 col-sm-4 gift__2">
                    <p class="text-left">Деньги</p>
                </div>

                <div class="col-6 col-sm-4 text-right gift__1">
                    <object type="image/svg+xml" data="src/svg/smile.svg" width="100%" height="100%"></object>
                </div>
                <div class="col-6 col-sm-4 gift__2">
                    <p class="text-left">Хорошее настроение</p>
                </div>

                <div class="col-6 col-sm-4 text-right gift__1">
                    <object type="image/svg+xml" data="src/svg/singer.svg" width="100%" height="100%"></object>
                </div>
                <div class="col-6 col-sm-4 gift__2">
                    <p class="text-left">Творческие подарки *</p>
                </div>

                <!-- bad -->

                <div class="col-3 gift__bad">
                    <div class="col-12 cross">
                        <object type="image/svg+xml" data="src/svg/teapot.svg" width="100%" height="100%"></object>
                    </div>
                    <p>Сервиз</p>
                </div>
                <div class="col-3 gift__bad">
                    <div class="col-12 cross">
                        <object type="image/svg+xml" data="src/svg/towel.svg" width="100%" height="100%"></object>
                    </div>
                    <p>Полотенце/<br>Постельное бельё</p>
                </div>
                <div class="col-3 gift__bad">
                    <div class="col-12 cross">
                        <object type="image/svg+xml" data="src/svg/decanter.svg" width="100%" height="100%"></object>
                    </div>
                    <p>Декантер или любые другие навороченные штуки</p>
                </div>
                <div class="col-3 gift__bad">
                    <div class="col-12 cross">
                        <object type="image/svg+xml" data="src/svg/frame.svg" width="100%" height="100%"></object>
                    </div>
                    <p>Декор</p>
                </div>

                <div class="col-12 mb-3">
                    <p class="m-3" style="font-size: 0.75rem; text-align: justify;">
                        * Особая благодарность тем смельчакам, кто захочет поучаствовать в нашей программе. Мы знаем, как вы талантливы, и нам кажется, что атмосфера дружеского капустника - это именно то, что нужно нашему празднику! Если захотите украсить наш вечер своим выступлением, напишите нам.
                    </p>
                </div>

                <!-- Slide 10 -->

                <div class="col-12 col-sm-6 order-3 gift__10">
                    <object type="image/svg+xml" data="src/svg/gift.svg"></object>
                </div>
                <div class="col-12 col-sm-6 order-3 gift__10">
                    <p class="m-3">
                        P.S. Если вы все же очень хотите подарить что-то помимо вклада в бюджет нашей молодой семьи, то мы будем рады
                        небольшим подарочкам. Особенно сделанным своими руками!
                    </p>
                </div>
                <div class="col-12 col-sm-6 order-3 gift__10">
                    <object type="image/svg+xml" data="src/svg/plant.svg" width="100%" height="100%"></object>
                </div>
                <div class="col-12 col-sm-6 order-3 gift__10">
                    <p class="m-3">
                        Пожалуйста, не дарите нам срезанные цветы. Если вам кажется, что праздник без них не праздник, то мы будем очень рады получить от вас растение в горшке. Мы их горячо любим и с большой теплотой будем вспоминать о вас, глядя на ваш подарок еще долгие годы:)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="bumper"></div>

    <section class='container' id="contact">
        <div class="row text-center align-items-center justify-content-center">
            <div class="col-12">
                <h2>
                    С кем связаться?
                </h2>
                <h4>
                    (помимо нас)
                </h4>
            </div>

            <div class="col-sm-6">
                <i class="fas fa-phone"></i>
            </div>
            <div class="col-sm-6">
                <div class="col-12">
                    <h5>
                        +7 910 417-10-01
                    </h5>
                    <p>
                        Яна, наш свадебный организатор
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>