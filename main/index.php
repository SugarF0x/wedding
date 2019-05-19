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
</head>
<body>
    <header class="container">
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
                [дата]
            </div>

            <div class="col-12">
                [адрес]
            </div>

            <div class="col-12">
                <small>
                    Пожалуйста, не опаздывайте у нас есть для вас небольшой сюрприз в начале праздника :)
                </small>
            </div>
        </div>
    </header>
</body>
</html>