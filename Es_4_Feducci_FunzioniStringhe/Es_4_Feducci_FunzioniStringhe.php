<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit lacinia velit quis eleifend. Pellentesque auctor porttitor porta. Phasellus mattis nulla et tellus dapibus efficitur. Integer metus tortor, congue in fermentum sit amet, convallis vitae ante. Vivamus ut fringilla purus. Morbi cursus odio malesuada enim vehicula pulvinar. Duis et velit elit. Curabitur quis ex in purus sodales elementum ut quis nisl. In lobortis eros lacus, eu vulputate eros vulputate quis. Etiam et venenatis justo, imperdiet aliquam urna.";

        echo "<p style='color: green;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit lacinia velit quis eleifend. Pellentesque auctor porttitor porta. Phasellus mattis nulla et tellus dapibus efficitur. Integer metus tortor, congue in fermentum sit amet, convallis vitae ante. Vivamus ut fringilla purus. Morbi cursus odio malesuada enim vehicula pulvinar. Duis et velit elit. Curabitur quis ex in purus sodales elementum ut quis nisl. In lobortis eros lacus, eu vulputate eros vulputate quis. Etiam et venenatis justo, imperdiet aliquam urna.</p>";

        $strMaiuscolo = strtoupper($str);
        echo "<p>$strMaiuscolo</p>";

        $numeroCaratteri = strlen($str);
        echo "<span style='color: red;'>$numeroCaratteri</span>";

        echo "<br>";

        $numeroParole = str_word_count($str);
        echo "<span style='color: yellow;'>$numeroParole</span>";

    ?>
</body>
</html>