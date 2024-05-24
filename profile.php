<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil client</title>
</head>

<body>
    <?php

    $ages = [1, 2, 3, 4, 5];

    $customers = [
        "Maxime" => $ages[0],
        "Nico" => $ages[1],
        "Robin" => $ages[2],
        "MaximeS" => 10,
        "Aline" => $ages[3]
    ];

    echo "Robin à $ages[2] ans";
    echo "<br>Robin à $ages[3] ans";
    print_r($customers);

    echo "<br>Nous avons " . count($customers) . " clients";
    $customers["RAYANE"] = 52;

    $average = array_sum($customers) / count($customers);
    // c'est la fonction pour calculer la moyenne des ages du tableau;
    echo "<br> La moyenne des ages des clients est de $average";

    function displayCustomers($customers)
    {
        echo "<ul>";
        foreach ($customers as $firstName => $age) {
            echo "<li>$firstName à $age ans </li>";
        }
        echo "</ul>";
    }

    displayCustomers($customers);

    $adults = array_filter($customers, function ($age) {
        return $age > 18;
    });

    echo "Voici les clients adultes : <br>";
    displayCustomers($adults);
    ?>

</body>

</html>