<?php
$allowed_types = ['image/gif', 'image/jpeg'];
$max_size = 100 * 1024; // 100KB

$uploaded_files = [];
$rejected_files = [];

for ($i = 1; $i <= 5; $i++) {
    $file_name = 'arquivo' . $i;
    if (!empty($_FILES[$file_name]['name'])) {
        $file_type = $_FILES[$file_name]['type'];
        $file_size = $_FILES[$file_name]['size'];
        if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
            $uploaded_files[] = $_FILES[$file_name]['name'];
            move_uploaded_file($_FILES[$file_name]['tmp_name'], './uploads/' . $_FILES[$file_name]['name']);
        } else {
            $rejected_files[] = $_FILES[$file_name]['name'];
        }
    }
}

echo "<h2>Arquivos enviados com sucesso:</h2>";
foreach ($uploaded_files as $file) {
    echo $file . "<br>";
}

if (count($rejected_files) > 0) {
    echo "<h2>Arquivos rejeitados:</h2>";
    foreach ($rejected_files as $file) {
        echo $file . " - arquivo inválido ou excede o tamanho máximo permitido<br>";
    }
}
?>
