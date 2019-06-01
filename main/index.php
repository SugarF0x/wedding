<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="description" content="Maria's wedding landing page">
    <meta name="author" content="Sugar_F0x">
    <!-- <link rel="icon" href="img/sgfx.png"> -->
    <title>Wedding Main</title>

    <link rel="stylesheet" href="styles/style.css">
    <!--
    <link rel="stylesheet" href="styles/timeline.css">
    -->

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          crossorigin="anonymous">
</head>
<body>
    <section class="container" id="head">
        <div class="row text-center h-100 align-items-center justify-content-center">
            <div class="col-12">
                <p>
                    <?php
                    $text = '';
                    if ($_GET['name'] !== null) {
                        $text = '<h5>' . $_GET['name'] . '</h5>';
                    }

                    if ($_GET['many'] == 'true') {
                        $text = $text . 'Приглашаем вас на свадьбу';
                    } else {
                        $text = $text . 'Приглашаем тебя на свадьбу';
                    }

                    echo $text;
                    ?>
                </p>
            </div>

            <div class="col-12">
                <h6 class="name">
                    Тузовой Марии
                </h6>

                <h3 id="name__breaker">
                    &
                </h3>

                <h6 class="name">
                    Еремеева Ярослава
                </h6>
            </div>

            <div class="col-12">
                <span>Июль</span>
                <span>26</span>
                <span>2019</span>
            </div>

            <div class="col-12">
                [адрес]
            </div>

            <div class="col-12">
                <small>
                    Пожалуйста, не опаздывайте, у нас есть для вас небольшой сюрприз в начале праздника :)
                </small>
            </div>
        </div>
    </section>
    <div class="bumper"></div>

    <section class="container" id="get-to">
        <div class="row text-center h-100 align-items-baseline justify-content-center">
            <div class="col-12">
                <h2>Как добраться?</h2>
            </div>

            <div class="col-sm-4 mt-3 mb-3">
                <div class="col-12">
                    <i class="fas fa-car"></i>
                </div>
                <div class="col-12">
                    <p class="mt-3 border-bottom border-top border-dark">
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
                    <p class="mt-3 border-bottom border-top border-dark">
                        Добраться можно и общественным транспортом. Оптимальный вариант - электричкой с Ленинградского вокзала до станции Сходня, а далее - на такси (150 рублей на Убере или Яндексе). Берите наряды с собой, на нашей площадке можно будет комфортно переодеться!
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
                    <p class="mt-3 border-bottom border-top border-dark">
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
                            <object type="image/svg+xml" data="src/svg/cheers.svg" width="100%" height="100%"></object>
                            <p>Cбор гостей</p>
                        </div>
                        <time>3:00</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/surprise.svg" width="100%" height="100%"></object>
                            <p>Сюрприз</p>
                        </div>
                        <time>3:30</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/ring.svg" width="100%" height="100%"></object>
                            <p>Церемония</p>
                        </div>
                        <time>4:00</time>
                    </li>
                    <li>
                        <div class="text">
                            <object type="image/svg+xml" data="src/svg/dinner.svg" width="100%" height="100%"></object>
                            <p>Начало банкета</p>
                        </div>
                        <time>5:00</time>
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
                    <object type="image/svg+xml" data="src/svg/suit.svg" width="100%" height="100%"></object>
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
                <div class="col-12 col-sm-4">
                    <object type="image/svg+xml" data="src/svg/dress.svg" width="100%" height="100%"></object>
                </div>
                <div class="col-12 col-sm-8">
                    <ul>
                        <li>
                            Платье или сарафан не выше колена с пастельных тонах
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
            
            <div class="col-12">
                <img class='palette' src="https://via.placeholder.com/250x100/C5C6CA/FFFFFF?text=ПАЛИТРА" alt="pallet">
            </div>
        </div>
    </section>
    <div class="bumper"></div>

    <section class="container" id="gift">
        <div class="row text-center align-items-center justify-content-center">
            <div class="col">
                <h2>
                    Что подарить
                </h2>

                <div class="col-sm-6">
                    <!-- money -->
                </div>
                <div class="col-sm-6">
                    <p>
                        Деньги
                    </p>
                </div>

                <div class="col-sm-6">
                    <!-- smile -->
                </div>
                <div class="col-sm-6">
                    <p>
                        Хорошее настроение
                    </p>
                </div>
                <div class="col-sm-6">
                    <!-- sing -->
                </div>
                <div class="col-sm-6">
                    <p>
                        Творческие подарки
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
                <div class="col-12">
                    <h5>
                        8 800 555 35 35
                    </h5>
                    <p>
                        Проще позвонить, чем у кого-то занимать
                    </p>
                </div>
                <div class="col-12">
                    <h5>
                        112
                    </h5>
                    <p>
                        Доставка проблем бесплатно
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>