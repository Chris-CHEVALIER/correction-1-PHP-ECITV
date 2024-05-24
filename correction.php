<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correction</title>
</head>

<body>
    <?php

    $age = 22;
    $firstName = 'Robin';

    define('YEAR_OF_BIRTH', 2024 - $age);

    $nextYearAge = $age + 1;

    echo "$firstName a $age ans il est né en " . YEAR_OF_BIRTH . "</br>";
    echo "</br>";
    echo "$firstName a $age et aura $nextYearAge l'année prochaine";

    ?>
</body>

</html>