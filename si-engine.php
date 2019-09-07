<script>
    jQuery('form').each(function () {
        $(this).append('<textarea name="si_engine" class="si_engine" style="display:none"></textarea>');
    })
    jQuery('form').each(function () {
        $(this).append('<textarea name="si_utm" class="si_utm" style="display:none"></textarea>');
    })
</script>

<?php


if (isset($_GET['type'])) {

    $text = 'Статическая информация о заявке: <br />';

    switch ($_GET['type']) {

        case 'search':
            $text .= 'Клиент пришел с блока Директа, размещённого на странице Яндекса <br />';
            break;

        case 'default' :
            $text .= 'Клиент пришел с блока Директа, размещённого на странице другого сайта (' . $_GET['source'] . ')  <br />';
            break;


    }

    if (isset($_GET['block'])) {

        switch ($_GET['block']) {

            case 'premium' :
                $text .= 'Блок был показан в месте спец. размещения  <br />';
                break;

            case 'other' :
                $text .= 'Блок был показан внизу страницы поиска  <br />';
                break;

        }

    }


    switch ($_GET['pos']) {

        case '0' :

            break;

        case 'default' :
            $text .= 'Номер позиции в блоке: ' . $_GET['pos'] . '  <br />';
            break;

    }


    if (isset($_GET['added'])) {

        switch ($_GET['added']) {

            case 'yes' :
                $text .= 'Показ блока инициирован одной из дополнительной фраз  <br />';
                break;

            case 'default' :
                $text .= 'Показ блока инициирован одной из исходных фраз <br />';
                break;

        }

    }

    if (isset($_GET['key'])) {

        $text .= 'Текст ключевой фразы без минус-слов: ' . $_GET['key'] . ' <br />';

    }

    $si_direct = $text;

}


if (isset($si_direct)) {

    ?>

    <script>

        jQuery('.si_engine').val('<?php echo $si_direct; ?>');

    </script>

    <?php

}


if (!isset($si_direct)) {

    if (isset($_SERVER['HTTP_REFERER']) && !strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) && !empty($_SERVER['HTTP_REFERER'])) {

        if (strpos($_SERVER['HTTP_REFERER'], 'yandex') !== false) {

            $parts = parse_url($_SERVER['HTTP_REFERER']);
            parse_str($parts['query'], $query);
            $key = htmlspecialchars(urldecode($query['text']));

            ?>

            <script>

                jQuery('.si_engine').val('<?php echo 'Сайт: yandex.ru <br />Ключевое слово: ' . $key; ?>');

            </script>

            <?php

        } else {

            ?>

            <script>

                jQuery('.si_engine').val('<?php echo 'Ссылка, с которой пользователь попал на сайт: ' . $_SERVER['HTTP_REFERER']; ?>');

            </script>

            <?php
        }

    }


}


// UTM
$utm_text = '';

if (isset($_GET['utm_medium']) || isset($_GET['utm_source']) || isset($_GET['utm_campaign']) || isset($_GET['utm_term']) || isset($_GET['utm_content'])) {

    if (isset($_GET['utm_medium']) && !empty($_GET['utm_medium'])) {
        $utm_text .= 'Тип рекламы: ' . htmlspecialchars($_GET['utm_medium']) . ' <br />';
    }

    if (isset($_GET['utm_source']) && !empty($_GET['utm_source'])) {
        $utm_text .= 'Рекламная площадка: ' . htmlspecialchars($_GET['utm_source']) . ' <br />';
    }

    if (isset($_GET['utm_campaign']) && !empty($_GET['utm_campaign'])) {
        $utm_text .= 'Название рекламной кампании: ' . htmlspecialchars($_GET['utm_campaign']) . ' <br />';
    }

    if (isset($_GET['utm_term']) && !empty($_GET['utm_term'])) {
        $utm_text .= 'Ключевая фраза: ' . htmlspecialchars($_GET['utm_term']) . ' <br />';
    }

    if (isset($_GET['utm_content']) && !empty($_GET['utm_content'])) {
        $utm_text .= 'Дополнительная информация: ' . htmlspecialchars($_GET['utm_content']) . ' <br />';
    }

}


if ($utm_text != '') {

    ?>

    <script>

        jQuery('.si_utm').val('<?php echo $utm_text; ?>');

    </script>

    <?php

}

?>