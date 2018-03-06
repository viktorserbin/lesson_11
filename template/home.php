<?php session_start();

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:17
 */

if ($_POST){
    if ($_POST['user_name']) {
        $user_name = $_POST['user_name'];
        $_SESSION['user_name'] = $user_name;
    }
    else
    {
        header('Location: ?page=home');
    }
}

if (!isset($_SESSION['user_name'])) {
    echo <<<EOD
    <div class="form-group">
    <form action="" method="POST">
        <fieldset>
            <label for="user_name">Имя пользователя</label>
            <input type="text" name="user_name" size="20" /><br />
        </fieldset>
        <br />
        <fieldset>
            <input type="submit" value="Отправить" />
            <input type="reset" value="Очистить" />
        </fieldset>
    </form>
    </div>
EOD;
}
else {
    echo '<p>Home page content</p>';
    echo "Приветствую <strong>{$_SESSION['user_name']}</strong>";
}
//var_dump($_SESSION);