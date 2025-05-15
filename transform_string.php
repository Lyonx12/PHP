<?php
function transformString($input) {
    // Mapping vokal ke angka
    $replaceMap = [
        'a' => '4',
        'e' => '3',
        'i' => '1',
        'o' => '0',
        'A' => '4',
        'E' => '3',
        'I' => '1',
        'O' => '0'
    ];

    $result = '';
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        // Cek apakah karakter termasuk dalam map pengganti
        if (isset($replaceMap[$char])) {
            $char = $replaceMap[$char];
        } else {
            // Terapkan huruf besar/kecil berdasarkan index
            $char = ($i % 2 == 0) ? strtoupper($char) : strtolower($char);
        }

        $result .= $char;
    }

    return $result;
}

// Contoh penggunaan
$input = "Lorem ipsum dolor sit amet";
$output = transformString($input);
echo $output;
?>