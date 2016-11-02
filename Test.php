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
    <form action="" method="get">
        <label>
            <input type="text" name="text" value="asd">
        </label>
        <label>
            <input type="email" name="email" value="asdsd@asds">
        </label>
        <input type="submit">
    </form>

    <?php

    print_r($_GET);
    echo "</br>";

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
//        $my_arr = array("Ukraine" => "Kiev",
//            "Russia" => "Moscow",
//            "USA" => "Washington",
//            "Italy" => "Rome",
//            "France" => "Paris");
//
//            echo "<pre>";
//            print_r($my_arr);
//            echo "</pre>";
    ?>
</body>
</html>


