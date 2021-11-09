 <?php
 //header location index.php
 
//  header("Location: ../nigga.php");

include_once "image.php";

$func = $_GET['func'];

//if isset $_GET['']

if(isset($func)){
    if  ( function_exists($func) ){
        $func();
    } else{
        echo "no such function exist";
    }
}



?>

