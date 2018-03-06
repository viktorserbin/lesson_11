<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:16
 */


function getTopNavigation()
{
    $navHtml = '';

    $pages = [
        ['href' => 'index.php?page=home', 'title' => 'Home page'],
        ['href' => 'index.php?page=about', 'title' => 'About us'],
        ['href' => 'index.php?page=contact', 'title' => 'Contact us'],
    ];

    if (!empty($pages)) {
        $navHtml .= '<nav class="navbar navbar-inverse">'.PHP_EOL;
        $navHtml .= '<div class="container-fluid">'.PHP_EOL;
        $navHtml .= '<div class="navbar-header">'.PHP_EOL;
        $navHtml .= '<a class="navbar-brand" href="?page=home">WebSiteName</a>'.PHP_EOL;
        $navHtml .= '</div><ul class="nav navbar-nav">'.PHP_EOL;
        foreach ($pages as $i => $page) {
            $navHtml .= '<li class="active"><a href="'. $page['href'] .'">'. $page['title'] .'</a></li>'.PHP_EOL;
        }
        $navHtml .= '</ul></div></nav>';
    }

    return $navHtml;
}

