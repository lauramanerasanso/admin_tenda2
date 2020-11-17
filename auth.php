<?php

session_start();

    $_SESSION['acces'] = false;
    if(isset($_POST['user']) &&  isset($_POST['passwd'])){

        $user=$_POST['user'];
        $passwd=$_POST['passwd'];

        if ($user == 'laurams' && $passwd == '123456789'){
            $_SESSION['acces'] = true;
            header('Location: form.php');
        }
    }
?>