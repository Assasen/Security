<?php
    require_once 'db.php';

    if ( isset( $_GET['login'] ) ) {
        /*  
            Запрос: login = "admin' -- "
        */
        /*
            $query = "SELECT * FROM users WHERE `login`='$_GET[login]' AND `password`='$_GET[password]'";
            echo $query."<br>";
            $a = mysqli_query($connect, $query);
            if ($a) {
                echo "<pre>";
                print_r($a = mysqli_fetch_assoc($a));
                echo "</pre>";
                
                foreach ($a as $key => $value) {
                    echo $key." = ".$value."<br>";
                }
            } else {
                echo "Ошибка!!!";
            }
        */

      
        /*
            Защита
        */

        $login = $_GET['login'];
        $password = $_GET['password'];
        // echo "<pre>";
        // print_r( $pdo->query("SELECT * FROM `users`")->fetchAll() );
        // echo "</pre>";

        $user = $pdo->prepare("SELECT * FROM `users` WHERE `login` = :login AND `password` = :password");
        $user->execute(array(
            'login' => $login,
            'password' => $password
        ));
        echo "<pre>";
        print_r($user->fetch());
        echo "</pre>";
    }
    
?>

<form action="?" method="GET">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Войти">
</form>