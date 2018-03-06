<?php session_start();

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:42
 */

echo '<p>About page content...</p>';

if (isset($_SESSION['user_name'])) {
    echo "Приветствую <strong>{$_SESSION['user_name']}</strong>";
}
else {
    header('Location: ?page=home');
}