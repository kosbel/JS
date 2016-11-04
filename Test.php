<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <p>
            <label for="first">a</label>
            <input type="number" id = "first" name="a">
        </p>
        <p>
            <label for="second">b</label>
            <input  type="number" id="second" name="b">
        </p>
<!--        <p>-->
<!--            <label for="phone">Phone</label>-->
<!--            <input type="text" id="phone" name="phone">-->
<!--        </p>-->
<!--        <p>-->
<!--            <label for="email">Email</label>-->
<!--            <input type="email" id="email" name="email">-->
<!--        </p>-->

        <input type="submit" value="Send">
    </form>
</body>
</html>

<?php
    function Square($a, $b)
    {
        $result = 1;
        while ($b != 0)
        {
            $result *= $a;
            $b--;
        }
        echo $result;
    }

    Square($_POST['a'], $_POST['b']);
?>

