<?php
    date_default_timezone_set('EST');
    include 'time.php';

    //cookies
    $date = date('H:i:s');
    $cookie_name = "pastTime";
    $cookie_value = ($date);
    setcookie($cookie_name, $cookie_value);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP time tracker</title>
</head>
<body>
    <h1>PHP time tracker</h1>
    <h4>Time zone is EST</h4>


    <?php
        echo(date('H:i:s'));
        echo('<br>');
        $timeCooke = $_COOKIE['pastTime'];
        echo($timeCooke);
    ?>

</body>
</html>