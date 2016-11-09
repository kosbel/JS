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
            <input type="text" name="text" value="<?php echo $_GET['text'] ?>">
            <input type="submit">
        </label>
    </form>
</body>
</html>

<?php


//if ($_GET)
//{
//    $name = $_GET['text'];
//}

//if($_POST)
//{
//    $city = strip_tags($_POST['city']);
//    echo "Ваш город " . $city;
//}

//if($_POST)
//{
//    $login = 'Alex';
//    $password = '1234';
//
//    $login_form = trim($_POST['login']);
//    $password_form = trim($_POST['password']);
//
//    if ($login_form == $login && $password_form == $password)
//    {
//        echo "Доступ разрешен!";
//    }
//    else
//    {
//        echo "Доступа нет!";
//    }
//}

//$name = $_POST['login'];

//if ($_GET)
//{
//    $arr = $_GET;
//
//    foreach ($arr as $key => $value)
//        echo $key . " ";
//}



?>

