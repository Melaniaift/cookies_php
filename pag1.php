<?php
$user='111';
$pass='222';
if((isset($_COOKIE['username']))&&(isset($_COOKIE['password']))){
if(($_COOKIE['username']!=$user)||($_COOKIE['password']!=md5($pass))){
    echo "Wrong cookie :(";
}else{
    echo 'Welcome back '.$_COOKIE['username'];
}
}else{
    header('Location:index.php');
}

?>
