<?php

    if(isset($_POST['user']) &&  isset($_POST['passwd'])){

        $user=$_POST['user'];
        $passwd=$_POST['passwd'];

        if ($user == 'laurams' && $passwd == '123456789'){
            session_start();
            $_SESSION['acces'] = "SI";
            header('Location: form.php');
        }else{
            header('Location: error.html');
        }
    }
?>