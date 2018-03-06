<?php session_start();
/**
 * Created by PhpStorm.
 * User: sinor
 * Date: 06.03.2018
 * Time: 21:58
 */

echo '<p>Some Contact</p>';
if (isset($_SESSION['user_name'])) {
    echo "Приветсвую <strong>{$_SESSION['user_name']}</strong>";
}
else {
    header('Location: ?page=home');
}