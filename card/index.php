<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Save the Date</title>
</head>
<body>
<!-- Body Start justify-content-center align-items-center  -->

<div class="flower mvh-100">
    <div class="container d-flex align-items-center justify-content-center mvh-100">
        <div class="container text-center main-section">
            <div class="row">
                <div class="col">
                    <h1>
                        Save the date
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-4 text-right">
                    <h5>
                        Июль
                    </h5>
                </div>
                <div class="col-auto bl br"">
                    <h3>
                        26
                    </h3>
                </div>
                <div class="col-4 text-left">
                    <h5>
                        2019
                    </h5>
                </div>
            </div>
            <div class="row" style="margin: 1% 0;">
                <div class="col">
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
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-auto text-right p-0">
                    <h3>
                        Ярослава
                    </h3>
                </div>
                <div class="col-auto">
                    и
                </div>
                <div class="col-auto text-left p-0">
                    <h3>
                        Марии
                    </h3>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-md-5 bt bb"">
                    <p style="margin-top: 1rem">
                        Пожалуйста, до 6 мая сообщите нам, сможете ли Вы разделить с нами этот особенный день! Мы очень вас ждем:)
                    </p>
                    <p style="font-size: 0.75rem;">
                        P.S. Обратите внимание, что это пятница.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col" style="font-size: 0.75rem; margin-top: 1%">
                    Скоро пришлем более подробную информацию
                </div>
            </div>
            <i class="fas fa-angle-down fa-3x" style="position:absolute; width: 100%; left: 0; top: 90%"></i>
        </div>
    </div>

    <div class="container text-center footer">
        <div class="row justify-content-md-center align-items-center">
            <div class="col col-md-5">
                <p style="margin-top: 1rem;">
                    Мы будем счастливы, если у вас получится приехать. Но если вдруг вы не можете, пожалуйста, сообщите заранее. Это правда очень-очень важно ❤️
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>