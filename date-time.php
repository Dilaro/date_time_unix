<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Current Date</title>
</head>
<body>

<form action="date-time.php" method="post">
        <input type="submit" class="print-date" name="Date" value="Вывести дату"><br />
</form>
<?php
$mounthRU = array("1"=>"Января", "2"=>"Февраля", "3"=>"Марта",
                  "4"=>"Апреля", "5"=>"Мая", "6"=>"Июня",
                  "7"=>"Июля", "8"=>"Августа", "9"=>"Сентября",
                  "10"=>"Октября", "11"=>"Ноября","12"=>"Декабря");

$unixTime = time();

function currentDate($unixMetka){
    global $mounthRU;

    if(isset($_POST["Date"])) {
        echo "<form>";
        echo "<fieldset>";
        echo "Unix метка текущего времени: ". $unixMetka . "<br />";
        echo "Сегодняшняя дата: " . date("d " . $mounthRU[(date('n'))] . " Y", $timestamp = $unixMetka);
        echo "</fieldset>";
        echo "</form>";
    }
}

currentDate($unixTime);
?>
</body>
</html>