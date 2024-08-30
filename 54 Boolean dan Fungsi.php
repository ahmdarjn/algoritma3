<?php
$isiFile = "Contoh teks di dalam file.";
$status = file_put_contents("example.txt", $isiFile);

if ($status !== false) {
    echo "Penulisan file berhasil!";
} else {
    echo "Penulisan file gagal.";
}

print_r("<i><p><strong><i>By  :Ahmad arjun trisula</strong>");