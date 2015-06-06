<?php
    $file = fopen ( "code/recipe-data.txt", "r" );

    // ファイルを読み込んで出力
    if($file){
        // 読み込み成功時
        while(!feof($file)){
            echo fgets($file, 1024);
        }
    }else{
        // 読み込み失敗時
        echo "読み取り失敗";
    }

    fclose($file);