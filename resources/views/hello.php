<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
<?php
echo "<h1> from php <h1>";
?>
<h1>welcome to php laravel <h1>
            <h1>login form <h1>
                <div>
                    <label  name = "name">
                        <input type="text" placeholder="enter name" name = "Name" required >
                        <input type="email" placeholder="enter email" name = "Email" required >
                        <input type="password" placeholder="enter password" name = "password" required >
                    </label >
                </div>
                <div>
                    <button type = "sumbit"> login  </button>
                </div>

                <script>
                console.log("hello php");
                </script>
    </body>
</html>

