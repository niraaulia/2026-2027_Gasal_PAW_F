<?php
    $weight = array(
        "Andy" => "70",
        "Barry" => "65",
        "Charlie" => "75"
    );

    echo 'weight = ("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75")';
    echo "<br>";

    $data = array_values($weight);

    echo "Data kedua: " . $data[1];
?>