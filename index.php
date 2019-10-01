<html>
<head>
    <meta charset="utf-8">
    <title>3ahitm-medt-u3-comments_and_variables</title>
</head>

<body>
    <?php
        $liter1 = 40.5;
        $liter2 = 35.7;
        $price = 1.499;
        $cost = 0;

        // Mit der Addition und der Multiplikation wird der insgesammte preis ausgerechnet
        $cost = $liter1 * $price + $liter2 * $price;

        $output = "Die Benzinkosten betragen für " . ($liter1 + $liter2) . "Liter $cost €";

        echo $output;
    ?>
</body>
</html>


