<?php

    // Без защиты
    // if ( isset( $_POST['script'] ) ) {
    //     echo $_POST['script'];
    // }

    // Защита
    if ( isset( $_POST['script'] ) ) {
        $text = htmlspecialchars($_POST['script']);
        echo $text;
    }

?>

<form action="" method="POST">
    <input type="text" name="script">
    <input type="submit" value="Send">
</form>