<?php

// Plural
function si_plural($number, $titles)
{
    $cases = array(2, 0, 1, 1, 1, 2);
    return $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[($number % 10 < 5) ? $number % 10 : 5]];
}

// Return root URL
function SI_RootURL()
{
    $pageURL = 'http';
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") $pageURL .= "s";
    $pageURL .= "://";
    return $pageURL . $_SERVER['HTTP_HOST'];
}

// Return page URL
function SI_CurrentPageURL()
{
    $pageURL = 'http';
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") $pageURL .= "s";
    $pageURL .= "://";
    return $pageURL . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

// Return page IMAGE
function SI_CurrentPageImage()
{
    $pageURL = 'http';
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") $pageURL .= "s";
    $pageURL .= "://";
    return $pageURL . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'images/ogp_logo.jpg';
}


// USE for MultiLP
function SI_GetUtmWord()
{
    if (isset($_GET['utm_word']))
        $word = $_GET['utm_word'];
    else
        $word = 'default';

    switch ($word) {

        case 'default':
            $word = 'для loren ipsum';
            break;

        default:
            $word = 'для loren ipsum';
            break;
    }
    return $word;
}

// Return site URL (if it need)
function SI_GetSiteUrl()
{
    return 'http://test.ru/';
}

// Return query params as string
function SI_GetQueryParams()
{
    if (empty($_SERVER['QUERY_STRING']))
        return '?qwe=123';
    else {
        $s = $_SERVER['QUERY_STRING'];
        unset($s[0]);
        return $s;
    }
}

?>