<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Login</title>
    </head>
    <body>
        <h2>User Login</h2>
        <form name="login" method="post" action="login.php">
            Username:<input type="text" name="username"><br>
            Password:<input type="password" name="password"><br>
            Remember Me:<input type="checkbox" name="rememberme" value="1"><br>
            <input type="submit" name="submit" value="Login!">
        </form>
        <?php
        
        ?>
    </body>
</html>
