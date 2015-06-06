<?php
    $file = null;

    // ファイルを読み込んで出力
    if (($file = fopen ( "code/recipe-data.txt", "r" ))) {
        while (!feof($file)) {
            echo fgets($file, 1024);
        }
    }
    fclose($file);