<? 
session_start(); 

if ($_SESSION['acces'] != true) { 

    header("Location: index.php"); 
    exit(); 
} 
?>