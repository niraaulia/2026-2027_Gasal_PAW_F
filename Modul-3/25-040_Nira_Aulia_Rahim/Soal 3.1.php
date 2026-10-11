<?php
    $height = array(
        "Andy" => "176",
        "Barry" => "165",
        "Charlie" => "170"
    );

    $height["David"] = "180";
    $height["Ethan"] = "172";
    $height["Frank"] = "168";
    $height["George"] = "175";
    $height["Harry"] = "182";

    function cetak_height($arr) {
        $temp = [];
        foreach ($arr as $nama => $tinggi) {
            $temp[] = '"' . $nama . '"=>"' . $tinggi . '"';
        }
        echo 'height = (' . implode(', ', $temp) . ')';
    }

    cetak_height($height);
    echo "<br>";

    echo "Nilai dengan indeks terakhir: " . end($height);
    echo "<br><br>";

    unset($height["Barry"]);

    echo "Data Barry dihapus.<br>";
    cetak_height($height);
    echo "<br>";

    echo "Nilai dengan indeks terakhir setelah dihapus: " . end($height);
?>