<?php

$listTimezone = "<p>Africa/Abidjan, Africa/Accra, Africa/Addis_Ababa, Africa/Algiers, Africa/Asmara, Africa/Bamako, Africa/Bangui, Africa/Banjul, Africa/Bissau, Africa/Blantyre, Africa/Brazzaville, Africa/Bujumbura, Africa/Cairo, Africa/Casablanca, Africa/Ceuta, Africa/Conakry, Africa/Dakar, Africa/Dar_es_Salaam, Africa/Djibouti, Africa/Douala, Africa/El_Aaiun, Africa/Freetown, Africa/Gaborone, Africa/Harare, Africa/Johannesburg, Africa/Juba, Africa/Kampala, Africa/Khartoum, Africa/Kigali, Africa/Kinshasa, Africa/Lagos, Africa/Libreville, Africa/Lome, <strong>Africa/Luanda</strong>, Africa/Lubumbashi, Africa/Lusaka, Africa/Malabo, Africa/Maputo, Africa/Maseru, Africa/Mbabane, Africa/Mogadishu, Africa/Monrovia, Africa/Nairobi, Africa/Ndjamena, Africa/Niamey, Africa/Nouakchott, Africa/Ouagadougou, Africa/Porto-Novo, Africa/Sao_Tome, Africa/Tripoli, Africa/Tunis, Africa/Windhoek.</p>

<p>Fonte: <a href='https://www.php.net/manual/en/timezones.africa.php'>php.net</a></p>";

$timezone = (isset($_GET['timezone']))? $_GET['timezone']: "Africa/Luanda";

$date = new DateTime("now", new DateTimezone($timezone));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeZone PHP</title>
    <style>body{font: normal 14pt sans-serif; line-height: 30px;} input,button{font-size: 14pt; padding: 5px;}</style>
</head>
<body>
    <h1>Africa timezone</h1>

    <?= $listTimezone ?>

    <p>
        <hr>
    </p>

    <form action="" method="get">
        <p>
            <small><?= $timezone ?></small><br>
            <?php print $date->format("d/m/Y H:i:s") ?>
        </p>

        <label for="timezone">TimeZone</label><br>
        <input type="text" name="timezone" id="timezone" placeholder="Africa/Luanda"> <button type="submit">Buscar</button> <a href="../timezone">clear</a>
        <br>
    </form>
</body>
</html>
